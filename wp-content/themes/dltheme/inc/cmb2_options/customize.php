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



}
add_action( 'cmb2_admin_init', 'options_register_options_page_metabox' );