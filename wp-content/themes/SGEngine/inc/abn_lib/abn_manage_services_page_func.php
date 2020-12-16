<?php
add_action( 'cmb2_init', 'abn_service_banner_meta' );
function abn_service_banner_meta() {

	$prefix = 'service_banner_';
	$service_banner_meta = new_cmb2_box( array(
		'id'           => $prefix.'metadata',
		'title'        => 'Service Banner',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );

	$service_banner_meta->add_field( array(
		'name'    => 'Video',
		'id'      => $prefix.'video_url',
		'type'    => 'file',		
		'text'    => array(
			'add_upload_file_text' => 'Add File'
		),
		'query_args' => array(
			'type' => array(
			 	'video/mp4',
			),
		),
		'preview_size' => array( 150, 150 ),
	) );
	$service_banner_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_banner_meta->add_field( array(
		'name' => 'Main Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'cont',
		'attributes' => array(
			'style'		=>'width: 100%; height: 100px;'
		)
	) );
	$service_banner_meta->add_field( array(
		'name' => 'First Button Text',
		'type' => 'text',
		'id'   => $prefix.'first_btn_text',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_banner_meta->add_field( array(
		'name' => 'First Button URL',
		'type' => 'text_url',
		'id'   => $prefix.'first_btn_url',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_banner_meta->add_field( array(
		'name' => 'Second Button Text',
		'type' => 'text',
		'id'   => $prefix.'second_btn_text',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_banner_meta->add_field( array(
		'name' => 'Second Button URL',
		'type' => 'text_url',
		'id'   => $prefix.'second_btn_url',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
}

add_action( 'cmb2_init', 'abn_service_pricing_meta' );
function abn_service_pricing_meta() {

	$prefix = 'service_pricing_';
	$service_pricing_meta = new_cmb2_box( array(
		'id'           => $prefix.'metadata',
		'title'        => 'Pricing',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );
	$service_pricing_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_pricing_meta->add_field( array(
		'name' => 'Main Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'cont',
		'attributes' => array(
			'style'		=>'width: 100%; height: 100px;'
		)
	) );

	/*****************/
	$service_pricing_id = $service_pricing_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$service_pricing_meta->add_group_field( $service_pricing_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
}

add_action( 'cmb2_init', 'abn_service_how_it_works' );
function abn_service_how_it_works() {

	$prefix = 'service_how_it_works_';
	$service_work_meta = new_cmb2_box( array(
		'id'           => 'how_it_works',
		'title'        => 'How it works',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$service_work_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_work_meta->add_field( array(
		'name' => 'Sub Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_work_meta->add_field( array(
		'name' => 'Button Text',
		'type' => 'text',
		'id'   => $prefix.'btn_text',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_work_meta->add_field( array(
		'name' => 'Button URL',
		'type' => 'text_url',
		'id'   => $prefix.'btn_url',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_work_id = $service_work_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$service_work_meta->add_group_field( $service_work_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$service_work_meta->add_group_field( $service_work_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}

add_action( 'cmb2_init', 'abn_services_why_choose_us' );
function abn_services_why_choose_us() {

	$prefix = 'service_why_choose_us_';
	$service_choose_meta = new_cmb2_box( array(
		'id'           => 'why_choose_us',
		'title'        => 'Why Choose Us',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		//'show_on'      => array( 'id' => 14 ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$service_choose_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_choose_meta->add_field( array(
		'name' => 'Sub Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_choose_id = $service_choose_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$service_choose_meta->add_group_field( $service_choose_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$service_choose_meta->add_group_field( $service_choose_id, array(
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
	) );
	$service_choose_meta->add_group_field( $service_choose_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}

add_action( 'cmb2_init', 'abn_services_guarantee' );
function abn_services_guarantee() {

	$prefix = 'service_guarantee_';
	$service_guarantee_meta = new_cmb2_box( array(
		'id'           => 'guarantee',
		'title'        => 'Guarantee',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		//'show_on'      => array( 'id' => 14 ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$service_guarantee_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_guarantee_meta->add_field( array(
		'name' => 'Sub Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_guarantee_meta->add_field( array(
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
	) );
}

add_action( 'cmb2_init', 'abn_services_benefits' );
function abn_services_benefits() {

	$prefix = 'service_benefits_';
	$service_benefits_meta = new_cmb2_box( array(
		'id'           => 'benefits',
		'title'        => 'Benefits',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		//'show_on'      => array( 'id' => 14 ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$service_benefits_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_benefits_meta->add_field( array(
		'name' => 'Sub Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$benefits_id = $service_benefits_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Services {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Services', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Services', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$service_benefits_meta->add_group_field( $benefits_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$service_benefits_meta->add_group_field( $benefits_id, array(
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
	) );
	$service_benefits_meta->add_group_field( $benefits_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}

/*
add_action( 'cmb2_init', 'abn_service_scroll_one_meta' );
function abn_service_scroll_one_meta() {

	$prefix = 'service_first_scroll_';
	$first_scroll_meta = new_cmb2_box( array(
		'id'           => $prefix.'metadata',
		'title'        => 'First Scroll',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$first_scroll_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$first_scroll_id = $first_scroll_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$first_scroll_meta->add_group_field( $first_scroll_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$first_scroll_meta->add_group_field( $first_scroll_id, array(
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
	) );
	$first_scroll_meta->add_field( array(
		'name' => 'Short Decription',
		'type' => 'wysiwyg',
		'id'   => $prefix.'S_desc',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$first_scroll_meta->add_field( array(
		'name' => 'Button Text',
		'type' => 'text',
		'id'   => $prefix.'btn_text',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$first_scroll_meta->add_field( array(
		'name' => 'Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'btn_link',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
}

function abn_service_second_scoll_meta() {

	$prefix = 'service_second_scroll_';
	$second_scroll_meta = new_cmb2_box( array(
		'id'           => $prefix.'metadata',
		'title'        => 'Second Scroll',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$second_scroll_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$second_scroll_id = $second_scroll_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$second_scroll_meta->add_group_field( $second_scroll_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$second_scroll_meta->add_group_field( $second_scroll_id, array(
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
	) );
	$second_scroll_meta->add_group_field( $second_scroll_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
	
	
	$second_scroll_meta->add_field( array(
		'name' => 'Button Text',
		'type' => 'text',
		'id'   => $prefix.'btn_text',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$second_scroll_meta->add_field( array(
		'name' => 'Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'btn_link',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_service_second_scoll_meta' );

function abn_service_third_scoll_meta() {

	$prefix = 'service_third_scroll_';
	$third_scroll_meta = new_cmb2_box( array(
		'id'           => $prefix.'metadata',
		'title'        => 'Third Scroll',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$third_scroll_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );

	$third_scroll_id = $third_scroll_meta->add_field( array(
        'id'          => $prefix .'step_data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Step {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Step', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Step', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );	
	$third_scroll_meta->add_group_field( $third_scroll_id, array(
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
	) );
	$third_scroll_meta->add_group_field( $third_scroll_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );

	$third_scroll_meta->add_field( array(
		'name' => 'Description',
		'type' => 'wysiwyg',
		'id'   => $prefix.'desc',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );

	$third_scroll_id = $third_scroll_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );	
	$third_scroll_meta->add_group_field( $third_scroll_id, array(
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
	) );
	$third_scroll_meta->add_group_field( $third_scroll_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$third_scroll_meta->add_group_field( $third_scroll_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'textarea',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$third_scroll_meta->add_field( array(
		'name' => 'Button Text',
		'type' => 'text',
		'id'   => $prefix.'btn_text',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$third_scroll_meta->add_field( array(
		'name' => 'Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'btn_link',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_service_third_scoll_meta' );

function abn_service_fourth_scoll_meta() {

	$prefix = 'service_fourth_scroll_';
	$fourth_scroll_meta = new_cmb2_box( array(
		'id'           => $prefix.'metadata',
		'title'        => 'Fourth Scroll',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$fourth_scroll_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$fourth_scroll_meta->add_field( array(
		'name' => 'Sub Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$fourth_scroll_id = $fourth_scroll_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$fourth_scroll_meta->add_group_field( $fourth_scroll_id, array(
        'name'       => esc_html__( 'Number', 'cmb2' ),
        'id'         => 'number',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Number', 'style' =>'width:500px;'
		)
	) );
	$fourth_scroll_meta->add_group_field( $fourth_scroll_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );


	$fourth_scroll_meta->add_field( array(
		'name' => 'First Button(Text 1)',
		'type' => 'text',
		'id'   => $prefix.'f_btn_text_1',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$fourth_scroll_meta->add_field( array(
		'name' => 'First Button(Text 2)',
		'type' => 'text',
		'id'   => $prefix.'f_btn_text_2',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$fourth_scroll_meta->add_field( array(
		'name' => 'First Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'first_url',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );

	$fourth_scroll_meta->add_field( array(
		'name' => 'Second Button(Text 1)',
		'type' => 'text',
		'id'   => $prefix.'s_btn_text_1',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$fourth_scroll_meta->add_field( array(
		'name' => 'Second Button(Text 2)',
		'type' => 'text',
		'id'   => $prefix.'s_btn_text_2',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$fourth_scroll_meta->add_field( array(
		'name' => 'Second Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'second_url',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_service_fourth_scoll_meta' );
*/

/************************ FAQ **************************/

/*function abn_service_faq_meta() {

	$prefix = 'service_faq_';
	$service_faq_meta = new_cmb2_box( array(
		'id'           => $prefix.'metadata',
		'title'        => 'FAQ Data',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
	) );
	$service_faq_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );

	$service_faq_meta_id = $service_faq_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'FAQ {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another FAQ', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove FAQ', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$service_faq_meta->add_group_field( $service_faq_meta_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$service_faq_meta->add_group_field( $service_faq_meta_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_service_faq_meta' );*/

add_action( 'cmb2_init', 'abn_service_results' );
function abn_service_results() {

	$prefix = 'service_results_';
	$service_results_meta = new_cmb2_box( array(
		'id'           => 'results',
		'title'        => 'Results',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$service_results_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_results_meta->add_field( array(
		'name' => 'Sub Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );	
	$service_results_id = $service_results_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$service_results_meta->add_group_field( $service_results_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$service_results_meta->add_group_field( $service_results_id, array(
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
	) );
	$service_results_meta->add_group_field( $service_results_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}


add_action( 'cmb2_init', 'abn_service_create_benifits' );
function abn_service_create_benifits() {

	$prefix = 'service_create_benifits_';
	$service_create_benifits_meta = new_cmb2_box( array(
		'id'           => 'create_benifits',
		'title'        => 'Create Benfifits',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$service_create_benifits_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_create_benifits_meta->add_field( array(
		'name' => 'Sub Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );	
	$service_create_benifits_meta->add_field( array(
		'name' => 'First Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'first_title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_create_benifits_meta->add_field( array(
		'name'    => 'First Image',
		'id'      => $prefix.'first_image',
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
	) );
	$service_create_benifits_meta->add_field( array(
		'name' => 'First Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'first_cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );


	$service_create_benifits_meta->add_field( array(
		'name' => 'Second Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'second_title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_create_benifits_meta->add_field( array(
		'name'    => 'Second Image',
		'id'      => $prefix.'second_image',
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
	) );
	$service_create_benifits_meta->add_field( array(
		'name' => 'Second Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'second_cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
}

add_action( 'cmb2_init', 'abn_service_boosters' );
function abn_service_boosters() {

	$prefix = 'service_boosters_';
	$service_boosters_meta = new_cmb2_box( array(
		'id'           => 'boosters',
		'title'        => 'Boosters',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$service_boosters_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_boosters_meta->add_field( array(
		'name' => 'Sub Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );	
	$service_boosters_id = $service_boosters_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$service_boosters_meta->add_group_field( $service_boosters_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$service_boosters_meta->add_group_field( $service_boosters_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}


add_action( 'cmb2_init', 'abn_footer_faq' );
function abn_footer_faq() {

	$prefix = 'footer_faq_';
	$service_benefits_meta = new_cmb2_box( array(
		'id'           => 'faq',
		'title'        => 'FAQ',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		//'show_on'      => array( 'id' => 14 ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$service_benefits_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_benefits_meta->add_field( array(
		'name' => 'Description',
		'type' => 'wysiwyg',
		'id'   => $prefix.'desc',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
}


add_action( 'cmb2_init', 'abn_service_testimonial' );
function abn_service_testimonial() {

	$prefix = 'service_testimonial_';
	$service_testimonial_meta = new_cmb2_box( array(
		'id'           => 'testimonial',
		'title'        => 'Testimonial',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/services-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$service_testimonial_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$service_testimonial_meta->add_field( array(
		'name' => 'Sub Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
}

