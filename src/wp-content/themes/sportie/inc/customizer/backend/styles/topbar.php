<?php
$sep_id  = 76952;
$section = 'style_topbar';

// ---------------------------------------------
Kirki::add_field( 'sportie', array(
    'type'        => 'color',
    'settings'    => 'topbar_bg_color',
    'label'       => esc_html__( 'Background Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#F5F5F5',
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
    'settings'    => 'topbar_font_color',
    'label'       => esc_html__( 'Text Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#242424',
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
    'settings'    => 'topbar_heading_color',
    'label'       => esc_html__( 'Heading Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#242424',
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
    'settings'    => 'topbar_accent_color',
    'label'       => esc_html__( 'Accent Color', 'sportie' ),
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
    'settings'    => 'topbar_border_color',
    'label'       => esc_html__( 'Border Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#F5F5F5',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'sportie', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
