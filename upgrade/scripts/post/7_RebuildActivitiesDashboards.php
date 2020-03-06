<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

class SugarUpgradeRebuildActivitiesDashboards extends UpgradeScript
{
    public $order = 7550;
    public $type = self::UPGRADE_CUSTOM;

    public function run()
    {
        // The Activities dashlets changed in 7.2
        if (!version_compare($this->from_version, '7.2', '<')) {
            return;
        }

        // Array of what modules and what relationship names need to be converted
        $convertModules = array();

        // Look for history files, like the ones created by ActivitiesRelationship.php
        $historyFiles = glob("modules/*/clients/base/views/history/history.php");
        
        foreach ($historyFiles as $filename) {
            // Need to read the contents to check for a particular comment tag
            $contents = file_get_contents($filename);
            if (strpos($contents,"/* File autogenerated by SugarCRM in ActivitesRelationship.php / buildSidecarDashletMeta */") !== false) {
                // It's a match, actually load the file and use the built array to figure
                // out the relationship
                $coreDefs = array();
                $viewdefs = array();
                require($filename);
                
                // Convoluted, but where this data is available.
                $moduleName = $coreDefs['dashlets'][0]['filter']['module'][0];
                // buildClientFiles() automatically trims off the _meetings
                $relName = $coreDefs['tabs'][0]['link'];
                $convertModules[$moduleName] = $relName;
            }
        }

        // Grab files first, then process them so glob() doesn't ever freak out.
        foreach ($convertModules as $moduleName => $relName) {
            $parser = new ActivitiesRelationship(array(
                                                     'for_activities' => true,
                                                     'is_custom' => true,
                                                     'relationship_name' => $relName,
                                                     'lhs_module' => $moduleName,
                                                     ));
            $newFiles = $parser->buildClientFiles($relName);
            
            foreach ($newFiles[$moduleName] as $filepart => $contents) {
                // history.php should be there, the other files might not be so lucky
                $filename = "modules/{$moduleName}/".$filepart;
                mkdir_recursive(dirname($filename));
                file_put_contents($filename, $contents);
            }
        }
        
    }
}
