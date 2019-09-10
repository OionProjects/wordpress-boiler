<?php
	add_action( 'customize_register', 'theme_customize_register' );
    /**
     * @param $wp_customize WP_Customize_Manager
     */
	function theme_customize_register( $wp_customize ) {

		$wp_customize->add_setting( 'accent_color', array(
			'default'   => '',
			'transport' => 'refresh',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
			'section' => 'colors',
			'label'   => esc_html__( 'Accent Color', 'primera-dm' ),
		) ) );


        /**
         * Customizer section for site contact details
         */
        $wp_customize->add_section('contact_details', array(
            'title' => esc_html__('Contact Details'),
            'priority' => 20
        ) );
        $wp_customize->add_setting( 'site_email', array(
            'default'   => '',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'site_email_control', array(
            'section' => 'contact_details',
            'settings' => 'site_email',
            'label'   => esc_html__( 'Site Email', 'primera-dm' ),
        ) ) );

        $wp_customize->add_setting( 'site_number', array(
            'default'   => '+ 1235 2355 985',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'site_number_control', array(
            'section' => 'contact_details',
            'settings' => 'site_number',
            'label'   => esc_html__( 'Site Contact Number', 'primera-dm' ),
        ) ) );

        $wp_customize->add_setting( 'site_highlight', array(
            'default'   => '',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'site_highlight', array(
            'section' => 'contact_details',
            'label'   => esc_html__( 'Site Highlight', 'primera-dm' ),
            'type'    => 'textarea'
        ) ) );

	}

