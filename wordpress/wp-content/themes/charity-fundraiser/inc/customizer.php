<?php
/**
 * Charity Fundraiser Theme Customizer
 * @package Charity Fundraiser
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function charity_fundraiser_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-selector.php' );

	class Charity_Fundraiser_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_html($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}

	//add home page setting pannel
	$wp_customize->add_panel( 'charity_fundraiser_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'charity-fundraiser' ),
	    'description' => __( 'Description of what this panel does.', 'charity-fundraiser' ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'charity_fundraiser_theme_color_option', array( 
		'panel' => 'charity_fundraiser_panel_id', 
		'title' => esc_html__( 'Global Color Settings', 'charity-fundraiser' ) 
	) );

  	$wp_customize->add_setting( 'charity_fundraiser_first_theme_color', array(
	    'default' => '#288200',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_first_theme_color', array(
  		'label' => 'Color Option 1',
	    'description' => __('One can change complete theme global color settings on just one click.', 'charity-fundraiser'),
	    'section' => 'charity_fundraiser_theme_color_option',
	    'settings' => 'charity_fundraiser_first_theme_color',
  	)));

  	$wp_customize->add_setting( 'charity_fundraiser_second_theme_color', array(
	    'default' => '#091b27',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_second_theme_color', array(
  		'label' => 'Color Option 2',
	    'description' => __('One can change complete theme global color settings on just one click.', 'charity-fundraiser'),
	    'section' => 'charity_fundraiser_theme_color_option',
	    'settings' => 'charity_fundraiser_second_theme_color',
  	)));

	// font array
	$font_array = array(
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
	$wp_customize->add_section( 'charity_fundraiser_typography', array(
    	'title'   => __( 'Typography', 'charity-fundraiser' ),
		'priority'   => null,
		'panel' => 'charity_fundraiser_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'charity_fundraiser_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_paragraph_color', array(
		'label' => __('Paragraph Color', 'charity-fundraiser'),
		'section' => 'charity_fundraiser_typography',
		'settings' => 'charity_fundraiser_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('charity_fundraiser_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control(
	    'charity_fundraiser_paragraph_font_family', array(
	    'section'  => 'charity_fundraiser_typography',
	    'label'    => __( 'Paragraph Fonts','charity-fundraiser'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('charity_fundraiser_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('charity_fundraiser_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_typography',
		'setting'	=> 'charity_fundraiser_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'charity_fundraiser_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_atag_color', array(
		'label' => __('"a" Tag Color', 'charity-fundraiser'),
		'section' => 'charity_fundraiser_typography',
		'settings' => 'charity_fundraiser_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('charity_fundraiser_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control(
	    'charity_fundraiser_atag_font_family', array(
	    'section'  => 'charity_fundraiser_typography',
	    'label'    => __( '"a" Tag Fonts','charity-fundraiser'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'charity_fundraiser_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_li_color', array(
		'label' => __('"li" Tag Color', 'charity-fundraiser'),
		'section' => 'charity_fundraiser_typography',
		'settings' => 'charity_fundraiser_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('charity_fundraiser_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control(
	    'charity_fundraiser_li_font_family', array(
	    'section'  => 'charity_fundraiser_typography',
	    'label'    => __( '"li" Tag Fonts','charity-fundraiser'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'charity_fundraiser_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_h1_color', array(
		'label' => __('H1 Color', 'charity-fundraiser'),
		'section' => 'charity_fundraiser_typography',
		'settings' => 'charity_fundraiser_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('charity_fundraiser_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control(
	    'charity_fundraiser_h1_font_family', array(
	    'section'  => 'charity_fundraiser_typography',
	    'label'    => __( 'H1 Fonts','charity-fundraiser'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('charity_fundraiser_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('charity_fundraiser_h1_font_size',array(
		'label'	=> __('H1 Font Size','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_typography',
		'setting'	=> 'charity_fundraiser_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'charity_fundraiser_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_h2_color', array(
		'label' => __('h2 Color', 'charity-fundraiser'),
		'section' => 'charity_fundraiser_typography',
		'settings' => 'charity_fundraiser_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('charity_fundraiser_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control(
	    'charity_fundraiser_h2_font_family', array(
	    'section'  => 'charity_fundraiser_typography',
	    'label'    => __( 'h2 Fonts','charity-fundraiser'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('charity_fundraiser_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('charity_fundraiser_h2_font_size',array(
		'label'	=> __('h2 Font Size','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_typography',
		'setting'	=> 'charity_fundraiser_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'charity_fundraiser_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_h3_color', array(
		'label' => __('h3 Color', 'charity-fundraiser'),
		'section' => 'charity_fundraiser_typography',
		'settings' => 'charity_fundraiser_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('charity_fundraiser_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control(
	    'charity_fundraiser_h3_font_family', array(
	    'section'  => 'charity_fundraiser_typography',
	    'label'    => __( 'h3 Fonts','charity-fundraiser'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('charity_fundraiser_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('charity_fundraiser_h3_font_size',array(
		'label'	=> __('h3 Font Size','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_typography',
		'setting'	=> 'charity_fundraiser_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'charity_fundraiser_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_h4_color', array(
		'label' => __('h4 Color', 'charity-fundraiser'),
		'section' => 'charity_fundraiser_typography',
		'settings' => 'charity_fundraiser_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('charity_fundraiser_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control(
	    'charity_fundraiser_h4_font_family', array(
	    'section'  => 'charity_fundraiser_typography',
	    'label'    => __( 'h4 Fonts','charity-fundraiser'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('charity_fundraiser_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('charity_fundraiser_h4_font_size',array(
		'label'	=> __('h4 Font Size','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_typography',
		'setting'	=> 'charity_fundraiser_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'charity_fundraiser_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_h5_color', array(
		'label' => __('h5 Color', 'charity-fundraiser'),
		'section' => 'charity_fundraiser_typography',
		'settings' => 'charity_fundraiser_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('charity_fundraiser_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control(
	    'charity_fundraiser_h5_font_family', array(
	    'section'  => 'charity_fundraiser_typography',
	    'label'    => __( 'h5 Fonts','charity-fundraiser'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('charity_fundraiser_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('charity_fundraiser_h5_font_size',array(
		'label'	=> __('h5 Font Size','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_typography',
		'setting'	=> 'charity_fundraiser_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'charity_fundraiser_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_h6_color', array(
		'label' => __('h6 Color', 'charity-fundraiser'),
		'section' => 'charity_fundraiser_typography',
		'settings' => 'charity_fundraiser_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('charity_fundraiser_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control(
	    'charity_fundraiser_h6_font_family', array(
	    'section'  => 'charity_fundraiser_typography',
	    'label'    => __( 'h6 Fonts','charity-fundraiser'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('charity_fundraiser_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('charity_fundraiser_h6_font_size',array(
		'label'	=> __('h6 Font Size','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_typography',
		'setting'	=> 'charity_fundraiser_h6_font_size',
		'type'	=> 'text'
	));

    //Social Icons(topbar)
	$wp_customize->add_section('charity_fundraiser_social_media',array(
		'title'	=> __('Social Icon','charity-fundraiser'),
		'description'	=> __('Add Header Content here','charity-fundraiser'),
		'priority'	=> null,
		'panel' => 'charity_fundraiser_panel_id',
	));

	$wp_customize->add_setting('charity_fundraiser_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Charity_Fundraiser_Icon_Selector(
        $wp_customize,'charity_fundraiser_facebook_icon',array(
		'label'	=> __('Facebook Icon','charity-fundraiser'),
		'section' => 'charity_fundraiser_social_media',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('charity_fundraiser_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_facebook',array(
		'label'	=> __('Add Facebook link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('charity_fundraiser_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Charity_Fundraiser_Icon_Selector(
        $wp_customize,'charity_fundraiser_twitter_icon',array(
		'label'	=> __('Twitter Icon','charity-fundraiser'),
		'section' => 'charity_fundraiser_social_media',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('charity_fundraiser_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_twitter',array(
		'label'	=> __('Add Twitter link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_twitter',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('charity_fundraiser_pintrest_icon',array(
		'default'	=> 'fab fa-pinterest',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Charity_Fundraiser_Icon_Selector(
        $wp_customize,'charity_fundraiser_pintrest_icon',array(
		'label'	=> __('Pinterest Icon','charity-fundraiser'),
		'section' => 'charity_fundraiser_social_media',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('charity_fundraiser_pintrest',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_pintrest',array(
		'label'	=> __('Add Pinterest link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_pintrest',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('charity_fundraiser_insta_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Charity_Fundraiser_Icon_Selector(
        $wp_customize,'charity_fundraiser_insta_icon',array(
		'label'	=> __('Instagram Icon','charity-fundraiser'),
		'section' => 'charity_fundraiser_social_media',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('charity_fundraiser_insta',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_insta',array(
		'label'	=> __('Add Instagram link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_insta',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('charity_fundraiser_linkdin_icon',array(
		'default'	=> 'fab fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Charity_Fundraiser_Icon_Selector(
        $wp_customize,'charity_fundraiser_linkdin_icon',array(
		'label'	=> __('Linkedin Icon','charity-fundraiser'),
		'section' => 'charity_fundraiser_social_media',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('charity_fundraiser_linkdin',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_linkdin',array(
		'label'	=> __('Add Linkedin link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_linkdin',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('charity_fundraiser_youtube_icon',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Charity_Fundraiser_Icon_Selector(
        $wp_customize,'charity_fundraiser_youtube_icon',array(
		'label'	=> __('Youtube Icon','charity-fundraiser'),
		'section' => 'charity_fundraiser_social_media',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('charity_fundraiser_youtube',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_youtube',array(
		'label'	=> __('Add Youtube link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_social_media',
		'setting'	=> 'charity_fundraiser_youtube',
		'type'	=> 'url'
	));

	$wp_customize->add_setting( 'charity_fundraiser_social_icons_font_size', array(
		'default'=> '12',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Charity_Fundraiser_WP_Customize_Range_Control( $wp_customize, 'charity_fundraiser_social_icons_font_size', array(
        'label'  => __('Social Icons Font Size','charity-fundraiser'),
        'section'  => 'charity_fundraiser_social_media',
        'description' => __('Measurement is in pixel.','charity-fundraiser'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//Topbar section
	$wp_customize->add_section('charity_fundraiser_topbar_icon',array(
		'title'	=> __('Topbar Section','charity-fundraiser'),
		'description'	=> __('Add Header Content here','charity-fundraiser'),
		'priority'	=> null,
		'panel' => 'charity_fundraiser_panel_id',
	));

	$wp_customize->add_setting('charity_fundraiser_topbar_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('charity_fundraiser_topbar_padding',array(
		'label'	=> esc_html__('Topbar Padding','charity-fundraiser'),
		'section'=> 'charity_fundraiser_topbar_icon',
	));

    $wp_customize->add_setting('charity_fundraiser_top_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_top_topbar_padding',array(
		'description'	=> __('Top','charity-fundraiser'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'charity_fundraiser_topbar_icon',
		'type'=> 'number',
	));

	$wp_customize->add_setting('charity_fundraiser_bottom_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_bottom_topbar_padding',array(
		'description'	=> __('Bottom','charity-fundraiser'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'charity_fundraiser_topbar_icon',
		'type'=> 'number',
	));

	$wp_customize->add_setting('charity_fundraiser_sticky_header',array(
       'default' => '',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Stick header on Desktop','charity-fundraiser'),
       'section' => 'charity_fundraiser_topbar_icon'
    ));

    $wp_customize->add_setting('charity_fundraiser_sticky_header_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('charity_fundraiser_sticky_header_padding',array(
		'label'	=> esc_html__('Sticky Header Padding','charity-fundraiser'),
		'section'=> 'charity_fundraiser_topbar_icon',
		'type' => 'hidden',
	));

    $wp_customize->add_setting('charity_fundraiser_top_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_top_sticky_header_padding',array(
		'description'	=> __('Top','charity-fundraiser'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'charity_fundraiser_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('charity_fundraiser_bottom_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_bottom_sticky_header_padding',array(
		'description'	=> __('Bottom','charity-fundraiser'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'charity_fundraiser_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('charity_fundraiser_show_search',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_show_search',array(
       'type' => 'checkbox',
       'label' => __('Show/Hide Search','charity-fundraiser'),
       'section' => 'charity_fundraiser_topbar_icon'
    ));

    $wp_customize->add_setting('charity_fundraiser_search_placeholder',array(
       'default' => __('Search','charity-fundraiser'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('charity_fundraiser_search_placeholder',array(
       'type' => 'text',
       'label' => __('Search Placeholder text','charity-fundraiser'),
       'section' => 'charity_fundraiser_topbar_icon'
    ));

    $wp_customize->add_setting('charity_fundraiser_email_icon',array(
		'default'	=> 'fas fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Charity_Fundraiser_Icon_Selector(
        $wp_customize,'charity_fundraiser_email_icon',array(
		'label'	=> __('Email Icon','charity-fundraiser'),
		'section' => 'charity_fundraiser_topbar_icon',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('charity_fundraiser_email_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('charity_fundraiser_email_text',array(
		'label'	=> __('Add Email Text','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_email_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('charity_fundraiser_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('charity_fundraiser_email',array(
		'label'	=> __('Add Email Address','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('charity_fundraiser_phone_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Charity_Fundraiser_Icon_Selector(
        $wp_customize,'charity_fundraiser_phone_icon',array(
		'label'	=> __('Phone Icon','charity-fundraiser'),
		'section' => 'charity_fundraiser_topbar_icon',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('charity_fundraiser_call_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_call_text',array(
		'label'	=> __('Add Contact Text','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_call_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('charity_fundraiser_call_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_phone_number'
	));	
	$wp_customize->add_control('charity_fundraiser_call_number',array(
		'label'	=> __('Add Contact Number','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_call_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('charity_fundraiser_donate_icon',array(
		'default'	=> 'fas fa-heart',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Charity_Fundraiser_Icon_Selector(
        $wp_customize,'charity_fundraiser_donate_icon',array(
		'label'	=> __('Donate Icon','charity-fundraiser'),
		'section' => 'charity_fundraiser_topbar_icon',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('charity_fundraiser_donate_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_donate_text',array(
		'label'	=> __('Add Donate Text','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_donate_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('charity_fundraiser_donate_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('charity_fundraiser_donate_link',array(
		'label'	=> __('Add Donate Link','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_topbar_icon',
		'setting'	=> 'charity_fundraiser_donate_link',
		'type'		=> 'url'
	));

	$wp_customize->add_section('charity_fundraiser_header',array(
		'title'	=> __('Header','charity-fundraiser'),
		'priority'	=> null,
		'panel' => 'charity_fundraiser_panel_id',
	));

	$wp_customize->add_setting('charity_fundraiser_menu_case',array(
        'default' => 'uppercase',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control('charity_fundraiser_menu_case',array(
        'type' => 'select',
        'label' => __('Menu Case','charity-fundraiser'),
        'section' => 'charity_fundraiser_header',
        'choices' => array(
            'uppercase' => __('Uppercase','charity-fundraiser'),
            'capitalize' => __('Capitalize','charity-fundraiser'),
        ),
	) );

	$wp_customize->add_setting( 'charity_fundraiser_menu_font_size', array(
		'default'=> '14',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Charity_Fundraiser_WP_Customize_Range_Control( $wp_customize, 'charity_fundraiser_menu_font_size', array(
        'label'  => __('Menu Font Size','charity-fundraiser'),
        'section'  => 'charity_fundraiser_header',
        'description' => __('Measurement is in pixel.','charity-fundraiser'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('charity_fundraiser_menu_font_weight',array(
        'default' => '',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control('charity_fundraiser_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menu Font Weight','charity-fundraiser'),
        'section' => 'charity_fundraiser_header',
        'choices' => array(
            '100' => __('100','charity-fundraiser'),
            '200' => __('200','charity-fundraiser'),
            '300' => __('300','charity-fundraiser'),
            '400' => __('400','charity-fundraiser'),
            '500' => __('500','charity-fundraiser'),
            '600' => __('600','charity-fundraiser'),
            '700' => __('700','charity-fundraiser'),
            '800' => __('800','charity-fundraiser'),
            '900' => __('900','charity-fundraiser'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'charity_fundraiser_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'charity-fundraiser' ),
		'priority'   => null,
		'panel' => 'charity_fundraiser_panel_id'
	) );

	$wp_customize->add_setting('charity_fundraiser_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','charity-fundraiser'),
       'section' => 'charity_fundraiser_slider_section'
    ));

	$wp_customize->add_setting('charity_fundraiser_slider_title',array(
        'default' => true,
        'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
	));
	$wp_customize->add_control('charity_fundraiser_slider_title',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Title','charity-fundraiser'),
      	'section' => 'charity_fundraiser_slider_section'
	));

	$wp_customize->add_setting('charity_fundraiser_slider_content',array(
        'default' => true,
        'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
	));
	$wp_customize->add_control('charity_fundraiser_slider_content',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Content','charity-fundraiser'),
      	'section' => 'charity_fundraiser_slider_section'
	));

	$wp_customize->add_setting('charity_fundraiser_slider_button',array(
        'default' => true,
        'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
	));
	$wp_customize->add_control('charity_fundraiser_slider_button',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Button','charity-fundraiser'),
      	'section' => 'charity_fundraiser_slider_section'
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'charity_fundraiser_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'charity_fundraiser_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'charity_fundraiser_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'charity-fundraiser' ),
			'section'  => 'charity_fundraiser_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'charity_fundraiser_slider_speed', array(
		'default'              => 3000,
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	) );
	$wp_customize->add_control( 'charity_fundraiser_slider_speed', array(
		'label'       => esc_html__( 'Slider Speed','charity-fundraiser' ),
		'section'     => 'charity_fundraiser_slider_section',
		'type'        => 'number',
		'settings'    => 'charity_fundraiser_slider_speed',
		'input_attrs' => array(
			'step'             => 500,
			'min'              => 500,
			'max'              => 5000,
		),
	) );

	//content Alignment
    $wp_customize->add_setting('charity_fundraiser_slider_alignment_option',array(
    'default' => 'Left Align',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control('charity_fundraiser_slider_alignment_option',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','charity-fundraiser'),
        'section' => 'charity_fundraiser_slider_section',
        'choices' => array(
            'Center Align' => __('Center Align','charity-fundraiser'),
            'Left Align' => __('Left Align','charity-fundraiser'),
            'Right Align' => __('Right Align','charity-fundraiser'),
        ),
	) );

	$wp_customize->add_setting('charity_fundraiser_content_position',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('charity_fundraiser_content_position',array(
		'label'	=> esc_html__('Slider Content Position','charity-fundraiser'),
		'section'=> 'charity_fundraiser_slider_section',
		'type' => 'hidden'
	));

	$wp_customize->add_setting( 'charity_fundraiser_slider_top_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	) );
	
	$wp_customize->add_control( 'charity_fundraiser_slider_top_position', array(
		'label' => esc_html__( 'Top','charity-fundraiser' ),
		'section' => 'charity_fundraiser_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'charity_fundraiser_slider_bottom_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	) );
	$wp_customize->add_control( 'charity_fundraiser_slider_bottom_position', array(
		'label' => esc_html__( 'Bottom','charity-fundraiser' ),
		'section' => 'charity_fundraiser_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'charity_fundraiser_slider_left_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	) );
	$wp_customize->add_control( 'charity_fundraiser_slider_left_position', array(
		'label' => esc_html__( 'Left','charity-fundraiser'),
		'section' => 'charity_fundraiser_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'charity_fundraiser_slider_right_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	) );
	$wp_customize->add_control( 'charity_fundraiser_slider_right_position', array(
		'label' => esc_html__('Right','charity-fundraiser'),
		'section' => 'charity_fundraiser_slider_section',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'charity_fundraiser_slider_excerpt_number', array(
		'default'              => 25,
		'sanitize_callback'    => 'charity_fundraiser_sanitize_float',
	) );
	$wp_customize->add_control( 'charity_fundraiser_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','charity-fundraiser' ),
		'section'     => 'charity_fundraiser_slider_section',
		'type'        => 'number',
		'settings'    => 'charity_fundraiser_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('charity_fundraiser_slider_image_overlay',array(
        'default' => true,
        'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
	));
	$wp_customize->add_control('charity_fundraiser_slider_image_overlay',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Image Overlay','charity-fundraiser'),
      	'section' => 'charity_fundraiser_slider_section',
	));

	$wp_customize->add_setting( 'charity_fundraiser_slider_overlay_color', array(
	    'default' => '#232c2b',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_slider_overlay_color', array(
	    'label' => __('Slider Overlay Color', 'charity-fundraiser'),
	    'section' => 'charity_fundraiser_slider_section',
  	)));

	//Opacity
	$wp_customize->add_setting('charity_fundraiser_slider_opacity_color',array(
      'default'              => 0.7,
      'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control( 'charity_fundraiser_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','charity-fundraiser' ),
		'section'     => 'charity_fundraiser_slider_section',
		'type'        => 'select',
		'settings'    => 'charity_fundraiser_slider_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','charity-fundraiser'),
	      '0.1' =>  esc_attr('0.1','charity-fundraiser'),
	      '0.2' =>  esc_attr('0.2','charity-fundraiser'),
	      '0.3' =>  esc_attr('0.3','charity-fundraiser'),
	      '0.4' =>  esc_attr('0.4','charity-fundraiser'),
	      '0.5' =>  esc_attr('0.5','charity-fundraiser'),
	      '0.6' =>  esc_attr('0.6','charity-fundraiser'),
	      '0.7' =>  esc_attr('0.7','charity-fundraiser'),
	      '0.8' =>  esc_attr('0.8','charity-fundraiser'),
	      '0.9' =>  esc_attr('0.9','charity-fundraiser')
	  ),
	));

	$wp_customize->add_setting( 'charity_fundraiser_slider_button_label', array(
		'default' => __('LEARN MORE','charity-fundraiser' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'charity_fundraiser_slider_button_label', array(
		'label' => esc_html__( 'Slider Button Label','charity-fundraiser' ),
		'section'     => 'charity_fundraiser_slider_section',
		'type'        => 'text',
		'settings'    => 'charity_fundraiser_slider_button_label'
	) );

	$wp_customize->add_setting( 'charity_fundraiser_slider_height', array(
		'default'          => '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	) );
	$wp_customize->add_control( 'charity_fundraiser_slider_height', array(
		'label' => esc_html__( 'Slider Height','charity-fundraiser' ),
		'section' => 'charity_fundraiser_slider_section',
		'type'    => 'number',
		'description' => __('Measurement is in pixel.','charity-fundraiser'),
		'input_attrs' => array(
			'step' => 1,
			'min'  => 500,
			'max'  => 1000,
		),
	) );

	//Help Section
	$wp_customize->add_section('charity_fundraiser_causes',array(
		'title'	=> __('Causes Section','charity-fundraiser'),
		'description'	=> __('Add Causes sections below.','charity-fundraiser'),
		'panel' => 'charity_fundraiser_panel_id',
	));

	$wp_customize->add_setting('charity_fundraiser_help_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_help_title',array(
		'label'	=> __('Section Title','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_causes',
		'type'		=> 'text'
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
 	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
		$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('charity_fundraiser_image_post',array(
		'sanitize_callback' => 'charity_fundraiser_sanitize_choices',
	));
	$wp_customize->add_control('charity_fundraiser_image_post',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select post','charity-fundraiser'),
		'section' => 'charity_fundraiser_causes',
	));

	$wp_customize->add_setting('charity_fundraiser_causes_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_causes_title',array(
		'label'	=> __('Help Us Text','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_causes',
		'type'		=> 'text'
	));	

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('charity_fundraiser_help_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'charity_fundraiser_sanitize_choices',
	));
	$wp_customize->add_control('charity_fundraiser_help_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Post','charity-fundraiser'),
		'section' => 'charity_fundraiser_causes',
	));

	//layout setting
	$wp_customize->add_section( 'charity_fundraiser_theme_layout', array(
    	'title'  => __( 'Blog Settings', 'charity-fundraiser' ),
		'priority'   => null,
		'panel' => 'charity_fundraiser_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('charity_fundraiser_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	)  );
	$wp_customize->add_control('charity_fundraiser_layout',array(
        'type' => 'radio',
        'label' => __( 'Blog Layout', 'charity-fundraiser' ),
        'section' => 'charity_fundraiser_theme_layout',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','charity-fundraiser'),
            'Right Sidebar' => __('Right Sidebar','charity-fundraiser'),
            'One Column' => __('One Column','charity-fundraiser'),
            'Three Columns' => __('Three Columns','charity-fundraiser'),
            'Four Columns' => __('Four Columns','charity-fundraiser'),
            'Grid Layout' => __('Grid Layout','charity-fundraiser')
        ),
	) );

    $wp_customize->add_setting('charity_fundraiser_blog_post_display_type',array(
        'default' => 'blocks',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
    ));
	$wp_customize->add_control('charity_fundraiser_blog_post_display_type', array(
        'type' => 'select',
        'label' => __( 'Blog Page Display Type', 'charity-fundraiser' ),
        'section' => 'charity_fundraiser_theme_layout',
        'choices' => array(
            'blocks' => __('Blocks','charity-fundraiser'),
            'without blocks' => __('Without Blocks','charity-fundraiser'),
        ),
    ));

    $wp_customize->add_setting('charity_fundraiser_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','charity-fundraiser'),
       'section' => 'charity_fundraiser_theme_layout'
    ));

    $wp_customize->add_setting('charity_fundraiser_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','charity-fundraiser'),
       'section' => 'charity_fundraiser_theme_layout'
    ));

    $wp_customize->add_setting('charity_fundraiser_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','charity-fundraiser'),
       'section' => 'charity_fundraiser_theme_layout'
    ));

    $wp_customize->add_setting('charity_fundraiser_metafields_time',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_metafields_time',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Time','charity-fundraiser'),
       'section' => 'charity_fundraiser_theme_layout'
    ));

    $wp_customize->add_setting('charity_fundraiser_featured_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Featured Image','charity-fundraiser'),
       'section' => 'charity_fundraiser_theme_layout'
    ));

    $wp_customize->add_setting('charity_fundraiser_post_navigation',array(
       'default' => 'true',
       'sanitize_callback' => 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_post_navigation',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Post Navigation','charity-fundraiser'),
       'section' => 'charity_fundraiser_theme_layout'
    ));

    $wp_customize->add_setting('charity_fundraiser_metabox_seperator',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('charity_fundraiser_metabox_seperator',array(
       'type' => 'text',
       'label' => __('Metabox Seperator','charity-fundraiser'),
       'description' => __('Ex: "/", "|", "-", ...','charity-fundraiser'),
       'section' => 'charity_fundraiser_theme_layout'
    ));

    $wp_customize->add_setting('charity_fundraiser_blog_post_content',array(
    	'default' => 'Excerpt Content',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control('charity_fundraiser_blog_post_content',array(
        'type' => 'radio',
        'label' => __('Blog Post Content Type','charity-fundraiser'),
        'section' => 'charity_fundraiser_theme_layout',
        'choices' => array(
            'No Content' => __('No Content','charity-fundraiser'),
            'Full Content' => __('Full Content','charity-fundraiser'),
            'Excerpt Content' => __('Excerpt Content','charity-fundraiser'),
        ),
	) );

    $wp_customize->add_setting( 'charity_fundraiser_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	) );
	$wp_customize->add_control( 'charity_fundraiser_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Excerpt Number (Max 50)','charity-fundraiser' ),
		'section'     => 'charity_fundraiser_theme_layout',
		'type'        => 'number',
		'settings'    => 'charity_fundraiser_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
		'active_callback' => 'charity_fundraiser_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'charity_fundraiser_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'charity_fundraiser_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','charity-fundraiser' ),
		'section'     => 'charity_fundraiser_theme_layout',
		'type'        => 'text',
		'settings'    => 'charity_fundraiser_button_excerpt_suffix',
		'active_callback' => 'charity_fundraiser_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'charity_fundraiser_feature_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Charity_Fundraiser_WP_Customize_Range_Control( $wp_customize, 'charity_fundraiser_feature_image_border_radius', array(
        'label'  => __('Featured Image Border Radius','charity-fundraiser'),
        'section'  => 'charity_fundraiser_theme_layout',
        'description' => __('Measurement is in pixel.','charity-fundraiser'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'charity_fundraiser_feature_image_shadow', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Charity_Fundraiser_WP_Customize_Range_Control( $wp_customize, 'charity_fundraiser_feature_image_shadow', array(
        'label'  => __('Featured Image Shadow','charity-fundraiser'),
        'section'  => 'charity_fundraiser_theme_layout',
        'description' => __('Measurement is in pixel.','charity-fundraiser'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'charity_fundraiser_pagination_type', array(
        'default'			=> 'page-numbers',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'charity_fundraiser_pagination_type', array(
        'section' => 'charity_fundraiser_theme_layout',
        'type' => 'select',
        'label' => __( 'Blog Pagination Style', 'charity-fundraiser' ),
        'choices'		=> array(
            'page-numbers'  => __( 'Number', 'charity-fundraiser' ),
            'next-prev' => __( 'Next/Prev', 'charity-fundraiser' ),
    )));

    $wp_customize->add_setting('charity_fundraiser_blog_nav_position',array(
        'default' => 'bottom',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
    ));
	$wp_customize->add_control('charity_fundraiser_blog_nav_position', array(
        'type' => 'select',
        'label' => __( 'Blog Post Navigation Position', 'charity-fundraiser' ),
        'section' => 'charity_fundraiser_theme_layout',
        'choices' => array(
            'top' => __('Top','charity-fundraiser'),
            'bottom' => __('Bottom','charity-fundraiser'),
            'both' => __('Both','charity-fundraiser')
        ),
    ));

	$wp_customize->add_section( 'charity_fundraiser_single_post_settings', array(
		'title' => __( 'Single Post Options', 'charity-fundraiser' ),
		'panel' => 'charity_fundraiser_panel_id',
	));

	$wp_customize->add_setting('charity_fundraiser_single_post_breadcrumb',array(
       'default' => 'true',
       'sanitize_callback' => 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_single_post_breadcrumb',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Breadcrumb','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

	$wp_customize->add_setting('charity_fundraiser_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Date','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

    $wp_customize->add_setting('charity_fundraiser_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Author','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

    $wp_customize->add_setting('charity_fundraiser_single_post_comment_no',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_single_post_comment_no',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Comment Number','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

    $wp_customize->add_setting('charity_fundraiser_single_post_time',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_single_post_time',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Time','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

	$wp_customize->add_setting('charity_fundraiser_metafields_tags',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_metafields_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Tags','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

    $wp_customize->add_setting('charity_fundraiser_single_post_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Featured Image','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

    $wp_customize->add_setting( 'charity_fundraiser_post_featured_image', array(
        'default' => 'in-content',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'charity_fundraiser_post_featured_image', array(
        'section' => 'charity_fundraiser_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Featured Image Display Type', 'charity-fundraiser' ),
        'choices'		=> array(
            'banner'  => __('as Banner Image', 'charity-fundraiser'),
            'in-content' => __( 'as Featured Image', 'charity-fundraiser' ),
    )));

    $wp_customize->add_setting('charity_fundraiser_single_post_nav',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_single_post_nav',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Navigation','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

    $wp_customize->add_setting( 'charity_fundraiser_single_post_prev_nav_text', array(
		'default' => __('Previous','charity-fundraiser' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'charity_fundraiser_single_post_prev_nav_text', array(
		'label' => esc_html__( 'Single Post Previous Nav text','charity-fundraiser' ),
		'section'     => 'charity_fundraiser_single_post_settings',
		'type'        => 'text',
		'settings'    => 'charity_fundraiser_single_post_prev_nav_text'
	) );

	$wp_customize->add_setting( 'charity_fundraiser_single_post_next_nav_text', array(
		'default' => __('Next','charity-fundraiser' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'charity_fundraiser_single_post_next_nav_text', array(
		'label' => esc_html__( 'Single Post Next Nav text','charity-fundraiser' ),
		'section'     => 'charity_fundraiser_single_post_settings',
		'type'        => 'text',
		'settings'    => 'charity_fundraiser_single_post_next_nav_text'
	) );

    $wp_customize->add_setting('charity_fundraiser_single_post_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post comment','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

	$wp_customize->add_setting( 'charity_fundraiser_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Charity_Fundraiser_WP_Customize_Range_Control( $wp_customize, 'charity_fundraiser_comment_width', array(
        'label'  => __('Comment textarea width','charity-fundraiser'),
        'section'  => 'charity_fundraiser_single_post_settings',
        'description' => __('Measurement is in %.','charity-fundraiser'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
        ),
    )));

    $wp_customize->add_setting('charity_fundraiser_comment_title',array(
       'default' => __('Leave a Reply','charity-fundraiser'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('charity_fundraiser_comment_title',array(
       'type' => 'text',
       'label' => __('Comment form Title','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

    $wp_customize->add_setting('charity_fundraiser_comment_submit_text',array(
       'default' => __('Post Comment','charity-fundraiser'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('charity_fundraiser_comment_submit_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Label','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

	$wp_customize->add_setting('charity_fundraiser_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Posts','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

    $wp_customize->add_setting('charity_fundraiser_related_posts_title',array(
       'default' => __('You May Also Like','charity-fundraiser'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('charity_fundraiser_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','charity-fundraiser'),
       'section' => 'charity_fundraiser_single_post_settings'
    ));

    $wp_customize->add_setting( 'charity_fundraiser_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	) );
	$wp_customize->add_control( 'charity_fundraiser_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','charity-fundraiser' ),
		'section' => 'charity_fundraiser_single_post_settings',
		'type' => 'number',
		'settings' => 'charity_fundraiser_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'charity_fundraiser_post_shown_by', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'charity_fundraiser_post_shown_by', array(
        'section' => 'charity_fundraiser_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Related Posts must be shown:', 'charity-fundraiser' ),
        'choices'		=> array(
            'categories'  => __('By Categories', 'charity-fundraiser'),
            'tags' => __( 'By Tags', 'charity-fundraiser' ),
    )));

	// Button option
	$wp_customize->add_section( 'charity_fundraiser_button_options', array(
		'title' =>  __( 'Button Options', 'charity-fundraiser' ),
		'panel' => 'charity_fundraiser_panel_id',
	));

    $wp_customize->add_setting( 'charity_fundraiser_blog_button_text', array(
		'default'   => __('Read Full','charity-fundraiser'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'charity_fundraiser_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','charity-fundraiser' ),
		'section'     => 'charity_fundraiser_button_options',
		'type'        => 'text',
		'settings'    => 'charity_fundraiser_blog_button_text'
	) );

	$wp_customize->add_setting('charity_fundraiser_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('charity_fundraiser_button_padding',array(
		'label'	=> esc_html__('Button Padding','charity-fundraiser'),
		'section'=> 'charity_fundraiser_button_options',
		'active_callback' => 'charity_fundraiser_button_enabled'
	));

	$wp_customize->add_setting('charity_fundraiser_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_top_button_padding',array(
		'label'	=> __('Top','charity-fundraiser'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'charity_fundraiser_button_options',
		'type'=> 'number',
		'active_callback' => 'charity_fundraiser_button_enabled'
	));

	$wp_customize->add_setting('charity_fundraiser_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_bottom_button_padding',array(
		'label'	=> __('Bottom','charity-fundraiser'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'charity_fundraiser_button_options',
		'type'=> 'number',
		'active_callback' => 'charity_fundraiser_button_enabled'
	));

	$wp_customize->add_setting('charity_fundraiser_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_left_button_padding',array(
		'label'	=> __('Left','charity-fundraiser'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'charity_fundraiser_button_options',
		'type'=> 'number',
		'active_callback' => 'charity_fundraiser_button_enabled'
	));

	$wp_customize->add_setting('charity_fundraiser_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_right_button_padding',array(
		'label'	=> __('Right','charity-fundraiser'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'charity_fundraiser_button_options',
		'type'=> 'number',
		'active_callback' => 'charity_fundraiser_button_enabled'
	));

	$wp_customize->add_setting( 'charity_fundraiser_button_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Charity_Fundraiser_WP_Customize_Range_Control( $wp_customize, 'charity_fundraiser_button_border_radius', array(
            'label'  => __('Border Radius','charity-fundraiser'),
            'section'  => 'charity_fundraiser_button_options',
            'description' => __('Measurement is in pixel.','charity-fundraiser'),
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
            ),
			'active_callback' => 'charity_fundraiser_button_enabled'
    )));

    //Sidebar setting
	$wp_customize->add_section( 'charity_fundraiser_sidebar_options', array(
    	'title'   => __( 'Sidebar options', 'charity-fundraiser' ),
		'priority'   => null,
		'panel' => 'charity_fundraiser_panel_id'
	) );

	$wp_customize->add_setting('charity_fundraiser_single_page_layout',array(
        'default' => 'One Column',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
    ));
	$wp_customize->add_control('charity_fundraiser_single_page_layout', array(
        'type' => 'select',
        'label' => __( 'Single Page Layout', 'charity-fundraiser' ),
        'section' => 'charity_fundraiser_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','charity-fundraiser'),
            'Right Sidebar' => __('Right Sidebar','charity-fundraiser'),
            'One Column' => __('One Column','charity-fundraiser')
        ),
    ));

    $wp_customize->add_setting('charity_fundraiser_single_post_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
    ));
	$wp_customize->add_control('charity_fundraiser_single_post_layout', array(
        'type' => 'select',
        'label' => __( 'Single Post Layout', 'charity-fundraiser' ),
        'section' => 'charity_fundraiser_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','charity-fundraiser'),
            'Right Sidebar' => __('Right Sidebar','charity-fundraiser'),
            'One Column' => __('One Column','charity-fundraiser')
        ),
    ));

    //Advance Options
	$wp_customize->add_section( 'charity_fundraiser_advance_options', array(
    	'title' => __( 'Advance Options', 'charity-fundraiser' ),
		'priority'   => null,
		'panel' => 'charity_fundraiser_panel_id'
	) );

	$wp_customize->add_setting('charity_fundraiser_preloader',array(
       'default' => 'true',
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','charity-fundraiser'),
       'section' => 'charity_fundraiser_advance_options'
    ));

    $wp_customize->add_setting( 'charity_fundraiser_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_preloader_color', array(
  		'label' => __('Preloader Color', 'charity-fundraiser'),
	    'section' => 'charity_fundraiser_advance_options',
	    'settings' => 'charity_fundraiser_preloader_color',
  	)));

  	$wp_customize->add_setting( 'charity_fundraiser_preloader_bg_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charity_fundraiser_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'charity-fundraiser'),
	    'section' => 'charity_fundraiser_advance_options',
	    'settings' => 'charity_fundraiser_preloader_bg_color',
  	)));

  	$wp_customize->add_setting('charity_fundraiser_preloader_type',array(
        'default' => 'Square',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control('charity_fundraiser_preloader_type',array(
        'type' => 'radio',
        'label' => __('Preloader Type','charity-fundraiser'),
        'section' => 'charity_fundraiser_advance_options',
        'choices' => array(
            'Square' => __('Square','charity-fundraiser'),
            'Circle' => __('Circle','charity-fundraiser'),
        ),
	) );

	$wp_customize->add_setting('charity_fundraiser_theme_layout_options',array(
        'default' => 'Default Theme',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control('charity_fundraiser_theme_layout_options',array(
        'type' => 'radio',
        'label' => __('Theme Layout','charity-fundraiser'),
        'section' => 'charity_fundraiser_advance_options',
        'choices' => array(
            'Default Theme' => __('Default Theme','charity-fundraiser'),
            'Container Theme' => __('Container Theme','charity-fundraiser'),
            'Box Container Theme' => __('Box Container Theme','charity-fundraiser'),
        ),
	) );

	//404 Page Option
	$wp_customize->add_section('charity_fundraiser_404_settings',array(
		'title'	=> __('404 Page & Search Result Settings','charity-fundraiser'),
		'priority'	=> null,
		'panel' => 'charity_fundraiser_panel_id',
	));

	$wp_customize->add_setting('charity_fundraiser_404_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_404_title',array(
		'label'	=> __('404 Title','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('charity_fundraiser_404_button_label',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_404_button_label',array(
		'label'	=> __('404 button Label','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('charity_fundraiser_search_result_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_search_result_title',array(
		'label'	=> __('No Search Result Title','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('charity_fundraiser_search_result_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_search_result_text',array(
		'label'	=> __('No Search Result Text','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_404_settings',
		'type'		=> 'text'
	));	

	//Responsive Settings
	$wp_customize->add_section('charity_fundraiser_responsive_options',array(
		'title'	=> __('Responsive Options','charity-fundraiser'),
		'panel' => 'charity_fundraiser_panel_id'
	));

	$wp_customize->add_setting('charity_fundraiser_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Charity_Fundraiser_Icon_Selector(
        $wp_customize,'charity_fundraiser_menu_open_icon',array(
		'label'	=> __('Menu Open Icon','charity-fundraiser'),
		'section' => 'charity_fundraiser_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('charity_fundraiser_mobile_menu_label',array(
       'default' => __('Menu','charity-fundraiser'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('charity_fundraiser_mobile_menu_label',array(
       'type' => 'text',
       'label' => __('Mobile Menu Label','charity-fundraiser'),
       'section' => 'charity_fundraiser_responsive_options'
    ));

	$wp_customize->add_setting('charity_fundraiser_menu_close_icon',array(
		'default'	=> 'fas fa-times-circle',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Charity_Fundraiser_Icon_Selector(
        $wp_customize,'charity_fundraiser_menu_close_icon',array(
		'label'	=> __('Menu Close Icon','charity-fundraiser'),
		'section' => 'charity_fundraiser_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('charity_fundraiser_close_menu_label',array(
       'default' => __('Close Menu','charity-fundraiser'),
       'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('charity_fundraiser_close_menu_label',array(
       'type' => 'text',
       'label' => __('Close Menu Label','charity-fundraiser'),
       'section' => 'charity_fundraiser_responsive_options'
    ));

    $wp_customize->add_setting('charity_fundraiser_sticky_header_responsive',array(
        'default' => false,
        'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
	));
	$wp_customize->add_control('charity_fundraiser_sticky_header_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Sticky Header','charity-fundraiser'),
      	'section' => 'charity_fundraiser_responsive_options',
	));

    $wp_customize->add_setting('charity_fundraiser_preloader_responsive',array(
        'default' => false,
        'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
	));
	$wp_customize->add_control('charity_fundraiser_preloader_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Preloader','charity-fundraiser'),
      	'section' => 'charity_fundraiser_responsive_options',
	));

	$wp_customize->add_setting('charity_fundraiser_backtotop_responsive',array(
        'default' => true,
        'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
	));
	$wp_customize->add_control('charity_fundraiser_backtotop_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Back to Top','charity-fundraiser'),
      	'section' => 'charity_fundraiser_responsive_options',
	));

	//Woocommerce Options
	$wp_customize->add_section('charity_fundraiser_woocommerce',array(
		'title'	=> __('WooCommerce Options','charity-fundraiser'),
		'panel' => 'charity_fundraiser_panel_id',
	));

	$wp_customize->add_setting('charity_fundraiser_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback' => 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Sidebar','charity-fundraiser'),
       'section' => 'charity_fundraiser_woocommerce'
    ));

    $wp_customize->add_setting('charity_fundraiser_shop_page_navigation',array(
       'default' => true,
       'sanitize_callback' => 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_shop_page_navigation',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Pagination','charity-fundraiser'),
       'section' => 'charity_fundraiser_woocommerce'
    ));

    $wp_customize->add_setting('charity_fundraiser_single_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_single_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Single Product Page Sidebar','charity-fundraiser'),
       'section' => 'charity_fundraiser_woocommerce'
    ));

    $wp_customize->add_setting('charity_fundraiser_single_related_products',array(
       'default' => true,
       'sanitize_callback' => 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_single_related_products',array(
       'type' => 'checkbox',
       'label' => __('Enable related Products','charity-fundraiser'),
       'section' => 'charity_fundraiser_woocommerce'
    ));

    $wp_customize->add_setting('charity_fundraiser_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_products_per_page',array(
		'label'	=> __('Products Per Page','charity-fundraiser'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'charity_fundraiser_woocommerce',
		'type'=> 'number',
	));

	$wp_customize->add_setting('charity_fundraiser_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control('charity_fundraiser_products_per_row',array(
		'label'	=> __('Products Per Row','charity-fundraiser'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'charity_fundraiser_woocommerce',
		'type'=> 'select',
	));

	$wp_customize->add_setting('charity_fundraiser_product_border',array(
       'default' => true,
       'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
    ));
    $wp_customize->add_control('charity_fundraiser_product_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide product border','charity-fundraiser'),
       'section' => 'charity_fundraiser_woocommerce',
    ));

    $wp_customize->add_setting('charity_fundraiser_product_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('charity_fundraiser_product_padding',array(
		'label'	=> esc_html__('Product Padding','charity-fundraiser'),
		'section'=> 'charity_fundraiser_woocommerce',
	));

	$wp_customize->add_setting( 'charity_fundraiser_product_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_top_padding', array(
		'label' => esc_html__( 'Top','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('charity_fundraiser_product_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_bottom_padding', array(
		'label' => esc_html__( 'Bottom','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('charity_fundraiser_product_left_padding',array(
		'default' => 10,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_left_padding', array(
		'label' => esc_html__( 'Left','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'charity_fundraiser_product_right_padding',array(
		'default' => 10,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_right_padding', array(
		'label' => esc_html__( 'Right','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'charity_fundraiser_product_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Charity_Fundraiser_WP_Customize_Range_Control( $wp_customize, 'charity_fundraiser_product_border_radius', array(
        'label'  => __('Product Border Radius','charity-fundraiser'),
        'section'  => 'charity_fundraiser_woocommerce',
        'description' => __('Measurement is in pixel.','charity-fundraiser'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	$wp_customize->add_setting('charity_fundraiser_product_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('charity_fundraiser_product_button_padding',array(
		'label'	=> esc_html__('Product Button Padding','charity-fundraiser'),
		'section'=> 'charity_fundraiser_woocommerce',
	));

	$wp_customize->add_setting( 'charity_fundraiser_product_button_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_button_top_padding', array(
		'label' => esc_html__( 'Top','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('charity_fundraiser_product_button_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_button_bottom_padding', array(
		'label' => esc_html__( 'Bottom','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('charity_fundraiser_product_button_left_padding',array(
		'default' => 15,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_button_left_padding', array(
		'label' => esc_html__( 'Left','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'charity_fundraiser_product_button_right_padding',array(
		'default' => 15,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_button_right_padding', array(
		'label' => esc_html__( 'Right','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'charity_fundraiser_product_button_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Charity_Fundraiser_WP_Customize_Range_Control( $wp_customize, 'charity_fundraiser_product_button_border_radius', array(
        'label'  => __('Product Button Border Radius','charity-fundraiser'),
        'section'  => 'charity_fundraiser_woocommerce',
        'description' => __('Measurement is in pixel.','charity-fundraiser'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('charity_fundraiser_product_sale_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control('charity_fundraiser_product_sale_position',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','charity-fundraiser'),
        'section' => 'charity_fundraiser_woocommerce',
        'choices' => array(
            'Left' => __('Left','charity-fundraiser'),
            'Right' => __('Right','charity-fundraiser'),
        ),
	) );

	$wp_customize->add_setting( 'charity_fundraiser_product_sale_font_size',array(
		'default' => '13',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Charity_Fundraiser_WP_Customize_Range_Control( $wp_customize, 'charity_fundraiser_product_sale_font_size', array(
        'label'  => __('Product Sale Font Size','charity-fundraiser'),
        'section'  => 'charity_fundraiser_woocommerce',
        'description' => __('Measurement is in pixel.','charity-fundraiser'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('charity_fundraiser_product_sale_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('charity_fundraiser_product_sale_padding',array(
		'label'	=> esc_html__('Product Sale Padding','charity-fundraiser'),
		'section'=> 'charity_fundraiser_woocommerce',
	));

	$wp_customize->add_setting( 'charity_fundraiser_product_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_sale_top_padding', array(
		'label' => esc_html__( 'Top','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('charity_fundraiser_product_sale_bottom_padding',array(
		'default' => 0,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_sale_bottom_padding', array(
		'label' => esc_html__( 'Bottom','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('charity_fundraiser_product_sale_left_padding',array(
		'default' => 0,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_sale_left_padding', array(
		'label' => esc_html__( 'Left','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('charity_fundraiser_product_sale_right_padding',array(
		'default' => 0,
		'sanitize_callback' => 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_product_sale_right_padding', array(
		'label' => esc_html__( 'Right','charity-fundraiser' ),
		'type' => 'number',
		'section' => 'charity_fundraiser_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'charity_fundraiser_product_sale_border_radius',array(
		'default' => '50',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Charity_Fundraiser_WP_Customize_Range_Control( $wp_customize, 'charity_fundraiser_product_sale_border_radius', array(
        'label'  => __('Product Sale Border Radius','charity-fundraiser'),
        'section'  => 'charity_fundraiser_woocommerce',
        'description' => __('Measurement is in pixel.','charity-fundraiser'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//footer text
	$wp_customize->add_section('charity_fundraiser_footer_section',array(
		'title'	=> __('Footer Section','charity-fundraiser'),
		'panel' => 'charity_fundraiser_panel_id'
	));

	$wp_customize->add_setting('charity_fundraiser_hide_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'charity_fundraiser_sanitize_checkbox'
	));
	$wp_customize->add_control('charity_fundraiser_hide_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back To Top','charity-fundraiser'),
      	'section' => 'charity_fundraiser_footer_section',
	));

	$wp_customize->add_setting('charity_fundraiser_back_to_top',array(
        'default' => 'Right',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control('charity_fundraiser_back_to_top',array(
        'type' => 'radio',
        'label' => __('Back to Top Alignment','charity-fundraiser'),
        'section' => 'charity_fundraiser_footer_section',
        'choices' => array(
            'Left' => __('Left','charity-fundraiser'),
            'Right' => __('Right','charity-fundraiser'),
            'Center' => __('Center','charity-fundraiser'),
        ),
	) );

	$wp_customize->add_setting('charity_fundraiser_footer_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'charity_fundraiser_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'charity-fundraiser'),
		'section'  => 'charity_fundraiser_footer_section',
	)));

	$wp_customize->add_setting('charity_fundraiser_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'charity_fundraiser_footer_bg_image',array(
        'label' => __('Footer Background Image','charity-fundraiser'),
        'section' => 'charity_fundraiser_footer_section'
	)));

	$wp_customize->add_setting('charity_fundraiser_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices',
    ));
    $wp_customize->add_control('charity_fundraiser_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer columns', 'charity-fundraiser'),
        'section'     => 'charity_fundraiser_footer_section',
        'description' => __('Select the number of footer columns and add your widgets in the footer.', 'charity-fundraiser'),
        'choices' => array(
            '1'     => __('One column', 'charity-fundraiser'),
            '2'     => __('Two columns', 'charity-fundraiser'),
            '3'    => __('Three columns', 'charity-fundraiser'),
            '4'     => __('Four columns', 'charity-fundraiser')
        ),
    )); 

    $wp_customize->add_setting('charity_fundraiser_copyright_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'charity_fundraiser_copyright_bg_color', array(
		'label'    => __('Copyright Background Color', 'charity-fundraiser'),
		'section'  => 'charity_fundraiser_footer_section',
	)));

    $wp_customize->add_setting('charity_fundraiser_copyright_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('charity_fundraiser_copyright_padding',array(
		'label'	=> esc_html__('Copyright Padding','charity-fundraiser'),
		'section'=> 'charity_fundraiser_footer_section',
	));

    $wp_customize->add_setting('charity_fundraiser_top_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_top_copyright_padding',array(
		'description'	=> __('Top','charity-fundraiser'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'charity_fundraiser_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('charity_fundraiser_bottom_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'charity_fundraiser_sanitize_float'
	));
	$wp_customize->add_control('charity_fundraiser_bottom_copyright_padding',array(
		'description'	=> __('Bottom','charity-fundraiser'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'charity_fundraiser_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('charity_fundraiser_copyright_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'charity_fundraiser_sanitize_choices'
	));
	$wp_customize->add_control('charity_fundraiser_copyright_alignment',array(
        'type' => 'radio',
        'label' => __('Copyright Alignment','charity-fundraiser'),
        'section' => 'charity_fundraiser_footer_section',
        'choices' => array(
            'left' => __('Left','charity-fundraiser'),
            'right' => __('Right','charity-fundraiser'),
            'center' => __('Center','charity-fundraiser'),
        ),
	) );

	$wp_customize->add_setting( 'charity_fundraiser_copyright_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Charity_Fundraiser_WP_Customize_Range_Control( $wp_customize, 'charity_fundraiser_copyright_font_size', array(
            'label'  => __('Copyright Font Size','charity-fundraiser'),
            'section'  => 'charity_fundraiser_footer_section',
            'description' => __('Measurement is in pixel.','charity-fundraiser'),
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
            )
    ))); 
	
	$wp_customize->add_setting('charity_fundraiser_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('charity_fundraiser_text',array(
		'label'	=> __('Copyright Text','charity-fundraiser'),
		'description'	=> __('Add some text for footer like copyright etc.','charity-fundraiser'),
		'section'	=> 'charity_fundraiser_footer_section',
		'type'		=> 'text'
	));
}
add_action( 'customize_register', 'charity_fundraiser_customize_register' );	

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Charity_Fundraiser_Customize {

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
		$manager->register_section_type( 'Charity_Fundraiser_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Charity_Fundraiser_Customize_Section_Pro(
			$manager,
			'charity_fundraiser_pro_link',
				array(
				'priority'   => 9,
				'title'    => esc_html__( 'Charity Fundraiser Pro', 'charity-fundraiser' ),
				'pro_text' => esc_html__( 'Go Pro', 'charity-fundraiser' ),
				'pro_url'  => esc_url('https://www.themesglance.com/themes/premium-charity-wordpress-theme/')
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

		wp_enqueue_script( 'charity-fundraiser-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'charity-fundraiser-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Charity_Fundraiser_Customize::get_instance();