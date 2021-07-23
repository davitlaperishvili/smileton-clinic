<?php 

function options_register_options_page_metabox() {

    $options_page = new_cmb2_box( array(
        'id'           => 'app_options_page',
        'title'        => esc_html__( 'Customize', 'cmb2' ),
        'object_types' => array( 'options-page' ),
        'option_key'      => 'app_options_page', // The option key and admin menu page slug.
        'icon_url'        => 'dashicons-list-view', // Menu icon. Only applicable if 'parent_slug' is left empty.
        'position'        => 2, // Menu position. Only applicable if 'parent_slug' is left empty.
    ) );
    $options_page->add_field( array(
        'name'       => __( 'E-Mail', 'cmb2' ),
        'id'         => 'contact_main_email',
        'type'       => 'text_email',
    ) );
    $options_page->add_field( array(
        'name'       => __( 'Phone number', 'cmb2' ),
        'id'         => 'main_phone_number',
        'type'       => 'text'
    ) );
    $options_page->add_field( array(
        'name'       => __( 'Adderess', 'cmb2' ),
        'id'         => 'main_address',
        'type'       => 'text'
    ) );

    // Hero Section 
    $hero = new_cmb2_box( array(
		'id'           => 'hero_page',
		'title'        => esc_html__( 'Hero Options', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'hero',
		'parent_slug'  => 'app_options_page',
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
    $hero->add_field( array(
		'name'       => __( 'Hero Services Section Title', 'cmb2' ),
		'id'         => 'hero_sevvices_section_title',
		'type'       => 'text',
	) );
    $services_listing = $hero->add_field( array(
		'id'          => 'services_listing',
		'name'		  => 'Services Listing',
		'type'        => 'group',
		'options'     => array(
			'group_title'       => __( 'Service {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'sortable'          => true,
            'closed'         => true,
		),
	) );
    $hero->add_group_field($services_listing, array(
		'name' => 'Service Title',
		'id'   => 'service_title',
		'type' => 'text',
	));
    $hero->add_group_field($services_listing, array(
		'name' => 'Service Icon',
		'id'   => 'service_icon',
		'type' => 'file',
	));
    // About Us Section 
    $about = new_cmb2_box( array(
		'id'           => 'about_page',
		'title'        => esc_html__( 'About Us Options', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'about',
		'parent_slug'  => 'app_options_page',
	) );
    $about->add_field( array(
		'name'       => __( 'Section Title', 'cmb2' ),
		'id'         => 'section_title',
		'type'       => 'text',
	) );
    $about->add_field( array(
		'name'       => __( 'Section Text', 'cmb2' ),
		'id'         => 'section_text',
		'type'       => 'wysiwyg',
	) );
    $about_items_listing = $about->add_field( array(
		'id'          => 'about_items_listing',
		'name'		  => 'Items Listing',
		'type'        => 'group',
		'options'     => array(
			'group_title'       => __( 'Item {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'sortable'          => true,
            'closed'         => true,
		),
	) );
    $about->add_group_field($about_items_listing, array(
		'name' => 'Item Title',
		'id'   => 'item_title',
		'type' => 'text',
	));
    $about->add_group_field($about_items_listing, array(
		'name' => 'Item Text',
		'id'   => 'item_text',
		'type' => 'wysiwyg',
	));
    
    $about->add_group_field($about_items_listing, array(
		'name' => 'Item Button Url',
		'id'   => 'item_button_url',
		'type' => 'text',
	));
    $about->add_group_field($about_items_listing, array(
		'name' => 'Item Button Text',
		'id'   => 'item_button_text',
        'default' => 'Learn More',
		'type' => 'text',
	));
    // Why Us Section 
    $why_us = new_cmb2_box( array(
		'id'           => 'why_us_page',
		'title'        => esc_html__( 'Why Us Options', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'why_us',
		'parent_slug'  => 'app_options_page',
	) );
    $why_us->add_field( array(
		'name'       => __( 'Section Title', 'cmb2' ),
		'id'         => 'section_title',
		'type'       => 'text',
	) );
    $items_listing = $why_us->add_field( array(
		'id'          => 'items_listing',
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
		'name' => 'Item Text',
		'id'   => 'item_text',
		'type' => 'wysiwyg',
	));

    //Feedbacks
    $feedbacks = new_cmb2_box( array(
		'id'           => 'feedbacks_page',
		'title'        => esc_html__( 'Feedbacks Options', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'feedbacks',
		'parent_slug'  => 'app_options_page',
	) );
    $feedbacks->add_field( array(
		'name'       => __( 'Section Title', 'cmb2' ),
		'id'         => 'section_title',
		'type'       => 'text',
	) );
    $items_listing = $feedbacks->add_field( array(
		'id'          => 'items_listing',
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


    // Services Pages Custom field

    $services_page = new_cmb2_box( array(
		'id'           => 'single-pages_field',
		'title'        => esc_html__( 'Service Page Info', 'cmb2' ),
		'object_types' => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'services.php' ),
		'option_key'   => 'services_page',
	) );
    $services_page->add_field( array(
		'name'       => __( 'Section Title', 'cmb2' ),
		'id'         => 'section_title',
		'type'       => 'text',
	) );
    $services_page->add_field( array(
		'name'       => __( 'Section SubTitle', 'cmb2' ),
		'id'         => 'section_subtitle',
		'type'       => 'text',
	) );
    $services_page->add_field( array(
        'name'             => 'Page Background',
        'id'               => 'background',
        'type'             => 'radio',
        'show_option_none' => 'Default(Violet)',
        'options'          => array(
            'red'   => __( 'Red', 'cmb2' )
        ),
    ) );
    $services_listing = $services_page->add_field( array(
		'id'          => 'services_listing',
		'name'		  => 'Services Listing',
		'type'        => 'group',
		'options'     => array(
			'group_title'       => __( 'Service {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'sortable'          => true,
            'closed'         => true,
		),
	) );
    $services_page->add_group_field($services_listing, array(
		'name' => 'Item Title',
		'id'   => 'item_title',
		'type' => 'text',
	));
    $services_page->add_group_field($services_listing, array(
		'name' => 'Item Url',
		'id'   => 'url',
		'type' => 'text',
	));



}
add_action( 'cmb2_admin_init', 'options_register_options_page_metabox' );