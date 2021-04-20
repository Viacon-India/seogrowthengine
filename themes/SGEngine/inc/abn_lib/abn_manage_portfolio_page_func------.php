<?php
function abn_portfolio_banner_meta() {

	$prefix = 'portfolio_banner_';
	$portfolio_banner_meta = new_cmb2_box( array(
		'id'           => 'portbanner',
		'title'        => 'Banner',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/portfolio-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );

	$portfolio_banner_meta->add_field( array(
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
	$portfolio_banner_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$portfolio_banner_meta->add_field( array(
		'name' => 'Description',
		'type' => 'wysiwyg',
		'id'   => $prefix.'desc',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_portfolio_banner_meta' );

function abn_portfolio_expect_meta() {

	$prefix = 'portfolio_expect_';
	$expect_meta = new_cmb2_box( array(
		'id'           => 'adexpect',
		'title'        => 'Expect',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/portfolio-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

	$expect_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );	
	$expect_id = $expect_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Service {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );    
	$expect_meta->add_group_field( $expect_id, array(
        'name'       => esc_html__( 'Title', 'cmb2' ),
        'id'         => 'title',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Title', 'style' =>'width:500px;'
		)
	) );	
	$expect_meta->add_group_field( $expect_id, array(
        'name'       => esc_html__( 'Description', 'cmb2' ),
        'id'         => 'desc',
        'type'       => 'text',
		'attributes'  => array(
			'placeholder' => 'Enter Description', 'style' =>'width:500px;'
		)
	) );
	$expect_meta->add_group_field( $expect_id, array(
        'name'       => esc_html__( 'Icon', 'cmb2' ),
        'id'         => 'icon',
        'type'       => 'text',
        'default' => 'ion-ios-bookmarks-outline',
		'attributes'  => array(
			'placeholder' => 'Enter Icon Class', 'style' =>'width:500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_portfolio_expect_meta' );

function abn_portfolio_footer_meta() {

	$prefix = 'portfolio_footer_';
	$portfolio_footer_meta = new_cmb2_box( array(
		'id'           => 'port_footer',
		'title'        => 'Footer',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/portfolio-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );	
	$portfolio_footer_meta->add_field( array(
		'name' => 'Title',
		'type' => 'text',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$portfolio_footer_meta->add_field( array(
		'name' => 'Button Text',
		'type' => 'text',
		'id'   => $prefix.'btn_text',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$portfolio_footer_meta->add_field( array(
		'name' => 'Button Link',
		'type' => 'text_url',
		'id'   => $prefix.'btn_link',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_portfolio_footer_meta' );


/************************ PORTFOLIO DETAILS ******************/

function abn_portfolio_dtls_meta() {

	$prefix = 'single_portfolio_';
	$single_portfolio_meta = new_cmb2_box( array(
		'id'           => 'metadata',
		'title'        => 'Highlights',
		'object_types' => array( 'portfolio' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left */		
	) );
	$single_portfolio_meta->add_field( array(
		'name'    => 'Profile Picture',
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
	$single_portfolio_meta->add_field( array(
		'name' => 'Website',
		'type' => 'text',
		'id'   => $prefix.'website',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$single_portfolio_meta->add_field( array(
		'name' => 'Country',
		'type' => 'text',
		'id'   => $prefix.'country',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$single_portfolio_meta->add_field( array(
		'name' => 'Owner',
		'type' => 'text',
		'id'   => $prefix.'owner',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$single_portfolio_meta->add_field( array(
		'name' => 'First Sub Title',
		'type' => 'text',
		'id'   => $prefix.'f_sub_title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
	$single_portfolio_meta->add_field( array(
		'name' => 'Second Sub Title',
		'type' => 'text',
		'id'   => $prefix.'s_sub_title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_portfolio_dtls_meta' );