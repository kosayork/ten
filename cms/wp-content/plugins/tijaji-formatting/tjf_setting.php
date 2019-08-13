<?php

function tjf_customizer_af( $wp_customize ) {
	
	$wp_customize->add_section( 'tjf_automatic_formatting', array (
	'title' => __( 'TIJAJI formatting', 'tijaji-formatting' ),
	'priority' => 999,
	));

	$wp_customize->add_setting( 'tjf_af_enable', array (
	'default' => '1',
	'sanitize_callback' => 'tjf_sanitize_select',
	'transport' => 'postMessage',
	));
	$wp_customize->add_control( 'tjf_af_enable', array(
	'section' => 'tjf_automatic_formatting',
	'settings' => 'tjf_af_enable',
	'label' => __( 'How do you do automatic formatting of WordPress default articles ?', 'tijaji-formatting' ),
	'description' => __( 'You can stop inserting and deleting &lt;p&gt; tags and / or &lt;br&gt; tags automatically in articles here.', 'tijaji-formatting' ),
	'type' => 'radio',
	'choices' => array(
		'1' => __( 'Complete stop', 'tijaji-formatting' ),
		'2' => __( 'Stop at single', 'tijaji-formatting' ),
		'3' => __( 'Stop at page', 'tijaji-formatting' ),
		'' => __( 'Enable', 'tijaji-formatting' ),
	),
	'priority' => 10,
	));

	$wp_customize->add_setting( 'tjf_af_symbol', array (
	'default' => '',
	'sanitize_callback' => 'tjf_sanitize_select',
	'transport' => 'postMessage',
	));
	$wp_customize->add_control( 'tjf_af_symbol', array(
	'section' => 'tjf_automatic_formatting',
	'settings' => 'tjf_af_symbol',
	'label' => __( 'How do you do WordPress default article symbol auto-conversion function ?', 'tijaji-formatting' ),
	'description' => __( 'Here you can stop the article symbols from being converted automatically.', 'tijaji-formatting' ),
	'type' => 'radio',
	'choices' => array(
		'1' => __( 'Complete stop', 'tijaji-formatting' ),
		'2' => __( 'Stop at single', 'tijaji-formatting' ),
		'3' => __( 'Stop at page', 'tijaji-formatting' ),
		'' => __( 'Enable', 'tijaji-formatting' ),
	),
	'priority' => 20,
	));

	$wp_customize->add_setting( 'tjf_af_post_br', array (
	'default' => '3',
	'sanitize_callback' => 'tjf_sanitize_select',
	'transport' => 'postMessage',
	));
	$wp_customize->add_control( 'tjf_af_post_br', array(
	'section' => 'tjf_automatic_formatting',
	'settings' => 'tjf_af_post_br',
	'label' => __( 'Would you like to convert line breaks to &lt;br /&gt; automatically with a singular ?', 'tijaji-formatting' ),
	'description' => __( '&lt;br /&gt; Line breaks are not reflected unless autoformatting is stopped.', 'tijaji-formatting' ),
	'type' => 'radio',
	'choices' => array(
		'3' => __( 'Post and Page', 'tijaji-formatting' ),
		'2' => __( 'Post only', 'tijaji-formatting' ),
		'1' => __( 'page only', 'tijaji-formatting' ),
		'' => __( 'No', 'tijaji-formatting' ),
	),
	'priority' => 30,
	));

	$wp_customize->add_setting( 'tjf_af_w_enable', array (
	'default' => '',
	'sanitize_callback' => 'tjf_sanitize_select',
	'transport' => 'postMessage',
	));
	$wp_customize->add_control( 'tjf_af_w_enable', array(
	'section' => 'tjf_automatic_formatting',
	'settings' => 'tjf_af_w_enable',
	'label' => __( 'How do you do automatic formatting of WordPress default text widjet ?', 'tijaji-formatting' ),
	'description' => __( 'You can stop inserting and deleting &lt;p&gt; tags and / or &lt;br&gt; tags automatically in text widjet here.', 'tijaji-formatting' ),
	'type' => 'radio',
	'choices' => array(
		'1' => __( 'Complete stop', 'tijaji-formatting' ),
		'' => __( 'Enable', 'tijaji-formatting' ),
	),
	'priority' => 40,
	));

	$wp_customize->add_setting( 'tjf_af_w_symbol', array (
	'default' => '',
	'sanitize_callback' => 'tjf_sanitize_select',
	'transport' => 'postMessage',
	));
	$wp_customize->add_control( 'tjf_af_w_symbol', array(
	'section' => 'tjf_automatic_formatting',
	'settings' => 'tjf_af_w_symbol',
	'label' => __( 'How do you do WordPress default text widjet symbol auto-conversion function ?', 'tijaji-formatting' ),
	'description' => __( 'Here you can stop the text widjet symbols from being converted automatically.', 'tijaji-formatting' ),
	'type' => 'radio',
	'choices' => array(
		'1' => __( 'Complete stop', 'tijaji-formatting' ),
		'' => __( 'Enable', 'tijaji-formatting' ),
	),
	'priority' => 50,
	));

	$wp_customize->add_setting( 'tjf_af_text_widget_br', array (
	'default' => '',
	'sanitize_callback' => 'tjf_sanitize_select',
	'transport' => 'postMessage',
	));
	$wp_customize->add_control( 'tjf_af_text_widget_br', array(
	'section' => 'tjf_automatic_formatting',
	'settings' => 'tjf_af_text_widget_br',
	'label' => __( 'Would you like to convert line breaks to &lt;br /&gt; automatically with a text widget ?', 'tijaji-formatting' ),
	'description' => __( '&lt;br /&gt; Line breaks are not reflected unless autoformatting is stopped.', 'tijaji-formatting' ),
	'type' => 'radio',
	'choices' => array(
		'1' => __( 'Yes', 'tijaji-formatting' ),
		'' => __( 'No', 'tijaji-formatting' ),
	),
	'priority' => 60,
	));

	$wp_customize->add_setting( 'tjf_af_c_h_widget_br', array (
	'default' => '',
	'sanitize_callback' => 'tjf_sanitize_select',
	'transport' => 'postMessage',
	));
	$wp_customize->add_control( 'tjf_af_c_h_widget_br', array(
	'section' => 'tjf_automatic_formatting',
	'settings' => 'tjf_af_c_h_widget_br',
	'label' => __( 'Would you like to convert line breaks to &lt;br /&gt; automatically with a HTML Code Widget ?', 'tijaji-formatting' ),
	'description' => __( '&lt;br /&gt; Line breaks are not reflected unless autoformatting is stopped.', 'tijaji-formatting' ),
	'type' => 'radio',
	'choices' => array(
		'1' => __( 'Yes', 'tijaji-formatting' ),
		'' => __( 'No', 'tijaji-formatting' ),
	),
	'priority' => 70,
	));

}
add_action('customize_register', 'tjf_customizer_af');

