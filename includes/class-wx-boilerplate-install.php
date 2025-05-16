<?php

namespace Wx_Boilerplate\Includes;

class Class_Wx_Boilerplate_Install {

    /**
	 * Register Plugin pages
	 *
	 * @since    1.0.0
	 */
    public static function wx_boilerplate_pages(){
        $pages = [
            [
                'title'         =>  'Wiliex Boiler Plate Page',
                'slug'          =>  'wx-boilerplate-page',
                'shortcode'     =>  '[wx-boilerplate-page]',
                'page_template' =>  'page-fullwidth-content.php'
            ]                
        ];
        return $pages;
    }

    /**
	 * Create Plugin pages
	 *
	 * @since    1.0.0
	 */
    public static function wx_boilerplate_create_pages(){
        $pages = self::wx_boilerplate_pages();
        foreach ($pages as $key => $page) {

            $title      = $page['title'] ?? '';
            $shortcode  = $page['shortcode'] ?? '';
            $page_content = "";

            if($shortcode){
                $page_content = "<!-- wp:shortcode -->
                $shortcode
                <!-- /wp:shortcode -->";
            }

            $page_title = $title;
            $slug  = $page['slug'] ?? '';
            $template = $page['page_template'] ?? '';
            if($slug){
                $is_page_exits = wx_get_page_by_slug($slug);
            }else{
                $is_page_exits = wx_get_page_by_title($title);
            }
            if(!$is_page_exits){
                $args = [
                    'post_title' => $page_title,
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'post_content' => $page_content
                ];
                if(array_key_exists('slug',$page)){
                    $args['post_name'] = $page['slug'];
                }
                $page_id = wp_insert_post($args);
                if($template){
                    update_post_meta($page_id,'_wp_page_template',$template);
                }
            }

        }
    }

}