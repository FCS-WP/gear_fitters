<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'social_share', array(
    'title'          => esc_html__( 'Social Share', 'sportie' ),
    'priority'       => 65,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 98495;
$section = 'social_share';

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'sharing_facebook',
  'label'       => esc_html__( 'Facebook', 'sportie' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
) );

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'sharing_twitter',
  'label'       => esc_html__( 'Twitter', 'sportie' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
) );

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'sharing_reddit',
  'label'       => esc_html__( 'Reddit', 'sportie' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
) );

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'sharing_linkedin',
  'label'       => esc_html__( 'Linkedin', 'sportie' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
) );

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'sharing_tumblr',
  'label'       => esc_html__( 'Tumblr', 'sportie' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
) );

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'sharing_pinterest',
  'label'       => esc_html__( 'Pinterest', 'sportie' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
) );

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'sharing_line',
  'label'       => esc_html__( 'Line', 'sportie' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
) );

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'sharing_vk',
  'label'       => esc_html__( 'VK', 'sportie' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
) );

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'sharing_whatapps',
  'label'       => esc_html__( 'Whatapps', 'sportie' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
) );

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'sharing_telegram',
  'label'       => esc_html__( 'Telegram', 'sportie' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
) );

Kirki::add_field( 'sportie', array(
	'type'        => 'switch',
	'settings'    => 'sharing_email',
  'label'       => esc_html__( 'Email', 'sportie' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'sportie' ),
		'off' => esc_html__( 'Disable', 'sportie' ),
	),
) );
