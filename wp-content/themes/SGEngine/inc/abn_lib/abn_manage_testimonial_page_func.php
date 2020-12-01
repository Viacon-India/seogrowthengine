<?php
function abn_testimonial_footer_meta() {

	$prefix = 'testimonial_footer_';
	$testi_footer_meta = new_cmb2_box( array(
		'id'           => 'testminial_foo',
		'title'        => 'Footer',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/testimonial-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$testi_footer_meta->add_field( array(
		'name' => 'Heading',
		'type' => 'wysiwyg',
		'id'   => $prefix.'heading',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	
	$testi_footer_meta->add_field( array(
		'name' => 'First Button Text',
		'type' => 'text',
		'id'   => $prefix.'first_btn_text',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$testi_footer_meta->add_field( array(
		'name' => 'First Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'first_btn_link',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$testi_footer_meta->add_field( array(
		'name' => 'Second Button Text',
		'type' => 'text',
		'id'   => $prefix.'second_btn_text',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$testi_footer_meta->add_field( array(
		'name' => 'Second Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'second_btn_link',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_testimonial_footer_meta' );