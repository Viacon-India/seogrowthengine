<?php
function abn_contact_banner_meta() {

	$prefix = 'contact_banner_';
	$contact_banner_meta = new_cmb2_box( array(
		'id'           => 'data',
		'title'        => 'Banner',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/contact-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );

	$contact_banner_meta->add_field( array(
		'name'    => 'Image',
		'id'      => $prefix.'image',
		'type'    => 'file',		
		'text'    => array(
			'add_upload_file_text' => 'Add File'
		),
		'query_args' => array(
			'type' => array(
			 	'image/gif',
			 	'image/jpeg',
			 	'image/png',
			),
		),
		'preview_size' => array( 150, 150 ),
	) );
	$contact_banner_meta->add_field( array(
		'name' => 'Main Content',
		'type' => 'textarea',
		'id'   => $prefix.'cont',
		'attributes' => array(
			'style'		=>'width: 100%; height: 100px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_contact_banner_meta' );


function abn_contact_fscroll_meta() {

	$prefix = 'contact_fscroll_';
	$contact_fscroll_meta = new_cmb2_box( array(
		'id'           => 'fscroll',
		'title'        => 'First Scroll',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/contact-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );

	$contact_fscroll_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$contact_fscroll_meta->add_field( array(
		'name' => 'Content',
		'type' => 'textarea',
		'id'   => $prefix.'cont',
		'attributes' => array(
			'style'		=>'width: 100%; height: 100px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_contact_fscroll_meta' );