<?php
/**
 * Sailor Theme Customizer
 *
 * @package Sailor
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sailor_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.sitename',
				'render_callback' => 'sailor_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'sailor_customize_partial_blogdescription',
			)
		);
	}

    // Contact Information Section
    $wp_customize->add_section(
        'sailor_contact_section',
        array(
            'title'    => __( 'Contact Information', 'sailor' ),
            'priority' => 120,
        )
    );

    // Address Line 1
    $wp_customize->add_setting(
        'sailor_address_line1',
        array(
            'default'           => 'A108 Adam Street',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'sailor_address_line1',
        array(
            'label'    => __( 'Address Line 1', 'sailor' ),
            'section'  => 'sailor_contact_section',
            'type'     => 'text',
        )
    );

    // Address Line 2
    $wp_customize->add_setting(
        'sailor_address_line2',
        array(
            'default'           => 'New York, NY 535022',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'sailor_address_line2',
        array(
            'label'    => __( 'Address Line 2', 'sailor' ),
            'section'  => 'sailor_contact_section',
            'type'     => 'text',
        )
    );

    // Phone
    $wp_customize->add_setting(
        'sailor_phone',
        array(
            'default'           => '+1 5589 55488 55',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'sailor_phone',
        array(
            'label'    => __( 'Phone', 'sailor' ),
            'section'  => 'sailor_contact_section',
            'type'     => 'text',
        )
    );

    // Email
    $wp_customize->add_setting(
        'sailor_email',
        array(
            'default'           => 'info@example.com',
            'sanitize_callback' => 'sanitize_email',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'sailor_email',
        array(
            'label'    => __( 'Email', 'sailor' ),
            'section'  => 'sailor_contact_section',
            'type'     => 'email',
        )
    );

    // Social Media Section
    $wp_customize->add_section(
        'sailor_social_section',
        array(
            'title'    => __( 'Social Media', 'sailor' ),
            'priority' => 130,
        )
    );

    // Twitter URL
    $wp_customize->add_setting(
        'sailor_twitter_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'sailor_twitter_url',
        array(
            'label'    => __( 'Twitter URL', 'sailor' ),
            'section'  => 'sailor_social_section',
            'type'     => 'url',
        )
    );

    // Facebook URL
    $wp_customize->add_setting(
        'sailor_facebook_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'sailor_facebook_url',
        array(
            'label'    => __( 'Facebook URL', 'sailor' ),
            'section'  => 'sailor_social_section',
            'type'     => 'url',
        )
    );

    // Instagram URL
    $wp_customize->add_setting(
        'sailor_instagram_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'sailor_instagram_url',
        array(
            'label'    => __( 'Instagram URL', 'sailor' ),
            'section'  => 'sailor_social_section',
            'type'     => 'url',
        )
    );

    // LinkedIn URL
    $wp_customize->add_setting(
        'sailor_linkedin_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'sailor_linkedin_url',
        array(
            'label'    => __( 'LinkedIn URL', 'sailor' ),
            'section'  => 'sailor_social_section',
            'type'     => 'url',
        )
    );

    // Theme Colors Section
    $wp_customize->add_section(
        'sailor_colors_section',
        array(
            'title'    => __( 'Theme Colors', 'sailor' ),
            'priority' => 110,
        )
    );

    // Accent Color
    $wp_customize->add_setting(
        'sailor_accent_color',
        array(
            'default'           => '#d9232d',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sailor_accent_color',
            array(
                'label'    => __( 'Accent Color', 'sailor' ),
                'section'  => 'sailor_colors_section',
                'settings' => 'sailor_accent_color',
            )
        )
    );

    // Heading Color
    $wp_customize->add_setting(
        'sailor_heading_color',
        array(
            'default'           => '#556270',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sailor_heading_color',
            array(
                'label'    => __( 'Heading Color', 'sailor' ),
                'section'  => 'sailor_colors_section',
                'settings' => 'sailor_heading_color',
            )
        )
    );

    // Forms Section
    $wp_customize->add_section(
        'sailor_forms_section',
        array(
            'title'    => __( 'Forms', 'sailor' ),
            'priority' => 140,
        )
    );

    // Newsletter Form ID
    $wp_customize->add_setting(
        'sailor_newsletter_form_id',
        array(
            'default'           => '',
            'sanitize_callback' => 'absint',
        )
    );

    $wp_customize->add_control(
        'sailor_newsletter_form_id',
        array(
            'label'       => __( 'Newsletter Form ID', 'sailor' ),
            'description' => __( 'Enter the Contact Form 7 ID for the newsletter form.', 'sailor' ),
            'section'     => 'sailor_forms_section',
            'type'        => 'number',
        )
    );

    // Contact Form ID
    $wp_customize->add_setting(
        'sailor_contact_form_id',
        array(
            'default'           => '',
            'sanitize_callback' => 'absint',
        )
    );

    $wp_customize->add_control(
        'sailor_contact_form_id',
        array(
            'label'       => __( 'Contact Form ID', 'sailor' ),
            'description' => __( 'Enter the Contact Form 7 ID for the contact form.', 'sailor' ),
            'section'     => 'sailor_forms_section',
            'type'        => 'number',
        )
    );

    // Homepage Settings Section
    $wp_customize->add_section(
        'sailor_homepage_section',
        array(
            'title'    => __( 'Homepage Settings', 'sailor' ),
            'priority' => 100,
        )
    );

    // Hero Title
    $wp_customize->add_setting(
        'sailor_hero_title',
        array(
            'default'           => 'Welcome to Sailor',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'sailor_hero_title',
        array(
            'label'    => __( 'Hero Title', 'sailor' ),
            'section'  => 'sailor_homepage_section',
            'type'     => 'text',
        )
    );

    // Hero Description
    $wp_customize->add_setting(
        'sailor_hero_description',
        array(
            'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'sanitize_callback' => 'sanitize_textarea_field',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'sailor_hero_description',
        array(
            'label'    => __( 'Hero Description', 'sailor' ),
            'section'  => 'sailor_homepage_section',
            'type'     => 'textarea',
        )
    );

    // Hero Button Text
    $wp_customize->add_setting(
        'sailor_hero_button_text',
        array(
            'default'           => 'Get Started',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'sailor_hero_button_text',
        array(
            'label'    => __( 'Hero Button Text', 'sailor' ),
            'section'  => 'sailor_homepage_section',
            'type'     => 'text',
        )
    );

    // Hero Button URL
    $wp_customize->add_setting(
        'sailor_hero_button_url',
        array(
            'default'           => '#featured-services',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'sailor_hero_button_url',
        array(
            'label'    => __( 'Hero Button URL', 'sailor' ),
            'section'  => 'sailor_homepage_section',
            'type'     => 'url',
        )
    );
}
add_action( 'customize_register', 'sailor_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function sailor_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function sailor_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sailor_customize_preview_js() {
	wp_enqueue_script( 'sailor-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'sailor_customize_preview_js' );

/**
 * Generate custom CSS for theme customizer options
 */
function sailor_customizer_css() {
    $accent_color = get_theme_mod( 'sailor_accent_color', '#d9232d' );
    $heading_color = get_theme_mod( 'sailor_heading_color', '#556270' );
    
    $custom_css = "
        :root {
            --accent-color: {$accent_color};
            --heading-color: {$heading_color};
        }
    ";
    
    wp_add_inline_style( 'sailor-main', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'sailor_customizer_css' );
