=== Yoast SEO fix for qTranslate ===

Contributors:      lupetalo
Plugin Name:       Yoast SEO fix for qTranslate
Plugin URI:        http://wordpress.org/plugins/yoast-seo-fix-for-qtranslate/
Tags:              yoast, qTranslate
Author URI:        http://nextweb.rs
Author:            Luka Petrovic
Requires at least: 2.7
Tested up to:      3.9.1
Stable tag:        3.9.1
Version:           1.1

When using qTranslete with Yoast SEO plugin it outputs all languanges in 
title. This plugin fix this. Only current languange will be outputed. It runs filter that wraps $title into __() and fixes Yoast SEO plugin that outputs all languanges at once in Title. I acctualy sugested to Joost to do this in his plugin (adding only 4 chars to file "class-frontend.php" at specific line), but he replied: "I won’t support qTranslate, sorry. It abuses the translation API in ways that breaks other stuff." Since it does not break stuff i made this extreemly simple plugin.

== Description ==

When using qTranslete with Yoast SEO plugim it outputs all languanges in title. This plugin fix this. Only current languange will be outputed. It runs filter that wraps $title into __() and fixes Yoast SEO plugin that outputs all languanges at once in Title. I acctualy sugested to Joost to do this in his plugin (adding only 4 chars to file "class-frontend.php" at specific line), but he replied: "I won’t support qTranslate, sorry. It abuses the translation API in ways that breaks other stuff." Since it does not break stuff i made this extreemly simple plugin.

== Installation ==

Upload, Activate

== Screenshots ==

No need...

== Changelog ==

= 1.0 =
* Initial release
= 1.1 = Readme Fix
