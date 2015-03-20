<?php

class Page_Controller extends ContentController {

    /**
     * An array of actions that can be accessed via a request. Each array element should be an action name, and the
     * permissions or conditions required to allow the user to access it.
     *
     * <code>
     * array (
     *     'action', // anyone can access this action
     *     'action' => true, // same as above
     *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
     *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
     * );
     * </code>
     *
     * @var array
     */
    private static $allowed_actions = array();

    public function init() {
        parent::init();

        Requirements::set_combined_files_folder("themes/" . SSViewer::current_theme() . "/combinedfiles");

        // Setup combined files
        Requirements::combine_files(
            'layout.css',
            array(
                "themes/".SSViewer::current_theme()."/css/kube.css",
                "themes/".SSViewer::current_theme()."/css/typography.css",
                "themes/".SSViewer::current_theme()."/css/form.css",
                "themes/".SSViewer::current_theme()."/css/Page.css",
                "themes/".SSViewer::current_theme()."/css/HomePage.css"
            )
        );

        Requirements::combine_files(
            'Libraries.js',
            array(
                THIRDPARTY_DIR . '/jquery/jquery.js',
                "themes/".SSViewer::current_theme()."/scripts/kube.buttons.js",
                "themes/".SSViewer::current_theme()."/scripts/kube.tabs.js"
            )
        );

        Requirements::combine_files(
            'general.js',
            array(
                "themes/" . SSViewer::current_theme() . "/scripts/Page.js",
                "themes/" . SSViewer::current_theme() . "/scripts/HomePage.js"
            )
        );
    }

}
