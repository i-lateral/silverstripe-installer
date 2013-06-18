<?php
class HomePage extends Page {
    public static $db = array();
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        return $fields;
    }
}

class HomePage_Controller extends Page_Controller {

    public static $allowed_actions = array ();

    public function init() {
        parent::init();
    }
}
