<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( '404_page', array(
    'title'          => esc_html__( '404 Page', 'sportie' ),
    'priority'       => 65,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 9835;
$section = '404_page';

Kirki::add_field( 'sportie', array(
    'type'        => 'image',
    'settings'    => 'page_404_bg',
    'label'       => esc_html__( 'Background Image', 'sportie' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10
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
    'settings'    => 'page_404_font_color',
    'label'       => esc_html__( 'Text Color', 'sportie' ),
    'section'     => $section,
    'default'     => '#000',
    'priority'    => 10,
) );
