<?php

add_action( 'cmb2_init', 'cmb2_add_image_info_metabox' );
function cmb2_add_image_info_metabox() {

	$prefix = '_alpha_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'image_information',
		'title'        => __( 'Image information', 'alpha' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Camera Model', 'alpha' ),
		'id' => $prefix . 'camera_model',
		'type' => 'text',
		'default' => 'canon',
	) );

	$cmb->add_field( array(
		'name' => __( 'Location', 'alpha' ),
		'id' => $prefix . 'location',
		'type' => 'text',
		'default' => 'bd',
	) );

	$cmb->add_field( array(
		'name' => __( 'Date', 'alpha' ),
		'id' => $prefix . 'date',
		'type' => 'text_date_timestamp',
	) );

	$cmb->add_field( array(
		'name' => __( 'Licensed', 'alpha' ),
		'id' => $prefix . 'licensed',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name' => __( 'License Information', 'alpha' ),
		'id' => $prefix . 'licensed_in',
		'type' => 'textarea',
		'attributes' => array(
			'data-conditional-id' => $prefix . 'licensed',
		),
	) );

}