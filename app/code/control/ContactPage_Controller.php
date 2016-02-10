<?php

class ContactPage_Controller extends UserDefinedForm_Controller {
    public function init() {
        parent::init();
		
		if ($this->BlockJquery) {
			Requirements::block(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.js');
		}
        
        $this->loadThemeAssets();
    }
}
