<?php 
add_action( 'cmb2_init', 'rose_child_portfolio_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function rose_child_portfolio_metabox(){

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb = new_cmb2_box( array(
		'id'            => rose_get_prefix('links-metabox'),
		'title'         => esc_html__( 'External Embedable Links', 'rose' ),
		'object_types'  => array( 'page', 'portfolio' ), // Post type
		// 'show_on_cb' => 'rose_show_if_front_page', // function should return a bool value
		) );
	$group_field_id = $cmb->add_field( array(
		'id'          => 'wiki_test_repeat_group',
		'type'        => 'group',
		'description' => __( 'Generates reusable form entries', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
		'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		// 'closed'     => true, // true to have the groups closed by default
		),
		) );
	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Link oEmbed',
		'id'   => 'oembed',
		'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
		'type' => 'oembed',
	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );
}