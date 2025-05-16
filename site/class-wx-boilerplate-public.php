<?php
namespace Wx_Boilerplate\Site;
class Class_Wx_Boilerplate_Public {
	use Traits\Trait_Wx_Boilerplate_Common;
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( 'bootstrap.min.css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/bootstrap.min.css', array(),false, 'all' );
		wp_enqueue_style( '-fa6-css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/fa-6/css/all.min.css', array(),false, 'all' );
		wp_enqueue_style( 'google-fonts-Montserrat','https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(),false, 'all' );
		
		wp_enqueue_style( 'dataTables.bootstrap5.css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/datatable/dataTables.bootstrap5.css', array(),false, 'all' );
		wp_enqueue_style( 'colReorder.dataTables.css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/datatable/colReorder.dataTables.css', array(),false, 'all' );
		wp_enqueue_style( 'buttons.dataTables.css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/datatable/buttons.dataTables.css', array(),false, 'all' );
		wp_enqueue_style( 'fixedColumns.bootstrap5.css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/datatable/fixedColumns.bootstrap5.css', array(),false, 'all' );
		wp_enqueue_style( 'buttons.bootstrap5.css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/datatable/buttons.bootstrap5.css', array(),false, 'all' );
		
		
		wp_enqueue_style( 'select2-css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/select2/select2.min.css', array(),false, 'all' );
		wp_enqueue_style( 'select2-bootstrap-5-theme.min.css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/select2/select2-bootstrap-5-theme.min.css', array(),false, 'all' );
		wp_enqueue_style( 'select2-bootstrap-5-theme.rtl.min.css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/select2/select2-bootstrap-5-theme.rtl.min.css', array(),false, 'all' );
		
		wp_enqueue_style( 'jquery-ui-css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/jquery-ui.css', array(),false, 'all' );
		wp_enqueue_style( 'fancybox-css', WX_BOILERPLATE_ASSETS_DIR_URL . 'css/fancybox.css', array(),false, 'all' );

		wp_enqueue_style( $this->plugin_name, WX_BOILERPLATE_ASSETS_DIR_URL . 'css/wx-boilerplate-public.css', array(), $this->version, 'all' );

		wp_enqueue_media();
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'bootstrap.bundle.min.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/bootstrap.bundle.min.js', array( 'jquery' ),false, true );
		wp_enqueue_script( 'popper.min.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/popper.min.js', array( 'jquery' ),false, true );
		
		wp_enqueue_script( 'dataTables.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/dataTables.js', array( 'jquery' ),false, true );
		wp_enqueue_script( 'dataTables.bootstrap5.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/dataTables.bootstrap5.js', array( 'jquery' ),false, true );
		wp_enqueue_script( 'colReorder.dataTables.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/colReorder.dataTables.js', array( 'jquery' ),false, true );	
		wp_enqueue_script( 'dataTables.colReorder.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/dataTables.colReorder.js', array( 'jquery' ),false, true );	
		wp_enqueue_script( 'dataTables.buttons.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/dataTables.buttons.js', array( 'jquery' ),false, true );	
		wp_enqueue_script( 'buttons.dataTables.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/buttons.dataTables.js', array( 'jquery' ),false, true );	
		wp_enqueue_script( 'buttons.colVis.min.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/buttons.colVis.min.js', array( 'jquery' ),false, true );	
		wp_enqueue_script( 'dataTables.editor.min.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/dataTables.editor.min.js', array( 'jquery' ),false, true );	
		wp_enqueue_script( 'dataTables.fixedColumns.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/dataTables.fixedColumns.js', array( 'jquery' ),false, true );	
		wp_enqueue_script( 'fixedColumns.bootstrap5.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/fixedColumns.bootstrap5.js', array( 'jquery' ),false, true );	
		wp_enqueue_script( 'buttons.bootstrap5.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/buttons.bootstrap5.js', array( 'jquery' ),false, true );	
		wp_enqueue_script( 'buttons.html5.min.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/buttons.html5.min.js', array( 'jquery' ),false, true );	
		wp_enqueue_script( 'buttons.print.min.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/buttons.print.min.js', array( 'jquery' ),false, true );	
		wp_enqueue_script( 'jszip.min.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/datatable/jszip.min.js', array( 'jquery' ),false, true );	
		

		wp_enqueue_script( 'jquery-validate-js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/jquery.validate.js', array( 'jquery' ),false, true );
		wp_enqueue_script( 'jquery-validate-methods-js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/additional-methods.js', array( 'jquery' ),false, true );
		
		wp_enqueue_script( 'jquery-ui-js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/jquery-ui.min.js', array( 'jquery' ),false, true );
		
		if( !in_array(bp_current_component() ,['messages']) ){
			wp_enqueue_script( 'tinymce.min.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/tinymce/tinymce.min.js', array( 'jquery' ),false, true );
			wp_enqueue_script( 'tinymce-jquery.min.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/tinymce/tinymce-jquery.min.js', array( 'jquery' ),false, true );
		}
		
		wp_enqueue_script('sweetalert.min.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/sweetalert.min.js', array( 'jquery' ),false, true );
		wp_enqueue_script('fancybox.umd.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/fancybox.umd.js', array( 'jquery' ),false, true );
		wp_enqueue_script('select2.min.js', WX_BOILERPLATE_ASSETS_DIR_URL . 'js/select2/select2.min.js', array( 'jquery' ),false, true );

		wp_enqueue_script( $this->plugin_name, WX_BOILERPLATE_ASSETS_DIR_URL . 'js/wx-boilerplate-public.js', array( 'jquery' ), $this->version, true );
		wp_localize_script( $this->plugin_name.'wiliex-cloud','wx_boilerplate_object',
	        array( 
	            'ajaxurl'  						=> 	admin_url( 'admin-ajax.php' ),
				'edit_form_loader_html' 		=> 	$this->wx_get_edit_form_loader_html(),
	        )
	    );

		

	}

}
