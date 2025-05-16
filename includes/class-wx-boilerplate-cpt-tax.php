<?php

namespace Wx_Boilerplate\Includes;

use Wx_Boilerplate\Includes\Class_Wx_Boilerplate_Install as Wx_Boilerplate_Install;

class Class_Wx_Boilerplate_Cpt_Tax {
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.6.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.6.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.6.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

    /**
	 * @since    1.0.0
	 * Register Plugin's Post Types
	 * 
	 */ 
	public function register_wiliex_cloud_cpts(){
		
	}
    
    /**
	 * @since    1.0.0
	 * Register Plugin's taxonomies
	 * 
	 */ 
	public function register_wiliex_cloud_taxs(){	

	}


}