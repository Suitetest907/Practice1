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

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'ต้องระบุเลขที่ระเบียนเพื่อลบผู้สนใจ',
    'LBL_ACCOUNT_DESCRIPTION'=> 'คำอธิบายบัญชี',
    'LBL_ACCOUNT_ID'=>'ID บัญชี',
    'LBL_ACCOUNT_NAME' => 'ชื่อบัญชี:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'กิจกรรม',
    'LBL_ADD_BUSINESSCARD' => 'เพิ่มนามบัตร',
    'LBL_ADDRESS_INFORMATION' => 'ข้อมูลที่อยู่',
    'LBL_ALT_ADDRESS_CITY' => 'เมืองของที่อยู่รอง',
    'LBL_ALT_ADDRESS_COUNTRY' => 'ประเทศของที่อยู่รอง',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์ของที่อยู่รอง',
    'LBL_ALT_ADDRESS_STATE' => 'รัฐของที่อยู่รอง',
    'LBL_ALT_ADDRESS_STREET_2' => 'ถนนของที่อยู่รอง 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'ถนนของที่อยู่รอง 3',
    'LBL_ALT_ADDRESS_STREET' => 'ถนนของที่อยู่รอง',
    'LBL_ALTERNATE_ADDRESS' => 'ที่อยู่อื่น:',
    'LBL_ANY_ADDRESS' => 'ที่อยู่ใดก็ได้:',
    'LBL_ANY_EMAIL' => 'อีเมล:',
    'LBL_ANY_PHONE' => 'โทรศัพท์ใดก็ได้:',
    'LBL_ASSIGNED_TO_NAME' => 'ระบุให้',
    'LBL_ASSIGNED_TO_ID' => 'ผู้ใช้ที่ระบุ:',
    'LBL_BACKTOLEADS' => 'กลับไปที่ผู้สนใจ',
    'LBL_BUSINESSCARD' => 'แปลงผู้สนใจ',
    'LBL_CITY' => 'เมือง:',
    'LBL_CONTACT_ID' => 'ID ที่อยู่ติดต่อ',
    'LBL_CONTACT_INFORMATION' => 'ภาพรวม',
    'LBL_CONTACT_NAME' => 'ชื่อผู้สนใจ:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'ผู้สนใจ-โอกาสทางการขาย:',
    'LBL_CONTACT_ROLE' => 'บทบาท:',
    'LBL_CONTACT' => 'ผู้สนใจ:',
    'LBL_CONVERT_BUTTON_LABEL' => 'แปลงค่า',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'บันทึกและแปลง',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(เลือกระบุได้)',
    'LBL_CONVERT_ACCESS_DENIED' => 'คุณไม่มีสิทธิ์แก้ไขสำหรับโมดูลซึ่งต้องใช้ในการแปลงผู้สนใจ: {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'กำลังค้นหารายการที่ซ้ำกัน...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'ละเว้นและสร้างใหม่',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'กลับไปยังรายการที่ซ้ำกัน',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'สร้างใหม่',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'ค้นหา',
    'LBL_CONVERT_DUPLICATES_FOUND' => 'พบข้อมูลซ้ำ {{duplicateCount}} รายการ',
    'LBL_CONVERT_CREATE_NEW' => '{{moduleName}} ใหม่',
    'LBL_CONVERT_SELECT_MODULE' => 'เลือก {{moduleName}}',
    'LBL_CONVERT_SELECTED_MODULE' => 'กำลังเลือก {{moduleName}}',
    'LBL_CONVERT_CREATE_MODULE' => 'สร้าง {{moduleName}}',
    'LBL_CONVERT_CREATED_MODULE' => 'กำลังสร้าง {{moduleName}}',
    'LBL_CONVERT_RESET_PANEL' => 'รีเซ็ต',
    'LBL_CONVERT_COPY_RELATED_ACTIVITIES' => 'คัดลอกกิจกรรมที่เกี่ยวข้องไปยัง',
    'LBL_CONVERT_MOVE_RELATED_ACTIVITIES' => 'ย้ายกิจกรรมที่เกี่ยวข้องไปยัง',
    'LBL_CONVERT_MOVE_ACTIVITIES_TO_CONTACT' => 'ย้ายกิจกรรมที่เกี่ยวข้องไปยังระเบียนที่อยู่ติดต่อ',
    'LBL_CONVERTED_ACCOUNT'=>'บัญชีที่แปลง:',
    'LBL_CONVERTED_CONTACT' => 'ที่อยู่ติดต่อที่แปลง:',
    'LBL_CONVERTED_OPP'=>'โอกาสทางการขายที่แปลง:',
    'LBL_CONVERTED'=> 'แปลงค่าแล้ว',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'แปลงผู้สนใจ',
    'LBL_CONVERTLEAD' => 'แปลงผู้สนใจ',
    'LBL_CONVERTLEAD_WARNING' => 'คำเตือน: สถานะของผู้สนใจที่คุณต้องการแปลงคือ "แปลงค่าแล้ว" อาจมีการสร้างระเบียนที่อยู่ติดต่อและ/หรือบัญชีจากผู้สนใจนี้แล้ว ถ้าคุณต้องการแปลงผู้สนใจนี้ ให้คลิกที่บันทึก ถ้าต้องการกลับไปที่ผู้สนใจโดยไม่แปลง ให้คลิกยกเลิก',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' ที่อยู่ติดต่อที่อาจใช้ได้: ',
    'LBL_CONVERTLEAD_ERROR' => 'ไม่สามารถแปลงผู้สนใจ',
    'LBL_CONVERTLEAD_FILE_WARN' => 'คุณแปลงผู้สนใจ {{leadName}} สำเร็จแล้ว แต่เกิดปัญหาในการอัปโหลดไฟล์แนบในระเบียน',
    'LBL_CONVERTLEAD_SUCCESS' => 'คุณแปลงผู้สนใจ {{leadName}} สำเร็จแล้ว',
    'LBL_COUNTRY' => 'ประเทศ:',
    'LBL_CREATED_NEW' => 'สร้างใหม่แล้ว',
	'LBL_CREATED_ACCOUNT' => 'สร้างบัญชีใหม่แล้ว',
    'LBL_CREATED_CALL' => 'สร้างการโทรใหม่แล้ว',
    'LBL_CREATED_CONTACT' => 'สร้างที่อยู่ติดต่อใหม่แล้ว',
    'LBL_CREATED_MEETING' => 'สร้างการประชุมใหม่แล้ว',
    'LBL_CREATED_OPPORTUNITY' => 'สร้างโอกาสทางการขายใหม่แล้ว',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ผู้สนใจ',
    'LBL_DEPARTMENT' => 'แผนก:',
    'LBL_DESCRIPTION_INFORMATION' => 'ข้อมูลคำอธิบาย',
    'LBL_DESCRIPTION' => 'คำอธิบาย:',
    'LBL_DO_NOT_CALL' => 'ไม่ติดต่อ:',
    'LBL_DUPLICATE' => 'ผู้สนใจที่คล้ายกัน',
    'LBL_EMAIL_ADDRESS' => 'ที่อยู่อีเมล:',
    'LBL_EMAIL_OPT_OUT' => 'ปฏิเสธการรับอีเมล:',
    'LBL_EXISTING_ACCOUNT' => 'ใช้บัญชีที่มีอยู่',
    'LBL_EXISTING_CONTACT' => 'ใช้ที่อยู่ติดต่อที่มีอยู่',
    'LBL_EXISTING_OPPORTUNITY' => 'ใช้โอกาสทางการขายที่มีอยู่',
    'LBL_FAX_PHONE' => 'โทรสาร:',
    'LBL_FIRST_NAME' => 'ชื่อ:',
    'LBL_FULL_NAME' => 'ชื่อเต็ม:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'ประวัติ',
    'LBL_HOME_PHONE' => 'โทรศัพท์บ้าน:',
    'LBL_IMPORT_VCARD' => 'นำเข้า vCard',
    'LBL_IMPORT_VCARD_SUCCESS' => 'สร้างผู้สนใจจาก vCard สำเร็จแล้ว',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'สร้างผู้สนใจใหม่อัตโนมัติโดยนำเข้า vCard จากระบบไฟล์ของคุณ',
    'LBL_INVALID_EMAIL'=>'อีเมลไม่ถูกต้อง:',
    'LBL_INVITEE' => 'ผู้ใต้บังคับบัญชา',
    'LBL_LAST_NAME' => 'นามสกุล:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'คำอธิบายที่มาของผู้สนใจ:',
    'LBL_LEAD_SOURCE' => 'ที่มาของผู้สนใจ:',
    'LBL_LIST_ACCEPT_STATUS' => 'สถานะยอมรับ',
    'LBL_LIST_ACCOUNT_NAME' => 'ชื่อบัญชี',
    'LBL_LIST_CONTACT_NAME' => 'ชื่อผู้สนใจ',
    'LBL_LIST_CONTACT_ROLE' => 'บทบาท',
    'LBL_LIST_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_LIST_EMAIL_ADDRESS' => 'อีเมล',
    'LBL_LIST_FIRST_NAME' => 'ชื่อ',
    'LBL_VIEW_FORM_TITLE' => 'มุมมองผู้สนใจ',
    'LBL_LIST_FORM_TITLE' => 'รายการผู้สนใจ',
    'LBL_LIST_LAST_NAME' => 'นามสกุล',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'คำอธิบายที่มาของผู้สนใจ',
    'LBL_LIST_LEAD_SOURCE' => 'ที่มาของผู้สนใจ',
    'LBL_LIST_MY_LEADS' => 'ผู้สนใจของฉัน',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_LIST_PHONE' => 'โทรศัพท์ที่ทำงาน',
    'LBL_LIST_REFERED_BY' => 'อ้างอิงโดย',
    'LBL_LIST_STATUS' => 'สถานะ',
    'LBL_LIST_TITLE' => 'ชื่อเรื่อง',
    'LBL_MOBILE_PHONE' => 'อุปกรณ์เคลื่อนที่:',
    'LBL_MODULE_NAME' => 'ผู้สนใจ',
    'LBL_MODULE_NAME_SINGULAR' => 'ผู้สนใจ',
    'LBL_MODULE_TITLE' => 'ผู้สนใจ: หน้าแรก',
    'LBL_NAME' => 'ชื่อ:',
    'LBL_NEW_FORM_TITLE' => 'ผู้สนใจใหม่',
    'LBL_NEW_PORTAL_PASSWORD' => 'รหัสผ่านพอร์ทัลใหม่:',
    'LBL_OFFICE_PHONE' => 'โทรศัพท์ที่ทำงาน:',
    'LBL_OPP_NAME' => 'ชื่อโอกาสทางการขาย:',
    'LBL_OPPORTUNITY_AMOUNT' => 'จำนวนเงินของโอกาสทางการขาย:',
    'LBL_OPPORTUNITY_ID'=>'ID โอกาสทางการขาย',
    'LBL_OPPORTUNITY_NAME' => 'ชื่อโอกาสทางการขาย:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'อีเมลอื่น:',
    'LBL_OTHER_PHONE' => 'โทรศัพท์อื่น:',
    'LBL_PHONE' => 'โทรศัพท์:',
    'LBL_PORTAL_ACTIVE' => 'พอร์ทัลที่ใช้งาน:',
    'LBL_PORTAL_APP'=> 'แอปพลิเคชันพอร์ทัล',
    'LBL_PORTAL_INFORMATION' => 'ข้อมูลพอร์ทัล',
    'LBL_PORTAL_NAME' => 'ชื่อพอร์ทัล:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'ตั้งค่ารหัสผ่านพอร์ทัล:',
    'LBL_POSTAL_CODE' => 'รหัสไปรษณีย์:',
    'LBL_STREET' => 'ถนน',
    'LBL_PRIMARY_ADDRESS_CITY' => 'เมืองของที่อยู่หลัก',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ประเทศของที่อยู่หลัก',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์ของที่อยู่หลัก',
    'LBL_PRIMARY_ADDRESS_STATE' => 'รัฐของที่อยู่หลัก',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'ถนนของที่อยู่หลัก 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'ถนนของที่อยู่หลัก 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'ถนนของที่อยู่หลัก',
    'LBL_PRIMARY_ADDRESS' => 'ที่อยู่หลัก:',
    'LBL_RECORD_SAVED_SUCCESS' => 'คุณสร้าง {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a> สำเร็จแล้ว',
    'LBL_REFERED_BY' => 'อ้างอิงโดย:',
    'LBL_REPORTS_TO_ID'=>'ID ผู้บังคับบัญชา',
    'LBL_REPORTS_TO' => 'ผู้บังคับบัญชา:',
    'LBL_REPORTS_FROM' => 'รายงานจาก:',
    'LBL_SALUTATION' => 'คำนำหน้า',
    'LBL_MODIFIED'=>'แก้ไขโดย',
	'LBL_MODIFIED_ID'=>'แก้ไขโดย ID',
	'LBL_CREATED'=>'สร้างโดย',
	'LBL_CREATED_ID'=>'สร้างโดย ID',
    'LBL_SEARCH_FORM_TITLE' => 'การค้นหาผู้สนใจ',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'เลือกผู้สนใจที่ทำเครื่องหมาย',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'เลือกผู้สนใจที่ทำเครื่องหมาย',
    'LBL_STATE' => 'รัฐ:',
    'LBL_STATUS_DESCRIPTION' => 'คำอธิบายสถานะ:',
    'LBL_STATUS' => 'สถานะ:',
    'LBL_TITLE' => 'ตำแหน่ง:',
    'LBL_UNCONVERTED'=> 'ไม่ได้แปลง',
    'LNK_IMPORT_VCARD' => 'สร้างผู้สนใจจาก vCard',
    'LNK_LEAD_LIST' => 'ดูผู้สนใจ',
    'LNK_NEW_ACCOUNT' => 'สร้างบัญชี',
    'LNK_NEW_APPOINTMENT' => 'สร้างการนัดหมาย',
    'LNK_NEW_CONTACT' => 'สร้างที่อยู่ติดต่อ',
    'LNK_NEW_LEAD' => 'สร้างผู้สนใจ',
    'LNK_NEW_NOTE' => 'สร้างบันทึก',
    'LNK_NEW_TASK' => 'สร้างงาน',
    'LNK_NEW_CASE' => 'สร้างเคส',
    'LNK_NEW_CALL' => 'ล็อกการโทร',
    'LNK_NEW_MEETING' => 'วางกำหนดการประชุม',
    'LNK_NEW_OPPORTUNITY' => 'สร้างโอกาสทางการขาย',
	'LNK_SELECT_ACCOUNTS' => ' <b>หรือ</b> เลือกบัญชี',
    'LNK_SELECT_CONTACTS' => ' <b>หรือ</b> เลือกที่อยู่ติดต่อ',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'คัดลอกที่อยู่รองไปยังที่อยู่หลัก',
    'NTC_COPY_PRIMARY_ADDRESS' => 'คัดลอกที่อยู่หลักไปยังที่อยู่รอง',
    'NTC_DELETE_CONFIRMATION' => 'คุณแน่ใจหรือไม่ว่าต้องการลบระเบียนนี้',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'การสร้างโอกาสทางการขายจะต้องมีบัญชี\n โปรดสร้างบัญชีใหม่หรือเลือกบัญชีที่มีอยู่',
    'NTC_REMOVE_CONFIRMATION' => 'คุณแน่ใจหรือไม่ว่าต้องการย้ายผู้สนใจนี้ออกจากเคสนี้',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'คุณแน่ใจหรือไม่ว่าต้องการยกเลิกระเบียนนี้ในฐานะผู้ใต้บังคับบัญชา',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'ล็อกของแคมเปญ',
    'LBL_TARGET_OF_CAMPAIGNS'=>'แคมเปญที่สำเร็จ:',
    'LBL_TARGET_BUTTON_LABEL'=>'ตรงเป้าหมาย',
    'LBL_TARGET_BUTTON_TITLE'=>'ตรงเป้าหมาย',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'แคมเปญ:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'ผู้ใช้ที่ระบุ',
    'LBL_PROSPECT_LIST' => 'รายการลูกค้าเป้าหมาย',
    'LBL_PROSPECT' => 'เป้าหมาย',
    'LBL_CAMPAIGN_LEAD' => 'แคมเปญ',
	'LNK_LEAD_REPORTS' => 'ดูรายงานของผู้สนใจ',
    'LBL_BIRTHDATE' => 'วันเกิด:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'ขอขอบคุณสำหรับการส่งข้อมูล',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'ขออภัย ขณะนี้เซิร์ฟเวอร์ไม่สามารถใช้ได้ โปรดลองใหม่ภายหลัง',
    'LBL_ASSISTANT_PHONE' => 'โทรศัพท์ของผู้ช่วย',
    'LBL_ASSISTANT' => 'ผู้ช่วย',
    'LBL_REGISTRATION' => 'การลงทะเบียน',
    'LBL_MESSAGE' => 'โปรดป้อนข้อมูลของคุณที่ด้านล่าง ระบบจะสร้างข้อมูลและ/หรือบัญชีสำหรับการอนุมัติที่รอดำเนินการของคุณ',
    'LBL_SAVED' => 'ขอขอบคุณสำหรับการลงทะเบียน ระบบจะสร้างบัญชีของคุณและเจ้าหน้าที่จะติดต่อคุณในเร็วๆ นี้',
    'LBL_CLICK_TO_RETURN' => 'กลับไปที่พอร์ทัล',
    'LBL_CREATED_USER' => 'ผู้ใช้ที่สร้าง',
    'LBL_MODIFIED_USER' => 'ผู้ใช้ที่แก้ไข',
    'LBL_CAMPAIGNS' => 'แคมเปญ',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'แคมเปญ',
    'LBL_CONVERT_MODULE_NAME' => 'โมดูล',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'โมดูล',
    'LBL_CONVERT_REQUIRED' => 'ต้องระบุ',
    'LBL_CONVERT_SELECT' => 'อนุญาตการเลือก',
    'LBL_CONVERT_COPY' => 'คัดลอกข้อมูล',
    'LBL_CONVERT_EDIT' => 'แก้ไข',
    'LBL_CONVERT_DELETE' => 'ลบ',
    'LBL_CONVERT_ADD_MODULE' => 'เพิ่มโมดูล',
    'LBL_CONVERT_EDIT_LAYOUT' => 'แก้ไขเลย์เอาต์การแปลง',
    'LBL_CREATE' => 'สร้าง',
    'LBL_SELECT' => ' <b>หรือ</b> เลือก',
	'LBL_WEBSITE' => 'เว็บไซต์',
	'LNK_IMPORT_LEADS' => 'นำเข้าผู้สนใจ',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'ประกาศ: หน้าจอการแปลงผู้สนใจปัจจุบันมีฟิลด์ที่กำหนดเอง เมื่อคุณปรับแต่งหน้าจอการแปลงผู้สนใจใน Studio เป็นครั้งแรก คุณจะต้องเพิ่มฟิลด์ที่กำหนดเองในเลย์เอาต์ หากจำเป็น ฟิลด์ที่กำหนดเองเหล่านี้จะไม่ปรากฏในเลย์เอาต์โดยอัตโนมัติเช่นก่อนหน้านี้',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'โมดูลที่จะสร้างระเบียนใหม่',
	'LBL_REQUIRED_TIP' 	=> 'ต้องสร้างหรือเลือกโมดูลที่จำเป็นก่อนจึงจะแปลงผู้สนใจได้',
	'LBL_COPY_TIP'		=> 'ถ้าเลือกไว้ ฟิลด์จากผู้สนใจจะถูกคัดลอกไปยังฟิลด์ที่มีชื่อเดียวกันในระเบียนที่สร้างใหม่',
	'LBL_SELECTION_TIP' => 'คุณสามารถเลือกโมดูลที่มีฟิลด์ที่เกี่ยวข้องในผู้ติดต่อแทนที่จะสร้างระหว่างกระบวนการแปลงผู้สนใจ',
	'LBL_EDIT_TIP'		=> 'แก้ไขเลย์เอาต์การแปลงสำหรับโมดูลนี้',
	'LBL_DELETE_TIP'	=> 'นำโมดูลนี้ออกจากเลย์เอาต์การแปลง',

    'LBL_ACTIVITIES_MOVE'   => 'ย้ายกิจกรรมไปยัง',
    'LBL_ACTIVITIES_COPY'   => 'คัดลอกกิจกรรมไปยัง',
    'LBL_ACTIVITIES_MOVE_HELP'   => "เลือกระเบียนที่จะย้ายกิจกรรมของผู้สนใจ ระบบจะย้ายงาน การโทร การประชุม บันทึก และอีเมลไปยังระเบียนที่เลือกไว้",
    'LBL_ACTIVITIES_COPY_HELP'   => "เลือกระเบียนที่จะสร้างสำเนากิจกรรมของผู้สนใจ ระบบจะสร้างงาน การโทร การประชุม และบันทึกใหม่สำหรับแต่ละระเบียนที่เลือกไว้ และเชื่อมโยงอีเมลกับระเบียนที่เลือก",
    //For export labels
    'LBL_PHONE_HOME' => 'โทรเข้าบ้าน',
    'LBL_PHONE_MOBILE' => 'โทรเข้ามือถือ',
    'LBL_PHONE_WORK' => 'โทรเข้าที่ทำงาน',
    'LBL_PHONE_OTHER' => 'โทรเข้าหมายเลขอื่น',
    'LBL_PHONE_FAX' => 'โทรเข้าหมายเลขโทรสาร',
    'LBL_CAMPAIGN_ID' => 'ID แคมเปญ',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'ชื่อผู้ใช้ที่ระบุ',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID ผู้ใช้ที่ระบุ',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'แก้ไขโดย ID',
    'LBL_EXPORT_CREATED_BY' => 'สร้างโดย ID',
    'LBL_EXPORT_PHONE_MOBILE' => 'โทรศัพท์มือถือ',
    'LBL_EXPORT_EMAIL2'=>'ที่อยู่อีเมลอื่น',
	'LBL_EDITLAYOUT' => 'แก้ไขเลย์เอาต์' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'ป้อนวันที่' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'กำลังโหลด' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'แก้ไข' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'ID ตัวการของ D&B',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'โอกาสทางการขาย',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'บันทึก',

    'LBL_HELP_CONVERT_TITLE' => 'แปลง {{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'โมดูล {{plural_module_name}} ประกอบด้วยลูกค้าเป้าหมายแต่ละรายที่อาจสนใจในผลิตภัณฑ์หรือบริการที่องค์กรของคุณให้บริการ เมื่อ {{module_name}} มีคุณสมบัติตามเกณฑ์ที่จะเป็น {{opportunities_singular_module}} ของการขาย คุณจะสามารถแปลง {{plural_module_name}} เป็น {{contacts_module}}, {{opportunities_module}} และ {{accounts_module}} ได้ คุณสามารถสร้าง {{plural_module_name}} ใน Sugar ได้หลายวิธี เช่นโมดูล {{plural_module_name}}, การทำซ้ำ, การนำเข้า {{plural_module_name}} เป็นต้น เมื่อสร้างระเบียน {{module_name}} คุณจะสามารถดูและแก้ไขข้อมูลเกี่ยวกับ {{module_name}} ได้ผ่านทางมุมมองระเบียน {{plural_module_name}}',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'โมดูล {{plural_module_name}} ประกอบด้วยลูกค้าเป้าหมายที่อาจสนใจผลิตภัณฑ์หรือบริการที่องค์กรของคุณมีให้

