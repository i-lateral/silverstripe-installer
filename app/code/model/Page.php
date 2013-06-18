<?php

class Page extends SiteTree {

    private static $db = array();

    private static $has_one = array();

    private static $many_many = array();

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        return $fields;
    }

}
