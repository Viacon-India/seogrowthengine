<?php
function abn_advertiser_banner_meta() {

	$prefix = 'advertiser_banner_';
	$adbanner_meta = new_cmb2_box( array(
		'id'           => 'adbanner',
		'title'        => 'Banner',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/advertiser-temp.php' ),
		//'show_on'      => array( 'id' => 930 ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );

	$adbanner_meta->add_field( array(
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
	$adbanner_meta->add_field( array(
		'name' => 'Main Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'cont',
		'attributes' => array(
			'style'		=>'width: 500px; height: 100px;'
		)
	) );
	$adbanner_meta->add_field( array(
		'name' => 'Sub Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_cont',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	/* $adbanner_meta->add_field( array(
		'name' => 'Short Text',
		'type' => 'text',
		'id'   => $prefix.'short_text',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );*/

}
add_action( 'cmb2_init', 'abn_advertiser_banner_meta' );


function abn_advertiser_work_meta() {

	$prefix = 'advertiser_work_';
	$work_meta = new_cmb2_box( array(
		'id'           => 'adwork',
		'title'        => 'Guest Posting Orders',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/advertiser-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$work_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$work_id = $work_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( '{#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$work_meta->add_group_field( $work_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	/*$work_meta->add_group_field( $work_id, array(
        'name'       => esc_html__( 'Icon', 'cmb2' ),
        'desc'       => esc_html__( 'Enter icon class(ex. person-add-outline)', 'cmb2' ),
        'id'         => 'icon',
        'type'       => 'text',
        'default'    => 'person-add-outline',
		'attributes'  => array(
			'placeholder' => 'Enter Icon', 'style' =>'width:500px;'
		)
	) );*/
	$work_meta->add_group_field( $work_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'textarea',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_advertiser_work_meta' );


function abn_advertiser_second_work_meta() {

	$prefix = 'advertiser_second_work_';
	$second_work_meta = new_cmb2_box( array(
		'id'           => 'adcontentwork',
		'title'        => 'Content Writing Orders',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/advertiser-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$second_work_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$second_work_id = $second_work_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( '{#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$second_work_meta->add_group_field( $second_work_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$second_work_meta->add_group_field( $second_work_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'textarea',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_advertiser_second_work_meta' );



function abn_advertiser_get_meta() {

	$prefix = 'advertiser_get_';
	$get_meta = new_cmb2_box( array(
		'id'           => 'get_using',
		'title'        => 'Second Scroll',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/advertiser-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	$get_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$get_meta->add_field( array(
		'name' => 'Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'cont',
		'attributes' => array(
			'style'		=>'width: 500px; height: 100px;'
		)
	) );

	$get_meta->add_field( array(
		'name'    => 'Side Image 1',
		'id'      => $prefix.'image1',
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
	$get_id = $get_meta->add_field( array(
        'id'          => $prefix .'sec1_data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'First section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$get_meta->add_group_field( $get_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$get_meta->add_group_field( $get_id, array(
        /*'name'       => esc_html__( 'Icon', 'cmb2' ),
        'desc'       => esc_html__( 'Enter icon class(ex. person-add-outline)', 'cmb2' ),
        'id'         => 'icon',
        'type'       => 'text',
        'default'    => 'person-add-outline',
		'attributes'  => array(
			'placeholder' => 'Enter Icon', 'style' =>'width:500px;'
		) */
		'name'    => 'Icon',
		'id'      => 'icon',
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
	$get_meta->add_group_field( $get_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'textarea',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );



	$get_meta->add_field( array(
		'name'    => 'Side Image 2',
		'id'      => $prefix.'image2',
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
	$get_id = $get_meta->add_field( array(
        'id'          => $prefix .'sec2_data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Second section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$get_meta->add_group_field( $get_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$get_meta->add_group_field( $get_id, array(
        'name'    => 'Icon',
		'id'      => 'icon',
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
	$get_meta->add_group_field( $get_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'textarea',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );


	$get_meta->add_field( array(
		'name'    => 'Side Image 3',
		'id'      => $prefix.'image3',
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
	$get_id = $get_meta->add_field( array(
        'id'          => $prefix .'sec3_data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Third section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$get_meta->add_group_field( $get_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$get_meta->add_group_field( $get_id, array(
        'name'    => 'Icon',
		'id'      => 'icon',
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
	$get_meta->add_group_field( $get_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'textarea',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );


	$get_meta->add_field( array(
		'name'    => 'Side Image 4',
		'id'      => $prefix.'image4',
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
	$get_id = $get_meta->add_field( array(
        'id'          => $prefix .'sec4_data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Fourth section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$get_meta->add_group_field( $get_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$get_meta->add_group_field( $get_id, array(
        'name'    => 'Icon',
		'id'      => 'icon',
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
	$get_meta->add_group_field( $get_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'textarea',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_advertiser_get_meta' );


function abn_advertiser_service_meta() {

	$prefix = 'best_services_';
	$service_meta = new_cmb2_box( array(
		'id'           => 'adservices',
		'title'        => 'Best Services',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/advertiser-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	$service_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	
	$service_id = $service_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Service {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
    $service_meta->add_group_field( $service_id, array(        
		'name' => 'Service Name',
		'id'   => 'name',
		'type'             => 'select',
		'show_option_none' => true,
		'default'          => 'blogger_outreach',
		'options'          => array(
			'link_building_services' => __( 'Link Building Services', 'cmb2' ),
			'guest_posting_services'   => __( 'Guest Posting Services', 'cmb2' ),
			'blogger_outreach_services'     => __( 'Blogger Outreach Services', 'cmb2' ),
			'content_Writting_services'     => __( 'Content Writting Services', 'cmb2' ),
		),
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	$service_meta->add_group_field( $service_id, array(
		'name'    => 'Icon Image',
		'id'      => 'image_icon',
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
	$service_meta->add_group_field( $service_id, array(        
		'name' => 'Title',
		'type' => 'text',
		'id'   => 'title',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	$service_meta->add_group_field( $service_id, array(
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
	$service_meta->add_group_field( $service_id, array(
		'name' => 'Description',
		'type' => 'wysiwyg',
		'id'   => 'description',
		'attributes' => array(
			'style'		=>'width:500px; height: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_advertiser_service_meta' );


function abn_advertiser_expert_meta() {

	$prefix = 'advertiser_expert_';
	$expert_meta = new_cmb2_box( array(
		'id'           => 'expert',
		'title'        => 'Expert',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/advertiser-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$expert_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	$expert_id = $expert_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( '{#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$expert_meta->add_group_field( $expert_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$expert_meta->add_group_field( $expert_id, array(
        'name'    => 'Icon',
		'id'      => 'icon',
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
	$expert_meta->add_group_field( $expert_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'textarea',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_advertiser_expert_meta' );


function abn_advertiser_contact_meta() {

	$prefix = 'advertiser_contact_';
	$expert_meta = new_cmb2_box( array(
		'id'           => 'contact',
		'title'        => 'Contact',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/advertiser-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	/* $expert_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) ); */
	$expert_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'second_title',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	
	
	$expert_meta->add_field( array(
		'name' => 'First Button Title',
		'type' => 'text',
		'id'   => $prefix.'fbtn_title',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	$expert_meta->add_field( array(
		'name' => 'First Button Title',
		'type' => 'text',
		'id'   => $prefix.'fbtn_stitle',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	$expert_meta->add_field( array(
		'name' => 'First Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'first_button_link',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	
	
	$expert_meta->add_field( array(
		'name' => 'Second Button Title',
		'type' => 'text',
		'id'   => $prefix.'sbtn_title',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	$expert_meta->add_field( array(
		'name' => 'Second Button Title',
		'type' => 'text',
		'id'   => $prefix.'sbtn_stitle',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	$expert_meta->add_field( array(
		'name' => 'Second Button Link',
		'type' => 'text',
		'id'   => $prefix.'sbtn_link',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	
	
	$expert_meta->add_field( array(
		'name' => 'Another Title',
		'type' => 'text',
		'id'   => $prefix.'third_title',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	$expert_meta->add_field( array(
		'name' => 'Third Button Title',
		'type' => 'text',
		'id'   => $prefix.'tbtn_stitle',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
	$expert_meta->add_field( array(
		'name' => 'Third Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'tbtn_link',
		'attributes' => array(
			'style'		=>'width:500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_advertiser_contact_meta' );