- แก้ไขฟิลด์ของระเบียนด้วยการคลิกแต่ละฟิลด์หรือคลิกที่ปุ่มแก้ไข
- ดูหรือแก้ไขลิงก์ไปยังระเบียนอื่นในแผงข้อมูลย่อย โดยสลับแผงด้านซ้ายล่างเป็น "มุมมองข้อมูล"
- ป้อนและดูความคิดเห็นของผู้ใช้ และบันทึกประวัติการแก้ไขใน {{activitystream_singular_module}} โดยสลับแผงด้านซ้ายล่างเป็น "สตรีมกิจกรรม"
- ติดตามหรือกำหนดระเบียนนี้เป็นรายการโปรดโดยใช้ไอคอนทางขวาของชื่อระเบียน
- การดำเนินการอื่นๆ ที่ใช้ได้อยู่ในเมนูการดำเนินการแบบดรอปดาวน์ทางขวาของปุ่มแก้ไข',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'โมดูล {{plural_module_name}} ประกอบด้วยลูกค้าเป้าหมายแต่ละรายที่อาจสนใจในผลิตภัณฑ์หรือบริการที่องค์กรของคุณให้บริการ เมื่อ {{module_name}} มีคุณสมบัติตามเกณฑ์ที่จะเป็น {{opportunities_singular_module}} ของการขาย คุณจะสามารถแปลงให้เป็น {{contacts_singular_module}}, {{accounts_singular_module}}, {{opportunities_singular_module}} หรือระเบียนอื่นๆ ได้

