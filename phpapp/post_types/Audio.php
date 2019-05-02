<?php

class Audio {

	function __construct() {
		add_action('init',array($this,'create_post_type'));
		add_action('init',array($this,'create_taxonomies'));
    }
    
	function create_post_type() {

		$labels = array(
			'name'               => 'Audio',
			'singular_name'      => 'Audio',
			'menu_name'          => 'Audios',
			'name_admin_bar'     => 'Audio',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Audio',
			'new_item'           => 'New Audio',
			'edit_item'          => 'Edit Audio',
			'view_item'          => 'View Audio',
			'all_items'          => 'All Audios',
			'search_items'       => 'Search Audios',
			'parent_item_colon'  => 'Parent Audio',
			'not_found'          => 'No Audios Found',
			'not_found_in_trash' => 'No Audios Found in Trash'
		);
		$args = array(
			'labels'              => $labels,
			'public'              => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_nav_menus'   => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-format-audio',
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
			'has_archive'         => true,
			'rewrite'             => array( 'slug' => 'podcast' ),
            'query_var'           => true,
            'show_in_rest'        => true
		);
		register_post_type( 'weact_audio', $args );
    }
    
	function create_taxonomies() {
		// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'              => 'Types',
			'singular_name'     => 'Type',
			'search_items'      => 'Search Types',
			'all_items'         => 'All Types',
			'parent_item'       => 'Parent Type',
			'parent_item_colon' => 'Parent Type:',
			'edit_item'         => 'Edit Type',
			'update_item'       => 'Update Type',
			'add_new_item'      => 'Add New Type',
			'new_item_name'     => 'New Type Name',
			'menu_name'         => 'Types',
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'type' ),
        );
        register_taxonomy('weact_audio_type',array('weact_audio'),$args);
        
		// Add new taxonomy, NOT hierarchical (like tags)
		$labels = array(
			'name'                       => 'Attributes',
			'singular_name'              => 'Attribute',
			'search_items'               => 'Attributes',
			'popular_items'              => 'Popular Attributes',
			'all_items'                  => 'All Attributes',
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => 'Edit Attribute',
			'update_item'                => 'Update Attribute',
			'add_new_item'               => 'Add New Attribute',
			'new_item_name'              => 'New Attribute Name',
			'separate_items_with_commas' => 'Separate Attributes with commas',
			'add_or_remove_items'        => 'Add or remove Attributes',
			'choose_from_most_used'      => 'Choose from most used Attributes',
			'not_found'                  => 'No Attributes found',
			'menu_name'                  => 'Attributes',
        );
        
		$args = array(
			'hierarchical'          => false,
			'labels'                => $labels,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true,
			'rewrite'               => array( 'slug' => 'attribute' ),
		);
		register_taxonomy('weact_audio_attribute','weact_audio',$args);
	}
}

new Audio();

?>