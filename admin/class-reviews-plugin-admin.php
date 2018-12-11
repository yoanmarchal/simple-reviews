<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @author     Yoan Marchal <marchalyoan@gmail.com>
 */
class review_plugin_Admin
{
    /**
         * The ID of this plugin.
         *
         * @since    1.0.0
         *
         * @var string The ID of this plugin.
         */
        private $review_plugin;

        /**
         * The version of this plugin.
         *
         * @since    1.0.0
         *
         * @var string The current version of this plugin.
         */
        private $version;

         /**
          * Initialize the class and set its properties.
          *
          * @since    1.0.0
          *
          * @param      string    $review_plugin       The name of this plugin.
          * @param      string    $version    The version of this plugin.
          */

         /**
          * Holds the values to be used in the fields callbacks.
          */
         private $options;

    public function __construct($review_plugin, $version)
    {
        $this->review_plugin = $review_plugin;
        $this->version = $version;
        add_action('init', [$this, 'init_cpt_review']);
    }

    public function init_cpt_review()
    {
        $labels = [
        'name'                => _x('review', 'Post Type General Name', 'review-plugin'),
        'singular_name'       => _x('Review', 'Post Type Singular Name', 'review-plugin'),
        'menu_name'           => __('Review', 'review-plugin'),
        'parent_item_colon'   => __('Parent Review:', 'review-plugin'),
        'all_items'           => __('All reviews', 'review-plugin'),
        'view_item'           => __('View Review', 'review-plugin'),
        'add_new_item'        => __('Add New Review', 'review-plugin'),
        'add_new'             => __('New Review', 'review-plugin'),
        'edit_item'           => __('Edit Review', 'review-plugin'),
        'update_item'         => __('Update Review', 'review-plugin'),
        'search_items'        => __('Search review', 'review-plugin'),
        'not_found'           => __('No review found', 'review-plugin'),
        'not_found_in_trash'  => __('No review found in Trash', 'review-plugin'),
    ];

        $args = [
        'label'               => __('review', 'review-plugin'),
        'description'         => __('review', 'review-plugin'),
        'labels'              => $labels,
        'supports'            => ['title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'],
        'taxonomies'          => ['category', 'post_tag'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-star-filled',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    ];

        register_post_type('review', $args);
    }
}
