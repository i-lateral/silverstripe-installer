<?php

class Page extends SiteTree {

    public static $db = array();

    public static $has_one = array();

    public static $many_many = array();

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        return $fields;
    }

}
