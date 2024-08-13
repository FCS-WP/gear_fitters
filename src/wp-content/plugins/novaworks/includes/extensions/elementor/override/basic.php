<?php
// If this file is called directly, abort.

if ( ! defined( 'WPINC' ) ) {
    die;
}


add_action('elementor/core/files/clear_cache', function (){
	$key = 'novaworks-gmap-style-' . NOVA_VERSION;
	delete_transient($key);
});

function novaworks_elementor_get_widgets_black_list( $black_list ){
    $new_black_list = array(
        'WP_Widget_Calendar',
        'WP_Widget_Pages',
        'WP_Widget_Archives',
        'WP_Widget_Media_Audio',
        'WP_Widget_Media_Image',
        'WP_Widget_Media_Gallery',
        'WP_Widget_Media_Video',
        'WP_Widget_Meta',
        'WP_Widget_Text',
        'WP_Widget_RSS',
        'WP_Widget_Custom_HTML',
        'RevSliderWidget',
        'Novaworks_Widget_Recent_Posts',
    );

    $new_black_list = array_merge($black_list, $new_black_list);
    return $new_black_list;
}
add_filter('elementor/widgets/black_list', 'novaworks_elementor_get_widgets_black_list', 20);

function novaworks_elementor_backend_enqueue_scripts(){
    wp_enqueue_script(
        'novaworks-elementor-backend',
        NOVA_PLUGIN_URL . 'public/element/js/editor-backend.js' ,
        ['jquery'],
        NOVA_VERSION,
        true
    );
    $breakpoints = [
        'laptop' => [
            'name' => __( 'Laptop', 'novaworks' ),
            'text' => __( 'Preview for 1366px', 'novaworks' )
        ],
        'tablet' => [
            'name' => __( 'Tablet Landscape', 'novaworks' ),
            'text' => __( 'Preview for 1024px', 'novaworks' )
        ],
        'tabletportrait' => [
            'name' => __( 'Tablet Portrait', 'novaworks' ),
            'text' => __( 'Preview for 768px', 'novaworks' )
        ]
    ];
    if(nova_is_local()){
        $breakpoints = [
            'laptop1' => [
                'name' => __( 'Laptop 1', 'novaworks' ),
                'text' => __( 'Preview for 1680px', 'novaworks' )
            ],
            'laptop2' => [
                'name' => __( 'Laptop 2', 'novaworks' ),
                'text' => __( 'Preview for 1440px', 'novaworks' )
            ],
            'laptop' => [
                'name' => __( 'Laptop', 'novaworks' ),
                'text' => __( 'Preview for 1366px', 'novaworks' )
            ],
            'tablet' => [
                'name' => __( 'Tablet Landscape', 'novaworks' ),
                'text' => __( 'Preview for 1024px', 'novaworks' )
            ],
            'tabletportrait' => [
                'name' => __( 'Tablet Portrait', 'novaworks' ),
                'text' => __( 'Preview for 768px', 'novaworks' )
            ]
        ];
    }
    wp_localize_script('novaworks-elementor-backend', 'LaCustomBPFE', $breakpoints);
}
add_action( 'elementor/editor/before_enqueue_scripts', 'novaworks_elementor_backend_enqueue_scripts');
