<?php
function abn_about_first_scroll_meta() {

	$prefix = 'about_first_scroll_';
	$fscroll_meta = new_cmb2_box( array(
		'id'           => 'f_scroll',
		'title'        => 'First Scroll',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/about-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$fscroll_meta->add_field( array(
		'name' => 'Heading',
		'type' => 'wysiwyg',
		'id'   => $prefix.'heading',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );

	$fscroll_meta->add_field( array(
		'name' => 'First Count',
		'type' => 'text',
		'id'   => $prefix.'f_count',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$fscroll_meta->add_field( array(
		'name' => 'First Point',
		'type' => 'text',
		'id'   => $prefix.'f_point',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );

	$fscroll_meta->add_field( array(
		'name' => 'Second Count',
		'type' => 'text',
		'id'   => $prefix.'s_count',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$fscroll_meta->add_field( array(
		'name' => 'Second Point',
		'type' => 'text',
		'id'   => $prefix.'s_point',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );

	$fscroll_meta->add_field( array(
		'name' => 'Third Count',
		'type' => 'text',
		'id'   => $prefix.'t_count',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$fscroll_meta->add_field( array(
		'name' => 'Third Point',
		'type' => 'text',
		'id'   => $prefix.'t_point',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_about_first_scroll_meta' );

function abn_about_competitors_meta() {

	$prefix = 'about_competitors_';
	$competitor_meta = new_cmb2_box( array(
		'id'           => 'competitors',
		'title'        => 'Competitors Section',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/about-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$competitor_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px; height: 100px;'
		)
	) );
	$competitor_id = $competitor_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Point {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$competitor_meta->add_group_field( $competitor_id, array(
        'name'       => esc_html__( 'Competitors', 'cmb2' ),
        'id'         => 'competitors',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );
	$competitor_meta->add_group_field( $competitor_id, array(
        'name'       => esc_html__( 'Bloggeroutreach', 'cmb2' ),
        'id'         => 'blogggeroutreach',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_about_competitors_meta' );

function abn_about_philosophy_meta() {

	$prefix = 'about_philosophy_';
	$philosophy_meta = new_cmb2_box( array(
		'id'           => 'philosophy',
		'title'        => 'Philosophy Section',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/about-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$philosophy_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$philosophy_meta->add_field( array(
		'name' => 'Content',
		'type' => 'wysiwyg',
		'id'   => $prefix.'content',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_about_philosophy_meta' );


function abn_about_service_we_provide_meta() {

	$prefix = 'about_services_';
	$service_we_provide_meta = new_cmb2_box( array(
		'id'           => 'services_we_provide',
		'title'        => 'Services We Provide',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/about-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$service_we_provide_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$services_we_provide_id = $service_we_provide_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Services {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );

	$service_we_provide_meta->add_group_field( $services_we_provide_id, array(
        'name'       => esc_html__( 'Service', 'cmb2' ),
        'id'         => 'services',
        'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			'Blogger Outreach' => __( 'Blogger Outreach', 'cmb2' ),
			'Guest Posting'   => __( 'Guest Posting', 'cmb2' ),
			'Content Writing'     => __( 'Content Writing', 'cmb2' ),
			'Link Building'     => __( 'Link Building', 'cmb2' ),
		),
	) );
	$service_we_provide_meta->add_group_field( $services_we_provide_id, array(
		'name'    => 'Icon',
		'desc'    => 'Upload an image or enter an URL.',
		'id'      => 'icon',
		'type'    => 'file',
		'options' => array(
			'url' => true, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
		),
		'query_args' => array(
			'type' => array(
			 	'image/gif',
			 	'image/jpeg',
			 	'image/png',
			),
		),
		'preview_size' => 'large',
	) );
	$service_we_provide_meta->add_group_field( $services_we_provide_id, array(
        'name'       => esc_html__( 'Page Link', 'cmb2' ),
        'id'         => 'page_link',
        'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			home_url().'/blogger-outreach-services' => __( 'Blogger Outreach Page', 'cmb2' ),
			home_url().'/guest-posting-services'   => __( 'Guest Posting Page', 'cmb2' ),
			home_url().'/content-writing-services'     => __( 'Content Writing Page', 'cmb2' ),
			home_url().'/link-building-services'     => __( 'Link Building Page', 'cmb2' ),
		),
	) );
	
}
add_action( 'cmb2_init', 'abn_about_service_we_provide_meta' );



function abn_about_footer_meta() {

	$prefix = 'about_footer_';
	$ab_footer_meta = new_cmb2_box( array(
		'id'           => 'ab_foo',
		'title'        => 'Footer',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/about-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$ab_footer_meta->add_field( array(
		'name' => 'Heading',
		'type' => 'wysiwyg',
		'id'   => $prefix.'heading',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	
	$ab_footer_meta->add_field( array(
		'name' => 'First Button Text',
		'type' => 'text',
		'id'   => $prefix.'first_btn_text',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
		$ab_footer_meta->add_field( array(
		'name' => 'First Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'first_btn_link',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$ab_footer_meta->add_field( array(
		'name' => 'Second Button Text',
		'type' => 'text',
		'id'   => $prefix.'second_btn_text',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$ab_footer_meta->add_field( array(
		'name' => 'Second Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'second_btn_link',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_about_footer_meta' );