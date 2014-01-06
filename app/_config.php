<?php

global $project;
$project = 'app';

global $database;
$database = '';

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_GB');

// Set quality of image rendering
GD::set_default_quality(80);
