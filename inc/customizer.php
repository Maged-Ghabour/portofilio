<?php
/**
 * Maged Portfolio Theme Customizer
 */

function maged_portfolio_customize_register( $wp_customize ) {

    // Helper for adding simple text fields
    function maged_add_text_field($wp_customize, $section, $id, $label, $default = '') {
        $wp_customize->add_setting( $id, array(
            'default'           => $default,
            'sanitize_callback' => 'wp_kses_post',
        ) );
        $wp_customize->add_control( $id, array(
            'label'   => $label,
            'section' => $section,
            'type'    => 'text',
        ) );
    }

    function maged_add_textarea_field($wp_customize, $section, $id, $label, $default = '') {
        $wp_customize->add_setting( $id, array(
            'default'           => $default,
            'sanitize_callback' => 'wp_kses_post',
        ) );
        $wp_customize->add_control( $id, array(
            'label'   => $label,
            'section' => $section,
            'type'    => 'textarea',
        ) );
    }

    function maged_add_image_field($wp_customize, $section, $id, $label) {
        $wp_customize->add_setting( $id, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $id, array(
            'label'    => $label,
            'section'  => $section,
            'settings' => $id,
        ) ) );
    }

    // 1. General & Header Settings
    $wp_customize->add_section( 'maged_general', array('title' => 'General Settings', 'priority' => 30) );
    maged_add_text_field($wp_customize, 'maged_general', 'maged_name_en', 'Name (EN)', 'Maged Ghabour');
    maged_add_text_field($wp_customize, 'maged_general', 'maged_name_ar', 'Name (AR)', 'ماجد غبور');
    maged_add_text_field($wp_customize, 'maged_general', 'maged_role_en', 'Role (EN)', 'Full Stack Web Developer');
    maged_add_text_field($wp_customize, 'maged_general', 'maged_role_ar', 'Role (AR)', 'مطور ويب متكامل (Full Stack)');
    maged_add_text_field($wp_customize, 'maged_general', 'maged_cv_link', 'CV Link URL', '#');
    maged_add_image_field($wp_customize, 'maged_general', 'maged_avatar', 'Avatar Image (Override)');

    // 2. Home Section
    $wp_customize->add_section( 'maged_home', array('title' => 'Home Section', 'priority' => 31) );
    maged_add_text_field($wp_customize, 'maged_home', 'maged_home_greeting_en', 'Greeting (EN)', 'HI THERE! 👋');
    maged_add_text_field($wp_customize, 'maged_home', 'maged_home_greeting_ar', 'Greeting (AR)', 'أهلاً بك! 👋');
    maged_add_text_field($wp_customize, 'maged_home', 'maged_home_iam_en', "I'm Text (EN)", "I'M <span>Maged Ghabour</span>");
    maged_add_text_field($wp_customize, 'maged_home', 'maged_home_iam_ar', "I'm Text (AR)", "أنا <span>ماجد غبور</span>");
    maged_add_text_field($wp_customize, 'maged_home', 'maged_typed_en', 'Typed Words (EN - comma separated)', 'PHP Developer, Laravel Developer, Full Stack Developer, Web Developer');
    maged_add_text_field($wp_customize, 'maged_home', 'maged_typed_ar', 'Typed Words (AR - comma separated)', 'مطور PHP, مطور Laravel, مطور ويب متكامل, مطور ويب');
    maged_add_textarea_field($wp_customize, 'maged_home', 'maged_home_desc_en', 'Description (EN)', 'I am a highly motivated Full Stack PHP Developer...');
    maged_add_textarea_field($wp_customize, 'maged_home', 'maged_home_desc_ar', 'Description (AR)', 'أنا مطور ويب متكامل (Full Stack)...');

    // 3. About Section
    $wp_customize->add_section( 'maged_about', array('title' => 'About Section', 'priority' => 32) );
    maged_add_text_field($wp_customize, 'maged_about', 'maged_age', 'Age', '26');
    maged_add_text_field($wp_customize, 'maged_about', 'maged_degree_en', 'Degree (EN)', 'Bachelor');
    maged_add_text_field($wp_customize, 'maged_about', 'maged_degree_ar', 'Degree (AR)', 'بكالوريوس');
    maged_add_text_field($wp_customize, 'maged_about', 'maged_location_en', 'Location (EN)', 'Egypt, Mansoura');
    maged_add_text_field($wp_customize, 'maged_about', 'maged_location_ar', 'Location (AR)', 'مصر، المنصورة');
    maged_add_text_field($wp_customize, 'maged_about', 'maged_exp_years', 'Years Experience', '2');
    maged_add_text_field($wp_customize, 'maged_about', 'maged_projects_count', 'Projects Completed', '20');
    maged_add_text_field($wp_customize, 'maged_about', 'maged_clients_count', 'Happy Clients', '15');
    maged_add_text_field($wp_customize, 'maged_about', 'maged_awards_count', 'Awards Won', '2');

    // 4. Skills (Loop)
    $wp_customize->add_section( 'maged_skills', array('title' => 'Skills Section', 'priority' => 33) );
    for ($i = 1; $i <= 8; $i++) {
        maged_add_text_field($wp_customize, 'maged_skills', "maged_skill_{$i}_name", "Skill $i Name");
        maged_add_text_field($wp_customize, 'maged_skills', "maged_skill_{$i}_pct", "Skill $i Percentage (e.g. 90)");
    }

    // 5. Services (Loop)
    $wp_customize->add_section( 'maged_services', array('title' => 'Services Section', 'priority' => 34) );
    for ($i = 1; $i <= 4; $i++) {
        maged_add_text_field($wp_customize, 'maged_services', "maged_service_{$i}_icon", "Service $i Icon Class (e.g. fas fa-code)");
        maged_add_text_field($wp_customize, 'maged_services', "maged_service_{$i}_title_en", "Service $i Title (EN)");
        maged_add_text_field($wp_customize, 'maged_services', "maged_service_{$i}_title_ar", "Service $i Title (AR)");
        maged_add_textarea_field($wp_customize, 'maged_services', "maged_service_{$i}_desc_en", "Service $i Desc (EN)");
        maged_add_textarea_field($wp_customize, 'maged_services', "maged_service_{$i}_desc_ar", "Service $i Desc (AR)");
    }

    // 6. Projects (Loop)
    $wp_customize->add_section( 'maged_projects', array('title' => 'Projects Section', 'priority' => 35) );
    for ($i = 1; $i <= 6; $i++) {
        maged_add_image_field($wp_customize, 'maged_projects', "maged_project_{$i}_img", "Project $i Image");
        maged_add_text_field($wp_customize, 'maged_projects', "maged_project_{$i}_title_en", "Project $i Title (EN)");
        maged_add_text_field($wp_customize, 'maged_projects', "maged_project_{$i}_title_ar", "Project $i Title (AR)");
        maged_add_textarea_field($wp_customize, 'maged_projects', "maged_project_{$i}_desc_en", "Project $i Desc (EN)");
        maged_add_textarea_field($wp_customize, 'maged_projects', "maged_project_{$i}_desc_ar", "Project $i Desc (AR)");
        maged_add_text_field($wp_customize, 'maged_projects', "maged_project_{$i}_link", "Project $i Link");
    }

    // 7. Experience (Loop)
    $wp_customize->add_section( 'maged_experience', array('title' => 'Experience Section', 'priority' => 36) );
    for ($i = 1; $i <= 3; $i++) {
        maged_add_text_field($wp_customize, 'maged_experience', "maged_exp_{$i}_date_en", "Experience $i Date (EN)");
        maged_add_text_field($wp_customize, 'maged_experience', "maged_exp_{$i}_date_ar", "Experience $i Date (AR)");
        maged_add_text_field($wp_customize, 'maged_experience', "maged_exp_{$i}_title_en", "Experience $i Title (EN)");
        maged_add_text_field($wp_customize, 'maged_experience', "maged_exp_{$i}_title_ar", "Experience $i Title (AR)");
        maged_add_textarea_field($wp_customize, 'maged_experience', "maged_exp_{$i}_desc_en", "Experience $i Desc (EN)");
        maged_add_textarea_field($wp_customize, 'maged_experience', "maged_exp_{$i}_desc_ar", "Experience $i Desc (AR)");
        maged_add_text_field($wp_customize, 'maged_experience', "maged_exp_{$i}_tags", "Experience $i Tags (comma separated)");
    }

    // 8. Education (Loop)
    $wp_customize->add_section( 'maged_education', array('title' => 'Education Section', 'priority' => 37) );
    for ($i = 1; $i <= 3; $i++) {
        maged_add_text_field($wp_customize, 'maged_education', "maged_edu_{$i}_date", "Education $i Date");
        maged_add_text_field($wp_customize, 'maged_education', "maged_edu_{$i}_title_en", "Education $i Title (EN)");
        maged_add_text_field($wp_customize, 'maged_education', "maged_edu_{$i}_title_ar", "Education $i Title (AR)");
        maged_add_textarea_field($wp_customize, 'maged_education', "maged_edu_{$i}_desc_en", "Education $i Desc (EN)");
        maged_add_textarea_field($wp_customize, 'maged_education', "maged_edu_{$i}_desc_ar", "Education $i Desc (AR)");
    }

    // 9. Contact & Socials
    $wp_customize->add_section( 'maged_contact', array('title' => 'Contact & Social Settings', 'priority' => 38) );
    maged_add_text_field($wp_customize, 'maged_contact', 'maged_contact_email', 'Email Address', 'ghabourmaged@gmail.com');
    maged_add_text_field($wp_customize, 'maged_contact', 'maged_contact_phone1', 'Phone 1', '+20 100 785 2746');
    maged_add_text_field($wp_customize, 'maged_contact', 'maged_contact_phone2', 'Phone 2', '+20 155 087 0134');
    maged_add_text_field($wp_customize, 'maged_contact', 'maged_contact_address_en', 'Address (EN)', 'Dakahlia, Mansoura');
    maged_add_text_field($wp_customize, 'maged_contact', 'maged_contact_address_ar', 'Address (AR)', 'المنصورة، الدقهلية');
    maged_add_text_field($wp_customize, 'maged_contact', 'maged_social_github', 'GitHub URL', 'https://github.com/Maged-Ghabour');
    maged_add_text_field($wp_customize, 'maged_contact', 'maged_social_linkedin', 'LinkedIn URL', 'https://www.linkedin.com/in/magedghabour/');
    maged_add_text_field($wp_customize, 'maged_contact', 'maged_social_whatsapp', 'WhatsApp URL', 'https://wa.me/201007852746');
    maged_add_text_field($wp_customize, 'maged_contact', 'maged_cf7_shortcode', 'Contact Form 7 Shortcode', '[contact-form-7 id="123" title="Contact form 1"]');

}
add_action( 'customize_register', 'maged_portfolio_customize_register' );
