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
		'id' => $prefix . 'license_information',
		'type' => 'textarea',
		'attributes' => array(
			'data-conditional-id' => $prefix . 'licensed',
		),
	) );

	$cmb->add_field( array(
		'name' => __( 'image', 'cmb2' ),
		'id' => $prefix . 'image',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Upload Resume', 'cmb2' ),
		'id' => $prefix . 'resume',
		'type' => 'file',
		'text' =>array(
			'add_upload_file_text' => __('Upload PDF File','alpha')
		),
		'query_args' => array(
			'type' =>  array('application/pdf'),
		),
		'options' => array(
			'url' => false
		),
	) );

}