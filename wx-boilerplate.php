<?php

/**
 * Plugin Name:       Wx Boilerplate
 * Plugin URI:        
 * Description:       This is a boilerplate WP Plugin
 * Version:           1.0.0
 * Author:            Saurabh Kumar
 * Author URI:        https://github.com/phpdev-saurabh
 * License:           GPL-2.0+
 * License URI:       
 * Text Domain:       wx-boilerplate
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

//*Inlcude Config File
require_once plugin_dir_path( __FILE__ ).'config.php';

//*Autoload Every Class in Plugin
require_once plugin_dir_path( __FILE__ ).'autoloading.php';

//* Includes Helpers 
require_once plugin_dir_path( __FILE__ ).'helpers/helper.php';

use Wx_Boilerplate\Includes\Class_Wx_Boilerplate as Wx_Boilerplate;
use Wx_Boilerplate\Includes\Class_Wx_Boilerplate_Activator as Wx_Boilerplate_Activator;
use Wx_Boilerplate\Includes\Class_Wx_Boilerplate_Deactivator as Wx_Boilerplate_Deactivator;

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_wx_boilerplate() {
	Wx_Boilerplate_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_wx_boilerplate() {
	Wx_Boilerplate_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wx_boilerplate' );
register_deactivation_hook( __FILE__, 'deactivate_wx_boilerplate' );


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wx_boilerplate() {
	$plugin = new Wx_Boilerplate();
	$plugin->run();
}
add_action( 'plugins_loaded','run_wx_boilerplate');
