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
/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> 'Drejtuar grupeve',

	'LBL_RE'					=> 'Përgjigje:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Hyrja ose fjalëkalimi janë të gabuara',
	'ERR_BODY_TOO_LONG'		=> '\rTrupi tekstual është shumë i gjatë për ta kapur Emaili i plotë. Është shkrurtuar.',
	'ERR_INI_ZLIB'			=> 'Nuk mund të c&#39;kyc ngjeshjen e përkohshme Zlib. "Testi i Parametrave" mund të dështojë.',
	'ERR_MAILBOX_FAIL'		=> 'Nuk mund të rigjej asnjë mail llogari.',
	'ERR_NO_IMAP'			=> 'Nuk janë gjetur IMAP biblioteka. Ju lutemi të zgjidhni këtë para se të azhdoni me Emailin e drejtuar përbrenda.',
	'ERR_NO_OPTS_SAVED'		=> 'Nuk janë gjetur optimume me llogarinë tuaj për emailit të drejtuar përbrenda. Ju lutemi të rishikoni parametrat',
	'ERR_TEST_MAILBOX'		=> 'Ju lutemi kontrolloni parametrat dhe provoni përsëri.',
    'ERR_DELETE_FOLDER' => 'Nuk mund të fshihet folderi.',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => 'Nuk mund të ç&#39;regjistroheni nga folderi përpara fshirjes.',

	'LBL_APPLY_OPTIMUMS'	=> 'Apliko optimume',
	'LBL_ASSIGN_TO_USER'	=> 'Drejtuar përdoruesit',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Opcionet e vetë-përgjigjes',
	'LBL_AUTOREPLY'			=> 'Shablloni i vetë-përgjigjes',
	'LBL_AUTOREPLY_HELP'	=> 'Selekto përgjigje automatike për të lajmëruar dërguesit e emaileve që përgjigjet e tyre janë pranuar.',
	'LBL_BASIC'				=> 'Informacioni i mail llogarisë',
	'LBL_CASE_MACRO'		=> 'Rasti Makro',
	'LBL_CASE_MACRO_DESC'	=> 'Vendosni makron e cila do të analizohet dhe përdoret për linkun e emailit e importuar në Rast.',
	'LBL_CASE_MACRO_DESC2'	=> 'Përcakto këtë tek çdo vlerë, por ruaj "%1".',
	'LBL_CERT_DESC'			=> 'Forca e vlefshmërisë e postës së serverit në Certifikatën e Sigurisë - mos e përdorni nëse vetë-nënshkruani.',
	'LBL_CERT'				=> 'Çertifikatë valide',
	'LBL_CLOSE_POPUP'		=> 'Mbyll dritaren',
	'LBL_CREATE_NEW_GROUP'	=> '--Krijo grup në ruajtje--',
	'LBL_CREATE_TEMPLATE'	=> 'Krijo',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Regjistro foldera',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Çaktivizues:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Çaktivizues:',
	'LBL_DELETE_SEEN'		=> 'Fshi emailet e lexuara pas importimit',
	'LBL_EDIT_TEMPLATE'		=> 'Ndrysho',
	'LBL_EMAIL_OPTIONS'		=> 'Opcionet e trajtimit të emaileve',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Kthimi i trajtimit të opsionëve',
	'LBL_FILTER_DOMAIN_DESC'=> 'Specifiko një domen në të cilën nuk do të dërgohet asnjë vetë-përgjigje',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Selektoni automatikisht krijimin e regjistrimit të emailit në Sugar për të gjitha emailet hyrëse.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Për opcionin e Krijo rast, duhet të selektohet Folder grupi',
	'LBL_FILTER_DOMAIN'		=> 'Nuk ka vetë-përgjigje në këtë omenD',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> 'Gjetja e ndryshoreve optimume të lidhjes',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Gjej konfigurimin optimum',
	'LBL_FIND_SSL_WARN'		=> 'Testimi i SSL mund të zgjasë një kohë të gjatë. Ju ltemi të keni durim.',
	'LBL_FORCE_DESC'		=> 'Disa servera IMAP/POP3 kërkojnë ndërprerësin e veçantë. Kontrollo për të forcuar ndërprerjen negative kur lidheni (i.e, / notls)',
	'LBL_FORCE'				=> 'Forca Negative',
	'LBL_FOUND_MAILBOXES'	=> 'Gjeni dosjet e mëposhtme të përdorshëm.<br />Klikoni një për të zgjedhur atë:',
	'LBL_FOUND_OPTIMUM_MSG'	=> 'Janë gjetur parametrat optimume. Shtypni butonin e poshtëm për të aplikuar ato tek mail llogaria juaj.',
	'LBL_FROM_ADDR'			=> 'Nga adresa',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "Adresa e emailit të dhënë këtu nuk mund të shfaqet \"Nga\" seksioni i adresave të e-mailit të dërguar për shkak të kufizimeve të imponuara nga ofruesi i shërbimit të postës. Në këto rrethana, adresa e emailit e definuar në serverin e postës dalëse do të përdoren.",
	'LBL_FROM_NAME_ADDR'	=> 'Nga Emri/Emaili',
	'LBL_FROM_NAME'			=> 'Nga emri',
	'LBL_GROUP_QUEUE'		=> 'Drejtuar Grupit',
    'LBL_HOME'              => 'Ballina',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Përdorimi i mail llogarisë',
	'LBL_LIST_NAME'			=> 'Emri',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Lloji',
	'LBL_LIST_SERVER_URL'	=> 'Serveri i emailit',
	'LBL_LIST_STATUS'		=> 'Statusi',
	'LBL_LOGIN'				=> 'Emri i përdoruesit',
	'LBL_MAILBOX_DEFAULT'	=> 'Inbox',
	'LBL_MAILBOX_SSL_DESC'	=> 'Përdor SSL kur lidheni. Nëse kjo nuk punon, kontrollo se instalimi juaj PHP është përfshirë "-- me të imap-ssi" në konfigurimin.',
	'LBL_MAILBOX_SSL'		=> 'Përdor SSL',
	'LBL_MAILBOX_TYPE'		=> 'Veprimet e mundëshme',
	'LBL_DISTRIBUTION_METHOD' => 'Metoda e distribuimit',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Shablloni i rastit të ri të vetë-përgjigjes',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Selektoni një përgjigje të automatizuar të njoftojë dërguesit e emailit se rasti ka qenë i krijuar.Emaili përmban numrin e lëndëve në rreshtin e subjektit i cili respekton vendosjen e Rastit Makro.Kjo përgjigje është dërguar vetëm kur email i parë është pranuar nga pranuesi.',
	'LBL_MAILBOX'			=> 'Folderët e vëshguar',
	'LBL_TRASH_FOLDER'		=> 'Folderi i plehrave',
	'LBL_GET_TRASH_FOLDER'	=> 'Merr folderin e plehrave',
	'LBL_SENT_FOLDER'		=> 'Folderi i dërgimit',
	'LBL_GET_SENT_FOLDER'	=> 'Merr Folderin e dërguar',
	'LBL_SELECT'				=> 'Selekto',
	'LBL_MARK_READ_DESC'	=> 'Shëno mesazhet si të lexuara në mail serverin në importim; mos i fshi.',
	'LBL_MARK_READ_NO'		=> 'Emailet e shënuara janë të fshira pas importit',
	'LBL_MARK_READ_YES'		=> 'Emaili është lënë në server pas importimit',
	'LBL_MARK_READ'			=> 'Leji mesazhet në Server',
	'LBL_MAX_AUTO_REPLIES'	=> 'Numri i vetë-reagimeve',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Përcakto numrin maksimum i vetë-reagimeve për të dërguar email adresë unike gjatë periudhës prej 24 orëve.',
	'LBL_PERSONAL_MODULE_NAME' => 'Mail llogaria personale',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'Mail llogaria personale',
	'LBL_CREATE_CASE'      => 'Krijo rast',
	'LBL_CREATE_CASE_HELP'  => 'Selekto për të krijuar automatikisht regjistrime të rastit për emailet drejtuar përbrenda.',
	'LBL_MODULE_NAME'		=> 'Llogari e mailit grupor',
	'LBL_MODULE_NAME_SINGULAR' => 'Llogari e mailit grupor',
	'LBL_BOUNCE_MODULE_NAME' => 'Kthimi i Trajtimit të Postës',
	'LBL_MODULE_TITLE'		=> 'Email drejtuar përbrenda',
	'LBL_NAME'				=> 'Emri',
    'LBL_NONE'              => 'Asnjëra',
	'LBL_NO_OPTIMUMS'		=> 'Nuk mund të gjente optimumet. Ju lutemi kontrolloni parametrat tuaj dhe provoni përsëri.',
	'LBL_ONLY_SINCE_DESC'	=> 'Kur përdorni POP3, PHP nuk mund të filtroni për mesazhet të reja/ të palexuara. Ky flamur lejon kërkesën për të kontrolluar mesazhet që nga hera e fundit e llogarisë së postës së anketuarve. Kjo do të përmirësojë ndjeshëm e performancën nëse serveri juaj i e-mailit nuk mbështet IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Jo. Kontrolloni kundrejt të gjitha emaileve në mail serverin.',
	'LBL_ONLY_SINCE_YES'	=> 'Po.',
	'LBL_ONLY_SINCE'		=> 'Importo vetëm nga kontrolli i fundit',
	'LBL_OUTBOUND_SERVER'	=> 'Serveri i maileve të drejtuar për jashta',
	'LBL_PASSWORD_CHECK'	=> 'kontrollim i fjalëkalimit',
	'LBL_PASSWORD'			=> 'Fjalëkalimi',
	'LBL_POP3_SUCCESS'		=> 'Testi i lidhjes POP3 ka qenë e suksesshme.',
	'LBL_POPUP_FAILURE'		=> 'Testi i lidhjes dështoi. Gabimi është treguar më poshtë.',
	'LBL_POPUP_SUCCESS'		=> 'Testimi i lidhjes ëshë e suksesshme. Parametrat tuaja funksionojnë.',
	'LBL_POPUP_TITLE'		=> 'Parametrat e testit',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Marrja e listës së folderave.',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Selekto Folderin(at) e regjistruar',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Selekto Folderin e plehrave',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Selekto folderin e dërgimit',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Folderi(at) vijues %s ose nuk ekziston ose është fshirë nga serveri',
	'LBL_PORT'				=> 'Port i Mail Server-it',
	'LBL_QUEUE'				=> 'Llogaria e postës së radhës',
	'LBL_REPLY_NAME_ADDR'	=> 'Emri?Emaili i përgjigjes',
	'LBL_REPLY_TO_NAME'		=> 'Përgjigju emrit',
	'LBL_REPLY_TO_ADDR'		=> 'Përgjigju adresës',
	'LBL_SAME_AS_ABOVE'		=> 'Përdorur nga Emri/Adresa',
	'LBL_SAVE_RAW'			=> 'Ruaj Burimin e papërpunuar',
	'LBL_SAVE_RAW_DESC_1'	=> 'Shtyp "Po"  në qoftë se dëshironi të ruani burimin e papërpunuar për çdo email të importuar.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Bashkëngjitjet të mëdha mund të shkaktojnë dështimet me bazat e të dhënave konservative apo mund të konfigurohen gabimisht.',
	'LBL_SERVER_OPTIONS'	=> 'Vendosje e avancuar',
	'LBL_SERVER_TYPE'		=> 'Protokoli i mail serverit',
	'LBL_SERVER_URL'		=> 'Adresa e mail serverit',
	'LBL_SSL_DESC'			=> 'Nëse serveri juaj i emailit mbështet lidhjet Mbrojtëse të kodimit, duke mundësuar  se kjo do të forcoje lidhjet SSL kur të importon emailin.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Grupi i selektuar ka qasje në mail llogarinë.',
	'LBL_SSL'				=> 'Përdor SSL',
	'LBL_STATUS'			=> 'Statusi',
	'LBL_SYSTEM_DEFAULT'	=> 'Sistem i çaktivizuar',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Test [Alt+T]',
	'LBL_TEST_SETTINGS'		=> 'Parametrat e testit',
	'LBL_TEST_SUCCESSFUL'	=> 'Lidhja ka përfunduar me sukses.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Një moment ju lutem...',
	'LBL_TLS_DESC'			=> 'Përdorni transportin e shtresës së Sigurimit kur lidheni me serverin e postës - përdorni këtë vetëm nëse serveri juaj i e-mailit mbështet këtë protokoll.',
	'LBL_TLS'				=> 'Përdor TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Çaktivizimi i Emaili të drejtuar përbrenda',
	'LBL_WARN_IMAP'			=> 'Paralajmërimet:',
	'LBL_WARN_NO_IMAP'		=> 'Email hyrse nuk mund të funksionojë pa pasur IMAP klienti në bibliotekat të aktivizuara/hartuar me modulin e PHP. Ju lutemi të kontaktoni administratorin tuaj për të zgjidhur këtë çështje.',

	'LNK_CREATE_GROUP'		=> 'Krijo grup të ri',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Llogaria e mailit të grupit të ri',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Trajtimi i ri i Kthimeve të Llogarisë',
	'LNK_LIST_MAILBOXES'	=> 'Të gjitha llogaritë e mailit',
	'LNK_LIST_QUEUES'		=> 'Të gjitha radhët',
	'LNK_LIST_SCHEDULER'	=> 'Planifikuesit',
	'LNK_LIST_TEST_IMPORT'	=> 'testo importimin e emailit',
	'LNK_NEW_QUEUES'		=> 'Krijo radhë të reja',
	'LNK_SEED_QUEUES'		=> 'Pasardhësit e Radhëve Nga Ekipet',
	'LBL_GROUPFOLDER_ID'	=> 'Id e folderit të grupit',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Drejtuar Folderit të grupit',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Lejoni përdoruesit të dërgojnë emaila duke përdorur "Nga" emrin dhe adresën si përgjigje për të adresuar',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Kur ky opsion është selektuar, nga emri dhe nga adresa e emailit të shoqëruar me këtë llogari të postës së grupit do të shfaqet si një opsion për Nga fusha kur kompozimi i emailave për shfrytëzuesit kanë qasje në llogarinë e postës së grupit.',
    'LBL_STATUS_ACTIVE'     => 'aktive',
    'LBL_STATUS_INACTIVE'   => 'pasive',
    'LBL_IS_PERSONAL' => 'personale',
    'LBL_IS_GROUP' => 'Grup',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importi i Emailave Automatike',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Paralajmërim: Ju keni modifikuar importin tuaj automatik të vendosjes i cili mund të rezultojë në humbjen e të dhënave.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Paralajmërim: Importi Automatik duhet të jetë i aktivizuar automatikisht kur krijohen rastet.',
	'LBL_EDIT_LAYOUT' => 'Ndrysho formatin' /*for 508 compliance fix*/,
);
?>
