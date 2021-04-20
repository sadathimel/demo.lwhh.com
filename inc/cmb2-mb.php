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
		'name' 	  => __( 'Location', 'alpha' ),
		'id'   	  => $prefix . 'location',
		'type' 	  => 'text',
		'default' => 'bd',
	) );

	$cmb->add_field( array(
		'name' => __( 'Date', 'alpha' ),
		'id'   => $prefix . 'date',
		'type' => 'text_date_timestamp',
	) );

	$cmb->add_field( array(
		'name' => __( 'Licensed', 'alpha' ),
		'id'   => $prefix . 'licensed',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name'       => __( 'License Information', 'alpha' ),
		'id'         => $prefix . 'license_information',
		'type'       => 'textarea',
		'attributes' => array(
			'data-conditional-id' => $prefix . 'licensed',
		),
	) );

	$cmb->add_field( array(
		'name' => __( 'image', 'cmb2' ),
		'id'   => $prefix . 'image',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Upload Resume', 'cmb2' ),
		'id'   => $prefix . 'resume',
		'type' => 'file',
		'text' =>array(
			'add_upload_file_text' => __('Upload PDF File','alpha')
		),
		'query_args' => array(
			'type'   =>  array('application/pdf'),
		),
		'options' => array(
			'url' => false
		),
	) );

}

/*
**Price Table
*/

add_action( 'cmb2_init', 'cmb2_add_pricingtable' );
function cmb2_add_pricingtable() {

	$prefix = '_alpha_pt_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'pricing_table',
		'title'        => __( 'Pricing Table', 'alpha' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$group = $cmb->add_field( array(
		'name' 		  => __( 'Pricing Table', 'alpha' ),
		'id'   		  => $prefix . 'pricing_table',
		'type' 		  => 'group',
	) );

	$cmb->add_group_field($group, array(
		'name' 		 => __( 'Caption Option', 'alpha' ),
		'id' 		 => $prefix . 'priceing_caption',
		'type' 		 => 'text',
	) );		

	$cmb->add_group_field($group, array(
		'name' 		 => __( 'Pricing Option', 'alpha' ),
		'id' 		 => $prefix . 'pricing_option',
		'type' 		 => 'text',
		'repeatable' => true,
	) );

	$cmb->add_group_field($group, array(
		'name' 		 => __( 'Price', 'alpha' ),
		'id' 		 => $prefix . 'Price',
		'type' 		 => 'text',
	) );		

	
}

/*
**Services 
*/

add_action( 'cmb2_init', 'alpha_add_services' );
function alpha_add_services() {

	$prefix = '_alpha_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'services',
		'title'        => __( 'Services', 'alpha' ),
		'object_types' => array( 'page', 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$service = $cmb->add_field( array(
		'name' => __( 'service', 'alpha' ),
		'id' => $prefix . 'service',
		'type' => 'group',
	) );

	$cmb->add_group_field($service, array(
		'name' => __( 'title', 'alpha' ),
		'id' => $prefix . 'title',
		'type' => 'text',
	) );

	$cmb->add_group_field($service, array(
		'name' => __( 'icon', 'alpha' ),
		'id' => $prefix . 'icon',
		'type' => 'text',
	) );

	$cmb->add_group_field($service, array(
		'name' => __( 'content', 'alpha' ),
		'id' => $prefix . 'content',
		'type' => 'text',
	) );

}