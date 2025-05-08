<?php

// absolute site root relative to this file
define('ABS_SITE_ROOT', dirname(dirname(__FILE__))); // two levels up from this file, defines as /

// authentication
$share = isset($_GET['share']) ? ($_GET['share'] === '' ? true : $_GET['share']) : false; // determine if it is a share link
$currentScript = basename($_SERVER['SCRIPT_FILENAME']); // determine if index.php or view.php
if ($share == false || ($share == true && $currentScript == 'index.php')) { // authenticate anytime share is not in the url but always for index.php, regardless of share being present
  include(ABS_SITE_ROOT . '/auth.php');
}

// localization
include(ABS_SITE_ROOT . '/locale/lang.php');

// language alias
define('LANG', LANGUAGE); // LANGUAGE set from locale/lang.php
define('ALT_LANG', get_alt_lang());

// get alternate language
function get_alt_lang($lang = LANG) {
  if ($lang == 'fr') {
    return 'en';
  }
  else {
    return 'fr';
  }
}

// base url
$base_url = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
define('BASE_URL', $base_url);
// relative site path (root + language)
$site_url = substr($_SERVER['REQUEST_URI'], -1) == '/' ? $_SERVER['REQUEST_URI'] : $_SERVER['REQUEST_URI'] . '/'; // add trailing slash if not present
$site_url_lang = strpos($site_url, '/' . LANG . '/') !== false ? $site_url : $site_url . LANG . '/'; // check if lang is already in the string, include if not
$site_path = substr($site_url_lang, 0, strpos($site_url_lang, '/' . LANG . '/') + 4); // keep everything until after (including) lang code. Assumes 2 letter language code; /en/ or /fr/
define('SITE_PATH', $site_path);
// relative site root (root)
$site_root = substr(SITE_PATH, 0, strpos(SITE_PATH, '/' . LANG . '/')) . '/'; // keep everything up to (but not including) the lang code
define('SITE_ROOT', $site_root);
// relative site url (browser url without base_url)
define('SITE_URL', $site_url_lang);
// partials path
define('PARTIALS_PATH', ABS_SITE_ROOT . '/partials/');


// debug
// echo 'ABS_SITE_ROOT (server directory path to project root): ' . ABS_SITE_ROOT; echo '<br>';
// echo 'LANG (current lang): ' . LANG; echo '<br>';
// echo 'ALT_LANG (opposite lang): ' . ALT_LANG; echo '<br>';
// echo 'BASE_URL (domain name): ' . BASE_URL; echo '<br>';
// echo 'SITE_ROOT (relative url without lang): ' . SITE_ROOT; echo '<br>';
// echo 'SITE_PATH (relative url with lang): ' . SITE_PATH; echo '<br>';
// echo 'SITE_URL (full relative url): ' . SITE_URL; echo '<br>';
// echo 'PARTIALS_PATH (server directory path to partials folder): ' . PARTIALS_PATH; echo '<br>';

// menu links: used by all pages in  `partials/_sidebar.php`
// included here to ensure its available everywhere
// get a list of all markdown files in the snippets folder
$directory = ABS_SITE_ROOT . '/snippets/'; // needs trailing slash
$files = glob($directory . '*.md'); // gets all markdown files

if ($files !== false && !empty($files)) {
  $snippets = array();
  foreach ($files as $file) {
    // print_r($file);
    $basename = basename($file);
    $filename = str_replace('.md', '', $basename);
    $slug = 'snip/' . $filename; // htaccess rules define the slug to be `snip`
    $snippets[] = array('slug' => $slug, 'name' => $filename);
  }
}