ในการสร้าง {{module_name}} ให้ทำดังนี้:
1. ระบุค่าในฟิลด์ตามที่ต้องการ
 - คุณต้องป้อนข้อมูลในฟิลด์ที่มีคำว่า "ต้องระบุ" กำกับไว้ ก่อนที่จะบันทึก
 - คลิก "แสดงเพิ่มเติม" เพื่อแสดงฟิลด์อื่นๆ หากจำเป็น
2. คลิก "บันทึก" เพื่อสิ้นสุดการสร้างระเบียนใหม่ และกลับสู่เพจก่อนหน้า',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'คุณสามารถใช้ Sugar เพื่อแปลง {{plural_module_name}} ให้เป็น {{contacts_module}}, {{accounts_module}} และโมดูลอื่นๆ เมื่อ {{module_name}} มีคุณสมบัติตรงตามเกณฑ์

เข้าสู่ขั้นตอนของแต่ละโมดูลโดยแก้ไขฟิลด์ จากนั้นยืนยันค่าของระเบียนใหม่โดยคลิกที่ปุ่มเชื่อมโยงแต่ละปุ่ม

ถ้า Sugar ตรวจพบระเบียนที่มีอยู่แล้วและตรงกับข้อมูล {{module_name}} ของคุณ คุณมีตัวเลือกที่จะเลือกทำซ้ำและยืนยันการเลือกด้วยปุ่มเชื่อมโยง หรือคลิก "ละเว้นและสร้างใหม่" และดำเนินการต่อตามปกติ

หลัังจากยืนยันโมดูลที่จำเป็นและที่ต้องการแล้ว ให้คลิกปุ่มบันทึกและแปลงที่ด้านบนเพื่อให้การแปลงเสร็จสมบูรณ์',

    //Marketo
    'LBL_MKTO_SYNC' => 'ซิงค์กับ Marketo&reg;',
    'LBL_MKTO_ID' => 'ID ผู้สนใจของ Marketo',
    'LBL_MKTO_LEAD_SCORE' => 'คะแนนของผู้สนใจ',

    'LBL_FILTER_LEADS_REPORTS' => 'รายงานของผู้ใช้สนใจ',
);
