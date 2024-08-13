<?php

$sep = 90000;
$i= 0;

$section = 'header_mobile';

Kirki::add_field( 'sportie', array(
    'type'        => 'color',
    'settings'    => 'header_mobile_background_color',
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
    'settings'    => 'header_mobile_text_color',
    'label'       => esc_html__( 'Text Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#000',
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
    'settings'    => 'handheld_bar_background_color',
    'label'       => esc_html__( 'Handheld Bar Background Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#000',
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
    'settings'    => 'handheld_bar_text_color',
    'label'       => esc_html__( 'Handheld Bar Text Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#fff',
    'priority'    => 10,

) );
