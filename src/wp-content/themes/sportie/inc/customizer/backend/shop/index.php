<?php

// ============================================
// Panel
// ============================================

Kirki::add_panel( 'panel_shop', array(
    'title'         => esc_html__( 'Shop', 'sportie' ),
    'priority'      => 50,
) );


// ============================================
// Sections
// ============================================

Kirki::add_section( 'shop', array(
    'title'          => esc_html__( 'Layout', 'sportie' ),
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
    'panel'          => 'panel_shop'
) );

Kirki::add_section( 'shop_catalog_mode', array(
    'title'          => esc_html__( 'Catalog Mode', 'sportie' ),
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
    'panel'          => 'panel_shop'
) );

Kirki::add_section( 'shop_custom_archives', array(
    'title'          => esc_html__( 'Custom Archives', 'sportie' ),
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
    'panel'          => 'panel_shop'
) );


// ============================================
// Controls
// ============================================

require_once('layout.php');
require_once('catalog_mode.php');
require_once('custom_archives.php');
