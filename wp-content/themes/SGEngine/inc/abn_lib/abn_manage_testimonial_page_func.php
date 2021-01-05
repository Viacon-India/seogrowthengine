<?php
function abn_testimonial_banner_meta() {

	$prefix = 'testimonial_banner_';
	$testimonial_banner_meta = new_cmb2_box( array(
		'id'           => 'testimonial_banner',
		'title'        => 'Banner',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/testimonial-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true,
	) );
	$testimonial_banner_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'title',
		'attributes' => array(
			'style'		=>'width: 500px;'
		)
	) );
}
add_action( 'cmb2_init', 'abn_testimonial_banner_meta' );


add_action( 'cmb2_init', 'abn_service_testimonial_videos' );
function abn_service_testimonial_videos() {

	$prefix = 'service_testimonial_videos_';
	$testimonial_videos_meta = new_cmb2_box( array(
		'id'           => 'testimonial_videos',
		'title'        => 'Testimonial Videos',
		'object_types' => array( 'page' ),
		'show_on'   => array( 'key' => 'page-template', 'value' => 'page-template/testimonial-temp.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	$testimonial_videos_meta->add_field( array(
		'name' => 'Title',
		'type' => 'wysiwyg',
		'id'   => $prefix.'heading',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	$testimonial_videos_meta->add_field( array(
		'name' => 'Sub Heading',
		'type' => 'wysiwyg',
		'id'   => $prefix.'sub_heading',
		'attributes' => array(
			'style'		=>'width: 100%;'
		)
	) );
	
	$testimonial_video_id = $testimonial_videos_meta->add_field( array(
        'id'          => $prefix .'data',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'Videos {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Video', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Video', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
	$testimonial_videos_meta->add_group_field( $testimonial_video_id, array(
		'name'    => 'Video URL',
		'id'      => 'video_url',
		'type'    => 'file',		
		'text'    => array(
			'add_upload_file_text' => 'Add File'
		),
		'query_args' => array(
			'type' => array(
			 	'video/mp4',
			 	'video/mov',
			),
		),
	) );
}