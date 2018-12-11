<?php

/**
 * The plugin bootstrap file.
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Review cpt Plugin
 * Plugin URI:        http://example.com/review-plugin-uri/
 * Description:       add review ctp
 * Version:           1.0.1
 * Author:            Yoan marchal
 * Author URI:        http://yoanmarchal.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       review-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-reviews-plugin-activator.php.
 */
function activate_review_plugin()
{
    require_once plugin_dir_path(__FILE__).'includes/class-reviews-plugin-activator.php';
    review_plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-reviews-plugin-deactivator.php.
 */
function deactivate_review_plugin()
{
    require_once plugin_dir_path(__FILE__).'includes/class-reviews-plugin-deactivator.php';
    review_plugin_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_review_plugin');
register_deactivation_hook(__FILE__, 'deactivate_review_plugin');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__).'includes/class-reviews-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_reviews_plugin()
{
    $plugin = new review_plugin();
    $plugin->run();
}
run_reviews_plugin();
