<?php 

function options_register_services_page_metabox() {


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
add_action( 'cmb2_admin_init', 'options_register_services_page_metabox' );