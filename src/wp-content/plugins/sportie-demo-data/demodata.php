<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

function nova_sportie_get_demo_array($dir_url, $dir_path){

    $demo_items = array(
        'home-01' => array(
            'link'          => 'https://sportie.novaworks.net',
            'title'         => 'Home 01',
            'data_sample'   => 'data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget.json',
            'data_slider'   => 'home-01.zip',
            'category'      => array(
                'Demo',
	            'Bike'
            )
        ),
        'home-02' => array(
            'link'          => 'https://sportie.novaworks.net/home-02',
            'title'         => 'Home 02',
            'data_sample'   => 'data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget.json',
            'data_slider'   => 'home-02.zip',
            'category'      => array(
                'Demo',
	            'Bike'
            )
        ),
        'home-03' => array(
            'link'          => 'https://sportie.novaworks.net/home-03',
            'title'         => 'Home 03',
            'data_sample'   => 'data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget.json',
            'data_slider'   => 'home-03.zip',
            'category'      => array(
                'Demo',
	            'Bike'
            )
        ),
        'home-04' => array(
            'link'          => 'https://sportie.novaworks.net/home-04',
            'title'         => 'Home 04',
            'data_sample'   => 'data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget.json',
            'data_slider'   => 'home-04.zip',
            'category'      => array(
                'Demo',
	            'Bike'
            )
        ),
        'home-05' => array(
            'link'          => 'https://sportie.novaworks.net/home-05',
            'title'         => 'Home 05',
            'data_sample'   => 'data.json',
            'data_product'  => 'products.csv',
            'data_widget'   => 'widget.json',
            'data_slider'   => 'home-04.zip',
            'category'      => array(
                'Demo',
	            'Bike'
            )
        )
    );

    $default_image_setting = array(
        'woocommerce_single_image_width' => 1000,
        'woocommerce_thumbnail_image_width' => 700,
        'woocommerce_thumbnail_cropping' => 'custom',
        'woocommerce_thumbnail_cropping_custom_width' => 130,
        'woocommerce_thumbnail_cropping_custom_height' => 98
    );

    $default_menu = array(
        'nova_menu_primary'             => 'Main Menu',
        'nova_topbar_menu'              => 'Top menu',
    );

    $default_page = array(
        'page_for_posts' 	            => 'Blog',
        'woocommerce_shop_page_id'      => 'Shop',
        'woocommerce_cart_page_id'      => 'Cart',
        'woocommerce_checkout_page_id'  => 'Checkout',
        'woocommerce_myaccount_page_id' => 'My account'
    );

    $slider = $dir_path . 'Slider/';
    $content = $dir_path . 'Content/';
    $product = $dir_path . 'Product/';
    $widget = $dir_path . 'Widget/';
    $setting = $dir_path . 'Setting/';
    $preview = $dir_url;

    $data_return = array();

    foreach ($demo_items as $demo_key => $demo_detail){
	    $value = array();
	    $value['title']             = $demo_detail['title'];
	    $value['category']          = !empty($demo_detail['category']) ? $demo_detail['category'] : array('Demo');
	    $value['demo_preset']       = $demo_key;
	    $value['demo_url']          = $demo_detail['link'];
	    $value['preview']           = !empty($demo_detail['preview']) ? $demo_detail['preview'] : ($preview . $demo_key . '.jpg');
	    $value['content']           = !empty($demo_detail['data_sample']) ? $content . $demo_detail['data_sample'] : $content . 'sample-data.json';
	    $value['option']            = !empty($demo_detail['data_option']) ? $setting . $demo_detail['data_option'] : $setting . 'settings.dat';
	    $value['product']           = !empty($demo_detail['data_product']) ? $product . $demo_detail['data_product'] : $product . 'sample-product.json';
	    $value['widget']            = !empty($demo_detail['data_widget']) ? $widget . $demo_detail['data_widget'] : $widget . 'widget.json';
	    $value['pages']             = array_merge( $default_page, array( 'page_on_front' => $demo_detail['title'] ));
	    $value['menu-locations']    = array_merge( $default_menu, isset($demo_detail['menu-locations']) ? $demo_detail['menu-locations'] : array());
	    $value['other_setting']     = array_merge( $default_image_setting, isset($demo_detail['other_setting']) ? $demo_detail['other_setting'] : array());
	    if(!empty($demo_detail['data_slider'])){
		    $value['slider'] = $slider . $demo_detail['data_slider'];
	    }
	    $data_return[$demo_key] = $value;
    }

    return $data_return;
}
