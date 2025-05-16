<?php
namespace Wx_Boilerplate\Site\Traits;
use WP_Query;
use WP_User_Query;

trait Trait_Wx_Boilerplate_Common{

    /**
	 * Get Loader html
	 * @since    1.0.0
	 */
	public function wx_get_edit_form_loader_html(){
		ob_start();
		?>
			<div class="d-flex justify-content-center">
	            <div class="spinner-border text-info wiliex_spinner" role="status">
	              <span class="visually-hidden">Loading...</span>
	            </div>
	        </div>
		<?php
		return ob_get_clean();
	}

	
}