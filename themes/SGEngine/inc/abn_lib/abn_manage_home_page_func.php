<?php
add_action( 'cmb2_init', 'abn_home_banner_meta' );
function abn_home_banner_meta() {

	$prefix = 'home_banner_';
	$home_service_meta = new_cmb2_box( array(
		'id'           => 'banner',
		'title'        => 'Banner',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/front-temp.php' ),
		//'show_on'      => array( 'id' => 14 ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );
	
	$home_service_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%; height: 100px;'
		)
	) );
	$home_service_meta->add_field( array(
		'name' => 'Short Text',
		'type' => 'wysiwyg',
		'id'   => $prefix.'short_text',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
}


add_action( 'cmb2_init', 'abn_home_first_scroll' );
function abn_home_first_scroll() {

	$prefix = 'home_first_scroll_';
	$home_first_scroll_meta = new_cmb2_box( array(
		'id'           => 'seo_services',
		'title'        => 'SEO Services(First Scroll)',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/front-temp.php' ),
		//'show_on'      => array( 'id' => 14 ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$home_first_scroll_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$first_scroll_id = $home_first_scroll_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Services {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Services', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Services', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$home_first_scroll_meta->add_group_field( $first_scroll_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$home_first_scroll_meta->add_group_field( $first_scroll_id, array(
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
	$home_first_scroll_meta->add_group_field( $first_scroll_id, array(
        'name'       => esc_html__( 'Link', 'cmb2' ),
        'id'         => 'link',
        'type'       => 'text_url',
		'attributes'  => array(
			'placeholder' => 'Enter Link', 'style' =>'width:500px;'
		)
	) );
	$home_first_scroll_meta->add_group_field( $first_scroll_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}

add_action( 'cmb2_init', 'abn_home_second_scroll' );
function abn_home_second_scroll() {

	$prefix = 'home_second_scroll_';
	$home_second_scroll_meta = new_cmb2_box( array(
		'id'           => 'pricing',
		'title'        => 'Pricing(Second Scroll)',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/front-temp.php' ),
		//'show_on'      => array( 'id' => 14 ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$home_second_scroll_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$second_scroll_id = $home_second_scroll_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$home_second_scroll_meta->add_group_field( $second_scroll_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$home_second_scroll_meta->add_group_field( $second_scroll_id, array(
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
	$home_second_scroll_meta->add_group_field( $second_scroll_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}

add_action( 'cmb2_init', 'abn_home_third_scroll' );
function abn_home_third_scroll() {

	$prefix = 'home_third_scroll_';
	$home_third_scroll_meta = new_cmb2_box( array(
		'id'           => 'process',
		'title'        => 'Process(Third Scroll)',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/front-temp.php' ),
		//'show_on'      => array( 'id' => 14 ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$home_third_scroll_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$home_third_scroll_meta->add_field( array(
		'name' => 'Sub Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$third_scroll_id = $home_third_scroll_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$home_third_scroll_meta->add_group_field( $third_scroll_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$home_third_scroll_meta->add_group_field( $third_scroll_id, array(
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
	$home_third_scroll_meta->add_group_field( $third_scroll_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}

add_action( 'cmb2_init', 'abn_home_brand' );
function abn_home_brand() {

	$prefix = 'home_brand_';
	$home_third_scroll_meta = new_cmb2_box( array(
		'id'           => 'logo_meta',
		'title'        => 'Brand Logo',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/front-temp.php' ),
		//'show_on'      => array( 'id' => 14 ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$third_scroll_id = $home_third_scroll_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Logo {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Logo', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Logo', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$home_third_scroll_meta->add_group_field( $third_scroll_id, array(
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
}
/*
add_action( 'cmb2_init', 'abn_dm_solution_meta' );
function abn_dm_solution_meta() {

	$prefix = 'home_dm_solution_';
	$home_solution_meta = new_cmb2_box( array(
		'id'           => 'solution',
		'title'        => 'Degital Marketing Solution',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/front-temp.php' ),
		//'show_on'      => array( 'id' => 14 ),		
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	$home_solution_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$home_solution_meta->add_field( array(
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
	$home_solution_meta->add_field( array(
		'name' => 'Description',
		'type' => 'wysiwyg',
		'id'   => $prefix.'cont',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	
	
	$home_solution_meta->add_field( array(
		'name' => 'First Button Text',
		'type' => 'text',
		'id'   => $prefix.'first_btn_text',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$home_solution_meta->add_field( array(
		'name' => 'First Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'first_btn_link',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$home_solution_meta->add_field( array(
		'name' => 'Second Button Text',
		'type' => 'text',
		'id'   => $prefix.'second_btn_text',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$home_solution_meta->add_field( array(
		'name' => 'Second Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'second_btn_link',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
}

add_action( 'cmb2_init', 'abn_home_work_meta' );
function abn_home_work_meta() {

	$prefix = 'home_bo_work_';
	$home_bo_work_meta = new_cmb2_box( array(
		'id'           => 'bo_work',
		'title'        => 'BloggerOutreach Work',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/front-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$home_bo_work_meta->add_field( array(
		'name' => 'Main Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%; height: 100px;'
		)
	) );
	$work_id = $home_bo_work_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'BO Work {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another BO Work', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove BO Work', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$home_bo_work_meta->add_group_field( $work_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$home_bo_work_meta->add_group_field( $work_id, array(
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
	$home_bo_work_meta->add_group_field( $work_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}

add_action( 'cmb2_init', 'abn_why_choose_us_meta' );
function abn_why_choose_us_meta() {

	$prefix = 'home_why_choose_us_';
	$home_choose_meta = new_cmb2_box( array(
		'id'           => 'choose_us',
		'title'        => 'Why Choose US',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/front-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$home_choose_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$choose_id = $home_choose_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$home_choose_meta->add_group_field( $choose_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$home_choose_meta->add_group_field( $choose_id, array(
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
	$home_choose_meta->add_group_field( $choose_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'wysiwyg',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
	
	$home_choose_meta->add_field( array(
		'name' => 'First Button Text',
		'type' => 'text',
		'id'   => $prefix.'first_btn_text',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$home_choose_meta->add_field( array(
		'name' => 'First Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'first_btn_link',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	
	$home_choose_meta->add_field( array(
		'name' => 'Second Button Text',
		'type' => 'text',
		'id'   => $prefix.'second_btn_text',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$home_choose_meta->add_field( array(
		'name' => 'Second Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'second_btn_link',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
}

add_action( 'cmb2_init', 'abn_home_service_meta' );
function abn_home_service_meta() {

	$prefix = 'home_service_';
	$home_service_meta = new_cmb2_box( array(
		'id'           => 'service',
		'title'        => 'Services',
		'object_types' => array( 'page' ), // post type
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/front-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$home_service_meta->add_field( array(
		'name' => 'Main Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 100%; height: 100px;'
		)
	) );
	
	$home_service_meta->add_field( array(
		'name' => 'Blogger Outreach Description',
		'type' => 'textarea',
		'id'   => $prefix.'b_outreach_desc',
		'attributes' => array(
			'style'		=>'width: 100%; height: 100px;'
		)
	) );
	$home_service_meta->add_field( array(
		'name' => 'Guest Posting Description',
		'type' => 'textarea',
		'id'   => $prefix.'guest_posting_desc',
		'attributes' => array(
			'style'		=>'width: 100%; height: 100px;'
		)
	) );
	$home_service_meta->add_field( array(
		'name' => 'Content Writing Description',
		'type' => 'textarea',
		'id'   => $prefix.'content_writing_desc',
		'attributes' => array(
			'style'		=>'width: 100%; height: 100px;'
		)
	) );
	$home_service_meta->add_field( array(
		'name' => 'Link Building Description',
		'type' => 'textarea',
		'id'   => $prefix.'link_building_desc',
		'attributes' => array(
			'style'		=>'width: 100%; height: 100px;'
		)
	) );
} */
