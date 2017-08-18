<?php

global $project;
$project = 'app';

if (!defined("SS_DATABASE_NAME")) {
	global $database;
	$database = '';
}

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_GB');

// Set quality of image rendering
GD::set_default_quality(80);
