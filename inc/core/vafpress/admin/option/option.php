<?php
$vafpress_pub_image = get_template_directory_uri().'/inc/core/vafpress/vafpress-framework/public/img';
return array(
	'title' => __('Primera | Theme Options', 'primera-dm'),
	//'logo' => get_template_directory_uri() .'vafpress/vafpress-framwork/public/img/ga.svg',
	'logo' => $vafpress_pub_image. '/logo.png',
	'menus' => array(
		array(
			'title' => __('Layout', 'primera-dm'),
			'name' => 'theme_layout_settings',
			'icon' => 'font-awesome:fa fa-th-large',
			'controls' => array(
				array(
					'type' => 'section',
					'title' => __('Site max width', 'primera-dm'),
					'name' => 'site-max-width-section',
					'fields' => array(
						array(
							'type' => 'toggle',
							'name' => 'enable-max-width',
							'label' => __('Enable site max-width', 'primera-dm'),
							'description' => __('Set a max width for your site.', 'primera-dm'),
							'default' => 0,
						),
						array(
							'type' => 'slider',
							'name' => 'site-container-max-width',
							'label' => __('Site maximum width ', 'primera-dm'),
							'description' => __('The site\'s overall maximum width', 'primera-dm'),
							'min' => '960',
							'max' => '1140',
							'default' => '0',
							'dependency' => array(
								'field' => 'enable-max-width',
								'function' => 'vp_dep_boolean',
							)
						),
					),
				),
				array(
					'type' => 'section',
					'title' => __('Content Padding', 'primera-dm'),
					'name' => 'site-padding-section',
					'fields' => array(
						array(
							'type' => 'toggle',
							'name' => 'enable-site-content-padding',
							'label' => __('Enable site content padding', 'primera-dm'),
							'description' => __('Set <b> Left </b> and <b >Right </b> padding for page content.', 'primera-dm'),
							'default' => 1,
						),
						array(
							'type' => 'slider',
							'name' => 'site-side-padding',
							'label' => __('Left & Right Content Padding ', 'primera-dm'),
							'description' => __('Overall <b>Left</b> and <b>Right</b> content padding. <br> The value is equivalent to <b>px</b>', 'primera-dm'),
							'min' => '0',
							'max' => '100',
							'default' => '0',
							'dependency' => array(
								'field' => 'enable-site-content-padding',
								'function' => 'vp_dep_boolean',
							)
						),
						array(
							'type' => 'slider',
							'name' => 'site-top-bottom-padding',
							'label' => __('Top & Bottom Content Padding ', 'primera-dm'),
							'description' => __('Overall <b>Top</b> and <b>Bottom</b> content padding. <br> The value is equivalent to <b>px</b>', 'primera-dm'),
							'min' => '0',
							'max' => '100',
							'default' => '0',
							'dependency' => array(
								'field' => 'enable-site-content-padding',
								'function' => 'vp_dep_boolean',
							)
						),
					),
				),
			)
		),

		array(
			'title' => __('Colors', 'primera-dm'),
			'name' => 'site-colors-menu',
			'icon' => 'font-awesome:fas fa-tint',
			'controls' => array(
				array(
					'type' => 'notebox',
					'name' => 'nb_1',
					'label' => __('Note:', 'primera-dm'),
					'description' => __('Some colors may not be applicable to some sections that implies message.', 'primera-dm'),
					'status' => 'warning',
				),
				array(
					'type' => 'section',
					'title' => __('General', 'primera-dm'),
					'name' => 'site-color-section',
					'description' => __('Set a color for your site\'s texts', 'primera-dm'),
					'fields' => array(
						array(
							'type' => 'color',
							'name' => 'site-color-headings',
							'label' => __('Heading Colors', 'primera-dm'),
							'description' => __('Select a color for your site heading.', 'primera-dm'),
							'default' => 'rgba(0,0,0,0.0)',
							'format' => 'rgba',
						),
						array(
							'type' => 'color',
							'name' => 'site-color-paragraphs',
							'label' => __('Paragraph Colors', 'primera-dm'),
							'description' => __('Select a color for your site paragraphs.', 'primera-dm'),
							'default' => 'rgba(0,0,0,0.0)',
							'format' => 'rgba',
						),
					)
				),
				array(
					'type' => 'section',
					'title' => __('Buttons', 'primera-dm'),
					'name' => 'site-button-color-section',
					'description' => __('Set colors for your site\'s buttons', 'primera-dm'),
					'fields' => array(
						array(
							'type' => 'color',
							'name' => 'site-button-background-color',
							'label' => __('Button Background', 'primera-dm'),
							'description' => __('Select a color for <b>button</b> background color', 'primera-dm'),
							'default' => 'rgba(0,0,0,0.0)',
							'format' => 'rgba',
						),
						array(
							'type' => 'color',
							'name' => 'site-button-text-color',
							'label' => __('Button Text ', 'primera-dm'),
							'description' => __('Select a color for <b>button</b> background color.', 'primera-dm'),
							'default' => 'rgba(255,255,255,1)',
							'format' => 'rgba',
						),
					)
				)
			)
		),

		// Social Links
		array(
			'title' => __('Social Media', 'primera-dm'),
			'name' => 'site-social',
			'icon' => 'font-awesome:fas fa-share',
			'menus' => array(
				array(
					'title' => __(' Links ', 'primera-dm'),
					'name' => 'site-social-menu',
					'icon' => 'font-awesome:fas fa-link',
					'controls' => [
						array(
							'type' => 'toggle',
							'name' => 'enable-site-social',
							'label' => __('Show social media links', 'primera-dm'),
							'description' => __('Shows the social media in site', 'primera-dm'),
							'default' => 1,
						),
						array(
							'type' => 'section',
							'title' => __('Social Media', 'primera-dm'),
							'name' => 'site-social-links',
							'description' => __('Provide the social media icons in the theme with the appropriate links for your site', 'primera-dm'),
							'fields' => [
								array(
									'type' => 'toggle',
									'name' => 'show-site-social-top-bar',
									'label' => __('Show social media links on top bar.', 'vp_textdomain'),
									'default' => 1,
								),
								array(
									'type' => 'toggle',
									'name' => 'show-site-social-footer',
									'label' => __('Show social media links on footer.', 'vp_textdomain'),
									'default' => 1,
								),
								array(
									'type' => 'textbox',
									'name' => 'fb_url',
									'label' => __('<i class="fab fa-facebook wp-ui-text-primary"></i> Facebook social link:', 'primera-dm'),
								),
								array(
									'type' => 'textbox',
									'name' => 'twitter_url',
									'label' => __('<i class="fab fa-twitter wp-ui-text-primary"></i> Twitter social link:', 'primera-dm'),
								),
								array(
									'type' => 'textbox',
									'name' => 'instagram_url',
									'label' => __('<i class="fab fa-instagram wp-ui-text-primary"></i> Instagram social link:', 'primera-dm'),
								),
								array(
									'type' => 'textbox',
									'name' => 'google_plus_url',
									'label' => __('<i class="fab fa-google-plus wp-ui-text-primary"></i> Google Plus social link:', 'primera-dm'),
								),
								array(
									'type' => 'textbox',
									'name' => 'github_url',
									'label' => __('<i class="fab fa-github wp-ui-text-primary"></i> Github Plus social link:', 'primera-dm'),
								),
								array(
									'type' => 'textbox',
									'name' => 'linkedin_url',
									'label' => __('<i class="fab fa-linkedin-in wp-ui-text-primary"></i> LinkedIn Plus social link:', 'primera-dm'),
								),
							],
							'dependency' => array(
								'field' => 'enable-site-social',
								'function' => 'vp_dep_boolean',
							),
						)
					]
				)
			)
		),
		// Typography
		array(
			'title' => __( 'Typography', 'primera-dm' ),
			'name'  => __( 'site-typography-menu', 'primera-dm' ),
			'icon'  => 'font-awesome:fas fa-font',
			'menus' => array(
				array(
					'title' => __('Font Style', 'primera-dm'),
					'name' => 'site-font-style',
					'icon' => 'font-awesome:fas fa-align-left',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Headings', 'primera-dm'),
							'name' => 'site-font-style-section',
							'description' => __('Choose a font style for primera theme', 'primera-dm'),
							'fields' => array(
								array(
									'type' => 'select',
									'name' => 'site-heading-font-face-setting',
									'label' => __('Site Font Face', 'primera-dm'),
									'description' => __('Select Font', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_gwf_family',
											),
										),
									),
								),
								array(
									'type' => 'radiobutton',
									'name' => 'site-heading-font-style-setting',
									'label' => __('Logo Font Style', 'primera-dm'),
									'description' => __('Select Font Style', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'binding',
												'field' => 'site-heading-font-face-setting',
												'value' => 'vp_get_gwf_style',
											),
										),
									),
									'default' => array(
										'{{first}}',
									),
								),
								array(
									'type' => 'radiobutton',
									'name' => 'site-heading-font-weight-setting',
									'label' => __('Logo Font Weight', 'primera-dm'),
									'description' => __('Select Font Weight', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'binding',
												'field' => 'site-heading-font-face-setting',
												'value' => 'vp_get_gwf_weight',
											),
										),
									),
								),
							),
						),
					)
				)
			)
		),
		// Header Menu
		array(
			'title' => __( 'Header', 'primera-dm' ),
			'name' => __( 'header-menu', 'primera-dm' ),
			'icon' => 'font-awesome:fas fa-heading',
			'menus' => array(
				array(
					'title' => __('Header Layouts', 'primera-dm'),
					'name' => 'site-header-menu',
					'icon' => '',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Headers', 'primera-dm'),
							'name' => 'primer_header_option_section',
							'description' => __('Choose a header type for primera theme', 'primera-dm'),
							'fields' => array(
								array(
									'type' => 'radioimage',
									'name' => 'primera-header-option',
									'label' => __('Select a theme header type', 'primera-dm'),
									'description' => __('Click on the header type options to change the theme header style', 'primera-dm'),
									//'item_max_height' => '70',
									'item_max_width' => '600',
									'items' => array(
										array(
											'value' => 'default-header',
											'label' => __('Primera Default Header', 'primera-dm'),
											'img' => $vafpress_pub_image. '/header-options/default-header.png',
										),
										array(
											'value' => 'basic-header',
											'label' => __('Primera Basic Header', 'primera-dm'),
											'img' => $vafpress_pub_image. '/header-options/basic.png',
										),
										array(
											'value' => 'header-topbar',
											'label' => __('Header with top bar', 'primera-dm'),
											'img' => $vafpress_pub_image. '/header-options/basic-top-bar.png',
										),
										array(
											'value' => 'header-topbar-slider',
											'label' => __('Header with topbar slider', 'primera-dm'),
											'img' => $vafpress_pub_image. '/header-options/colored-top-bar.png',
										),
										array(
											'value' => 'header-search',
											'label' => __('Header with search', 'primera-dm'),
											'img' => $vafpress_pub_image. '/header-options/navigation-search.png',
										),
									),
									'default' => 'default-header',
								),
                            ),
						),
                    )
				)
			)
		),

		// Sidebar
		array(
			'title' => __( 'Sidebar', 'primera-dm' ),
			'name' => __( 'sidebar-menu', 'primera-dm' ),
			'icon' => 'font-awesome:fas fa-bars',
			'menus' => array(
				array(
					'title' => __('Sidebar Styling', 'primera-dm'),
					'name' => 'site-sidebar-menu',
					'icon' => '',
					'controls' => [
						array(
							'type' => 'section',
							'title' => __('Styling', 'primera-dm'),
							'name' => 'site-sidebar-section',
							'description' => __('Edit your site sidebar', 'primera-dm'),
							'fields' => array(
								array(
									'type' => 'radiobutton',
									'name' => 'site-sidebar-position',
									'label' => __('Sidebar Position', 'primera-dm'),
									'items' => array(
										array(
											'value' => 'left',
											'label' => __('Left', 'primera-dm'),
										),
										array(
											'value' => 'right',
											'label' => __('Right', 'primera-dm'),
										),
										array(
											'value' => 'all',
											'label' => __('Left and Right', 'primera-dm'),
										),
									),
									'default' => array(
										'right',
									),
								),
								array(
									'type' => 'toggle',
									'name' => 'site-sidebar-is-sticky',
									'label' => __('Sticky Sidebar', 'primera-dm'),
									'description' => __('Make sidebar sticky', 'primera-dm'),
									'default' => 0,
								),
								array(
									'type' => 'textbox',
									'name' => 'site-sidebar-max-height',
									'label' => __('Sidebar max height', 'primera-dm'),
									'description' => __('Set a max height for sidebars', 'primera-dm'),
									'default' => '400px',
									'validation' => 'alphanumeric',
								),
							)
						),
					]
				)
			)
		),
		// Footer
		array(
			'title' => __('Footer', 'primera-dm'),
			'name' => 'footer-menu',
			'icon' => 'font-awesome:fas fa-level-down-alt',
			'menus' => array(
				array(
					'title' => __('Footer Options', 'primera-dm'),
					'name' => 'site-footer-options',
					'icon' => 'font-awesome:fas fa-copyright',
					'controls' => array(
						array(
							'type' => 'toggle',
							'name' => 'site-footer-toolbar',
							'label' => __('Enable footer toolbar', 'primera-dm'),
							'description' => __('Show bottom bar below footer', 'primera-dm'),
							'default' => 1,
						),
						array(
							'type' => 'section',
							'name' => 'footer-toolbar-options',
							'fields' => array(
								array(
									'type' => 'textbox',
									'name' => 'site-footer-toolbar-content',
									'label' => __('Sidebar max height', 'primera-dm'),
									'description' => __('Footer bar content', 'primera-dm'),
									'default' => '© Copyright 2019 - All Rights Reserved by Gavilan Arts | Primera',
									'validation' => 'required',   //'required, numeric',
								),
								array(
									'type' => 'textbox',
									'name' => 'site-footer-toolbar-content-link',
									'label' => __('Set a URL/link for bar content', 'primera-dm'),
									'description' => __('Set a max height for sidebars', 'primera-dm'),
									'default' => '',
									'validation' => 'required',   //'required, numeric',
								),
							),
							'dependency' => array(
								'field' => 'site-footer-toolbar',
								'function' => 'vp_dep_boolean',
							),
						),
					)
				),

				array(
					'title' => __('Footer Background', 'primera-dm'),
					'name' => 'site-footer-background',
					'icon' => 'font-awesome:fas fa-image',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Footer Settings', 'primera-dm'),
							'name' => 'site-footer-options',
							'description' => __('Choose a background image for your site footer', 'primera-dm'),
							'fields' => array(
								array(
									'type' => 'upload',
									'name' => 'site-footer-background',
									'label' => __('Upload', 'primera-dm'),
									'description' => __('Upload an image for site footer', 'primera-dm'),
									'default' => 'http://placehold.it/70x70',
								),
							),
						),
					)
				),
				array(
					'title' => __('Footer Style', 'primera-dm'),
					'name' => 'site-footer-style',
					'icon' => 'font-awesome:fas fa-columns',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Footer Styling', 'primera-dm'),
							'name' => 'site-footer-styling',
							'description' => __('Choose a header type for primera theme', 'primera-dm'),
							'fields' => array(

							),
						),
					)
				),
			)

		),

		// Sliders
		array(
			'title' => __('Sliders', 'primera-dm'),
			'name' => 'footer-menu',
			'icon' => 'font-awesome:fas fa-sliders-h',
			'controls' => array(
				array(
					'type' => 'section',
					'title' => __('Bx Slider', 'primera-dm'),
					'name' => 'slider-section',
					'description' => __('Slider settings', 'primera-dm'),
					'fields' => array(

					),
				),
			)
		),

		array(
			'title' => __('Features', 'primera-dm'),
			'name' => 'menu_3',
			'icon' => 'font-awesome:fa fa-th-list',
			'menus' => array(
				array(
					'title' => __('Hero Section', 'primera-dm'),
					'name' => 'dynamic_data_source',
					'icon' => 'font-awesome:fa fa-fire',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Data Source and Smart Tags', 'primera-dm'),
							'fields' => array(
								array(
									'type' => 'multiselect',
									'name' => 'ms_categories',
									'label' => __('Categories', 'primera-dm'),
									'description' => __('MultiSelect field with WP Categories Data Source and **{{first}}** **{{last}}** default items.', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_categories',
											),
										),
									),
									'default' => array(
										'{{first}}',
										'{{last}}',
									),
								),
								array(
									'type' => 'select',
									'name' => 'se_pages',
									'label' => __('Pages', 'primera-dm'),
									'description' => __('Select field with WP Pages Data Source', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_pages',
											),
										),
									),
								),
								array(
									'type' => 'checkbox',
									'name' => 'cb_users',
									'label' => __('Users Data Source', 'primera-dm'),
									'description' => __('Checkbox field with WP Users Data Source and **{{all}}** default items.', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'params' => 'admin',
												'value' => 'vp_get_users',
											),
										),
									),
									'default' => array(
										'{{all}}',
									),
								),
								array(
									'type' => 'radiobutton',
									'name' => 'rb_roles',
									'label' => __('Roles', 'primera-dm'),
									'description' => __('RadioButton field with WP Roles Data Source and **{{last}}** default item.', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_roles',
											),
										),
									),
									'default' => array(
										'{{last}}',
									),
								),
								array(
									'type' => 'multiselect',
									'name' => 'ms_tags',
									'label' => __('Tags', 'primera-dm'),
									'description' => __('MultiSelect field with WP Tags Data Source and **{{first}}** default items.', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_tags',
											),
										),
									),
									'default' => array(
										'{{first}}',
									),
								),
								array(
									'type' => 'select',
									'name' => 'se_posts',
									'label' => __('Posts', 'primera-dm'),
									'description' => __('Select field with WP Post Data Source', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_posts',
											),
										),
									),
								),
							),
						),
					),
				),
				array(
					'title' => __('Binding', 'primera-dm'),
					'name' => 'binding_data_source',
					'icon' => 'font-awesome:fa fa-link',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('What a Wonderful World', 'primera-dm'),
							'fields' => array(
								array(
									'type' => 'select',
									'name' => 'big_continent',
									'label' => __('Big Continent', 'primera-dm'),
									'description' => __('Big Continent', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value'  => 'vp_bind_bigcontinents',
											),
										),
									),
									'default' => '{{last}}',
								),
								array(
									'type' => 'radiobutton',
									'name' => 'continent',
									'label' => __('Continent', 'primera-dm'),
									'description' => __('Continent', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'binding',
												'field'  => 'big_continent',
												'value'  => 'vp_bind_continents',
											),
										),
									),
								),
								array(
									'type' => 'select',
									'name' => 'country',
									'label' => __('Country', 'primera-dm'),
									'description' => __('Country', 'primera-dm'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'binding',
												'field'  => 'continent',
												'value'  => 'vp_bind_countries',
											),
										),
									),
								),
							),
						),
					),
				),
			),
		),
	)
);

/**
 *EOF
 */