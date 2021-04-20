<?php
function abn_publisher_banner_meta() {

	$prefix = 'publisher_banner_';
	$casestudy_banner_meta = new_cmb2_box( array(
		'id'           => 'publisherbanner',
		'title'        => 'Banner',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/publisher-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );

	$casestudy_banner_meta->add_field( array(
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
	$casestudy_banner_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$casestudy_banner_meta->add_field( array(
		'name' => 'Description',
		'type' => 'wysiwyg',
		'id'   => $prefix.'desc',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_publisher_banner_meta' );