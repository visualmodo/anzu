<?php

/*-----------------------------------------------------------------------------------*/
/*  *.  Translate
/*-----------------------------------------------------------------------------------*/

Kirki::add_panel( 'translate', array(
    'priority'    => 10,
	'title'       => esc_html__( 'Translate', 'anzu' ),
) );

Kirki::add_section( 'translate_menu', array(
    'title'          => esc_html__( 'Menu', 'anzu' ),
	'description'    => esc_html__( 'The fields below, must be filled out if you are using WPML String Translation. If you already use English language, you can use this tab to change some texts. You can also change all texts to a complete translation by Built-in Translator.', 'anzu' ),
    'panel'          => 'translate',
    'priority'       => 160,
) );

Kirki::add_section( 'translate_header_search', array(
    'title'          => esc_html__( 'Header Search', 'anzu' ),
	'description'    => esc_html__( 'The fields below, must be filled out if you are using WPML String Translation. If you already use English language, you can use this tab to change some texts. You can also change all texts to a complete translation by Built-in Translator.', 'anzu' ),
    'panel'          => 'translate',
    'priority'       => 160,
) );

Kirki::add_section( 'translate_offcanvas', array(
    'title'          => esc_html__( 'Offcanvas', 'anzu' ),
	'description'    => esc_html__( 'The fields below, must be filled out if you are using WPML String Translation. If you already use English language, you can use this tab to change some texts. You can also change all texts to a complete translation by Built-in Translator.', 'anzu' ),
    'panel'          => 'translate',
    'priority'       => 160,
) );

Kirki::add_section( 'translate_woocommerce', array(
    'title'          => esc_html__( 'WooCommerce', 'anzu' ),
	'description'    => esc_html__( 'The fields below, must be filled out if you are using WPML String Translation. If you already use English language, you can use this tab to change some texts. You can also change all texts to a complete translation by Built-in Translator.', 'anzu' ),
    'panel'          => 'translate',
    'priority'       => 160,
) );



/*-----------------------------------------------------------------------------------*/
/*  *.  translate > translate_menu
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Text(
	[
		'settings' => 'anzu_translate_menu',
		'label'    => esc_html__( 'Title Menu', 'anzu' ),
		'section'     => 'translate_menu',
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  translate > translate_header_search
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Text(
	[
		'settings' => 'anzu_translate_search_input_placeholder',
		'label'    => esc_html__( 'Input Placeholder', 'anzu' ),
		'section'     => 'translate_header_search',
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'anzu_translate_search_text_button',
		'label'    => esc_html__( 'Text Button', 'anzu' ),
		'section'     => 'translate_header_search',
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  translate > translate_offcanvas
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Text(
	[
		'settings' => 'anzu_translate_offcanvas',
		'label'    => esc_html__( 'Offcanvas Title', 'anzu' ),
		'section'     => 'translate_offcanvas',
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  translate > translate_woocommerce
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Text(
	[
		'settings' => 'anzu_translate_woocommerce_title_cart',
		'label'    => esc_html__( 'Title Cart', 'anzu' ),
		'section'     => 'translate_woocommerce',
	]
);