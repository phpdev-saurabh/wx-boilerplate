<?php
// Autoloading of every php class in plugin..
spl_autoload_register( 'wx_boilerplate_autoloader' );
function wx_boilerplate_autoloader( $class_name ) {
  if ( false !== strpos( $class_name, 'Wx_Boilerplate' ) )
  {

    $class_name = str_replace('\\',DIRECTORY_SEPARATOR,$class_name);

    $class_file = plugin_dir_path(__DIR__).strtolower(str_replace( '_','-',$class_name)).'.php';  

    if(  file_exists($class_file) )
    {
      require_once $class_file;
    }
  }
}