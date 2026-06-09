<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_payment_methods',
	'title' => 'Payment Methods Data',
	'fields' => array(
        // General Titles
        array(
            'key' => 'field_tab_general',
            'label' => 'General Titles',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_pay_title_en',
            'label' => 'Payment Details Title (EN)',
            'name' => 'maged_payment_title_en',
            'type' => 'text',
        ),
        array(
            'key' => 'field_pay_title_ar',
            'label' => 'Payment Details Title (AR)',
            'name' => 'maged_payment_title_ar',
            'type' => 'text',
        ),
        array(
            'key' => 'field_pay_sub_en',
            'label' => 'Payment Details Subtitle (EN)',
            'name' => 'maged_payment_subtitle_en',
            'type' => 'textarea',
        ),
        array(
            'key' => 'field_pay_sub_ar',
            'label' => 'Payment Details Subtitle (AR)',
            'name' => 'maged_payment_subtitle_ar',
            'type' => 'textarea',
        ),
        // PayPal Tab
        array('key' => 'field_tab_paypal', 'label' => 'PayPal', 'name' => '', 'type' => 'tab'),
        array('key' => 'field_paypal_currency', 'label' => 'Currency', 'name' => 'maged_payment_paypal_currency', 'type' => 'select', 'choices' => array('USD' => 'دولار أمريكي (USD)', 'EGP' => 'جنيه مصري (EGP)', 'SAR' => 'ريال سعودي (SAR)', 'EUR' => 'يورو (EUR)', 'Any' => 'متعدد العملات (Any)'), 'default_value' => 'USD'),
        array('key' => 'field_paypal_link', 'label' => 'PayPal Link', 'name' => 'maged_payment_paypal_link', 'type' => 'url'),
        array('key' => 'field_paypal_email', 'label' => 'PayPal Email', 'name' => 'maged_payment_paypal_email', 'type' => 'email'),
        
        // STC Pay Tab
        array('key' => 'field_tab_stc', 'label' => 'STC Pay', 'name' => '', 'type' => 'tab'),
        array('key' => 'field_stc_currency', 'label' => 'Currency', 'name' => 'maged_payment_stc_currency', 'type' => 'select', 'choices' => array('USD' => 'دولار أمريكي (USD)', 'EGP' => 'جنيه مصري (EGP)', 'SAR' => 'ريال سعودي (SAR)', 'EUR' => 'يورو (EUR)', 'Any' => 'متعدد العملات (Any)'), 'default_value' => 'SAR'),
        array('key' => 'field_stc_name', 'label' => 'STC Name', 'name' => 'maged_payment_stc_name', 'type' => 'text'),
        array('key' => 'field_stc_iban', 'label' => 'STC IBAN', 'name' => 'maged_payment_stc_iban', 'type' => 'text'),
        array('key' => 'field_stc_bank', 'label' => 'STC Bank', 'name' => 'maged_payment_stc_bank', 'type' => 'text'),
        array('key' => 'field_stc_account', 'label' => 'STC Account', 'name' => 'maged_payment_stc_account', 'type' => 'text'),
        array('key' => 'field_stc_purpose', 'label' => 'STC Purpose', 'name' => 'maged_payment_stc_purpose', 'type' => 'text'),
        
        // Al Rajhi Tab
        array('key' => 'field_tab_rajhi', 'label' => 'Al Rajhi Bank', 'name' => '', 'type' => 'tab'),
        array('key' => 'field_rajhi_currency', 'label' => 'Currency', 'name' => 'maged_payment_rajhi_currency', 'type' => 'select', 'choices' => array('USD' => 'دولار أمريكي (USD)', 'EGP' => 'جنيه مصري (EGP)', 'SAR' => 'ريال سعودي (SAR)', 'EUR' => 'يورو (EUR)', 'Any' => 'متعدد العملات (Any)'), 'default_value' => 'SAR'),
        array('key' => 'field_rajhi_first', 'label' => 'First Name', 'name' => 'maged_payment_rajhi_firstname', 'type' => 'text'),
        array('key' => 'field_rajhi_last', 'label' => 'Last Name', 'name' => 'maged_payment_rajhi_lastname', 'type' => 'text'),
        array('key' => 'field_rajhi_iban', 'label' => 'IBAN', 'name' => 'maged_payment_rajhi_iban', 'type' => 'text'),
        array('key' => 'field_rajhi_account', 'label' => 'Account Number', 'name' => 'maged_payment_rajhi_account', 'type' => 'text'),
        array('key' => 'field_rajhi_swift', 'label' => 'SWIFT Code', 'name' => 'maged_payment_rajhi_swift', 'type' => 'text'),
        array('key' => 'field_rajhi_bank', 'label' => 'Bank Name', 'name' => 'maged_payment_rajhi_bank', 'type' => 'text'),
        array('key' => 'field_rajhi_branch', 'label' => 'Branch', 'name' => 'maged_payment_rajhi_branch', 'type' => 'text'),
        array('key' => 'field_rajhi_address', 'label' => 'Branch Address', 'name' => 'maged_payment_rajhi_address', 'type' => 'text'),
        array('key' => 'field_rajhi_postal', 'label' => 'Postal Code', 'name' => 'maged_payment_rajhi_postal', 'type' => 'text'),
        
        // International Tab
        array('key' => 'field_tab_int', 'label' => 'International Bank Transfer', 'name' => '', 'type' => 'tab'),
        array('key' => 'field_int_currency', 'label' => 'Currency', 'name' => 'maged_payment_int_currency', 'type' => 'select', 'choices' => array('USD' => 'دولار أمريكي (USD)', 'EGP' => 'جنيه مصري (EGP)', 'SAR' => 'ريال سعودي (SAR)', 'EUR' => 'يورو (EUR)', 'Any' => 'متعدد العملات (Any)'), 'default_value' => 'USD'),
        array('key' => 'field_int_city', 'label' => 'City', 'name' => 'maged_payment_int_city', 'type' => 'text'),
        array('key' => 'field_int_state', 'label' => 'State/Province', 'name' => 'maged_payment_int_state', 'type' => 'text'),
        array('key' => 'field_int_country', 'label' => 'Country', 'name' => 'maged_payment_int_country', 'type' => 'text'),
        array('key' => 'field_int_phone', 'label' => 'Phone', 'name' => 'maged_payment_int_phone', 'type' => 'text'),
        
        // InstaPay Egypt Tab
        array('key' => 'field_tab_instapay', 'label' => 'InstaPay Egypt', 'name' => '', 'type' => 'tab'),
        array('key' => 'field_instapay_currency', 'label' => 'Currency', 'name' => 'maged_payment_instapay_currency', 'type' => 'select', 'choices' => array('USD' => 'دولار أمريكي (USD)', 'EGP' => 'جنيه مصري (EGP)', 'SAR' => 'ريال سعودي (SAR)', 'EUR' => 'يورو (EUR)', 'Any' => 'متعدد العملات (Any)'), 'default_value' => 'EGP'),
        array('key' => 'field_instapay_acc1', 'label' => 'InstaPay Account 1', 'name' => 'maged_payment_instapay_acc1', 'type' => 'text', 'default_value' => 'magedghabour@instapay'),
        array('key' => 'field_instapay_link1', 'label' => 'InstaPay Link 1', 'name' => 'maged_payment_instapay_link1', 'type' => 'url'),
        array('key' => 'field_instapay_acc2', 'label' => 'InstaPay Account 2', 'name' => 'maged_payment_instapay_acc2', 'type' => 'text', 'default_value' => 'megoghabour@instapay'),
        array('key' => 'field_instapay_link2', 'label' => 'InstaPay Link 2', 'name' => 'maged_payment_instapay_link2', 'type' => 'url'),
        array('key' => 'field_instapay_phone', 'label' => 'InstaPay Phone Number', 'name' => 'maged_payment_instapay_phone', 'type' => 'text', 'default_value' => '01284867755'),
        
        // Important Notes Tab
        array('key' => 'field_tab_notes', 'label' => 'Important Notes', 'name' => '', 'type' => 'tab'),
        array('key' => 'field_notes_title_en', 'label' => 'Notes Title (EN)', 'name' => 'maged_payment_notes_title_en', 'type' => 'text', 'default_value' => 'Important Notes'),
        array('key' => 'field_notes_title_ar', 'label' => 'Notes Title (AR)', 'name' => 'maged_payment_notes_title_ar', 'type' => 'text', 'default_value' => 'ملاحظات هامة'),
        array('key' => 'field_notes_1_en', 'label' => 'Note 1 (EN)', 'name' => 'maged_payment_notes_1_en', 'type' => 'textarea', 'default_value' => 'After completing the transfer, please send a screenshot of the receipt via WhatsApp to confirm the payment.'),
        array('key' => 'field_notes_1_ar', 'label' => 'Note 1 (AR)', 'name' => 'maged_payment_notes_1_ar', 'type' => 'textarea', 'default_value' => 'بعد إتمام عملية التحويل، يرجى إرسال لقطة شاشة (Screenshot) للإيصال عبر الواتساب لتأكيد الدفع.'),
        array('key' => 'field_notes_2_en', 'label' => 'Note 2 (EN)', 'name' => 'maged_payment_notes_2_en', 'type' => 'textarea', 'default_value' => 'International transfers take from 2 to 4 working days to appear in the account.'),
        array('key' => 'field_notes_2_ar', 'label' => 'Note 2 (AR)', 'name' => 'maged_payment_notes_2_ar', 'type' => 'textarea', 'default_value' => 'تستغرق الحوالات الدولية من يومين إلى 4 أيام عمل لتظهر في الحساب.'),
        array('key' => 'field_notes_btn_en', 'label' => 'Button Text (EN)', 'name' => 'maged_payment_notes_btn_en', 'type' => 'text', 'default_value' => 'Send Payment Proof'),
        array('key' => 'field_notes_btn_ar', 'label' => 'Button Text (AR)', 'name' => 'maged_payment_notes_btn_ar', 'type' => 'text', 'default_value' => 'إرسال إثبات الدفع'),
        array('key' => 'field_notes_wa_link', 'label' => 'WhatsApp Link', 'name' => 'maged_payment_notes_wa_link', 'type' => 'url', 'default_value' => 'https://wa.me/201007852746'),
        
        // Vodafone Cash Barq Tab
        array('key' => 'field_tab_vf_barq', 'label' => 'Vodafone Cash Barq', 'name' => '', 'type' => 'tab'),
        array('key' => 'field_vf_barq_currency', 'label' => 'Currency', 'name' => 'maged_payment_vf_barq_currency', 'type' => 'select', 'choices' => array('USD' => 'دولار أمريكي (USD)', 'EGP' => 'جنيه مصري (EGP)', 'SAR' => 'ريال سعودي (SAR)', 'EUR' => 'يورو (EUR)', 'Any' => 'متعدد العملات (Any)'), 'default_value' => 'EGP'),
        array('key' => 'field_vf_barq_name', 'label' => 'Name', 'name' => 'maged_payment_vf_barq_name', 'type' => 'text', 'default_value' => 'Ali Ahmed Abd elrazek Ahmed'),
        array('key' => 'field_vf_barq_phone1', 'label' => 'International Phone', 'name' => 'maged_payment_vf_barq_phone1', 'type' => 'text', 'default_value' => '01002241591'),
        array('key' => 'field_vf_barq_img', 'label' => 'Illustrative Image Link', 'name' => 'maged_payment_vf_barq_img', 'type' => 'url', 'instructions' => 'Link to the illustrative image'),
        array('key' => 'field_vf_barq_phone2', 'label' => 'Local Phone (Egypt)', 'name' => 'maged_payment_vf_barq_phone2', 'type' => 'text', 'default_value' => '01002241591'),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-payment.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
