<?php
$sep_id  = 75653;
$section = 'style_main_menu';

Kirki::add_field( 'sportie', array(
    'type'        => 'color',
    'settings'    => 'main_menu_background_color',
    'label'       => esc_html__( 'Background Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#fff',
    'priority'    => 10,

) );

// ---------------------------------------------
Kirki::add_field( 'sportie', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------

Kirki::add_field( 'sportie', array(
    'type'        => 'color',
    'settings'    => 'main_menu_font_color',
    'label'       => esc_html__( 'Text Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#292929',
    'priority'    => 10,

) );

// ---------------------------------------------
Kirki::add_field( 'sportie', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------

Kirki::add_field( 'sportie', array(
    'type'        => 'color',
    'settings'    => 'main_menu_accent_color',
    'label'       => esc_html__( 'Accent Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#4D592E',
    'priority'    => 10,

) );

// ---------------------------------------------
Kirki::add_field( 'sportie', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------

Kirki::add_field( 'sportie', array(
    'type'        => 'color',
    'settings'    => 'main_menu_border_color',
    'label'       => esc_html__( 'Border Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#DEDEDE',
    'priority'    => 10,

) );

// ---------------------------------------------
Kirki::add_field( 'sportie', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------
