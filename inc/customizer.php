<?php
/**
 * Odin Theme Customizer
 *
 */
include_once get_template_directory() . '/inc/kirki/kirki.php';

/**
 * Create the customizer panels and sections
 */
function brasa_kirki_add_panel( $wp_customize ) {
	/**
	 * Add sections
	 */
	$wp_customize->add_section( 'home', array(
		'title'       => __( 'Home', 'odin' ),
		'priority'    => 10,
	) );
	$wp_customize->add_section( 'visual', array(
		'title'       => __( 'Visual', 'odin' ),
		'priority'    => 10,
	) );
}
add_action( 'customize_register', 'brasa_kirki_add_panel' );

/**
 * Create the settings
 */
function brasa_kirki_fields( $fields ) {
	$fields[] = array(
		'type'     => 'image',
		'setting'  => 'logo',
		'label'    => __( 'Image Site Logo', 'odin' ),
		'section'  => 'visual',
		'default'  => '',
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'featured_btn_txt',
		'label'    => __( 'Texto do botão em destaque no menu', 'odin' ),
		'section'  => 'visual',
		'default'  => '',
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'featured_btn_link',
		'label'    => __( 'Link do botão em destaque no menu', 'odin' ),
		'section'  => 'visual',
		'default'  => '',
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'textarea',
		'setting'  => 'desc',
		'label'    => __( 'Description Site', 'odin' ),
		'section'  => 'home',
		'default'  => '',
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'slider',
		'label'    => __( 'Shortcode of Brasa Slider', 'odin' ),
		'section'  => 'home',
		'default'  => '',
		'priority' => 1,
	);

	return $fields;
}
add_filter( 'kirki/fields', 'brasa_kirki_fields' );
