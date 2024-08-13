<?php


function sportie_theme_register_required_plugins() {

  $plugins = array(
    'novaworks' => array(
      'name'               => esc_html__('Novaworks','sportie'),
      'slug'               => 'novaworks',
      'source'             => 'http://assets.novaworks.net/plugins/sportie/novaworks.zip',
      'required'           => true,
      'description'        => esc_html__('Extends the functionality of Sportie with theme specific shortcodes and page builder elements.','sportie'),
      'demo_required'      => true,
      'version'            => '1.0.4'
    ),
    'demo-importer' => array(
        'name'               => esc_html__('Sportie Package Demo Data','juliette'),
        'slug'               => 'sportie-demo-data',
        'source'             => 'http://assets.novaworks.net/plugins/sportie/sportie-demo-data.zip',
        'required'           => false,
        'description'        => esc_html__('This plugin use only for Novaworks Theme.','juliette'),
        'demo_required'      => true,
        'version'            => '1.0.0'
      ),
    'wc-ajax-product-filter' => array(
      'name'               => esc_html__('WC Ajax Product Filters','sportie'),
      'slug'               => 'wc-ajax-product-filter',
      'source'             => 'http://assets.novaworks.net/plugins/wc-ajax-product-filter.zip',
      'required'           => true,
      'description'        => esc_html__('A plugin to filter woocommerce products with AJAX request.','sportie'),
      'demo_required'      => true,
      'version'            => '2.0.3.7'
    ),
    'elementor' => array(
      'name'               => esc_html__('Elementor Page Builder','sportie'),
      'slug'               => 'elementor',
      'required'           => true,
      'description'        => esc_html__('The most advanced frontend drag & drop page builder. Create high-end, pixel perfect websites at record speeds. Any theme, any page, any design.','sportie'),
      'demo_required'      => true
    ),
    'woocommerce' => array(
      'name'               => esc_html__('WooCommerce','sportie'),
      'slug'               => 'woocommerce',
      'required'           => true,
      'description'        => esc_html__('The eCommerce engine','sportie'),
      'demo_required'      => true
    ),
    'kirki' => array(
      'name'               => esc_html__('Kirki','sportie'),
      'slug'               => 'kirki',
      'required'           => true,
      'demo_required'      => true
    ),
    'yith-woocommerce-wishlist' => array(
      'name'               => esc_html__('YITH WooCommerce Wishlist','sportie'),
      'slug'               => 'yith-woocommerce-wishlist',
      'required'           => false,
      'description'        => esc_html__('YITH WooCommerce Wishlist gives your users the possibility to create, fill, manage and share their wishlists allowing you to analyze their interests and needs to improve your marketing strategies.','sportie'),
      'demo_required'      => true
    ),
    'envato-market' => array(
      'name'               => esc_html__('Envato Market','sportie'),
      'slug'               => 'envato-market',
      'source'             => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
      'required'           => false,
      'description'        => esc_html__('Automatically update your Envato theme','sportie'),
      'demo_required'      => true
    ),
    'revslider' => array(
      'name'               => esc_html__('Slider Revolution','sportie'),
      'slug'               => 'revslider',
      'source'				     => 'http://assets.novaworks.net/plugins/revslider.zip',
      'required'           => false,
      'demo_required'      => true,
      'version'            => '6.5.11'
    ),
    'woo-variation-swatches' => array(
      'name'               => esc_html__('Variation Swatches for WooCommerce','sportie'),
      'slug'               => 'woo-variation-swatches',
      'required'           => false,
      'description'        => esc_html__('Beautiful colors, images and buttons variation swatches for woocommerce product attributes. Requires WooCommerce 3.2+','sportie'),
      'demo_required'      => true
    ),
    'contact-form-7' => array(
      'name'               => esc_html__('Contact Form 7','sportie'),
      'slug'               => 'contact-form-7',
      'required'           => false,
      'description'        => esc_html__('Just another contact form plugin. Simple but flexible.','sportie'),
      'demo_required'      => true
    ),
  );

	$config = array(
	  'id'                => 'sportie',
		'default_path'      => '',
		'parent_slug'       => 'themes.php',
		'menu'              => 'tgmpa-install-plugins',
		'has_notices'       => true,
		'is_automatic'      => true,
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'sportie_theme_register_required_plugins' );
