<?php

//? Set Dev False During Production  
$dev = 1;
if( $dev ){
    $plugin_version = rand(1,10000000);
}else{
    $plugin_version = '1.0.0';
}

define( 'WX_BOILERPLATE_VERSION',$plugin_version);
define( 'WX_BOILERPLATE_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'WX_BOILERPLATE_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'WX_BOILERPLATE_ASSETS_DIR_URL', plugin_dir_url( __FILE__ ).'site/assets/' );
define( 'WX_BOILERPLATE_ADMIN_ASSETS_DIR_URL', plugin_dir_url( __FILE__ ).'admin/assets/' );