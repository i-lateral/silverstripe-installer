<?php

$db_prefix = (defined('DB_PREFIX')) ? DB_PREFIX . '_' : '';

global $project;
$project = 'app';

global $database;
$database = $db_prefix . '';

require_once('conf/ConfigureFromEnv.php');

MySQLDatabase::set_connection_charset('utf8');

SSViewer::set_theme('default-theme');

// enable nested URLs for this site (e.g. page/sub-page/)
SiteTree::enable_nested_urls();

// Add extensions
Object::add_extension('SiteConfig', 'AppSiteConfig');

// Set quality of image rendering
GD::set_default_quality(80);
