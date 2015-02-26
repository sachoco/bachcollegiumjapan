<?php
/* Bones Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function custom_post_schedule() {
	// creating (registering) the custom type
	register_post_type( 'schedule', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Schedule', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Schedule', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Schedule', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Schedule', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Schedule', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Schedule', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Schedule', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Schedule', 'bonestheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Schedule', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-calendar', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'schedule', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'schedule', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'category', 'schedule' );
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type( 'post_tag', 'schedule' );

}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_schedule');


function custom_post_discography() {
	// creating (registering) the custom type
	register_post_type( 'discography', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Discography', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Discography', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Discography', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Discography', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Discography', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Discography', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Discography', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Discography', 'bonestheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Discography', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-format-audio', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'discography', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'discography', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'discography_category', 'discography' );
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type( 'post_tag', 'discography' );

}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_discography');



function custom_post_artist() {
	// creating (registering) the custom type
	register_post_type( 'artist', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Artist', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Artist', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Artist', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Artist', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Artist', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Artist', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Artist', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Artist', 'bonestheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Artist', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-id-alt', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'artist', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'artist', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'artist_category', 'artist' );
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type( 'post_tag', 'artist' );

}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_artist');


	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

	// now let's add custom categories (these act like categories)
	register_taxonomy( 'page_category',
		array('page'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Page Categories', 'bonestheme' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Page Category', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Page Categories', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All Page Categories', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Page Category', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Page Category:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Page Category', 'bonestheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Page Category', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Page Category', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Page Category Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'page-category' ),
		)
	);

	// now let's add custom tags (these act like categories)
	register_taxonomy( 'custom_tag',
		array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => false,    /* if this is false, it acts like tags */
			'labels' => array(
				'name' => __( 'Custom Tags', 'bonestheme' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Custom Tag', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Custom Tags', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All Custom Tags', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Custom Tag', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Custom Tag:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Custom Tag', 'bonestheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Custom Tag', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Custom Tag', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Custom Tag Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);

	// now let's add custom tags (these act like categories)
	register_taxonomy( 'discography_category',
		array('discography'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,    /* if this is false, it acts like tags */
			'labels' => array(
			       'name' => __( 'ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'singular_name' => __( 'ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'search_items' => __( 'Search ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'popular_items' => __( 'Popular ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'all_items' => __( 'All ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'parent_item' => __( 'Parent ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'parent_item_colon' => __( 'Parent ディスコグラフィーカテゴリ:', 'bonestheme' ),
			        'edit_item' => __( 'Edit ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'update_item' => __( 'Update ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'add_new_item' => __( 'Add New ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'new_item_name' => __( 'New ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'separate_items_with_commas' => __( 'Separate ディスコグラフィーカテゴリ with commas', 'bonestheme' ),
			        'add_or_remove_items' => __( 'Add or remove ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'choose_from_most_used' => __( 'Choose from the most used ディスコグラフィーカテゴリ', 'bonestheme' ),
			        'menu_name' => __( 'ディスコグラフィーカテゴリ', 'bonestheme' ),
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);


	register_taxonomy( 'artist_category',
		array('artist'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,    /* if this is false, it acts like tags */
			'labels' => array(
			       'name' => __( 'アーティストカテゴリ', 'bonestheme' ),
			        'singular_name' => __( 'アーティストカテゴリ', 'bonestheme' ),
			        'search_items' => __( 'Search アーティストカテゴリ', 'bonestheme' ),
			        'popular_items' => __( 'Popular アーティストカテゴリ', 'bonestheme' ),
			        'all_items' => __( 'All アーティストカテゴリ', 'bonestheme' ),
			        'parent_item' => __( 'Parent アーティストカテゴリ', 'bonestheme' ),
			        'parent_item_colon' => __( 'Parent アーティストカテゴリ:', 'bonestheme' ),
			        'edit_item' => __( 'Edit アーティストカテゴリ', 'bonestheme' ),
			        'update_item' => __( 'Update アーティストカテゴリ', 'bonestheme' ),
			        'add_new_item' => __( 'Add New アーティストカテゴリ', 'bonestheme' ),
			        'new_item_name' => __( 'New アーティストカテゴリ', 'bonestheme' ),
			        'separate_items_with_commas' => __( 'Separate アーティストカテゴリ with commas', 'bonestheme' ),
			        'add_or_remove_items' => __( 'Add or remove アーティストカテゴリ', 'bonestheme' ),
			        'choose_from_most_used' => __( 'Choose from the most used アーティストカテゴリ', 'bonestheme' ),
			        'menu_name' => __( 'アーティストカテゴリ', 'bonestheme' ),
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);

	register_taxonomy( 'location',
		array('schedule'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,    /* if this is false, it acts like tags */
			'labels' => array(
			       'name' => __( 'ロケーション', 'bonestheme' ),
			        'singular_name' => __( 'ロケーション', 'bonestheme' ),
			        'search_items' => __( 'Search ロケーション', 'bonestheme' ),
			        'popular_items' => __( 'Popular ロケーション', 'bonestheme' ),
			        'all_items' => __( 'All ロケーション', 'bonestheme' ),
			        'parent_item' => __( 'Parent ロケーション', 'bonestheme' ),
			        'parent_item_colon' => __( 'Parent ロケーション:', 'bonestheme' ),
			        'edit_item' => __( 'Edit ロケーション', 'bonestheme' ),
			        'update_item' => __( 'Update ロケーション', 'bonestheme' ),
			        'add_new_item' => __( 'Add New ロケーション', 'bonestheme' ),
			        'new_item_name' => __( 'New ロケーション', 'bonestheme' ),
			        'separate_items_with_commas' => __( 'Separate ロケーション with commas', 'bonestheme' ),
			        'add_or_remove_items' => __( 'Add or remove ロケーション', 'bonestheme' ),
			        'choose_from_most_used' => __( 'Choose from the most used ロケーション', 'bonestheme' ),
			        'menu_name' => __( 'ロケーション', 'bonestheme' ),
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);

	register_taxonomy( 'repertoire',
		array('schedule'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => false,    /* if this is false, it acts like tags */
			'labels' => array(
			       'name' => __( '公演内容', 'bonestheme' ),
			        'singular_name' => __( '公演内容', 'bonestheme' ),
			        'search_items' => __( 'Search 公演内容', 'bonestheme' ),
			        'popular_items' => __( 'Popular 公演内容', 'bonestheme' ),
			        'all_items' => __( 'All 公演内容', 'bonestheme' ),
			        'parent_item' => __( 'Parent 公演内容', 'bonestheme' ),
			        'parent_item_colon' => __( 'Parent 公演内容:', 'bonestheme' ),
			        'edit_item' => __( 'Edit 公演内容', 'bonestheme' ),
			        'update_item' => __( 'Update 公演内容', 'bonestheme' ),
			        'add_new_item' => __( 'Add New 公演内容', 'bonestheme' ),
			        'new_item_name' => __( 'New 公演内容', 'bonestheme' ),
			        'separate_items_with_commas' => __( 'Separate 公演内容 with commas', 'bonestheme' ),
			        'add_or_remove_items' => __( 'Add or remove 公演内容', 'bonestheme' ),
			        'choose_from_most_used' => __( 'Choose from the most used 公演内容', 'bonestheme' ),
			        'menu_name' => __( '公演内容', 'bonestheme' ),
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);
	/*
		looking for custom meta boxes?
		check out this fantastic tool:
		https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
	*/


?>
