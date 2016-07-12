<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package StoryWork
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function storywork_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'storywork_body_classes' );


function download_page( $query ) {
	require ABSPATH.'/vendor/autoload.php';

	$mpdf = new mPDF('th', 'A4', '0', 'kanit',0,0,0,0);
	$html = load_template_part('report-template/client-profile');
	$mpdf->writeHTML( $html );
	$mpdf->Output();
}
add_action( 'pre_get_posts', 'download_page' );

function add_query_vars_storywork( $vars ){
	$vars[] = "user_id";
	return $vars;
}
add_filter( 'query_vars', 'add_query_vars_storywork' );
function custom_rewrite_rule_storywork() {

	$download = get_page_by_path('download')->ID;
	add_rewrite_rule('^download/([^/]+)/?', 'index.php?page_id='.$download.'&stock=$matches[1]', 'top');

	flush_rewrite_rules();
}
add_action('init', 'custom_rewrite_rule_storywork', 10, 0);

add_filter( 'manage_customer_posts_columns', 'set_custom_edit_customer_columns' );
add_action( 'manage_customer_posts_custom_column' , 'custom_customer_column', 10, 2 );

function set_custom_edit_customer_columns($columns) {

	$columns['download_profile'] = 'Download Profile';

	return $columns;
}
function custom_customer_column( $column, $post_id ) {
	switch ( $column ) {

		case 'download_profile' :
			echo '<a href="'.site_url('download_profile/'.$post_id).'">Download</a>';
			break;

	}
}