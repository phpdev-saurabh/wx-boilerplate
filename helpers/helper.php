<?php 

/**
 * Helper functions to print data in <pre> tags and die
 *
 * @since    1.0.0
 */
if (!function_exists('dd')) {
    function dd($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        exit;
    }
}


/**
 * Helper functions to print data in <pre> tags and continue
 *
 * @since    1.0.0
 */
if (!function_exists('dump')) {
    function dump($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }
}