<?php // Custom post type function

add_action( 'init', 'member_videos' );

function member_videos() {
	$labels = array(
		'name'               => 'Member Videos',
		'singular_name'      => 'Member Video',
		'menu_name'          => 'Member Videos',
		'name_admin_bar'     => 'Member Videos',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Member Video',
		'new_item'           => 'New Member Video',
		'edit_item'          => 'Edit Member Video',
		'view_item'          => 'View Member Video',
		'all_items'          => 'All Member Videos',
		'search_items'       => 'Search Member Videos',
		'parent_item_colon'  => 'Parent Member Videos:',
		'not_found'          => 'No Member Videos found.',
		'not_found_in_trash' => 'No Member Videos found in Trash.'
	);

	$args = array( 
		'labels'		=> $labels,
		'public'		=> true,
// 		'rewrite'		=> array( 'slug' => 'video-album' ),
		'has_archive'   => true,
		'menu_position' => 20,
 		'menu_icon'     => 'dashicons-video-alt',
		'taxonomies'		=> array( 'post_tag', 'category' ),
		'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
	);
	register_post_type( 'Member Videos', $args );
}