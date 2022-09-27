<?php

/*-----------------------------------------------------------------------------------*/
/*  *.  Colors
/*-----------------------------------------------------------------------------------*/

Kirki::add_panel( 'colors', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Colors', 'anzu' ),
    'description' => esc_html__( 'The color system can help you create a color theme that reflects your brand or style.', 'anzu' ),
) );

Kirki::add_section( 'theme_colors_section', array(
    'title'          => esc_html__( 'Theme Color', 'anzu' ),
    'panel'          => 'colors',
	'description'    => esc_html__( 'The color system can help you create a color theme that reflects your brand or style.', 'anzu' ),
    'priority'       => 160,
) );

Kirki::add_section( 'light_colors_section', array(
    'title'          => esc_html__( 'Light Colors', 'anzu' ),
    'description'    => esc_html__( 'Create and apply color palettes to your UI, as well as measure the accessibility level of any color combination.', 'anzu' ),
    'panel'          => 'colors',
    'priority'       => 160,
) );

Kirki::add_section( 'dark_colors_section', array(
    'title'          => esc_html__( 'Dark Colors', 'anzu' ),
    'description'    => esc_html__( 'Create and apply color palettes to your UI, as well as measure the accessibility level of any color combination.', 'anzu' ),
    'panel'          => 'colors',
    'priority'       => 160,
) );


