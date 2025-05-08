<?php

/* --------------------------------------------------------------------

  Based off of:
  Super Simple PHP Localization.
  https://github.com/cwal/SuperSimplePHPLocalization

  @author Christopher Waldau <http://chris.waldau.ca>

  Copyright (c) Christopher Waldau <chris@waldau.ca> All rights reserved.

  Licensed under the MIT license
  http://opensource.org/licenses/MIT

  --------------------------------------------------------------------- */

/*
 * Create a /locale folder with lang.php and translations.php with an array for each language.
 * Include this script on all necessary pages: include('locale/lang.php');
 *
 * This will be case sensitive, so cases must match to return the translated phrase.
 *
 * No need for string translations in default language.
 * If a translation is not found it returns the original phrase.
 * Define language by adding ?lang=fr to the URL
 * Use by calling __('Some text here');
 */


/*
 * Define the url path for the resources
 * Easiest if lang.php is in the same folder as the translations.php
 * Otherwise INCLUDE_PATH can be defined manually and lang.php placed anywhere.
 */
defined('INCLUDE_PATH') or define('INCLUDE_PATH', dirname(__FILE__) . '/');

/*
 * Define the language
 * Checks the URL for user defined language
 * Otherwise checks for manually defined language and finally defaults to english
 */
if(isset($_GET['lang']))
  define('LANGUAGE', strtolower($_GET['lang']));
elseif(defined('LANG_DEFAULT'))
  define('LANGUAGE', LANG_DEFAULT);
else
  define('LANGUAGE', 'en');

/*
 * Verify that at least the default language file exists and populate $translations array
 */
$translations = get_translations();

/*
 * Return the translated phrase
 *
 * @param string $key The phrase that needs to be translated
 * @param string $lang The language to translate into, defaults to defined language above
 * @return string The translated string
 */
function __($key, $lang = LANGUAGE) {
  global $translations;
  /* Check if the $key exists in the array, otherwise return just $key */
  if(array_key_exists($key, $translations[$lang])) {
    $defined_constant_keys = array_keys(get_defined_constants(true)['user']); // all the user defined keys
    $defined_constant_values = array_values(get_defined_constants(true)['user']); // all the user defined values
    $translation = $translations[$lang][$key]; // the translation
    return str_replace($defined_constant_keys, $defined_constant_values, $translation); // replace any constants used in translations.php with their defined values
  } else {
    return $key;
  }
}

/*
 * Load the proper language file and return the translations array
 *
 * The language file is JSON encoded and returns an associative array (must be UTF8 encoded)
 *
 * @return array The translations
 */
function get_translations() {
  /* Static keyword is used to ensure the file is loaded only once */
  static $translations = NULL;
  /* If no instance of $translations has occurred load the language file */
  if (is_null($translations)) {
    $translations = include( INCLUDE_PATH . 'translations.php' );
  }
  return $translations;
}
?>
