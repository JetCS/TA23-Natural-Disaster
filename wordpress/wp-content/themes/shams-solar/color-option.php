<?php

	$shams_solar_theme_color = get_theme_mod('shams_solar_theme_color');

	$shams_solar_custom_css = '';

	$shams_solar_custom_css .='#services .service-box:hover h3,.topbar, .readbutton:hover, #services .service-box:hover h4, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .post-link a, .post-info, #sidebox h3, button.search-submit:hover, .search-form button.search-submit , .site-info, .widget .tagcloud a:hover,.widget .tagcloud a:focus,.widget.widget_tag_cloud a:hover,.widget.widget_tag_cloud a:focus,.wp_widget_tag_cloud a:hover,.wp_widget_tag_cloud a:focus, button,input[type="button"],input[type="submit"],.prev.page-numbers:focus,.prev.page-numbers:hover,.next.page-numbers:focus,#services .service-para p,.scrollup i,.tags p a,.post-navigation .nav-previous a,.post-navigation .nav-next a,.page-numbers,.comment-reply-link, #sidebox .widget_shopping_cart .buttons a:hover, #sidebox .widget_price_filter .price_slider_amount .button:hover, .site-footer .widget_shopping_cart .buttons a:hover, .site-footer .widget_price_filter .price_slider_amount .button:hover, .site-footer form.woocommerce-product-search button:hover, .site-footer form.woocommerce-product-search button:focus, #sidebox .widget_price_filter .ui-slider-horizontal .ui-slider-range, #sidebox .widget_price_filter .ui-slider .ui-slider-handle, .site-footer .widget_price_filter .ui-slider-horizontal .ui-slider-range, .site-footer .widget_price_filter .ui-slider .ui-slider-handle, .nav-links .nav-previous a, .nav-links .nav-next a, #sidebox button[type="submit"], .site-footer button[type="submit"]{';
		$shams_solar_custom_css .='background-color: '.esc_attr($shams_solar_theme_color).';';
	$shams_solar_custom_css .='}';

	$shams_solar_custom_css .='a, .search-body span i, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .post-link a:hover, .site-footer h3, button:hover, button:focus, input[type="button"]:hover, input[type="button"]:focus, input[type="submit"]:hover, input[type="submit"]:focus,.main-navigation ul ul li a,.main-navigation li li:focus > a, .main-navigation li li:hover > a,.search-body i,.text code,#sidebox ul li a:hover, .main-navigation a:hover,.blogger h2 a:hover,p.logged-in-as a, .related-posts h3 a:hover, .category a:hover, .woocommerce-info a:hover {';
		$shams_solar_custom_css .='color: '.esc_attr($shams_solar_theme_color).';';
	$shams_solar_custom_css .='}';

	$shams_solar_custom_css .='.readbutton:hover,.scrollup i{';
		$shams_solar_custom_css .='border-color: '.esc_attr($shams_solar_theme_color).';';
	$shams_solar_custom_css .='}';

	$shams_solar_custom_css .='.main-navigation ul ul li:hover{';
		$shams_solar_custom_css .='border-left-color: '.esc_attr($shams_solar_theme_color).';';
	$shams_solar_custom_css .='}';

	$shams_solar_custom_css .='.site-footer h3{';
		$shams_solar_custom_css .='border-bottom-color: '.esc_attr($shams_solar_theme_color).';';
	$shams_solar_custom_css .='}';

	$shams_solar_custom_css .='.site-footer ul li a:hover{';
		$shams_solar_custom_css .='color: '.esc_attr($shams_solar_theme_color).'!important;';
	$shams_solar_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$shams_solar_theme_lay = get_theme_mod( 'shams_solar_theme_options','Default');
    if($shams_solar_theme_lay == 'Default'){
		$shams_solar_custom_css .='body{';
			$shams_solar_custom_css .='max-width: 100%;';
		$shams_solar_custom_css .='}';
		$shams_solar_custom_css .='.page-template-custom-home-page .middle-header{';
			$shams_solar_custom_css .='width: 97.3%';
		$shams_solar_custom_css .='}';
	}else if($shams_solar_theme_lay == 'Wide Layout'){
		$shams_solar_custom_css .='body{';
			$shams_solar_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$shams_solar_custom_css .='}';
		$shams_solar_custom_css .='.page-template-custom-home-page .middle-header{';
			$shams_solar_custom_css .='width: 97.7%';
		$shams_solar_custom_css .='}';
	}else if($shams_solar_theme_lay == 'Box Layout'){
		$shams_solar_custom_css .='body{';
			$shams_solar_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$shams_solar_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$shams_solar_slider_layout = get_theme_mod( 'shams_solar_slider_opacity_color','0.3');
	if($shams_solar_slider_layout == '0'){
		$shams_solar_custom_css .='#slider img{';
			$shams_solar_custom_css .='opacity:0';
		$shams_solar_custom_css .='}';
		}else if($shams_solar_slider_layout == '0.1'){
		$shams_solar_custom_css .='#slider img{';
			$shams_solar_custom_css .='opacity:0.1';
		$shams_solar_custom_css .='}';
		}else if($shams_solar_slider_layout == '0.2'){
		$shams_solar_custom_css .='#slider img{';
			$shams_solar_custom_css .='opacity:0.2';
		$shams_solar_custom_css .='}';
		}else if($shams_solar_slider_layout == '0.3'){
		$shams_solar_custom_css .='#slider img{';
			$shams_solar_custom_css .='opacity:0.3';
		$shams_solar_custom_css .='}';
		}else if($shams_solar_slider_layout == '0.4'){
		$shams_solar_custom_css .='#slider img{';
			$shams_solar_custom_css .='opacity:0.4';
		$shams_solar_custom_css .='}';
		}else if($shams_solar_slider_layout == '0.5'){
		$shams_solar_custom_css .='#slider img{';
			$shams_solar_custom_css .='opacity:0.5';
		$shams_solar_custom_css .='}';
		}else if($shams_solar_slider_layout == '0.6'){
		$shams_solar_custom_css .='#slider img{';
			$shams_solar_custom_css .='opacity:0.6';
		$shams_solar_custom_css .='}';
		}else if($shams_solar_slider_layout == '0.7'){
		$shams_solar_custom_css .='#slider img{';
			$shams_solar_custom_css .='opacity:0.7';
		$shams_solar_custom_css .='}';
		}else if($shams_solar_slider_layout == '0.8'){
		$shams_solar_custom_css .='#slider img{';
			$shams_solar_custom_css .='opacity:0.8';
		$shams_solar_custom_css .='}';
		}else if($shams_solar_slider_layout == '0.9'){
		$shams_solar_custom_css .='#slider img{';
			$shams_solar_custom_css .='opacity:0.9';
		$shams_solar_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/
	$shams_solar_slider_layout = get_theme_mod( 'shams_solar_slider_content_option','Left');
    if($shams_solar_slider_layout == 'Left'){
		$shams_solar_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$shams_solar_custom_css .='text-align:left; left:15%; right:45%;';
		$shams_solar_custom_css .='}';
		$shams_solar_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 768px){
		#slider .carousel-caption{';
		$shams_solar_custom_css .='top:33%;';
		$shams_solar_custom_css .='} }';
	}else if($shams_solar_slider_layout == 'Center'){
		$shams_solar_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$shams_solar_custom_css .='text-align:center; left:20%; right:20%;';
		$shams_solar_custom_css .='}';
		$shams_solar_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		#slider .carousel-caption{';
		$shams_solar_custom_css .='top:40%;';
		$shams_solar_custom_css .='} }';
	}else if($shams_solar_slider_layout == 'Right'){
		$shams_solar_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$shams_solar_custom_css .='text-align:right; left:45%; right:15%;';
		$shams_solar_custom_css .='}';
		$shams_solar_custom_css .='
		@media screen and (max-width: 990px) and (min-width: 768px){
		#slider .carousel-caption{';
		$shams_solar_custom_css .='top:40%;';
		$shams_solar_custom_css .='} }';
	}

	/*----------------------------- Button Settings option-----------------------*/
	$shams_solar_top_bottom_padding = get_theme_mod('shams_solar_top_bottom_padding');
	$shams_solar_left_right_padding = get_theme_mod('shams_solar_left_right_padding');
	$shams_solar_custom_css .='.post-link a, #slider .readbutton, .form-submit input[type="submit"]{';
		$shams_solar_custom_css .='padding-top: '.esc_attr($shams_solar_top_bottom_padding).'px; padding-bottom: '.esc_attr($shams_solar_top_bottom_padding).'px; padding-left: '.esc_attr($shams_solar_left_right_padding).'px; padding-right: '.esc_attr($shams_solar_left_right_padding).'px; display:inline-block;';
	$shams_solar_custom_css .='}';

	$shams_solar_border_radius = get_theme_mod('shams_solar_border_radius');
	$shams_solar_custom_css .='.post-link a,#slider .readbutton, .form-submit input[type="submit"]{';
		$shams_solar_custom_css .='border-radius: '.esc_attr($shams_solar_border_radius).'px;';
	$shams_solar_custom_css .='}';

	/*---------------------------Blog Layout -------------------*/
	$shams_solar_theme_lay = get_theme_mod( 'shams_solar_blog_post_layout','Default');
    if($shams_solar_theme_lay == 'Default'){
		$shams_solar_custom_css .='.blogger{';
			$shams_solar_custom_css .='';
		$shams_solar_custom_css .='}';
	}else if($shams_solar_theme_lay == 'Center'){
		$shams_solar_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link{';
			$shams_solar_custom_css .='text-align:center;';
		$shams_solar_custom_css .='}';
		$shams_solar_custom_css .='.post-info{';
			$shams_solar_custom_css .='margin-top:10px;';
		$shams_solar_custom_css .='}';
		$shams_solar_custom_css .='.blogger .post-link{';
			$shams_solar_custom_css .='margin-top:25px;';
		$shams_solar_custom_css .='}';
	}else if($shams_solar_theme_lay == 'Image and Content'){
		$shams_solar_custom_css .='.blogger, .blogger h2, .post-info, .text p, #our-services p{';
			$shams_solar_custom_css .='text-align:Left;';
		$shams_solar_custom_css .='}';
		$shams_solar_custom_css .='.blogger .post-link{';
			$shams_solar_custom_css .='text-align:right;';
		$shams_solar_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$shams_solar_loader_color_setting = get_theme_mod('shams_solar_loader_color_setting');
	$shams_solar_custom_css .=' .circle .inner{';
		$shams_solar_custom_css .='border-color: '.esc_attr($shams_solar_loader_color_setting).';';
	$shams_solar_custom_css .='} ';

	$shams_solar_loader_background_color = get_theme_mod('shams_solar_loader_background_color');
	$shams_solar_custom_css .=' #pre-loader{';
		$shams_solar_custom_css .='background-color: '.esc_attr($shams_solar_loader_background_color).' !important;';
	$shams_solar_custom_css .='} ';

	$shams_solar_theme_lay = get_theme_mod( 'shams_solar_preloader_types','Default');
    if($shams_solar_theme_lay == 'Default'){
		$shams_solar_custom_css .='{';
			$shams_solar_custom_css .='';
		$shams_solar_custom_css .='}';
	}elseif($shams_solar_theme_lay == 'Circle'){
		$shams_solar_custom_css .='.circle .inner{';
			$shams_solar_custom_css .='width:unset;';
		$shams_solar_custom_css .='}';
	}elseif($shams_solar_theme_lay == 'Two Circle'){
		$shams_solar_custom_css .='.circle .inner{';
			$shams_solar_custom_css .='width:80%;
    border-right: 5px;';
		$shams_solar_custom_css .='}';
	}

	// Responsive Media
	$shams_solar_sidebar = get_theme_mod( 'shams_solar_enable_disable_sidebar',true);
    if($shams_solar_sidebar == true){
    	$shams_solar_custom_css .='@media screen and (max-width:575px) {';
		$shams_solar_custom_css .='#sidebox{';
			$shams_solar_custom_css .='display:block;';
		$shams_solar_custom_css .='} }';
	}else if($shams_solar_sidebar == false){
		$shams_solar_custom_css .='@media screen and (max-width:575px) {';
		$shams_solar_custom_css .='#sidebox{';
			$shams_solar_custom_css .='display:none;';
		$shams_solar_custom_css .='} }';
	}

	$shams_solar_stickyheader = get_theme_mod( 'shams_solar_enable_disable_topbar',false);
	if($shams_solar_stickyheader == true && get_theme_mod( 'shams_solar_show_hide_topbar', false) == false){
    	$shams_solar_custom_css .='.topbar{';
			$shams_solar_custom_css .='display:none;';
		$shams_solar_custom_css .='} ';
	}
    if($shams_solar_stickyheader == true){
    	$shams_solar_custom_css .='@media screen and (max-width:575px) {';
		$shams_solar_custom_css .='.topbar{';
			$shams_solar_custom_css .='display:block;';
		$shams_solar_custom_css .='} }';
	}else if($shams_solar_stickyheader == false){
		$shams_solar_custom_css .='@media screen and (max-width:575px) {';
		$shams_solar_custom_css .='.topbar{';
			$shams_solar_custom_css .='display:none;';
		$shams_solar_custom_css .='} }';
	}

	$shams_solar_slider = get_theme_mod( 'shams_solar_enable_disable_slider', false);
	if($shams_solar_slider == true && get_theme_mod( 'shams_solar_slider_arrows', false) == false){
    	$shams_solar_custom_css .='#slider{';
			$shams_solar_custom_css .='display:none;';
		$shams_solar_custom_css .='} ';
	}
    if($shams_solar_slider == true){
    	$shams_solar_custom_css .='@media screen and (max-width:575px) {';
		$shams_solar_custom_css .='#slider{';
			$shams_solar_custom_css .='display:block;';
		$shams_solar_custom_css .='} }';
	}else if($shams_solar_slider == false){
		$shams_solar_custom_css .='@media screen and (max-width:575px){';
		$shams_solar_custom_css .='#slider{';
			$shams_solar_custom_css .='display:none;';
		$shams_solar_custom_css .='} }';
	}

	$shams_solar_sliderbutton = get_theme_mod( 'shams_solar_show_hide_slider_button', true);
	if($shams_solar_sliderbutton == true && get_theme_mod( 'shams_solar_slider_button', true) != true){
    	$shams_solar_custom_css .='#slider .readbutton{';
			$shams_solar_custom_css .='display:none;';
		$shams_solar_custom_css .='} ';
	}
    if($shams_solar_sliderbutton == true){
    	$shams_solar_custom_css .='@media screen and (max-width:575px) {';
		$shams_solar_custom_css .='#slider .readbutton{';
			$shams_solar_custom_css .='display:inline-block;';
		$shams_solar_custom_css .='} }';
	}else if($shams_solar_sliderbutton != true){
		$shams_solar_custom_css .='@media screen and (max-width:575px){';
		$shams_solar_custom_css .='#slider .readbutton{';
			$shams_solar_custom_css .='display:none;';
		$shams_solar_custom_css .='} }';
	}

	$shams_solar_scroll = get_theme_mod( 'shams_solar_enable_disable_scrolltop', false);
	if($shams_solar_scroll == true && get_theme_mod( 'shams_solar_hide_show_scroll', false) == false){
    	$shams_solar_custom_css .='.scrollup i{';
			$shams_solar_custom_css .='display:none;';
		$shams_solar_custom_css .='} ';
	}
    if($shams_solar_scroll == true){
    	$shams_solar_custom_css .='@media screen and (max-width:575px) {';
		$shams_solar_custom_css .='.scrollup i{';
			$shams_solar_custom_css .='display:block;';
		$shams_solar_custom_css .='} }';
	}else if($shams_solar_scroll == false){
		$shams_solar_custom_css .='@media screen and (max-width:575px){';
		$shams_solar_custom_css .='.scrollup i{';
			$shams_solar_custom_css .='display:none;';
		$shams_solar_custom_css .='} }';
	}

	// Copyright top-bottom padding setting 
	$shams_solar_copyright_top_bottom_padding = get_theme_mod('shams_solar_copyright_top_bottom_padding');
	$shams_solar_custom_css .='.site-info{';
		$shams_solar_custom_css .='padding-top: '.esc_attr($shams_solar_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($shams_solar_copyright_top_bottom_padding).'px;';
	$shams_solar_custom_css .='}';

	$shams_solar_footer_text_font_size = get_theme_mod('shams_solar_footer_text_font_size', 16);
	$shams_solar_custom_css .='.site-info{';
		$shams_solar_custom_css .='font-size: '.esc_attr($shams_solar_footer_text_font_size).'px;';
	$shams_solar_custom_css .='}';

	// Slider Height 
	$shams_solar_slider_height_option = get_theme_mod('shams_solar_slider_height_option');
	$shams_solar_custom_css .='#slider img{';
		$shams_solar_custom_css .='height: '.esc_attr($shams_solar_slider_height_option).'px;';
	$shams_solar_custom_css .='}';

	// scroll to top setting
	$shams_solar_scroll_border_radius = get_theme_mod('shams_solar_scroll_border_radius');
	$shams_solar_custom_css .='.scrollup i{';
		$shams_solar_custom_css .='border-radius: '.esc_attr($shams_solar_scroll_border_radius).'px;';
	$shams_solar_custom_css .='}';

	$shams_solar_scroll_top_fontsize = get_theme_mod('shams_solar_scroll_top_fontsize');
	$shams_solar_custom_css .='.scrollup i{';
		$shams_solar_custom_css .='font-size: '.esc_attr($shams_solar_scroll_top_fontsize).'px;';
	$shams_solar_custom_css .='}';

	$shams_solar_scroll_top_bottom_padding = get_theme_mod('shams_solar_scroll_top_bottom_padding');
	$shams_solar_scroll_left_right_padding = get_theme_mod('shams_solar_scroll_left_right_padding');
	$shams_solar_custom_css .='.scrollup i{';
		$shams_solar_custom_css .='padding-top: '.esc_attr($shams_solar_scroll_top_bottom_padding).'px; padding-bottom: '.esc_attr($shams_solar_scroll_top_bottom_padding).'px; padding-left: '.esc_attr($shams_solar_scroll_left_right_padding).'px; padding-right: '.esc_attr($shams_solar_scroll_left_right_padding).'px;';
	$shams_solar_custom_css .='}';

	// comment settings
	$shams_solar_comment_button_text = get_theme_mod('shams_solar_comment_button_text', 'Post Comment');
	if($shams_solar_comment_button_text == ''){
		$shams_solar_custom_css .='#comments p.form-submit {';
			$shams_solar_custom_css .='display: none;';
		$shams_solar_custom_css .='}';
	}

	$shams_solar_comment_form_heading = get_theme_mod('shams_solar_comment_form_heading', 'Leave a Reply');
	if($shams_solar_comment_form_heading == ''){
		$shams_solar_custom_css .='#comments h2#reply-title {';
			$shams_solar_custom_css .='display: none;';
		$shams_solar_custom_css .='}';
	}

	$shams_solar_comment_form_size = get_theme_mod( 'shams_solar_comment_form_size',100);
	$shams_solar_custom_css .='#comments textarea{';
		$shams_solar_custom_css .='width: '.esc_attr($shams_solar_comment_form_size).'%;';
	$shams_solar_custom_css .='}';

	/*------------ Woocommerce Settings  --------------*/
	$shams_solar_shop_button_padding_top = get_theme_mod('shams_solar_shop_button_padding_top', 9);
	$shams_solar_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$shams_solar_custom_css .='padding-top: '.esc_attr($shams_solar_shop_button_padding_top).'px; padding-bottom: '.esc_attr($shams_solar_shop_button_padding_top).'px;';
	$shams_solar_custom_css .='}';

	$shams_solar_shop_button_padding_left = get_theme_mod('shams_solar_shop_button_padding_left', 16);
	$shams_solar_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$shams_solar_custom_css .='padding-left: '.esc_attr($shams_solar_shop_button_padding_left).'px; padding-right: '.esc_attr($shams_solar_shop_button_padding_left).'px;';
	$shams_solar_custom_css .='}';

	$shams_solar_shop_button_border_radius = get_theme_mod('shams_solar_shop_button_border_radius',3);
	$shams_solar_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$shams_solar_custom_css .='border-radius: '.esc_attr($shams_solar_shop_button_border_radius).'px;';
	$shams_solar_custom_css .='}';

	$shams_solar_display_related_products = get_theme_mod('shams_solar_display_related_products',true);
	if($shams_solar_display_related_products == false){
		$shams_solar_custom_css .='.related.products{';
			$shams_solar_custom_css .='display: none;';
		$shams_solar_custom_css .='}';
	}

	$shams_solar_shop_products_border = get_theme_mod('shams_solar_shop_products_border', true);
	if($shams_solar_shop_products_border == false){
		$shams_solar_custom_css .='.woocommerce .products li{';
			$shams_solar_custom_css .='border: none;';
		$shams_solar_custom_css .='}';
	}

	$shams_solar_shop_page_top_padding = get_theme_mod('shams_solar_shop_page_top_padding',10);
	$shams_solar_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$shams_solar_custom_css .='padding-top: '.esc_attr($shams_solar_shop_page_top_padding).'px !important; padding-bottom: '.esc_attr($shams_solar_shop_page_top_padding).'px !important;';
	$shams_solar_custom_css .='}';

	$shams_solar_shop_page_left_padding = get_theme_mod('shams_solar_shop_page_left_padding',10);
	$shams_solar_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$shams_solar_custom_css .='padding-left: '.esc_attr($shams_solar_shop_page_left_padding).'px !important; padding-right: '.esc_attr($shams_solar_shop_page_left_padding).'px !important;';
	$shams_solar_custom_css .='}';

	$shams_solar_shop_page_border_radius = get_theme_mod('shams_solar_shop_page_border_radius',0);
	$shams_solar_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$shams_solar_custom_css .='border-radius: '.esc_attr($shams_solar_shop_page_border_radius).'px;';
	$shams_solar_custom_css .='}';

	$shams_solar_shop_page_box_shadow = get_theme_mod('shams_solar_shop_page_box_shadow',0);
	$shams_solar_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$shams_solar_custom_css .='box-shadow: '.esc_attr($shams_solar_shop_page_box_shadow).'px '.esc_attr($shams_solar_shop_page_box_shadow).'px '.esc_attr($shams_solar_shop_page_box_shadow).'px #e4e4e4;';
	$shams_solar_custom_css .='}';

	// footer widget background
	$shams_solar_footer_widget_background = get_theme_mod('shams_solar_footer_widget_background', '#1f1e1e');
	$shams_solar_custom_css .='.site-footer{';
		$shams_solar_custom_css .='background-color: '.esc_attr($shams_solar_footer_widget_background).';';
	$shams_solar_custom_css .='}';

	$shams_solar_footer_widget_image = get_theme_mod('shams_solar_footer_widget_image');
	if($shams_solar_footer_widget_image != false){
		$shams_solar_custom_css .='.site-footer{';
			$shams_solar_custom_css .='background: url('.esc_attr($shams_solar_footer_widget_image).');';
		$shams_solar_custom_css .='}';
	}

	/*------------- Navigation Menu Font Size ------------------*/
	$shams_solar_navigation_menu_font_size = get_theme_mod('shams_solar_navigation_menu_font_size');{
		$shams_solar_custom_css .='.main-navigation a, .navigation-top a{';
			$shams_solar_custom_css .='font-size: '.esc_attr($shams_solar_navigation_menu_font_size).'px;';
		$shams_solar_custom_css .='}';
	}

	$shams_solar_theme_lay = get_theme_mod( 'shams_solar_menu_text_tranform','Default');
	if($shams_solar_theme_lay == 'Uppercase'){
		$shams_solar_custom_css .='.main-navigation a, .navigation-top a,.main-navigation ul ul a{';
			$shams_solar_custom_css .='text-transform:Uppercase;';
		$shams_solar_custom_css .='}';
	}

	$shams_solar_theme_lay = get_theme_mod( 'shams_solar_menu_font_weight','Default');
	if($shams_solar_theme_lay == 'Normal'){
		$shams_solar_custom_css .='.main-navigation a, .navigation-top a{';
			$shams_solar_custom_css .='font-weight: normal;';
		$shams_solar_custom_css .='}';
	}

	// site title font size option
	$shams_solar_site_title_font_size = get_theme_mod('shams_solar_site_title_font_size', 30);{
	$shams_solar_custom_css .='.logo h1, .site-title a{';
	$shams_solar_custom_css .='font-size: '.esc_attr($shams_solar_site_title_font_size).'px;';
		$shams_solar_custom_css .='}';
	}

	$shams_solar_site_tagline_font_size_settings = get_theme_mod('shams_solar_site_tagline_font_size_settings', 13);{
	$shams_solar_custom_css .='.logo p.site-description{';
	$shams_solar_custom_css .='font-size: '.esc_attr($shams_solar_site_tagline_font_size_settings).'px;';
		$shams_solar_custom_css .='}';
	}

	/*------------------ Background Skin Option  -------------------*/
	$shams_solar_theme_lay = get_theme_mod( 'shams_solar_background_image_type','Transparent');
    if($shams_solar_theme_lay == 'Background'){
		$shams_solar_custom_css .='.blogger, #sidebox .widget, .about-text, .related-posts .page-box, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .background-img-skin, .pages-te, .woocommerce .woocommerce-ordering{';
			$shams_solar_custom_css .='background-color: #fff;';
		$shams_solar_custom_css .='}';
	}else if($shams_solar_theme_lay == 'Transparent'){
		$shams_solar_custom_css .='#services h3{';
			$shams_solar_custom_css .='background-color: transparent;';
		$shams_solar_custom_css .='}';
	}

	// slider overlay
	$shams_solar_show_slider_image_overlay = get_theme_mod('shams_solar_show_slider_image_overlay', true);
	if($shams_solar_show_slider_image_overlay == false){
		$shams_solar_custom_css .='#slider img{';
			$shams_solar_custom_css .='opacity:1;';
		$shams_solar_custom_css .='}';
	} 
	$shams_solar_color_slider_image_overlay = get_theme_mod('shams_solar_color_slider_image_overlay', true);
	if($shams_solar_show_slider_image_overlay != false){
		$shams_solar_custom_css .='#slider{';
			$shams_solar_custom_css .='background-color: '.esc_attr($shams_solar_color_slider_image_overlay).';';
		$shams_solar_custom_css .='}';
	}

	// woocommerce product sale settings
	$shams_solar_border_radius_product_sale_text = get_theme_mod('shams_solar_border_radius_product_sale_text',50);
	$shams_solar_custom_css .='.woocommerce span.onsale {';
		$shams_solar_custom_css .='border-radius: '.esc_attr($shams_solar_border_radius_product_sale_text).'%;';
	$shams_solar_custom_css .='}';

	$shams_solar_position_product_sale = get_theme_mod('shams_solar_position_product_sale', 'Right');
	if($shams_solar_position_product_sale == 'Right' ){
		$shams_solar_custom_css .='.woocommerce ul.products li.product .onsale{';
			$shams_solar_custom_css .=' left:auto; right:0;';
		$shams_solar_custom_css .='}';
	}elseif($shams_solar_position_product_sale == 'Left' ){
		$shams_solar_custom_css .='.woocommerce ul.products li.product .onsale{';
			$shams_solar_custom_css .=' left:0; right:auto;';
		$shams_solar_custom_css .='}';
	}

	$shams_solar_product_sale_text_size = get_theme_mod('shams_solar_product_sale_text_size',14);
	$shams_solar_custom_css .='.woocommerce span.onsale{';
		$shams_solar_custom_css .='font-size: '.esc_attr($shams_solar_product_sale_text_size).'px;';
	$shams_solar_custom_css .='}';

	$shams_solar_top_bottom_product_sale_padding = get_theme_mod('shams_solar_top_bottom_product_sale_padding');
	$shams_solar_left_right_product_sale_padding = get_theme_mod('shams_solar_left_right_product_sale_padding');
	$shams_solar_custom_css .='.woocommerce span.onsale{';
		$shams_solar_custom_css .='padding-top: '.esc_attr($shams_solar_top_bottom_product_sale_padding).'px; padding-bottom: '.esc_attr($shams_solar_top_bottom_product_sale_padding).'px; padding-left: '.esc_attr($shams_solar_left_right_product_sale_padding).'px; padding-right: '.esc_attr($shams_solar_left_right_product_sale_padding).'px; display:inline-block;';
	$shams_solar_custom_css .='}';

	// woocommerce Product Navigation
	$shams_solar_shop_products_navigation = get_theme_mod('shams_solar_shop_products_navigation', 'Yes');
	if($shams_solar_shop_products_navigation == 'No'){
		$shams_solar_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$shams_solar_custom_css .='display: none;';
		$shams_solar_custom_css .='}';
	}

	// Post Block
	$shams_solar_post_break_block_setting = get_theme_mod( 'shams_solar_post_break_block_setting','Into Blocks');
    if($shams_solar_post_break_block_setting == 'Without Blocks'){
		$shams_solar_custom_css .='.blogger{';
			$shams_solar_custom_css .='border: none; margin:30px 0;';
		$shams_solar_custom_css .='}';
	}

	// fixed header padding option
	$shams_solar_fixed_header_padding_option = get_theme_mod('shams_solar_fixed_header_padding_option');
	$shams_solar_custom_css .='.fixed-header{';
		$shams_solar_custom_css .='padding: '.esc_attr($shams_solar_fixed_header_padding_option).'px;';
	$shams_solar_custom_css .='}';

	// slider top and bottom padding
	$shams_solar_padding_top_bottom_slider_content = get_theme_mod('shams_solar_padding_top_bottom_slider_content');
	$shams_solar_padding_left_right_slider_content = get_theme_mod('shams_solar_padding_left_right_slider_content');
	$shams_solar_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$shams_solar_custom_css .='top: '.esc_attr($shams_solar_padding_top_bottom_slider_content).'% !important; bottom: '.esc_attr($shams_solar_padding_top_bottom_slider_content).'% !important;left: '.esc_attr($shams_solar_padding_left_right_slider_content).'% !important;right: '.esc_attr($shams_solar_padding_left_right_slider_content).'% !important;';
	$shams_solar_custom_css .='}';

	// featured image setting
	$shams_solar_post_image_border_radius = get_theme_mod('shams_solar_post_image_border_radius', 0);
	$shams_solar_custom_css .='.post-image img, .wrapper img{';
		$shams_solar_custom_css .='border-radius: '.esc_attr($shams_solar_post_image_border_radius).'px;';
	$shams_solar_custom_css .='}';

	$shams_solar_featured_image_box_shadow = get_theme_mod('shams_solar_featured_image_box_shadow',0);
	$shams_solar_custom_css .='.post-image img, .wrapper img{';
		$shams_solar_custom_css .='box-shadow: '.esc_attr($shams_solar_featured_image_box_shadow).'px '.esc_attr($shams_solar_featured_image_box_shadow).'px '.esc_attr($shams_solar_featured_image_box_shadow).'px #ccc;';
	$shams_solar_custom_css .='}';

    //Copyright background css
	$shams_solar_copyright_background_color = get_theme_mod('shams_solar_copyright_background_color');
	$shams_solar_custom_css .='.site-info{';
		$shams_solar_custom_css .='background: '.esc_attr($shams_solar_copyright_background_color).'!important;';
	$shams_solar_custom_css .='}';
     
    // featured image dimention
	$shams_solar_post_image_dimention = get_theme_mod('shams_solar_post_image_dimention', 'Default');
	$shams_solar_post_featured_image_width = get_theme_mod('shams_solar_post_featured_image_width');
	$shams_solar_post_featured_image_height = get_theme_mod('shams_solar_post_featured_image_height');
	if($shams_solar_post_image_dimention == 'Custom Image Size'){
		$shams_solar_custom_css .='.post-image img{';
			$shams_solar_custom_css .='width: '.esc_attr($shams_solar_post_featured_image_width).'px; height: '.esc_attr($shams_solar_post_featured_image_height).'px;';
		$shams_solar_custom_css .='}';
	}








