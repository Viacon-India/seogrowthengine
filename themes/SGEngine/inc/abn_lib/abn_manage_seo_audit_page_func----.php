<?php
function abn_seo_audit_banner_meta() {

	$prefix = 'seo_audit_banner_';
	$seo_audit_banner_meta = new_cmb2_box( array(
		'id'           => 'seo_audit_banner',
		'title'        => 'Banner',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/free-seo-audit-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );

	$seo_audit_banner_meta->add_field( array(
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
	$seo_audit_banner_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$seo_audit_banner_meta->add_field( array(
		'name' => 'Description',
		'type' => 'wysiwyg',
		'id'   => $prefix.'desc',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_seo_audit_banner_meta' );


function abn_seo_audit_footer_meta() {

	$prefix = 'seo_audit_footer_';
	$seo_audit_footer_meta = new_cmb2_box( array(
		'id'           => 'seo_audit_footer',
		'title'        => 'Footer',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/free-seo-audit-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );	
	$seo_audit_footer_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$seo_audit_footer_meta->add_field( array(
		'name' => 'Button Text',
		'type' => 'text',
		'id'   => $prefix.'btn_text',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$seo_audit_footer_meta->add_field( array(
		'name' => 'Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'btn_link',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_seo_audit_footer_meta' );