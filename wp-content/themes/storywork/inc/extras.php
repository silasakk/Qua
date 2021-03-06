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

    if($query->query_vars['pagename'] == "download_profile" ){

    }

}
add_action( 'pre_get_posts', 'download_page' );

function add_query_vars_storywork( $vars ){
	$vars[] = "user_id";
    $vars[] = "post_id";
	return $vars;
}
add_filter( 'query_vars', 'add_query_vars_storywork' );
function custom_rewrite_rule_storywork() {

	$download = get_page_by_path('download_profile')->ID;
	add_rewrite_rule('^download_profile/([^/]+)/?', 'index.php?page_id='.$download.'&user_id=$matches[1]', 'top');

    $quo = get_page_by_path('download_quotation')->ID;
    add_rewrite_rule('^download_quotation/([^/]+)/?', 'index.php?page_id='.$quo.'&post_id=$matches[1]', 'top');

    flush_rewrite_rules();
}
add_action('init', 'custom_rewrite_rule_storywork', 10, 0);

add_filter( 'manage_customer_posts_columns', 'set_custom_edit_customer_columns' );
add_action( 'manage_customer_posts_custom_column' , 'custom_customer_column', 10, 2 );

add_filter( 'manage_supplier_posts_columns', 'set_custom_edit_customer_columns' );
add_action( 'manage_supplier_posts_custom_column' , 'custom_customer_column', 10, 2 );

add_filter( 'manage_cast_posts_columns', 'set_custom_edit_customer_columns' );
add_action( 'manage_cast_posts_custom_column' , 'custom_customer_column', 10, 2 );

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

add_filter( 'manage_quotation_posts_columns', 'set_custom_edit_quotation_columns' );
add_action( 'manage_quotation_posts_custom_column' , 'custom_quotation_column', 10, 2 );
function set_custom_edit_quotation_columns($columns) {

    $columns['download_quotation'] = 'Download Quotation';

    return $columns;
}
function custom_quotation_column( $column, $post_id ) {
    switch ( $column ) {

        case 'download_quotation' :
            echo '<a href="'.site_url('download_quotation/'.$post_id).'">Download</a>';
            break;

    }
}