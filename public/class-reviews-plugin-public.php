<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @author     Yoan Marchal <marchalyoan@gmail.com>
 */
class review_plugin_Public
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
     * @param string $review_plugin The name of the plugin.
     * @param string $version    The version of this plugin.
     */
    public function __construct($review_plugin, $version)
    {
        $this->review_plugin = $review_plugin;
        $this->version = $version;
    }
}
