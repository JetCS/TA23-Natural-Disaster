<?php
/**
 * Shams Solar: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function shams_solar_custom_controls() {

	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-control.php' );
}

add_action( 'customize_register', 'shams_solar_custom_controls' );

function shams_solar_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_panel( 'shams_solar_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'shams-solar' ),
	    'description' => __( 'Description of what this panel does.', 'shams-solar' ),
	) );

	// font array
	$shams_solar_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );
    
	//Typography
	$wp_customize->add_section( 'shams_solar_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'shams-solar' ),
		'panel' => 'shams_solar_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'shams_solar_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_paragraph_color', array(
		'label' => __('Paragraph Color', 'shams-solar'),
		'section' => 'shams_solar_typography',
		'settings' => 'shams_solar_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('shams_solar_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control(
	    'shams_solar_paragraph_font_family', array(
	    'section'  => 'shams_solar_typography',
	    'label'    => __( 'Paragraph Fonts','shams-solar'),
	    'type'     => 'select',
	    'choices'  => $shams_solar_font_array,
	));

	$wp_customize->add_setting('shams_solar_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','shams-solar'),
		'section'	=> 'shams_solar_typography',
		'setting'	=> 'shams_solar_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'shams_solar_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_atag_color', array(
		'label' => __('"a" Tag Color', 'shams-solar'),
		'section' => 'shams_solar_typography',
		'settings' => 'shams_solar_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('shams_solar_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control(
	    'shams_solar_atag_font_family', array(
	    'section'  => 'shams_solar_typography',
	    'label'    => __( '"a" Tag Fonts','shams-solar'),
	    'type'     => 'select',
	    'choices'  => $shams_solar_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'shams_solar_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_li_color', array(
		'label' => __('"li" Tag Color', 'shams-solar'),
		'section' => 'shams_solar_typography',
		'settings' => 'shams_solar_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('shams_solar_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control(
	    'shams_solar_li_font_family', array(
	    'section'  => 'shams_solar_typography',
	    'label'    => __( '"li" Tag Fonts','shams-solar'),
	    'type'     => 'select',
	    'choices'  => $shams_solar_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'shams_solar_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_h1_color', array(
		'label' => __('H1 Color', 'shams-solar'),
		'section' => 'shams_solar_typography',
		'settings' => 'shams_solar_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('shams_solar_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control(
	    'shams_solar_h1_font_family', array(
	    'section'  => 'shams_solar_typography',
	    'label'    => __( 'H1 Fonts','shams-solar'),
	    'type'     => 'select',
	    'choices'  => $shams_solar_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('shams_solar_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_h1_font_size',array(
		'label'	=> __('H1 Font Size','shams-solar'),
		'section'	=> 'shams_solar_typography',
		'setting'	=> 'shams_solar_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'shams_solar_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_h2_color', array(
		'label' => __('h2 Color', 'shams-solar'),
		'section' => 'shams_solar_typography',
		'settings' => 'shams_solar_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('shams_solar_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control(
	    'shams_solar_h2_font_family', array(
	    'section'  => 'shams_solar_typography',
	    'label'    => __( 'h2 Fonts','shams-solar'),
	    'type'     => 'select',
	    'choices'  => $shams_solar_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('shams_solar_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_h2_font_size',array(
		'label'	=> __('h2 Font Size','shams-solar'),
		'section'	=> 'shams_solar_typography',
		'setting'	=> 'shams_solar_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'shams_solar_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_h3_color', array(
		'label' => __('h3 Color', 'shams-solar'),
		'section' => 'shams_solar_typography',
		'settings' => 'shams_solar_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('shams_solar_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control(
	    'shams_solar_h3_font_family', array(
	    'section'  => 'shams_solar_typography',
	    'label'    => __( 'h3 Fonts','shams-solar'),
	    'type'     => 'select',
	    'choices'  => $shams_solar_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('shams_solar_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_h3_font_size',array(
		'label'	=> __('h3 Font Size','shams-solar'),
		'section'	=> 'shams_solar_typography',
		'setting'	=> 'shams_solar_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'shams_solar_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_h4_color', array(
		'label' => __('h4 Color', 'shams-solar'),
		'section' => 'shams_solar_typography',
		'settings' => 'shams_solar_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('shams_solar_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control(
	    'shams_solar_h4_font_family', array(
	    'section'  => 'shams_solar_typography',
	    'label'    => __( 'h4 Fonts','shams-solar'),
	    'type'     => 'select',
	    'choices'  => $shams_solar_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('shams_solar_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_h4_font_size',array(
		'label'	=> __('h4 Font Size','shams-solar'),
		'section'	=> 'shams_solar_typography',
		'setting'	=> 'shams_solar_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'shams_solar_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_h5_color', array(
		'label' => __('h5 Color', 'shams-solar'),
		'section' => 'shams_solar_typography',
		'settings' => 'shams_solar_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('shams_solar_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control(
	    'shams_solar_h5_font_family', array(
	    'section'  => 'shams_solar_typography',
	    'label'    => __( 'h5 Fonts','shams-solar'),
	    'type'     => 'select',
	    'choices'  => $shams_solar_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('shams_solar_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_h5_font_size',array(
		'label'	=> __('h5 Font Size','shams-solar'),
		'section'	=> 'shams_solar_typography',
		'setting'	=> 'shams_solar_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'shams_solar_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_h6_color', array(
		'label' => __('h6 Color', 'shams-solar'),
		'section' => 'shams_solar_typography',
		'settings' => 'shams_solar_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('shams_solar_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control(
	    'shams_solar_h6_font_family', array(
	    'section'  => 'shams_solar_typography',
	    'label'    => __( 'h6 Fonts','shams-solar'),
	    'type'     => 'select',
	    'choices'  => $shams_solar_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('shams_solar_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_h6_font_size',array(
		'label'	=> __('h6 Font Size','shams-solar'),
		'section'	=> 'shams_solar_typography',
		'setting'	=> 'shams_solar_h6_font_size',
		'type'	=> 'text'
	));

	// background skin mode
	$wp_customize->add_setting('shams_solar_background_image_type',array(
        'default' => 'Transparent',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control('shams_solar_background_image_type',array(
        'type' => 'radio',
        'label' => __('Background Skin Mode','shams-solar'),
        'section' => 'background_image',
        'choices' => array(
            'Transparent' => __('Transparent','shams-solar'),
            'Background' => __('Background','shams-solar'),
        ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'shams_solar_theme_color_option', array( 
		'panel' => 'shams_solar_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'shams-solar' ) 
	));

  	$wp_customize->add_setting( 'shams_solar_theme_color', array(
	    'default' => '#61c000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_theme_color', array(
  		'label' => __( 'Color Option', 'shams-solar' ),
	    'description' => __('One can change complete theme color on just one click.', 'shams-solar'),
	    'section' => 'shams_solar_theme_color_option',
	    'settings' => 'shams_solar_theme_color',
  	)));

  	// woocommerce Options
	$wp_customize->add_section( 'shams_solar_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'shams-solar' ),
		'panel' => 'shams_solar_panel_id'
	) );

	$wp_customize->add_setting('shams_solar_display_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_display_related_products',array(
       'type' => 'checkbox',
       'label' => __('Related Product','shams-solar'),
       'section' => 'shams_solar_shop_page_options',
    ));

    $wp_customize->add_setting('shams_solar_shop_products_border',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_shop_products_border',array(
       'type' => 'checkbox',
       'label' => __('Product Border','shams-solar'),
       'section' => 'shams_solar_shop_page_options',
    ));

  	$wp_customize->add_setting('shams_solar_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop Page Sidebar','shams-solar'),
       'section' => 'shams_solar_shop_page_options',
    ));

    $wp_customize->add_setting('shams_solar_single_product_sidebar',array(
        'default' => true,
        'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
	));
	$wp_customize->add_control('shams_solar_single_product_sidebar',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Single Product Sidebar','shams-solar'),
      	'section' => 'shams_solar_shop_page_options',
	));

	$wp_customize->add_setting( 'shams_solar_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'shams_solar_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shams_solar_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'shams-solar' ),
		'section'  => 'shams_solar_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('shams_solar_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));	
	$wp_customize->add_control('shams_solar_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','shams-solar'),
		'section'	=> 'shams_solar_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'shams_solar_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control( 'shams_solar_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','shams-solar' ),
		'section' => 'shams_solar_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'shams_solar_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control( 'shams_solar_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','shams-solar' ),
		'section' => 'shams_solar_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'shams_solar_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','shams-solar' ),
		'section' => 'shams_solar_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'shams_solar_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','shams-solar' ),
		'section' => 'shams_solar_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'shams_solar_shop_button_padding_top',array(
		'default' => 9,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','shams-solar' ),
		'section' => 'shams_solar_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'shams_solar_shop_button_padding_left',array(
		'default' => 16,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_shop_button_padding_left',array(
		'label' => esc_html__( 'Button Padding (Right Left)','shams-solar' ),
		'section' => 'shams_solar_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'shams_solar_shop_button_border_radius',array(
		'default' => 3,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_shop_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','shams-solar' ),
		'section' => 'shams_solar_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('shams_solar_position_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control('shams_solar_position_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','shams-solar'),
        'section' => 'shams_solar_shop_page_options',
        'choices' => array(
            'Right' => __('Right','shams-solar'),
            'Left' => __('Left','shams-solar'),
        ),
	) );

	$wp_customize->add_setting( 'shams_solar_border_radius_product_sale_text',array(
		'default' => 50,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_border_radius_product_sale_text', array(
        'label'  => __('Product Sale Border Radius','shams-solar'),
        'section'  => 'shams_solar_shop_page_options',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

    $wp_customize->add_setting('shams_solar_top_bottom_product_sale_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_top_bottom_product_sale_padding',array(
		'label'	=> __('Top / Bottom Product Sale Padding ','shams-solar'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'shams_solar_shop_page_options',
		'type'=> 'number'
	));

	$wp_customize->add_setting('shams_solar_left_right_product_sale_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_left_right_product_sale_padding',array(
		'label'	=> __('Left / Right Product Sale Padding','shams-solar'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'shams_solar_shop_page_options',
		'type'=> 'number'
	));

	$wp_customize->add_setting('shams_solar_product_sale_text_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'shams_solar_sanitize_float'
	));
	$wp_customize->add_control('shams_solar_product_sale_text_size',array(
		'label'	=> __('Product Sale Text Size','shams-solar'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'shams_solar_shop_page_options',
		'type'=> 'number'
	));
	
	$wp_customize->add_setting( 'shams_solar_top_bottom_product_sale_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_top_bottom_product_sale_padding',	array(
		'label' => esc_html__( 'Top / Bottom Product Sale Padding','shams-solar' ),
		'section' => 'shams_solar_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'shams_solar_left_right_product_sale_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_left_right_product_sale_padding',array(
		'label' => esc_html__( 'Left / Right Product Sale Padding','shams-solar' ),
		'section' => 'shams_solar_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('shams_solar_shop_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'shams_solar_sanitize_choices'
    ));
    $wp_customize->add_control('shams_solar_shop_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','shams-solar'),
       'choices' => array(
            'Yes' => __('Yes','shams-solar'),
            'No' => __('No','shams-solar'),
        ),
       'section' => 'shams_solar_shop_page_options',
    ));

  	//Layout Settings
	$wp_customize->add_section( 'shams_solar_width_layout', array(
    	'title'      => __( 'Layout Settings', 'shams-solar' ),
		'panel' => 'shams_solar_panel_id'
	) );

	//Sticky Header
	$wp_customize->add_setting( 'shams_solar_fixed_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ) );
    $wp_customize->add_control('shams_solar_fixed_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Fixed Header','shams-solar' ),
        'section' => 'shams_solar_width_layout'
    ));

    $wp_customize->add_setting( 'shams_solar_fixed_header_padding_option', array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	) );
	$wp_customize->add_control( 'shams_solar_fixed_header_padding_option', array(
		'label'       => esc_html__( 'Fixed Header Padding','shams-solar' ),
		'section'     => 'shams_solar_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('shams_solar_loader_setting',array(
       'default' => false,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_loader_setting',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','shams-solar'),
       'section' => 'shams_solar_width_layout'
    ));

    $wp_customize->add_setting('shams_solar_preloader_types',array(
        'default' => 'Default',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control('shams_solar_preloader_types',array(
        'type' => 'radio',
        'label' => __('Preloader Option','shams-solar'),
        'section' => 'shams_solar_width_layout',
        'choices' => array(
            'Default' => __('Default','shams-solar'),
            'Circle' => __('Circle','shams-solar'),
            'Two Circle' => __('Two Circle','shams-solar')
        ),
	) );

    $wp_customize->add_setting( 'shams_solar_loader_color_setting', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'shams-solar'),
	    'section' => 'shams_solar_width_layout',
	    'settings' => 'shams_solar_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'shams_solar_loader_background_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'shams-solar'),
	    'section' => 'shams_solar_width_layout',
	    'settings' => 'shams_solar_loader_background_color',
  	)));

	$wp_customize->add_setting('shams_solar_theme_options',array(
    'default' => 'Default',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control('shams_solar_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','shams-solar'),
        'description' => __('Here you can change the Width layout. ','shams-solar'),
        'section' => 'shams_solar_width_layout',
        'choices' => array(
            'Default' => __('Default','shams-solar'),
            'Wide Layout' => __('Wide Layout','shams-solar'),
            'Box Layout' => __('Box Layout','shams-solar'),
        ),
	) );

	$wp_customize->add_setting( 'shams_solar_post_image_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	) );
	$wp_customize->add_control( 'shams_solar_post_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','shams-solar' ),
		'section'     => 'shams_solar_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'shams_solar_featured_image_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'shams_solar_sanitize_number_range',
	));
	$wp_customize->add_control('shams_solar_featured_image_box_shadow',array(
		'label' => esc_html__( 'Featured Image Shadow','shams-solar' ),
		'section' => 'shams_solar_width_layout',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'range'
	));

	// Button Settings
	$wp_customize->add_section( 'shams_solar_button_option', array(
		'title' => __('Button','shams-solar'),
		'panel' => 'shams_solar_panel_id',
	));

	$wp_customize->add_setting('shams_solar_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','shams-solar'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'shams_solar_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('shams_solar_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_left_right_padding',array(
		'label'	=> __('Left and Right Padding','shams-solar'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'shams_solar_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'shams_solar_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	) );
	$wp_customize->add_control( 'shams_solar_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','shams-solar' ),
		'section'     => 'shams_solar_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// sidebar setting
	$wp_customize->add_section( 'shams_solar_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'shams-solar' ),
		'panel' => 'shams_solar_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('shams_solar_layout_settings',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control('shams_solar_layout_settings',array(
        'type' => 'radio',
        'label' => __('Post Sidebar Layout','shams-solar'),
        'section' => 'shams_solar_general_option',
        'description' => __('This option work for blog page, blog single page, archive page and search page.','shams-solar'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','shams-solar'),
            'Right Sidebar' => __('Right Sidebar','shams-solar'),
            'One Column' => __('Full Column','shams-solar'),
            'Grid Layout' => __('Grid Layout','shams-solar')
        ),
	) );

	$wp_customize->add_setting('shams_solar_page_sidebar_option',array(
        'default' => 'One Column',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control('shams_solar_page_sidebar_option',array(
        'type' => 'radio',
        'label' => __('Page Sidebar Layout','shams-solar'),
        'section' => 'shams_solar_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','shams-solar'),
            'Right Sidebar' => __('Right Sidebar','shams-solar'),
            'One Column' => __('Full Column','shams-solar')
        ),
	) );

	//Topbar section
	$wp_customize->add_section('shams_solar_contact_details',array(
		'title'	=> __('Topbar Section','shams-solar'),
		'description'	=> __('Add Header Content here','shams-solar'),
		'priority'	=> null,
		'panel' => 'shams_solar_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'shams_solar_show_hide_search',array(
		'default' => true,
      	'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ) );
    $wp_customize->add_control('shams_solar_show_hide_search',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Search','shams-solar' ),
        'section' => 'shams_solar_contact_details'
    ));

    $wp_customize->add_setting('shams_solar_search_icon_changer',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_search_icon_changer',array(
		'label'	=> __('Search Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_contact_details',
		'type'		=> 'icon'
	)));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'shams_solar_show_hide_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ) );
    $wp_customize->add_control('shams_solar_show_hide_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Top Header','shams-solar' ),
        'section' => 'shams_solar_contact_details'
    ));

	$wp_customize->add_setting('shams_solar_contact_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_phone_number'
	));
	$wp_customize->add_control('shams_solar_contact_number',array(
		'label'	=> __('Add Phone Number','shams-solar'),
		'section'	=> 'shams_solar_contact_details',
		'setting'	=> 'shams_solar_contact_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('shams_solar_phone_icon_changer',array(
		'default'	=> 'fa fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_phone_icon_changer',array(
		'label'	=> __('Phone Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('shams_solar_email_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('shams_solar_email_address',array(
		'label'	=> __('Add Email','shams-solar'),
		'section'	=> 'shams_solar_contact_details',
		'setting'	=> 'shams_solar_email_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('shams_solar_email_icon_changer',array(
		'default'	=> 'far fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_email_icon_changer',array(
		'label'	=> __('Email Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('shams_solar_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('shams_solar_time',array(
		'label'	=> __('Add Time','shams-solar'),
		'section'	=> 'shams_solar_contact_details',
		'setting'	=> 'shams_solar_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('shams_solar_time_icon_changer',array(
		'default'	=> 'far fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_time_icon_changer',array(
		'label'	=> __('Time Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('shams_solar_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('shams_solar_facebook_url',array(
		'label'	=> __('Add Facebook link','shams-solar'),
		'section'	=> 'shams_solar_contact_details',
		'setting'	=> 'shams_solar_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('shams_solar_facebook_icon_changer',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_facebook_icon_changer',array(
		'label'	=> __('Facebook Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('shams_solar_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('shams_solar_twitter_url',array(
		'label'	=> __('Add Twitter link','shams-solar'),
		'section'	=> 'shams_solar_contact_details',
		'setting'	=> 'shams_solar_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('shams_solar_twitter_icon_changer',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_twitter_icon_changer',array(
		'label'	=> __('Twitter Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_contact_details',
		'type'		=> 'icon'
	)));
	
	$wp_customize->add_setting('shams_solar_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('shams_solar_youtube_url',array(
		'label'	=> __('Add Youtube link','shams-solar'),
		'section'	=> 'shams_solar_contact_details',
		'setting'	=> 'shams_solar_youtube_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('shams_solar_youtube_icon_changer',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_youtube_icon_changer',array(
		'label'	=> __('Youtube Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('shams_solar_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('shams_solar_linkedin_url',array(
		'label'	=> __('Add Linkedin link','shams-solar'),
		'section'	=> 'shams_solar_contact_details',
		'setting'	=> 'shams_solar_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('shams_solar_linkedin_icon_changer',array(
		'default'	=> 'fab fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_linkedin_icon_changer',array(
		'label'	=> __('Linkedin Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('shams_solar_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('shams_solar_instagram_url',array(
		'label'	=> __('Add Instagram link','shams-solar'),
		'section'	=> 'shams_solar_contact_details',
		'setting'	=> 'shams_solar_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('shams_solar_instagram_icon_changer',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_instagram_icon_changer',array(
		'label'	=> __('Instagram Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_contact_details',
		'type'		=> 'icon'
	)));

	// navigation menu 
	$wp_customize->add_section( 'shams_solar_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'shams-solar' ),
		'priority'   => null,
		'panel' => 'shams_solar_panel_id'
	) );

	$wp_customize->add_setting('shams_solar_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','shams-solar'),
		'section'=> 'shams_solar_navigation_menu',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('shams_solar_menu_text_tranform',array(
        'default' => 'Default',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
    ));
    $wp_customize->add_control('shams_solar_menu_text_tranform',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Text Transform','shams-solar'),
        'section' => 'shams_solar_navigation_menu',
        'choices' => array(
            'Default' => __('Default','shams-solar'),
            'Uppercase' => __('Uppercase','shams-solar'),
        ),
	) );

	$wp_customize->add_setting('shams_solar_menu_font_weight',array(
        'default' => 'Default',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
    ));
    $wp_customize->add_control('shams_solar_menu_font_weight',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Font Weight','shams-solar'),
        'section' => 'shams_solar_navigation_menu',
        'choices' => array(
            'Default' => __('Default','shams-solar'),
            'Normal' => __('Normal','shams-solar'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'shams_solar_slider' , array(
    	'title'      => __( 'Slider Settings', 'shams-solar' ),
		'priority'   => null,
		'panel' => 'shams_solar_panel_id'
	) );

	$wp_customize->add_setting('shams_solar_slider_arrows',array(
        'default' => false,
        'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
	));
	$wp_customize->add_control('shams_solar_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','shams-solar'),
      	'section' => 'shams_solar_slider',
	));

	$wp_customize->add_setting('shams_solar_slider_title',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_slider_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','shams-solar'),
       'section' => 'shams_solar_slider'
    ));

    $wp_customize->add_setting('shams_solar_slider_content',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_slider_content',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','shams-solar'),
       'section' => 'shams_solar_slider'
    ));

    $wp_customize->add_setting('shams_solar_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','shams-solar'),
       'section' => 'shams_solar_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'shams_solar_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'shams_solar_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'shams_solar_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'shams-solar' ),
			'section'  => 'shams_solar_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'shams_solar_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'shams_solar_sanitize_number_range',
	));
	$wp_customize->add_control( 'shams_solar_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','shams-solar' ),
		'section' => 'shams_solar_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('shams_solar_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_slider_height_option',array(
		'label'	=> __('Slider Height Option','shams-solar'),
		'section'=> 'shams_solar_slider',
		'type'=> 'number'
	));

    $wp_customize->add_setting('shams_solar_slider_content_option',array(
    'default' => __('Left','shams-solar'),
        'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control('shams_solar_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','shams-solar'),
        'section' => 'shams_solar_slider',
        'choices' => array(
            'Center' => __('Center','shams-solar'),
            'Left' => __('Left','shams-solar'),
            'Right' => __('Right','shams-solar'),
        ),
	) );

	$wp_customize->add_setting('shams_solar_slider_button_text',array(
		'default'=> __('Discover More','shams-solar'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_slider_button_text',array(
		'label'	=> __('Slider Button Text','shams-solar'),
		'section'=> 'shams_solar_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('shams_solar_slider_button_icon_changer',array(
		'default'	=> 'far fa-hand-point-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_slider_button_icon_changer',array(
		'label'	=> __('Slider Button Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_slider',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'shams_solar_slider_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'shams_solar_sanitize_number_range',
	) );
	$wp_customize->add_control( 'shams_solar_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','shams-solar' ),
		'section'     => 'shams_solar_slider',
		'type'        => 'range',
		'settings'    => 'shams_solar_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('shams_solar_slider_opacity_color',array(
      'default'              => 0.3,
      'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control( 'shams_solar_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','shams-solar' ),
	'section'     => 'shams_solar_slider',
	'type'        => 'select',
	'settings'    => 'shams_solar_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','shams-solar'),
      '0.1' =>  esc_attr('0.1','shams-solar'),
      '0.2' =>  esc_attr('0.2','shams-solar'),
      '0.3' =>  esc_attr('0.3','shams-solar'),
      '0.4' =>  esc_attr('0.4','shams-solar'),
      '0.5' =>  esc_attr('0.5','shams-solar'),
      '0.6' =>  esc_attr('0.6','shams-solar'),
      '0.7' =>  esc_attr('0.7','shams-solar'),
      '0.8' =>  esc_attr('0.8','shams-solar'),
      '0.9' =>  esc_attr('0.9','shams-solar')
	),
	));

	$wp_customize->add_setting('shams_solar_padding_top_bottom_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_padding_top_bottom_slider_content',array(
		'label'	=> __('Top Bottom Slider Content Padding','shams-solar'),
		'section'=> 'shams_solar_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('shams_solar_padding_left_right_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_padding_left_right_slider_content',array(
		'label'	=> __('Left Right Slider Content Padding','shams-solar'),
		'section'=> 'shams_solar_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('shams_solar_show_slider_image_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_show_slider_image_overlay',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Image Overlay Slider','shams-solar'),
       'section' => 'shams_solar_slider'
    ));

    $wp_customize->add_setting('shams_solar_color_slider_image_overlay', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'shams_solar_color_slider_image_overlay', array(
		'label'    => __('Image Overlay Slider Color', 'shams-solar'),
		'section'  => 'shams_solar_slider',
		'settings' => 'shams_solar_color_slider_image_overlay',
	)));

	//Services Section
	$wp_customize->add_section('shams_solar_service_section',array(
		'title'	=> __('Services Section','shams-solar'),
		'description'	=> __('Add Services Section below.','shams-solar'),
		'panel' => 'shams_solar_panel_id',
	));

	$wp_customize->add_setting('shams_solar_service_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('shams_solar_service_section_title',array(
		'label'	=> __('Section Title','shams-solar'),
		'section'	=> 'shams_solar_service_section',
		'type'		=> 'text'
	));

	$categories = get_categories();
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';	
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('shams_solar_service_section_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'shams_solar_sanitize_choices',
	));
	$wp_customize->add_control('shams_solar_service_section_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display Latest Post','shams-solar'),
		'section' => 'shams_solar_service_section',
	));

	//no Result Setting
	$wp_customize->add_section('shams_solar_no_result_setting',array(
		'title'	=> __('No Results Settings','shams-solar'),
		'panel' => 'shams_solar_panel_id',
	));	

	$wp_customize->add_setting('shams_solar_no_search_result_title',array(
		'default'=> __('Nothing Found','shams-solar'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_no_search_result_title',array(
		'label'	=> __('No Search Results Title','shams-solar'),
		'section'=> 'shams_solar_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('shams_solar_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','shams-solar'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_no_search_result_content',array(
		'label'	=> __('No Search Results Content','shams-solar'),
		'section'=> 'shams_solar_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('shams_solar_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','shams-solar'),
		'panel' => 'shams_solar_panel_id',
	));	

	$wp_customize->add_setting('shams_solar_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','shams-solar'),
		'section'=> 'shams_solar_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('shams_solar_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','shams-solar'),
		'section'=> 'shams_solar_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('shams_solar_mobile_media',array(
		'title'	=> __('Mobile Media Settings','shams-solar'),
		'panel' => 'shams_solar_panel_id',
	));

	$wp_customize->add_setting('shams_solar_enable_disable_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_enable_disable_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Sidebar','shams-solar'),
       'section' => 'shams_solar_mobile_media'
    ));

	$wp_customize->add_setting('shams_solar_enable_disable_topbar',array(
       'default' => false,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_enable_disable_topbar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Top Header','shams-solar'),
       'section' => 'shams_solar_mobile_media'
    ));

    $wp_customize->add_setting('shams_solar_enable_disable_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_enable_disable_slider',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider','shams-solar'),
       'section' => 'shams_solar_mobile_media'
    ));

    $wp_customize->add_setting('shams_solar_show_hide_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_show_hide_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Button','shams-solar'),
       'section' => 'shams_solar_mobile_media'
    ));

    $wp_customize->add_setting('shams_solar_enable_disable_scrolltop',array(
       'default' => false,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_enable_disable_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Scroll To Top','shams-solar'),
       'section' => 'shams_solar_mobile_media'
    ));

	//Blog Post
	$wp_customize->add_section('shams_solar_blog_post',array(
		'title'	=> __('Post Settings','shams-solar'),
		'panel' => 'shams_solar_panel_id',
	));	

	$wp_customize->add_setting('shams_solar_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','shams-solar'),
       'section' => 'shams_solar_blog_post'
    ));

    $wp_customize->add_setting('shams_solar_post_date_icon_changer',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_post_date_icon_changer',array(
		'label'	=> __('Post Date Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('shams_solar_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','shams-solar'),
       'section' => 'shams_solar_blog_post'
    ));

    $wp_customize->add_setting('shams_solar_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_post_author_icon_changer',array(
		'label'	=> __('Post Author Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('shams_solar_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','shams-solar'),
       'section' => 'shams_solar_blog_post'
    ));

    $wp_customize->add_setting('shams_solar_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_post_comment_icon_changer',array(
		'label'	=> __('Post Comment Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('shams_solar_post_time_show',array(
       'default' => false,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_post_time_show',array(
       'type' => 'checkbox',
       'label' => __('Time','shams-solar'),
       'section' => 'shams_solar_blog_post'
    ));
    
    $wp_customize->add_setting( 'shams_solar_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'shams_solar_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','shams-solar' ),
		'section'     => 'shams_solar_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','shams-solar'),
		'type'        => 'text',
		'settings'    => 'shams_solar_blog_post_metabox_seperator',
	) );

    $wp_customize->add_setting('shams_solar_blog_post_layout',array(
        'default' => 'Default',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
    ));
    $wp_customize->add_control('shams_solar_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','shams-solar'),
        'section' => 'shams_solar_blog_post',
        'choices' => array(
            'Default' => __('Default','shams-solar'),
            'Center' => __('Center','shams-solar'),
            'Image and Content' => __('Image and Content','shams-solar'),
        ),
	) );

	$wp_customize->add_setting('shams_solar_post_break_block_setting',array(
        'default' => 'Into Blocks',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control('shams_solar_post_break_block_setting',array(
        'type' => 'radio',
        'label' => __('Display Blog Page posts','shams-solar'),
        'section' => 'shams_solar_blog_post',
        'choices' => array(
            'Into Blocks' => __('Into Blocks','shams-solar'),
            'Without Blocks' => __('Without Blocks','shams-solar'),
        ),
	) );

	$wp_customize->add_setting('shams_solar_post_image_dimention',array(
       'default' => 'Default',
       'sanitize_callback'	=> 'shams_solar_sanitize_choices'
    ));
    $wp_customize->add_control('shams_solar_post_image_dimention',array(
       'type' => 'radio',
       'label'	=> __('Post Featured Image Dimention','shams-solar'),
       'choices' => array(
            'Default' => __('Default','shams-solar'),
            'Custom Image Size' => __('Custom Image Size','shams-solar'),
        ),
      	'section'	=> 'shams_solar_blog_post'
    ));

    $wp_customize->add_setting( 'shams_solar_post_featured_image_width',array(
		'default' => '',
		'sanitize_callback'	=> 'shams_solar_sanitize_number_range'
	));
	$wp_customize->add_control('shams_solar_post_featured_image_width',	array(
		'label' => esc_html__( 'Blog Post Custom Width','shams-solar' ),
		'section' => 'shams_solar_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'type' => 'range',
		'active_callback' => 'shams_solar_enable_image_dimention'
	));

	$wp_customize->add_setting( 'shams_solar_post_featured_image_height',array(
		'default' => '',
		'sanitize_callback'	=> 'shams_solar_sanitize_number_range'
	));
	$wp_customize->add_control('shams_solar_post_featured_image_height',	array(
		'label' => esc_html__( 'Blog Post Custom Height','shams-solar' ),
		'section' => 'shams_solar_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'type' => 'range',
		'active_callback' => 'shams_solar_enable_image_dimention'
	));

	$wp_customize->add_setting('shams_solar_blog_description',array(
    	'default'   => 'Post Excerpt',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control('shams_solar_blog_description',array(
        'type' => 'select',
        'label' => __('Post Description','shams-solar'),
        'section' => 'shams_solar_blog_post',
        'choices' => array(
            'None' => __('None','shams-solar'),
            'Post Excerpt' => __('Post Excerpt','shams-solar'),
            'Post Content' => __('Post Content','shams-solar'),
        ),
	) );

    $wp_customize->add_setting( 'shams_solar_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	) );
	$wp_customize->add_control( 'shams_solar_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','shams-solar' ),
		'section'     => 'shams_solar_blog_post',
		'type'        => 'number',
		'settings'    => 'shams_solar_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'shams_solar_post_excerpt_suffix', array(
		'default'   => __('{...}','shams-solar'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'shams_solar_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','shams-solar' ),
		'section'     => 'shams_solar_blog_post',
		'type'        => 'text',
		'settings'    => 'shams_solar_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('shams_solar_button_text',array(
		'default'=> __('READ MORE','shams-solar'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_button_text',array(
		'label'	=> __('Add Button Text','shams-solar'),
		'section'=> 'shams_solar_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('shams_solar_show_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_show_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Post Pagination','shams-solar'),
       'section' => 'shams_solar_blog_post'
    ));

	$wp_customize->add_setting( 'shams_solar_pagination_option', array(
        'default'			=> 'Default',
        'sanitize_callback'	=> 'shams_solar_sanitize_choices'
    ));
    $wp_customize->add_control( 'shams_solar_pagination_option', array(
        'section' => 'shams_solar_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'shams-solar' ),
        'choices'		=> array(
            'Default'  => __( 'Default', 'shams-solar' ),
            'next-prev' => __( 'Next / Previous', 'shams-solar' ),
    )));

	// Single post setting
    $wp_customize->add_section('shams_solar_single_post_section',array(
		'title'	=> __('Single Post Settings','shams-solar'),
		'panel' => 'shams_solar_panel_id',
	));	

	$wp_customize->add_setting('shams_solar_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','shams-solar'),
       'section' => 'shams_solar_single_post_section'
    ));

    $wp_customize->add_setting('shams_solar_single_post_image',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Single Post Featured Image','shams-solar'),
       'section' => 'shams_solar_single_post_section'
    ));

    $wp_customize->add_setting('shams_solar_single_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','shams-solar'),
       'section' => 'shams_solar_single_post_section'
    ));

    $wp_customize->add_setting('shams_solar_single_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','shams-solar'),
       'section' => 'shams_solar_single_post_section'
    ));

    $wp_customize->add_setting('shams_solar_single_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','shams-solar'),
       'section' => 'shams_solar_single_post_section'
    ));

     $wp_customize->add_setting('shams_solar_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','shams-solar'),
       'section' => 'shams_solar_single_post_section'
    ));

    $wp_customize->add_setting( 'shams_solar_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'shams_solar_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','shams-solar' ),
		'section'     => 'shams_solar_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','shams-solar'),
		'type'        => 'text',
		'settings'    => 'shams_solar_seperator_metabox',
	) );

	$wp_customize->add_setting('shams_solar_comment_form_heading',array(
       'default' => __('Leave a Reply','shams-solar'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('shams_solar_comment_form_heading',array(
       'type' => 'text',
       'label' => __('Comment Form Heading','shams-solar'),
       'section' => 'shams_solar_single_post_section'
    ));

    $wp_customize->add_setting('shams_solar_comment_button_text',array(
       'default' => __('Post Comment','shams-solar'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('shams_solar_comment_button_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Text','shams-solar'),
       'section' => 'shams_solar_single_post_section'
    ));

    $wp_customize->add_setting( 'shams_solar_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'shams_solar_sanitize_number_range',
	));
	$wp_customize->add_control('shams_solar_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','shams-solar' ),
		'section' => 'shams_solar_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

    // related post setting
    $wp_customize->add_section('shams_solar_related_post_section',array(
		'title'	=> __('Related Post Settings','shams-solar'),
		'panel' => 'shams_solar_panel_id',
	));	

	$wp_customize->add_setting('shams_solar_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
    ));
    $wp_customize->add_control('shams_solar_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Related Post','shams-solar'),
       'section' => 'shams_solar_related_post_section',
    ));

	$wp_customize->add_setting( 'shams_solar_show_related_post', array(
        'default' => 'By Categories', 
        'sanitize_callback'	=> 'shams_solar_sanitize_choices'
    ));
    $wp_customize->add_control( 'shams_solar_show_related_post', array(
        'section' => 'shams_solar_related_post_section',
        'type' => 'radio',
        'label' => __( 'Show Related Posts', 'shams-solar' ),
        'choices' => array(
            'categories'  => __(' By Categories', 'shams-solar'),
            'tags' => __( ' By Tags', 'shams-solar' ),
    )));

    $wp_customize->add_setting('shams_solar_change_related_post_title',array(
		'default'=> __('Related Posts','shams-solar'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','shams-solar'),
		'section'=> 'shams_solar_related_post_section',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('shams_solar_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','shams-solar'),
		'section'=> 'shams_solar_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Footer
	$wp_customize->add_section( 'shams_solar_footer' , array(
    	'title'      => __( 'Footer Section', 'shams-solar' ),
		'priority'   => null,
		'panel' => 'shams_solar_panel_id'
	) );

	$wp_customize->add_setting('shams_solar_footer_widget',array(
        'default'           => 4,
        'sanitize_callback' => 'shams_solar_sanitize_choices',
    ));
    $wp_customize->add_control('shams_solar_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'shams-solar'),
        'section'     => 'shams_solar_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'shams-solar'),
        'choices' => array(
            '1'     => __('One', 'shams-solar'),
            '2'     => __('Two', 'shams-solar'),
            '3'     => __('Three', 'shams-solar'),
            '4'     => __('Four', 'shams-solar')
        ),
    )); 

    $wp_customize->add_setting( 'shams_solar_footer_widget_background', array(
	    'default' => '#1f1e1e',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shams_solar_footer_widget_background', array(
  		'label' => __('Footer Widget Background','shams-solar'),
	    'section' => 'shams_solar_footer',
  	)));

  	$wp_customize->add_setting('shams_solar_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'shams_solar_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','shams-solar'),
        'section' => 'shams_solar_footer'
	)));

	$wp_customize->add_setting('shams_solar_hide_show_scroll',array(
        'default' => false,
        'sanitize_callback'	=> 'shams_solar_sanitize_checkbox'
	));
	$wp_customize->add_control('shams_solar_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','shams-solar'),
      	'section' => 'shams_solar_footer',
	));

	$wp_customize->add_setting('shams_solar_scroll_icon_changer',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new shams_solar_Icon_Changer(
        $wp_customize,'shams_solar_scroll_icon_changer',array(
		'label'	=> __('Scroll To Top Icon','shams-solar'),
		'transport' => 'refresh',
		'section'	=> 'shams_solar_footer',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('shams_solar_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'shams_solar_sanitize_choices'
	));
	$wp_customize->add_control('shams_solar_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','shams-solar'),
        'description' => __('Here you can change the Footer layout. ','shams-solar'),
        'section' => 'shams_solar_footer',
        'choices' => array(
            'Left align' => __('Left align','shams-solar'),
            'Right align' => __('Right align','shams-solar'),
            'Center align' => __('Center align','shams-solar'),
        ),
	) );

	$wp_customize->add_setting('shams_solar_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shams_solar_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','shams-solar'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'shams_solar_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('shams_solar_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','shams-solar'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'shams_solar_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('shams_solar_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','shams-solar'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'shams_solar_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'shams_solar_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	) );
	$wp_customize->add_control( 'shams_solar_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','shams-solar' ),
		'section'     => 'shams_solar_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('shams_solar_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('shams_solar_footer_text',array(
		'label'	=> __('Add Copyright Text','shams-solar'),
		'section'	=> 'shams_solar_footer',
		'setting'	=> 'shams_solar_footer_text',
		'type'		=> 'text'
	));

    $wp_customize->add_setting('shams_solar_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','shams-solar'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'shams_solar_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('shams_solar_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'shams_solar_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'shams-solar'),
		'section'  => 'shams_solar_footer',
	)));

	$wp_customize->add_setting('shams_solar_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'shams_solar_sanitize_float',
	));
	$wp_customize->add_control('shams_solar_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','shams-solar'),
		'section'=> 'shams_solar_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'shams_solar_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'shams_solar_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'shams_solar_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Shams Solar 1.0
 * @see shams-solar_customize_register()
 *
 * @return void
 */
function shams_solar_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Shams Solar 1.0
 * @see shams-solar_customize_register()
 *
 * @return void
 */
function shams_solar_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function shams_solar_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Shams_Solar_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Shams_Solar_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Shams_Solar_Customize_Section_Pro(
				$manager,
				'shams_solar_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Shams Solar Pro', 'shams-solar' ),
					'pro_text' => esc_html__( 'Go Pro', 'shams-solar' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/solar-energy-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'shams-solar-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'shams-solar-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Shams_Solar_Customize::get_instance();