/*-----------------------------------------------------------------------------------*/
/*  *.  colors > theme_colors_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_header_dark_mode',
		'label'       => esc_html__( 'Header Dark Mode', 'anzu' ),
		'section'     => 'theme_colors_section',
		'default'     => false,
	]
);

/*
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_hero_dark_mode',
		'label'       => esc_html__( 'Hero Dark Mode', 'anzu' ),
		'section'     => 'theme_colors_section',
		'default'     => false,
	]
);
*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_content_dark_mode',
		'label'       => esc_html__( 'Content Dark Mode', 'anzu' ),
		'section'     => 'theme_colors_section',
		'default'     => false,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_footer_dark_mode',
		'label'       => esc_html__( 'Footer Dark Mode', 'anzu' ),
		'section'     => 'theme_colors_section',
		'default'     => true,
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  colors > light_colors_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Pro\Field\Headline(
	[
		'settings'    => 'anzu_headline_light_colors_theme_color',
		'label'       => esc_html__( 'Theme Color', 'anzu' ),
		'section'     => 'light_colors_section',
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_primary_color',
		'label'       => __( 'Primary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a primary color for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#0000FF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '
				.anzu-primary-color--color, 
				.anzu-light-mode a.anzu-brand__title,
				.anzu-light-mode article.post .entry-title a:hover',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-primary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-primary-color--border-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '#scroll-to-top',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_secondary_color',
		'label'       => __( 'Secondary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a secondary color for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#FF6819',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-light-mode .anzu-secondary-color--color',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-light-mode .anzu-secondary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-light-mode .anzu-secondary-color--border-color',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_tertiary_color',
		'label'       => __( 'Tertiary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a tertiary color for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#3FCC14',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-light-mode .anzu-tertiary-color--color',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-light-mode .anzu-tertiary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-light-mode .anzu-tertiary-color--border-color',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_text_color',
		'label'       => __( 'Text', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the texts.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#333333',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => 'body .anzu-light-mode, .anzu-light-mode p, .anzu-light-mode span',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Multicolor(
	[
		'settings'    => 'anzu_light_colors_heading_color',
		'label'       => __( 'Headings', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the headings.', 'anzu' ),
		'section'   => 'light_colors_section',
		'choices'   => [
			'heading-1'   => esc_html__( 'H1', 'anzu' ),
			'heading-2'   => esc_html__( 'H2', 'anzu' ),
			'heading-3'   => esc_html__( 'H3', 'anzu' ),
			'heading-4'   => esc_html__( 'H4', 'anzu' ),
			'heading-5'   => esc_html__( 'H5', 'anzu' ),
			'heading-6'   => esc_html__( 'H6', 'anzu' ),
		],
		'alpha'     => true,
		'default'   => [
			'heading-1'   => '#000000',
			'heading-2'   => '#000000',
			'heading-3'   => '#000000',
			'heading-4'   => '#000000',
			'heading-5'   => '#000000',
			'heading-6'   => '#000000',
		],
		'output'    => array(
			array(
				'choice'   => 'heading-1',
				'element'  => '.anzu-light-mode h1',
				'property' => 'color',
			),
			array(
				'choice'   => 'heading-2',
				'element'  => '.anzu-light-mode h2',
				'property' => 'color',
			),
			array(
				'choice'   => 'heading-3',
				'element'  => '.anzu-light-mode h3',
				'property' => 'color',
			),
			array(
				'choice'   => 'heading-4',
				'element'  => '.anzu-light-mode h4',
				'property' => 'color',
			),
			array(
				'choice'   => 'heading-5',
				'element'  => '.anzu-light-mode h5',
				'property' => 'color',
			),
			array(
				'choice'   => 'heading-6',
				'element'  => '.anzu-light-mode h6',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Multicolor(
	[
		'settings'    => 'anzu_light_colors_link_color',
		'label'       => __( 'Link', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the links.', 'anzu' ),
		'section'   => 'light_colors_section',
		'choices'   => [
			'link'     => esc_html__( 'Color', 'anzu' ),
			'hover'    => esc_html__( 'Hover', 'anzu' ),
			'active'   => esc_html__( 'Active', 'anzu' ),
		],
		'alpha'     => true,
		'default'   => [
			'link'   => '#0000FF',
			'hover'  => '#0D4DFF',
			'active' => '#0D8CFF',
		],
		'output'    => array(
			array(
			  'choice'   => 'link',
			  'element'  => '.anzu-light-mode a:not(.btn)',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'hover',
			  'element'  => '.anzu-light-mode a:hover:not(.btn)',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'active',
			  'element'  => '.anzu-light-mode a:active:not(.btn)',
			  'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_content_background',
		'label'       => __( 'Content Background', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#FFFFFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-content.anzu-light-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Pro\Field\Headline(
	[
		'settings'    => 'anzu_headline_light_colors_header',
		'label'       => esc_html__( 'Header', 'anzu' ),
		'section'     => 'light_colors_section',
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_header_brand_title',
		'label'       => __( 'Site Title', 'anzu' ),
		'description' => esc_html__( 'Pick a color for the Title.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-light-mode .anzu-brand__title',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_header_brand_tagline',
		'label'       => __( 'Tagline', 'anzu' ),
		'description' => esc_html__( 'Pick a color for the Tagline.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-light-mode .anzu-brand__tagline',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_header_background',
		'label'       => __( 'Background', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the Header.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#FFFFFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-header.anzu-light-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_header_notification_background',
		'label'       => __( 'Notification Bar Background', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the Notification Bar.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#e2e3e5',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-notification-bar.anzu-light-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Pro\Field\Headline(
	[
		'settings'    => 'anzu_headline_light_colors_menu',
		'label'       => esc_html__( 'Menu', 'anzu' ),
		'section'     => 'light_colors_section',
	]
);

new \Kirki\Field\Multicolor(
	[
		'settings'    => 'anzu_light_colors_header_menu_text_color',
		'label'       => __( 'Text / Link', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the menu texts and links.', 'anzu' ),
		'section'   => 'light_colors_section',
		'choices'   => [
			'link'     => esc_html__( 'Color', 'anzu' ),
			'hover'    => esc_html__( 'Hover', 'anzu' ),
			'active'   => esc_html__( 'Active', 'anzu' ),
		],
		'alpha'     => true,
		'default'   => [
			'link'   => '#737373',
			'hover'  => '#4c4c4c',
			'active' => '#000000',
		],
		'output'    => array(
			array(
			  'choice'   => 'link',
			  'element'  => '.anzu-light-mode #main-menu .nav-item a',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'hover',
			  'element'  => '.anzu-light-mode #main-menu .nav-item a:hover, .anzu-light-mode #main-menu .nav-item a:focus',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'active',
			  'element'  => '.anzu-light-mode #main-menu .nav-item a:active, .anzu-light-mode #main-menu .active a',
			  'property' => 'color',
			),
		),
	]
);

new \Kirki\Pro\Field\Headline(
	[
		'settings'    => 'anzu_headline_light_colors_submenu',
		'label'       => esc_html__( 'Submenu', 'anzu' ),
		'section'     => 'light_colors_section',
	]
);

new \Kirki\Field\Multicolor(
	[
		'settings'    => 'anzu_light_colors_header_submenu_text_color',
		'label'       => __( 'Text / Link', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the menu texts and links.', 'anzu' ),
		'section'   => 'light_colors_section',
		'choices'   => [
			'link'     => esc_html__( 'Color', 'anzu' ),
			'hover'    => esc_html__( 'Hover', 'anzu' ),
			'active'   => esc_html__( 'Active', 'anzu' ),
		],
		'alpha'     => true,
		'default'   => [
			'link'   => '#737373',
			'hover'  => '#4c4c4c',
			'active' => '#000000',
		],
		'output'    => array(
			array(
			  'choice'   => 'link',
			  'element'  => '.anzu-light-mode #main-menu .dropdown-menu .nav-item a',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'hover',
			  'element'  => '.anzu-light-mode #main-menu .dropdown-menu .nav-item a:hover, .anzu-light-mode #main-menu .nav-item a:focus',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'active',
			  'element'  => '.anzu-light-mode #main-menu .dropdown-menu .nav-item a:active, .anzu-light-mode #main-menu .dropdown-menu .active a',
			  'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_header_submenu_text_background_color',
		'label'       => __( 'Background Text / Link', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the Submenu.', 'anzu' ),
		'section'     => 'light_colors_section',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-light-mode #main-menu .dropdown-item:focus, .anzu-light-mode #main-menu .dropdown-item:hover',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_header_submenu_background',
		'label'       => __( 'Background', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the Submenu.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#FFFFFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-light-mode #main-menu .dropdown-menu',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_header_submenu_border',
		'label'       => __( 'Border', 'anzu' ),
		'description' => esc_html__( 'Pick a border color for the Submenu.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-light-mode #main-menu .dropdown-menu',
				'property' => 'border-color',
			),
		),
	]
);

new \Kirki\Pro\Field\Headline(
	[
		'settings'    => 'anzu_headline_light_colors_footer',
		'label'       => esc_html__( 'Footer', 'anzu' ),
		'section'     => 'light_colors_section',
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_footer_background',
		'label'       => __( 'Background', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the Footer.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#FFFFFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '#anzu-footer.anzu-light-mode',
				'property' => 'background-color',
			),
		),
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  colors > dark_colors_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Pro\Field\Headline(
	[
		'settings'    => 'anzu_headline_dark_colors_theme_color',
		'label'       => esc_html__( 'Theme Color', 'anzu' ),
		'section'     => 'dark_colors_section',
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_primary_color',
		'label'       => __( 'Primary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a primary color for the theme.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#0000FF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '
				.anzu-primary-color--color, 
				.anzu-dark-mode a.anzu-brand__title,
				.anzu-dark-mode article.post .entry-title a:hover',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-primary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-primary-color--border-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '#scroll-to-top',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_secondary_color',
		'label'       => __( 'Secondary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a secondary color for the theme.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#FF6819',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode .anzu-secondary-color--color',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-dark-mode .anzu-secondary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-dark-mode .anzu-secondary-color--border-color',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_tertiary_color',
		'label'       => __( 'Tertiary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a tertiary color for the theme.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#3FCC14',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode .anzu-tertiary-color--color',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-dark-mode .anzu-tertiary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-dark-mode .anzu-tertiary-color--border-color',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_text_color',
		'label'       => __( 'Text', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the texts.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#cccccc',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => 'body .anzu-dark-mode, .anzu-dark-mode p, .anzu-dark-mode span',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Multicolor(
	[
		'settings'    => 'anzu_dark_colors_heading_color',
		'label'       => __( 'Headings', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the headings.', 'anzu' ),
		'section'   => 'dark_colors_section',
		'choices'   => [
			'heading-1'   => esc_html__( 'H1', 'anzu' ),
			'heading-2'   => esc_html__( 'H2', 'anzu' ),
			'heading-3'   => esc_html__( 'H3', 'anzu' ),
			'heading-4'   => esc_html__( 'H4', 'anzu' ),
			'heading-5'   => esc_html__( 'H5', 'anzu' ),
			'heading-6'   => esc_html__( 'H6', 'anzu' ),
		],
		'alpha'     => true,
		'default'   => [
			'heading-1'   => '#ffffff',
			'heading-2'   => '#ffffff',
			'heading-3'   => '#ffffff',
			'heading-4'   => '#ffffff',
			'heading-5'   => '#ffffff',
			'heading-6'   => '#ffffff',
		],
		'output'    => array(
			array(
				'choice'   => 'heading-1',
				'element'  => '.anzu-dark-mode h1',
				'property' => 'color',
			),
			array(
				'choice'   => 'heading-2',
				'element'  => '.anzu-dark-mode h2',
				'property' => 'color',
			),
			array(
				'choice'   => 'heading-3',
				'element'  => '.anzu-dark-mode h3',
				'property' => 'color',
			),
			array(
				'choice'   => 'heading-4',
				'element'  => '.anzu-dark-mode h4',
				'property' => 'color',
			),
			array(
				'choice'   => 'heading-5',
				'element'  => '.anzu-dark-mode h5',
				'property' => 'color',
			),
			array(
				'choice'   => 'heading-6',
				'element'  => '.anzu-dark-mode h6',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Multicolor(
	[
		'settings'    => 'anzu_dark_colors_link_color',
		'label'       => __( 'Link', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the links.', 'anzu' ),
		'section'   => 'dark_colors_section',
		'choices'   => [
			'link'     => esc_html__( 'Color', 'anzu' ),
			'hover'    => esc_html__( 'Hover', 'anzu' ),
			'active'   => esc_html__( 'Active', 'anzu' ),
		],
		'alpha'     => true,
		'default'   => [
			'link'   => '#0000FF',
			'hover'  => '#0D4DFF',
			'active' => '#0D8CFF',
		],
		'output'    => array(
			array(
			  'choice'   => 'link',
			  'element'  => '.anzu-dark-mode a:not(.btn)',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'hover',
			  'element'  => '.anzu-dark-mode a:hover:not(.btn)',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'active',
			  'element'  => '.anzu-dark-mode a:active:not(.btn)',
			  'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_content_background',
		'label'       => __( 'Content Background', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the theme.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-content.anzu-dark-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Pro\Field\Headline(
	[
		'settings'    => 'anzu_headline_dark_colors_header',
		'label'       => esc_html__( 'Header', 'anzu' ),
		'section'     => 'dark_colors_section',
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_header_brand_title',
		'label'       => __( 'Site Title', 'anzu' ),
		'description' => esc_html__( 'Pick a color for the Title.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#FFFFFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode .anzu-brand__title',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_header_brand_tagline',
		'label'       => __( 'Tagline', 'anzu' ),
		'description' => esc_html__( 'Pick a color for the Tagline.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#FFFFFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode .anzu-brand__tagline',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_header_background',
		'label'       => __( 'Background', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the Header.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-header.anzu-dark-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_header_notification_background',
		'label'       => __( 'Notification Bar Background', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the Notification Bar.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-notification-bar.anzu-dark-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Pro\Field\Headline(
	[
		'settings'    => 'anzu_headline_dark_colors_menu',
		'label'       => esc_html__( 'Menu', 'anzu' ),
		'section'     => 'dark_colors_section',
	]
);

new \Kirki\Field\Multicolor(
	[
		'settings'    => 'anzu_dark_colors_header_menu_text_color',
		'label'       => __( 'Text / Link', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the menu texts and links.', 'anzu' ),
		'section'   => 'dark_colors_section',
		'choices'   => [
			'link'     => esc_html__( 'Color', 'anzu' ),
			'hover'    => esc_html__( 'Hover', 'anzu' ),
			'active'   => esc_html__( 'Active', 'anzu' ),
		],
		'alpha'     => true,
		'default'   => [
			'link'   => '#9b9d9e',
			'hover'  => '#6c757d',
			'active' => '#FFFFFF',
		],
		'output'    => array(
			array(
			  'choice'   => 'link',
			  'element'  => '.anzu-dark-mode #main-menu .nav-item a',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'hover',
			  'element'  => '.anzu-dark-mode #main-menu .nav-item a:hover, .anzu-dark-mode #main-menu .nav-item a:focus',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'active',
			  'element'  => '.anzu-dark-mode #main-menu .nav-item a:active, .anzu-dark-mode #main-menu .active a',
			  'property' => 'color',
			),
		),
	]
);

new \Kirki\Pro\Field\Headline(
	[
		'settings'    => 'anzu_headline_dark_colors_submenu',
		'label'       => esc_html__( 'Submenu', 'anzu' ),
		'section'     => 'dark_colors_section',
	]
);

new \Kirki\Field\Multicolor(
	[
		'settings'    => 'anzu_dark_colors_header_submenu_text_color',
		'label'       => __( 'Text / Link', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the menu texts and links.', 'anzu' ),
		'section'   => 'dark_colors_section',
		'choices'   => [
			'link'     => esc_html__( 'Color', 'anzu' ),
			'hover'    => esc_html__( 'Hover', 'anzu' ),
			'active'   => esc_html__( 'Active', 'anzu' ),
		],
		'alpha'     => true,
		'default'   => [
			'link'   => '#9b9d9e',
			'hover'  => '#6c757d',
			'active' => '#FFFFFF',
		],
		'output'    => array(
			array(
			  'choice'   => 'link',
			  'element'  => '.anzu-dark-mode #main-menu .dropdown-menu .nav-item a',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'hover',
			  'element'  => '.anzu-dark-mode #main-menu .dropdown-menu .nav-item a:hover, .anzu-dark-mode #main-menu .nav-item a:focus',
			  'property' => 'color',
			),
			array(
			  'choice'   => 'active',
			  'element'  => '.anzu-dark-mode #main-menu .dropdown-menu .nav-item a:active, .anzu-dark-mode #main-menu .dropdown-menu .active a',
			  'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_header_submenu_text_background_color',
		'label'       => __( 'Background Text / Link', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the Submenu.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode #main-menu .dropdown-item:focus, .anzu-dark-mode #main-menu .dropdown-item:hover',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_header_submenu_background',
		'label'       => __( 'Background', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the Submenu.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode #main-menu .dropdown-menu',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_header_submenu_border',
		'label'       => __( 'Border', 'anzu' ),
		'description' => esc_html__( 'Pick a border color for the Submenu.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode #main-menu .dropdown-menu',
				'property' => 'border-color',
			),
		),
	]
);

new \Kirki\Pro\Field\Headline(
	[
		'settings'    => 'anzu_headline_dark_colors_footer',
		'label'       => esc_html__( 'Footer', 'anzu' ),
		'section'     => 'dark_colors_section',
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_footer_background',
		'label'       => __( 'Background', 'anzu' ),
		'description' => esc_html__( 'Pick a background for the Footer.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '#anzu-footer.anzu-dark-mode',
				'property' => 'background-color',
			),
		),
	]
);