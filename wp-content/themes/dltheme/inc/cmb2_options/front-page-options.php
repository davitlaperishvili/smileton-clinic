<?php 

function options_register_front_page_metabox() {

	//FRONT PAGE START

	// Hero Section
    $hero = new_cmb2_box( array(
		'id'           => 'hero_page',
		'title'        => esc_html__( 'Hero Options', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
		'option_key'   => 'hero',
	) );
		$hero->add_field( array(
			'name'       => __( 'Hero Title', 'cmb2' ),
			'id'         => 'hero_title',
			'type'       => 'text',
		) );
		$hero->add_field( array(
			'name'       => __( 'Hero SubTitle', 'cmb2' ),
			'id'         => 'hero_subtitle',
			'type'       => 'text',
		) );
		$hero->add_field( array(
			'name'       => __( 'Page Intro', 'cmb2' ),
			'id'         => 'page_intro',
			'type'       => 'wysiwyg',
		) );
		$advantages_listing = $hero->add_field( array(
			'id'          => 'hero_advantages_listing',
			'name'		  => 'Advantages Listing',
			'type'        => 'group',
			'options'     => array(
				'group_title'       => __( 'Service {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
				'sortable'          => true,
				'closed'         => true,
			),
		) );
			$hero->add_group_field($advantages_listing, array(
				'name' => 'Advantage Title',
				'id'   => 'advantage_title',
				'type' => 'text',
			));
	
    // About Us Section 
    $about = new_cmb2_box( array(
		'id'           => 'about_page',
		'title'        => esc_html__( 'About Us Options', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
		'option_key'   => 'about',
	) );
		$about->add_field( array(
			'name'       => __( 'Section Title', 'cmb2' ),
			'id'         => 'about_section_title',
			'type'       => 'text',
		) );
		$about->add_field( array(
			'name'       => __( 'Section SubTitle', 'cmb2' ),
			'id'         => 'about_section_subtitle',
			'type'       => 'text',
		) );
		$about->add_field( array(
			'name'       => __( 'Section Text', 'cmb2' ),
			'id'         => 'about_section_text',
			'type'       => 'wysiwyg',
		) );
		$about->add_field( array(
			'name'       => __( 'Section Image', 'cmb2' ),
			'id'         => 'about_section_image',
			'type'       => 'file',
		) );


	// Services

	$services = new_cmb2_box( array(
		'id'           => 'services_page',
		'title'        => esc_html__( 'Services Options', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
		'option_key'   => 'services',
	) );
		$services->add_field( array(
			'name'       => __( 'Section Title', 'cmb2' ),
			'id'         => 'services_section_title',
			'type'       => 'text',
		) );
		$services->add_field( array(
			'name'       => __( 'Section SubTitle', 'cmb2' ),
			'id'         => 'services_section_subtitle',
			'type'       => 'text',
		) );
		$items_listing = $services->add_field( array(
			'id'          => 'services_items_listing',
			'name'		  => 'Items Listing',
			'type'        => 'group',
			'options'     => array(
				'group_title'       => __( 'Item {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
				'sortable'          => true,
				'closed'         => true,
			),
		) );
		$services->add_group_field($items_listing, array(
			'name' => 'Item Title',
			'id'   => 'item_title',
			'type' => 'text',
		));
		$services->add_group_field($items_listing, array(
			'name' => 'Item Icon',
			'id'   => 'item_icon',
			'type' => 'file',
		));
		$services->add_group_field($items_listing, array(
			'name' => 'Item Text',
			'id'   => 'item_text',
			'type' => 'wysiwyg',
		));

    // Why Us Section 
    $why_us = new_cmb2_box( array(
		'id'           => 'why_us_page',
		'title'        => esc_html__( 'Why Us Options', 'cmb2' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
		'object_types' => array( 'page' ),
		'option_key'   => 'why_us',
	) );
		$why_us->add_field( array(
			'name'       => __( 'Section Title', 'cmb2' ),
			'id'         => 'why_section_title',
			'type'       => 'text',
		) );
		$why_us->add_field( array(
			'name'       => __( 'Section SubTitle', 'cmb2' ),
			'id'         => 'why_section_subtitle',
			'type'       => 'text',
		) );
		$why_us->add_field( array(
			'name'       => __( 'Section Image', 'cmb2' ),
			'id'         => 'why_section_image',
			'type'       => 'file',
		) );
		$items_listing = $why_us->add_field( array(
			'id'          => 'why_items_listing',
			'name'		  => 'Items Listing',
			'type'        => 'group',
			'options'     => array(
				'group_title'       => __( 'Item {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
				'sortable'          => true,
				'closed'         => true,
			),
		) );
		$why_us->add_group_field($items_listing, array(
			'name' => 'Item Title',
			'id'   => 'item_title',
			'type' => 'text',
		));
		$why_us->add_group_field($items_listing, array(
			'name' => 'Item Icon',
			'id'   => 'item_icon',
			'type' => 'file',
		));
		$why_us->add_group_field($items_listing, array(
			'name' => 'Item Text',
			'id'   => 'item_text',
			'type' => 'wysiwyg',
		));


    //Feedbacks
    $feedbacks = new_cmb2_box( array(
		'id'           => 'feedbacks_page',
		'title'        => esc_html__( 'Feedbacks Options', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
		'option_key'   => 'feedbacks',
	) );
		$feedbacks->add_field( array(
			'name'       => __( 'Section Title', 'cmb2' ),
			'id'         => 'feedbacks_section_title',
			'type'       => 'text',
		) );
		$feedbacks->add_field( array(
			'name'       => __( 'Section SubTitle', 'cmb2' ),
			'id'         => 'feedbacks_section_subtitle',
			'type'       => 'text',
		) );
		$items_listing = $feedbacks->add_field( array(
			'id'          => 'feedbacks_items_listing',
			'name'		  => 'Items Listing',
			'type'        => 'group',
			'options'     => array(
				'group_title'       => __( 'Item {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
				'sortable'          => true,
				'closed'         => true,
			),
		) );
		$feedbacks->add_group_field($items_listing, array(
			'name' => 'Item Title',
			'id'   => 'item_title',
			'type' => 'text',
		));
		$feedbacks->add_group_field($items_listing, array(
			'name' => 'Item Text',
			'id'   => 'item_text',
			'type' => 'wysiwyg',
		));

	
	// Services Include 
	$include = new_cmb2_box( array(
		'id'           => 'include_page',
		'title'        => esc_html__( 'Serivces Include Options', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
		'option_key'   => 'include',
	) );
		$include->add_field( array(
			'name'       => __( 'Section Title', 'cmb2' ),
			'id'         => 'include_section_title',
			'type'       => 'text',
		) );
		$include->add_field( array(
			'name'       => __( 'Section Image', 'cmb2' ),
			'id'         => 'include_section_image',
			'type'       => 'file',
		) );
		$items_listing = $include->add_field( array(
			'id'          => 'include_items_listing',
			'name'		  => 'Items Listing',
			'type'        => 'group',
			'options'     => array(
				'group_title'       => __( 'Item {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
				'sortable'          => true,
				'closed'         => true,
			),
		) );
		$include->add_group_field($items_listing, array(
			'name' => 'Item Title',
			'id'   => 'item_title',
			'type' => 'text',
		));
	
	// Front Banner 
	$banner = new_cmb2_box( array(
		'id'           => 'banner_page',
		'title'        => esc_html__( 'Banner Options', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
		'option_key'   => 'banner',
	) );
		$banner->add_field( array(
			'name'       => __( 'Section Title', 'cmb2' ),
			'id'         => 'banner_section_title',
			'type'       => 'text',
		) );
		$banner->add_field( array(
			'name'       => __( 'Section SubTitle', 'cmb2' ),
			'id'         => 'banner_section_subtitle',
			'type'       => 'text',
		) );

	
	//FRONT PAGE END



}
add_action( 'cmb2_admin_init', 'options_register_front_page_metabox' );