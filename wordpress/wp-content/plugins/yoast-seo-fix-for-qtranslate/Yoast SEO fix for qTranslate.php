<?php
/**
 * Plugin Name: Yoast SEO fix for qTranslate
 * Plugin URI: http://wordpress.org
 * Description: It runs filter that wraps $title into __() and fixes Yoast SEO plugin that outputs all languanges at Once in Title
 * Version: 1.1
 * Author: Luka Petrovic
 * Author URI: http://smartweb.rs
 * License: GPL2
 */
add_filter('wpseo_title','qtranslate_filter',10,3);
function qtranslate_filter($title)
{
return __($title);
}
?>
