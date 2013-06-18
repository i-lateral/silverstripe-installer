<?php

class HomePage extends Page {
    private static $db = array();

    private static $has_one = array(
        'DeepLink1' => 'Page',
        'DeepLink2' => 'Page'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', TreeDropdownField::create('DeepLink1ID', 'First link to page', 'SiteTree'));
        $fields->addFieldToTab('Root.Main', TreeDropdownField::create('DeepLink2ID', 'Second link to page', 'SiteTree'));

        return $fields;
    }
}
