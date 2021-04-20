<?php
function abn_casestudy_banner_meta() {

	$prefix = 'casestudy_banner_';
	$casestudy_banner_meta = new_cmb2_box( array(
		'id'           => 'casebanner',
		'title'        => 'Banner',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/casestudy-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );	
	$casestudy_banner_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_casestudy_banner_meta' );

function abn_casestudy_case_meta_meta() {

	$prefix = 'casestudy_detailed_';
	$case_detail_meta = new_cmb2_box( array(
		'id'           => 'metadata',
		'title'        => 'Details',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/casestudy-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );	
	$case_detail_id = $case_detail_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Data {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );    
	$case_detail_meta->add_group_field( $case_detail_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );	
	$case_detail_meta->add_group_field( $case_detail_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
	$case_detail_meta->add_group_field( $case_detail_id, array(
        'name'       => esc_html__( 'Designation', 'cmb2' ),
        'id'         => 'designation',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Designation', 'style' =>'width:500px;'
		)
	) );
	$case_detail_meta->add_group_field( $case_detail_id, array(
		'name'    => 'Image',
		'id'      => 'image',
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
	$case_detail_meta->add_group_field( $case_detail_id, array(
        'name'    => 'Icon',
		'id'      => 'icon',
		'type'    => 'file',		
		'text'    => array(
			'add_upload_file_text' => 'Add Icon File'
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
}
//add_action( 'cmb2_init', 'abn_casestudy_case_meta_meta' );

function abn_casestudy_count_data() {

	$prefix = 'casestudy_count_';
	$case_count_meta = new_cmb2_box( array(
		'id'           => 'count_metadata',
		'title'        => 'Count Data',
		'object_types'  => array( 'case-study' ), // Post type
		/* 'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/casestudy-temp.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, */
	) );	
	$case_count_id = $case_count_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Data {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );    
	$case_count_meta->add_group_field( $case_count_id, array(
        'name'       => esc_html__( 'Number', 'cmb2' ),
        'id'         => 'number',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Number', 'style' =>'width:500px;'
		)
	) );	
	$case_count_meta->add_group_field( $case_count_id, array(
        'name'       => esc_html__( 'Text', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$case_count_meta->add_group_field( $case_count_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );	
}
add_action( 'cmb2_init', 'abn_casestudy_count_data' );


function abn_casestudy_call_to_action() {

	$prefix = 'casestudy_cta_';
	$case_cta_meta = new_cmb2_box( array(
		'id'           => 'cta_metadata',
		'title'        => 'Count Data',
		'object_types' => array( 'page'),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/casestudy-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$case_cta_meta->add_field( array(
		'name' => 'Text',
		'type' => 'wysiwyg',
		'id'   => $prefix.'text',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$case_cta_meta->add_field( array(
		'name' => 'Button Text',
		'type' => 'text',
		'id'   => $prefix.'btn_text',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$case_cta_meta->add_field( array(
		'name' => 'Button Text',
		'type' => 'text_url',
		'id'   => $prefix.'btn_text_url',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	
}
add_action( 'cmb2_init', 'abn_casestudy_call_to_action' );

function metabox_for_books() {
    $prefix = 'sge_single_case_study_';

    $cmb_case_study = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Details', 'cmb2' ),
        'object_types'  => array( 'case-study' ), // Post type
    ) );

    $cmb_case_study->add_field( array(
        'name'       => __( 'Sub Title', 'cmb2' ),
        'id'         => $prefix . 'sub_title',
        'type'       => 'text',
    ) );
    $cmb_case_study->add_field( array(
        'name'       => __( 'Heading 1', 'cmb2' ),
        'id'         => $prefix . 'heading1',
        'type'       => 'text',
    ) );

    $cmb_case_study->add_field( array(
		'name' => 'Sub Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_content',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
    $cmb_case_study->add_field( array(
		'name' => 'CTA Text',
		'type' => 'wysiwyg',
		'id'   => $prefix.'cta_text',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$cmb_case_study->add_field( array(
		'name' => 'Button Text',
		'type' => 'text',
		'id'   => $prefix.'cta_btn_text',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$cmb_case_study->add_field( array(
		'name' => 'Button Text URL',
		'type' => 'text_url',
		'id'   => $prefix.'cta_btn_text_url',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );

}
add_action( 'cmb2_init', 'metabox_for_books' );