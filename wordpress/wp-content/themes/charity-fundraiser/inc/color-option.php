<?php
	
	$charity_fundraiser_first_theme_color = get_theme_mod('charity_fundraiser_first_theme_color');

	$charity_fundraiser_second_theme_color = get_theme_mod('charity_fundraiser_second_theme_color');

	$charity_fundraiser_custom_css = '';

	if($charity_fundraiser_first_theme_color != false){
		$charity_fundraiser_custom_css .='#footer input[type="submit"], a.button, #sidebar .tagcloud a, .nav-menu ul ul a, .social-media i:hover, .donate-link , h1.page-title, h1.search-title, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .more-btn a, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .blogbtn a,  #comments input[type="submit"].submit, #sidebar input[type="submit"], .pagination .current, span.meta-nav, .tags a:hover,#comments a.comment-reply-link,.footerinner .tagcloud a:hover, .woocommerce-product-search button, .back-to-top, .navigation .nav-previous a, .navigation .nav-next a {';
			$charity_fundraiser_custom_css .='background-color: '.esc_attr($charity_fundraiser_first_theme_color).';';
		$charity_fundraiser_custom_css .='}';
	}
	if($charity_fundraiser_first_theme_color != false){
		$charity_fundraiser_custom_css .=' a, .nav-menu ul li a:active, .nav-menu ul li a:hover, #sidebar ul li a:hover, .nav-menu a:hover, p.bold-font, .contact-details i, .donate-link:hover a, .blog-sec h2 a, .copyright a , .footerinner ul li a:hover,  #sidebar h3, span.post-title, .tags a i, .comment-meta.commentmetadata a, #wrapper .related-posts h3 a, #wrapper .related-posts h2.related-posts-main-title, a:hover{';
			$charity_fundraiser_custom_css .='color: '.esc_attr($charity_fundraiser_first_theme_color).';';
		$charity_fundraiser_custom_css .='}';
	}
	if($charity_fundraiser_first_theme_color != false){
		$charity_fundraiser_custom_css .=' 
		@media screen and (max-width:1000px){
			.nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a, .nav-menu ul li a:hover{';
			$charity_fundraiser_custom_css .='color: '.esc_attr($charity_fundraiser_first_theme_color).';';
		$charity_fundraiser_custom_css .='} }';
	}
	if($charity_fundraiser_first_theme_color != false){
		$charity_fundraiser_custom_css .=' .nav-menu ul ul, .menu-sec , .donate-link, hr.help, .inner,  #sidebar form, .tags a:hover{';
			$charity_fundraiser_custom_css .='border-color: '.esc_attr($charity_fundraiser_first_theme_color).';';
		$charity_fundraiser_custom_css .='}';
	}
	if($charity_fundraiser_first_theme_color != false){
		$charity_fundraiser_custom_css .=' .nav-menu ul li a:hover {';
			$charity_fundraiser_custom_css .='border-left-color: '.esc_attr($charity_fundraiser_first_theme_color).';';
		$charity_fundraiser_custom_css .='} ';
	}
	if($charity_fundraiser_first_theme_color != false){
		$charity_fundraiser_custom_css .=' .back-to-top::before {';
			$charity_fundraiser_custom_css .='border-bottom-color: '.esc_attr($charity_fundraiser_first_theme_color).';';
		$charity_fundraiser_custom_css .='} ';
	}

	if($charity_fundraiser_second_theme_color != false){
		$charity_fundraiser_custom_css .=' input[type="submit"],  a.button:hover, #comments a.comment-reply-link:hover, #sidebar .tagcloud a:hover, span.page-number,span.page-links-title, .nav-menu ul ul a:hover, .top-bar, .more-btn a:hover , .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .blogbtn a:hover, #footer, .inner, .bradcrumbs a, .pagination a:hover{';
			$charity_fundraiser_custom_css .='background-color: '.esc_attr($charity_fundraiser_second_theme_color).';';
		$charity_fundraiser_custom_css .='}';
	}
	if($charity_fundraiser_second_theme_color != false){
		$charity_fundraiser_custom_css .=' .pagination span, .pagination a, .nav-menu a, .social-media i, #help h3, #help h4, #help p, .post-info i, .title-box h1, #wrapper h1{';
			$charity_fundraiser_custom_css .='color: '.esc_attr($charity_fundraiser_second_theme_color).';';
		$charity_fundraiser_custom_css .='}';
	}
	if($charity_fundraiser_second_theme_color != false){
		$charity_fundraiser_custom_css .=' #sidebar h3, .pagination span, .pagination a, .pagination .current{';
			$charity_fundraiser_custom_css .='border-color: '.esc_attr($charity_fundraiser_second_theme_color).';';
		$charity_fundraiser_custom_css .='}';
	}

	// Layout Options
	$charity_fundraiser_theme_layout = get_theme_mod( 'charity_fundraiser_theme_layout_options','Default Theme');
    if($charity_fundraiser_theme_layout == 'Default Theme'){
		$charity_fundraiser_custom_css .='body{';
			$charity_fundraiser_custom_css .='max-width: 100%;';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_theme_layout == 'Container Theme'){
		$charity_fundraiser_custom_css .='body{';
			$charity_fundraiser_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_theme_layout == 'Box Container Theme'){
		$charity_fundraiser_custom_css .='body{';
			$charity_fundraiser_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$charity_fundraiser_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$charity_fundraiser_slider_layout = get_theme_mod( 'charity_fundraiser_slider_opacity_color','0.7');
	if($charity_fundraiser_slider_layout == '0'){
		$charity_fundraiser_custom_css .='#slider img{';
			$charity_fundraiser_custom_css .='opacity:0';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_slider_layout == '0.1'){
		$charity_fundraiser_custom_css .='#slider img{';
			$charity_fundraiser_custom_css .='opacity:0.1';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_slider_layout == '0.2'){
		$charity_fundraiser_custom_css .='#slider img{';
			$charity_fundraiser_custom_css .='opacity:0.2';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_slider_layout == '0.3'){
		$charity_fundraiser_custom_css .='#slider img{';
			$charity_fundraiser_custom_css .='opacity:0.3';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_slider_layout == '0.4'){
		$charity_fundraiser_custom_css .='#slider img{';
			$charity_fundraiser_custom_css .='opacity:0.4';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_slider_layout == '0.5'){
		$charity_fundraiser_custom_css .='#slider img{';
			$charity_fundraiser_custom_css .='opacity:0.5';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_slider_layout == '0.6'){
		$charity_fundraiser_custom_css .='#slider img{';
			$charity_fundraiser_custom_css .='opacity:0.6';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_slider_layout == '0.7'){
		$charity_fundraiser_custom_css .='#slider img{';
			$charity_fundraiser_custom_css .='opacity:0.7';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_slider_layout == '0.8'){
		$charity_fundraiser_custom_css .='#slider img{';
			$charity_fundraiser_custom_css .='opacity:0.8';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_slider_layout == '0.9'){
		$charity_fundraiser_custom_css .='#slider img{';
			$charity_fundraiser_custom_css .='opacity:0.9';
		$charity_fundraiser_custom_css .='}';
	}

	/*---------------Slider Content Layout -----------------*/

	$charity_fundraiser_slider_layout = get_theme_mod( 'charity_fundraiser_slider_alignment_option','Left Align');
    if($charity_fundraiser_slider_layout == 'Left Align'){
		$charity_fundraiser_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$charity_fundraiser_custom_css .='text-align:left;';
		$charity_fundraiser_custom_css .='}';
		$charity_fundraiser_custom_css .='#slider .carousel-caption{';
		$charity_fundraiser_custom_css .='left:10%; right:30%;';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_slider_layout == 'Center Align'){
		$charity_fundraiser_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$charity_fundraiser_custom_css .='text-align:center;';
		$charity_fundraiser_custom_css .='}';
		$charity_fundraiser_custom_css .='#slider .carousel-caption{';
		$charity_fundraiser_custom_css .='left:20%; right:20%;';
		$charity_fundraiser_custom_css .='}';
	}else if($charity_fundraiser_slider_layout == 'Right Align'){
		$charity_fundraiser_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$charity_fundraiser_custom_css .='text-align:right;';
		$charity_fundraiser_custom_css .='}';
		$charity_fundraiser_custom_css .='#slider .carousel-caption{';
		$charity_fundraiser_custom_css .='left:35%; right:10%;';
		$charity_fundraiser_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$charity_fundraiser_preloader_color = get_theme_mod('charity_fundraiser_preloader_color');

	if($charity_fundraiser_preloader_color != false){
		$charity_fundraiser_custom_css .=' .tg-loader{';
			$charity_fundraiser_custom_css .='border-color: '.esc_attr($charity_fundraiser_preloader_color).';';
		$charity_fundraiser_custom_css .='} ';
		$charity_fundraiser_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$charity_fundraiser_custom_css .='background-color: '.esc_attr($charity_fundraiser_preloader_color).';';
		$charity_fundraiser_custom_css .='} ';
	}

	$charity_fundraiser_preloader_bg_color = get_theme_mod('charity_fundraiser_preloader_bg_color');

	if($charity_fundraiser_preloader_bg_color != false){
		$charity_fundraiser_custom_css .=' #overlayer, .preloader{';
			$charity_fundraiser_custom_css .='background-color: '.esc_attr($charity_fundraiser_preloader_bg_color).';';
		$charity_fundraiser_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$charity_fundraiser_top_button_padding = get_theme_mod('charity_fundraiser_top_button_padding');
	$charity_fundraiser_bottom_button_padding = get_theme_mod('charity_fundraiser_bottom_button_padding');
	$charity_fundraiser_left_button_padding = get_theme_mod('charity_fundraiser_left_button_padding');
	$charity_fundraiser_right_button_padding = get_theme_mod('charity_fundraiser_right_button_padding');
	if($charity_fundraiser_top_button_padding != false || $charity_fundraiser_bottom_button_padding != false || $charity_fundraiser_left_button_padding != false || $charity_fundraiser_right_button_padding != false){
		$charity_fundraiser_custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
			$charity_fundraiser_custom_css .='padding-top: '.esc_attr($charity_fundraiser_top_button_padding).'px; padding-bottom: '.esc_attr($charity_fundraiser_bottom_button_padding).'px; padding-left: '.esc_attr($charity_fundraiser_left_button_padding).'px; padding-right: '.esc_attr($charity_fundraiser_right_button_padding).'px; display:inline-block;';
		$charity_fundraiser_custom_css .='}';
	}

	$charity_fundraiser_button_border_radius = get_theme_mod('charity_fundraiser_button_border_radius');
	$charity_fundraiser_custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
		$charity_fundraiser_custom_css .='border-radius: '.esc_attr($charity_fundraiser_button_border_radius).'px;';
	$charity_fundraiser_custom_css .='}';

	/*----------- Copyright css -----*/
	$charity_fundraiser_copyright_top_padding = get_theme_mod('charity_fundraiser_top_copyright_padding');
	$charity_fundraiser_copyright_bottom_padding = get_theme_mod('charity_fundraiser_top_copyright_padding');
	if($charity_fundraiser_copyright_top_padding != false || $charity_fundraiser_copyright_bottom_padding != false){
		$charity_fundraiser_custom_css .='.inner{';
			$charity_fundraiser_custom_css .='padding-top: '.esc_attr($charity_fundraiser_copyright_top_padding).'px; padding-bottom: '.esc_attr($charity_fundraiser_copyright_bottom_padding).'px; ';
		$charity_fundraiser_custom_css .='}';
	} 

	$charity_fundraiser_copyright_alignment = get_theme_mod('charity_fundraiser_copyright_alignment', 'center');
	if($charity_fundraiser_copyright_alignment == 'center' ){
		$charity_fundraiser_custom_css .='#footer .copyright p{';
			$charity_fundraiser_custom_css .='text-align: '. $charity_fundraiser_copyright_alignment .';';
		$charity_fundraiser_custom_css .='}';
	}elseif($charity_fundraiser_copyright_alignment == 'left' ){
		$charity_fundraiser_custom_css .='#footer .copyright p{';
			$charity_fundraiser_custom_css .=' text-align: '. $charity_fundraiser_copyright_alignment .';';
		$charity_fundraiser_custom_css .='}';
	}elseif($charity_fundraiser_copyright_alignment == 'right' ){
		$charity_fundraiser_custom_css .='#footer .copyright p{';
			$charity_fundraiser_custom_css .='text-align: '. $charity_fundraiser_copyright_alignment .';';
		$charity_fundraiser_custom_css .='}';
	}

	$charity_fundraiser_copyright_font_size = get_theme_mod('charity_fundraiser_copyright_font_size');
	$charity_fundraiser_custom_css .='#footer .copyright p{';
		$charity_fundraiser_custom_css .='font-size: '.esc_attr($charity_fundraiser_copyright_font_size).'px;';
	$charity_fundraiser_custom_css .='}';

	/*------ Slider Show/Hide ------*/
	$charity_fundraiser_banner = get_theme_mod('charity_fundraiser_slider_hide');
	if($charity_fundraiser_banner == false ){
		$charity_fundraiser_custom_css .='.page-template-custom-front-page .menu-sec{';
			$charity_fundraiser_custom_css .='position: static; margin-bottom:10px;';
		$charity_fundraiser_custom_css .='}';
	}

	/*------ Topbar padding ------*/
	$charity_fundraiser_top_topbar_padding = get_theme_mod('charity_fundraiser_top_topbar_padding');
	$charity_fundraiser_bottom_topbar_padding = get_theme_mod('charity_fundraiser_bottom_topbar_padding');
	if($charity_fundraiser_top_topbar_padding != false || $charity_fundraiser_bottom_topbar_padding != false){
		$charity_fundraiser_custom_css .='.top-header{';
			$charity_fundraiser_custom_css .='padding-top: '.esc_attr($charity_fundraiser_top_topbar_padding).'px; padding-bottom: '.esc_attr($charity_fundraiser_bottom_topbar_padding).'px; ';
		$charity_fundraiser_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$charity_fundraiser_product_border = get_theme_mod('charity_fundraiser_product_border',true);

	if($charity_fundraiser_product_border == false){
		$charity_fundraiser_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$charity_fundraiser_custom_css .='border: 0;';
		$charity_fundraiser_custom_css .='}';
	}

	$charity_fundraiser_product_top = get_theme_mod('charity_fundraiser_product_top_padding', 10);
	$charity_fundraiser_product_bottom = get_theme_mod('charity_fundraiser_product_bottom_padding', 10);
	$charity_fundraiser_product_left = get_theme_mod('charity_fundraiser_product_left_padding', 10);
	$charity_fundraiser_product_right = get_theme_mod('charity_fundraiser_product_right_padding', 10);
	$charity_fundraiser_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$charity_fundraiser_custom_css .='padding-top: '.esc_attr($charity_fundraiser_product_top).'px; padding-bottom: '.esc_attr($charity_fundraiser_product_bottom).'px; padding-left: '.esc_attr($charity_fundraiser_product_left).'px; padding-right: '.esc_attr($charity_fundraiser_product_right).'px;';
	$charity_fundraiser_custom_css .='}';

	$charity_fundraiser_product_border_radius = get_theme_mod('charity_fundraiser_product_border_radius');
	$charity_fundraiser_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$charity_fundraiser_custom_css .='border-radius: '.esc_attr($charity_fundraiser_product_border_radius).'px;';
	$charity_fundraiser_custom_css .='}';

	/*----- WooCommerce button css --------*/
	$charity_fundraiser_product_button_top = get_theme_mod('charity_fundraiser_product_button_top_padding',10);
	$charity_fundraiser_product_button_bottom = get_theme_mod('charity_fundraiser_product_button_bottom_padding',10);
	$charity_fundraiser_product_button_left = get_theme_mod('charity_fundraiser_product_button_left_padding',15);
	$charity_fundraiser_product_button_right = get_theme_mod('charity_fundraiser_product_button_right_padding',15);
	$charity_fundraiser_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$charity_fundraiser_custom_css .='padding-top: '.esc_attr($charity_fundraiser_product_button_top).'px; padding-bottom: '.esc_attr($charity_fundraiser_product_button_bottom).'px; padding-left: '.esc_attr($charity_fundraiser_product_button_left).'px; padding-right: '.esc_attr($charity_fundraiser_product_button_right).'px;';
	$charity_fundraiser_custom_css .='}';

	$charity_fundraiser_product_button_border_radius = get_theme_mod('charity_fundraiser_product_button_border_radius');
	$charity_fundraiser_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
		$charity_fundraiser_custom_css .='border-radius: '.esc_attr($charity_fundraiser_product_button_border_radius).'px;';
	$charity_fundraiser_custom_css .='}';

	/*----- WooCommerce product sale css --------*/
	$charity_fundraiser_product_sale_top = get_theme_mod('charity_fundraiser_product_sale_top_padding');
	$charity_fundraiser_product_sale_bottom = get_theme_mod('charity_fundraiser_product_sale_bottom_padding');
	$charity_fundraiser_product_sale_left = get_theme_mod('charity_fundraiser_product_sale_left_padding');
	$charity_fundraiser_product_sale_right = get_theme_mod('charity_fundraiser_product_sale_right_padding');
	$charity_fundraiser_custom_css .='.woocommerce span.onsale {';
		$charity_fundraiser_custom_css .='padding-top: '.esc_attr($charity_fundraiser_product_sale_top).'px; padding-bottom: '.esc_attr($charity_fundraiser_product_sale_bottom).'px; padding-left: '.esc_attr($charity_fundraiser_product_sale_left).'px; padding-right: '.esc_attr($charity_fundraiser_product_sale_right).'px;';
	$charity_fundraiser_custom_css .='}';

	$charity_fundraiser_product_sale_border_radius = get_theme_mod('charity_fundraiser_product_sale_border_radius',50);
	$charity_fundraiser_custom_css .='.woocommerce span.onsale {';
		$charity_fundraiser_custom_css .='border-radius: '.esc_attr($charity_fundraiser_product_sale_border_radius).'px;';
	$charity_fundraiser_custom_css .='}';

	$charity_fundraiser_menu_case = get_theme_mod('charity_fundraiser_product_sale_position', 'Right');
	if($charity_fundraiser_menu_case == 'Right' ){
		$charity_fundraiser_custom_css .='.woocommerce ul.products li.product .onsale{';
			$charity_fundraiser_custom_css .=' left:auto; right:0;';
		$charity_fundraiser_custom_css .='}';
	}elseif($charity_fundraiser_menu_case == 'Left' ){
		$charity_fundraiser_custom_css .='.woocommerce ul.products li.product .onsale{';
			$charity_fundraiser_custom_css .=' left:-10px; right:auto;';
		$charity_fundraiser_custom_css .='}';
	}

	$charity_fundraiser_product_sale_font_size = get_theme_mod('charity_fundraiser_product_sale_font_size',13);
	$charity_fundraiser_custom_css .='.woocommerce span.onsale {';
		$charity_fundraiser_custom_css .='font-size: '.esc_attr($charity_fundraiser_product_sale_font_size).'px;';
	$charity_fundraiser_custom_css .='}';

	/*---- Slider Image overlay -----*/
	$charity_fundraiser_slider_image_overlay = get_theme_mod('charity_fundraiser_slider_image_overlay',true);
	if($charity_fundraiser_slider_image_overlay == false){
		$charity_fundraiser_custom_css .='#slider img {';
			$charity_fundraiser_custom_css .='opacity: 1;';
		$charity_fundraiser_custom_css .='}';
	}

	$charity_fundraiser_slider_overlay_color = get_theme_mod('charity_fundraiser_slider_overlay_color');
	if($charity_fundraiser_slider_overlay_color != false){
		$charity_fundraiser_custom_css .='#slider  {';
			$charity_fundraiser_custom_css .='background-color: '.esc_attr($charity_fundraiser_slider_overlay_color).';';
		$charity_fundraiser_custom_css .='}';
	}

	/*---- Comment form ----*/
	$charity_fundraiser_comment_width = get_theme_mod('charity_fundraiser_comment_width', '100');
	$charity_fundraiser_custom_css .='#comments textarea{';
		$charity_fundraiser_custom_css .=' width:'.esc_attr($charity_fundraiser_comment_width).'%;';
	$charity_fundraiser_custom_css .='}';

	$charity_fundraiser_comment_submit_text = get_theme_mod('charity_fundraiser_comment_submit_text', 'Post Comment');
	if($charity_fundraiser_comment_submit_text == ''){
		$charity_fundraiser_custom_css .='#comments p.form-submit {';
			$charity_fundraiser_custom_css .='display: none;';
		$charity_fundraiser_custom_css .='}';
	}

	$charity_fundraiser_comment_title = get_theme_mod('charity_fundraiser_comment_title', 'Leave a Reply');
	if($charity_fundraiser_comment_title == ''){
		$charity_fundraiser_custom_css .='#comments h2#reply-title {';
			$charity_fundraiser_custom_css .='display: none;';
		$charity_fundraiser_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$charity_fundraiser_footer_bg_color = get_theme_mod('charity_fundraiser_footer_bg_color');
	if($charity_fundraiser_footer_bg_color != false){
		$charity_fundraiser_custom_css .='#footer{';
			$charity_fundraiser_custom_css .='background-color: '.esc_attr($charity_fundraiser_footer_bg_color).';';
		$charity_fundraiser_custom_css .='}';
	}

	$charity_fundraiser_footer_bg_image = get_theme_mod('charity_fundraiser_footer_bg_image');
	if($charity_fundraiser_footer_bg_image != false){
		$charity_fundraiser_custom_css .='#footer{';
			$charity_fundraiser_custom_css .='background: url('.esc_attr($charity_fundraiser_footer_bg_image).');';
		$charity_fundraiser_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$charity_fundraiser_feature_image_border_radius = get_theme_mod('charity_fundraiser_feature_image_border_radius');
	if($charity_fundraiser_feature_image_border_radius != false){
		$charity_fundraiser_custom_css .='.blog-sec img{';
			$charity_fundraiser_custom_css .='border-radius: '.esc_attr($charity_fundraiser_feature_image_border_radius).'px;';
		$charity_fundraiser_custom_css .='}';
	}

	$charity_fundraiser_feature_image_shadow = get_theme_mod('charity_fundraiser_feature_image_shadow');
	if($charity_fundraiser_feature_image_shadow != false){
		$charity_fundraiser_custom_css .='.blog-sec img{';
			$charity_fundraiser_custom_css .='box-shadow: '.esc_attr($charity_fundraiser_feature_image_shadow).'px '.esc_attr($charity_fundraiser_feature_image_shadow).'px '.esc_attr($charity_fundraiser_feature_image_shadow).'px #aaa;';
		$charity_fundraiser_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$charity_fundraiser_top_sticky_header_padding = get_theme_mod('charity_fundraiser_top_sticky_header_padding');
	$charity_fundraiser_bottom_sticky_header_padding = get_theme_mod('charity_fundraiser_bottom_sticky_header_padding');
	$charity_fundraiser_custom_css .=' .fixed-header{';
		$charity_fundraiser_custom_css .=' padding-top: '.esc_attr($charity_fundraiser_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($charity_fundraiser_bottom_sticky_header_padding).'px';
	$charity_fundraiser_custom_css .='}';

	/*------ Related products ---------*/
	$charity_fundraiser_related_products = get_theme_mod('charity_fundraiser_single_related_products',true);
	if($charity_fundraiser_related_products == false){
		$charity_fundraiser_custom_css .=' .related.products{';
			$charity_fundraiser_custom_css .='display: none;';
		$charity_fundraiser_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$charity_fundraiser_menu_font_size = get_theme_mod('charity_fundraiser_menu_font_size',14);
	if($charity_fundraiser_menu_font_size != false){
		$charity_fundraiser_custom_css .='.nav-menu li a{';
			$charity_fundraiser_custom_css .='font-size: '.esc_attr($charity_fundraiser_menu_font_size).'px;';
		$charity_fundraiser_custom_css .='}';
	}

	$charity_fundraiser_menu_font_weight = get_theme_mod('charity_fundraiser_menu_font_weight');
	$charity_fundraiser_custom_css .='.nav-menu li a{';
		$charity_fundraiser_custom_css .='font-weight: '.esc_attr($charity_fundraiser_menu_font_weight).';';
	$charity_fundraiser_custom_css .='}';

	$charity_fundraiser_menu_case = get_theme_mod('charity_fundraiser_menu_case', 'uppercase');
	if($charity_fundraiser_menu_case == 'uppercase' ){
		$charity_fundraiser_custom_css .='.nav-menu li a{';
			$charity_fundraiser_custom_css .=' text-transform: uppercase;';
		$charity_fundraiser_custom_css .='}';
	}elseif($charity_fundraiser_menu_case == 'capitalize' ){
		$charity_fundraiser_custom_css .='.nav-menu li a{';
			$charity_fundraiser_custom_css .=' text-transform: capitalize;';
		$charity_fundraiser_custom_css .='}';
	}

	// Social Icons Font Size
	$charity_fundraiser_social_icons_font_size = get_theme_mod('charity_fundraiser_social_icons_font_size', '12');
	$charity_fundraiser_custom_css .='.social-media i{';
		$charity_fundraiser_custom_css .='font-size: '.esc_attr($charity_fundraiser_social_icons_font_size).'px;';
	$charity_fundraiser_custom_css .='}';

	// Featured image header
	$header_image_url = charity_fundraiser_banner_image( $image_url = '' );
	$charity_fundraiser_custom_css .='#page-site-header{';
		$charity_fundraiser_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$charity_fundraiser_custom_css .='}';

	$charity_fundraiser_post_featured_image = get_theme_mod('charity_fundraiser_post_featured_image', 'in-content');
	if($charity_fundraiser_post_featured_image == 'banner' ){
		$charity_fundraiser_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img, .page .title-box h1{';
			$charity_fundraiser_custom_css .=' display: none;';
		$charity_fundraiser_custom_css .='}';
		$charity_fundraiser_custom_css .='.page-template-custom-front-page #page-site-header{';
			$charity_fundraiser_custom_css .=' display: none;';
		$charity_fundraiser_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$charity_fundraiser_shop_page_navigation = get_theme_mod('charity_fundraiser_shop_page_navigation',true);
	if ($charity_fundraiser_shop_page_navigation == false) {
		$charity_fundraiser_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$charity_fundraiser_custom_css .='display: none;';
		$charity_fundraiser_custom_css .='}';
	}

	/*---- Slider Height ------*/
	$charity_fundraiser_slider_height = get_theme_mod('charity_fundraiser_slider_height');
	$charity_fundraiser_custom_css .='#slider img{';
		$charity_fundraiser_custom_css .='height: '.esc_attr($charity_fundraiser_slider_height).'px;';
	$charity_fundraiser_custom_css .='}';
	$charity_fundraiser_custom_css .='@media screen and (max-width: 768px){
		#slider img{';
		$charity_fundraiser_custom_css .='height: auto;';
	$charity_fundraiser_custom_css .='} }';

	/*----- Blog Post display type css ------*/
	$charity_fundraiser_blog_post_display_type = get_theme_mod('charity_fundraiser_blog_post_display_type', 'blocks');
	if($charity_fundraiser_blog_post_display_type == 'without blocks' ){
		$charity_fundraiser_custom_css .='.blog .blog-sec{';
			$charity_fundraiser_custom_css .='border: 0;';
		$charity_fundraiser_custom_css .='}';
	}

	// Metabox Seperator
	$charity_fundraiser_metabox_seperator = get_theme_mod('charity_fundraiser_metabox_seperator');
	if($charity_fundraiser_metabox_seperator != '' ){
		$charity_fundraiser_custom_css .='.post-info span:after{';
			$charity_fundraiser_custom_css .=' content: "'.esc_attr($charity_fundraiser_metabox_seperator).'"; padding-left:10px;';
		$charity_fundraiser_custom_css .='}';
		$charity_fundraiser_custom_css .='.post-info span:last-child:after{';
			$charity_fundraiser_custom_css .=' content: none;';
		$charity_fundraiser_custom_css .='}';
	}

	/*---- Slider Content Position -----*/
	$charity_fundraiser_top_position = get_theme_mod('charity_fundraiser_slider_top_position');
	$charity_fundraiser_bottom_position = get_theme_mod('charity_fundraiser_slider_bottom_position');
	$charity_fundraiser_left_position = get_theme_mod('charity_fundraiser_slider_left_position');
	$charity_fundraiser_right_position = get_theme_mod('charity_fundraiser_slider_right_position');
	if($charity_fundraiser_top_position != false || $charity_fundraiser_bottom_position != false || $charity_fundraiser_left_position != false || $charity_fundraiser_right_position != false){
		$charity_fundraiser_custom_css .='#slider .carousel-caption{';
			$charity_fundraiser_custom_css .='top: '.esc_attr($charity_fundraiser_top_position).'%; bottom: '.esc_attr($charity_fundraiser_bottom_position).'%; left: '.esc_attr($charity_fundraiser_left_position).'%; right: '.esc_attr($charity_fundraiser_right_position).'%;';
		$charity_fundraiser_custom_css .='}';
	}

	// Site title Font Size
	$charity_fundraiser_site_title_font_size = get_theme_mod('charity_fundraiser_site_title_font_size', '25');
	$charity_fundraiser_custom_css .='.logo h1, .logo p.site-title{';
		$charity_fundraiser_custom_css .='font-size: '.esc_attr($charity_fundraiser_site_title_font_size).'px;';
	$charity_fundraiser_custom_css .='}';

	// Site tagline Font Size
	$charity_fundraiser_site_tagline_font_size = get_theme_mod('charity_fundraiser_site_tagline_font_size', '12');
	$charity_fundraiser_custom_css .='.logo p.site-description{';
		$charity_fundraiser_custom_css .='font-size: '.esc_attr($charity_fundraiser_site_tagline_font_size).'px;';
	$charity_fundraiser_custom_css .='}';

	// responsive settings
	if (get_theme_mod('charity_fundraiser_preloader_responsive',false) == true && get_theme_mod('charity_fundraiser_preloader',false) == false) {
		$charity_fundraiser_custom_css .='@media screen and (min-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$charity_fundraiser_custom_css .=' visibility: hidden;';
		$charity_fundraiser_custom_css .='} }';
	}
	if (get_theme_mod('charity_fundraiser_preloader_responsive',false) == false) {
		$charity_fundraiser_custom_css .='@media screen and (max-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$charity_fundraiser_custom_css .=' visibility: hidden;';
		$charity_fundraiser_custom_css .='} }';
	}

	if (get_theme_mod('charity_fundraiser_sticky_header_responsive') == false) {
		$charity_fundraiser_custom_css .='@media screen and (max-width: 575px){
			.sticky{';
			$charity_fundraiser_custom_css .=' position: static;';
		$charity_fundraiser_custom_css .='} }';
	}

	// scroll to top
	$charity_fundraiser_scroll = get_theme_mod( 'charity_fundraiser_backtotop_responsive',true);
	if (get_theme_mod('charity_fundraiser_backtotop_responsive',true) == true && get_theme_mod('charity_fundraiser_hide_scroll',true) == false) {
    	$charity_fundraiser_custom_css .='.show-back-to-top{';
			$charity_fundraiser_custom_css .='visibility: hidden !important;';
		$charity_fundraiser_custom_css .='} ';
	}
    if($charity_fundraiser_scroll == true){
    	$charity_fundraiser_custom_css .='@media screen and (max-width:575px) {';
		$charity_fundraiser_custom_css .='.show-back-to-top{';
			$charity_fundraiser_custom_css .='visibility: visible !important;';
		$charity_fundraiser_custom_css .='} }';
	}else if($charity_fundraiser_scroll == false){
		$charity_fundraiser_custom_css .='@media screen and (max-width:575px) {';
		$charity_fundraiser_custom_css .='.show-back-to-top{';
			$charity_fundraiser_custom_css .='visibility: hidden !important;';
		$charity_fundraiser_custom_css .='} }';
	}

	/*------ Footer background css -------*/
	$charity_fundraiser_copyright_bg_color = get_theme_mod('charity_fundraiser_copyright_bg_color');
	if($charity_fundraiser_copyright_bg_color != false){
		$charity_fundraiser_custom_css .='.inner{';
			$charity_fundraiser_custom_css .='background-color: '.esc_attr($charity_fundraiser_copyright_bg_color).';';
		$charity_fundraiser_custom_css .='}';
	}