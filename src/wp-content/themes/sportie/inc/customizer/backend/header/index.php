<?php

// ============================================
// Panel
// ============================================

Kirki::add_section( 'panel_header', array(
    'title'         => esc_html__( 'Header', 'sportie' ),
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

Kirki::add_field( 'sportie', array(
    'type'        => 'select',
    'settings'    => 'header_template',
    'label'       => esc_html__( 'Header Template', 'sportie' ),
    'section'     => 'panel_header',
    'default'     => 'type-3',
    'priority'    => 10,
    'choices'     => array(
        'type-default'     => esc_html__( 'Header Default', 'sportie' ),
        'type-2'     => esc_html__( 'Header 02', 'sportie' ),
        'type-3'     => esc_html__( 'Header 03', 'sportie' ),
    ),
) );

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'header_show_main_menu',
  'label'       => esc_html__( 'Main Menu', 'sportie' ),
	'section'     => 'panel_header',
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
  'active_callback'    => array(
      array(
          'setting'  => 'header_template',
          'operator' => '==',
          'value'    => 'type-default',
      ),
  ),
) );

Kirki::add_field( 'sportie', array(
    'type'        => 'select',
    'settings'    => 'header_menu_position',
    'label'       => esc_html__( 'Menu Position', 'sportie' ),
    'section'     => 'panel_header',
    'default'     => 'menu-center',
    'priority'    => 10,
    'choices'     => array(
        'menu-center'     => esc_html__( 'Center', 'sportie' ),
        'menu-left'     => esc_html__( 'Left', 'sportie' ),
        'menu-right'     => esc_html__( 'Right', 'sportie' ),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'header_template',
            'operator' => '==',
            'value'    => 'type-3',
        ),
    ),
) );

  // ============================================
  // Sections
  // ============================================

  Kirki::add_section( 'header_settings', array(
      'title'          => esc_html__( 'Settings', 'sportie' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'header_logo', array(
      'title'          => esc_html__( 'Logo', 'sportie' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'header_elements', array(
      'title'          => esc_html__( 'Icons', 'sportie' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'header_top_bar', array(
      'title'          => esc_html__( 'Top Bar', 'sportie' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'header_mobile', array(
      'title'          => esc_html__( 'Mobile Header', 'sportie' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'header_sticky', array(
      'title'          => esc_html__( 'Sticky Header', 'sportie' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'page_header', array(
      'title'          => esc_html__( 'Page Header', 'sportie' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

require_once('settings.php');
require_once('elements.php');
require_once('topbar.php');
require_once('logo.php');
require_once('sticky.php');
require_once('mobile.php');
require_once('page_header.php');
