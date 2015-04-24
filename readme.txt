=== Slim Maintenance Mode ===
Contributors: wpdoc.de
Tags: maintenance, unavailable, admin, maintenance mode, cache
Donate link: http://wpdoc.de/donate/
Requires at least: 3.5
Tested up to: 4.2
Stable tag: trunk
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

Simple and lightweight solution for scheduled maintenance. No settings page, just activate it and do your maintenance work stress-free.

== Description ==
Slim Maintenance Mode is a lightweight solution for scheduled maintenance. Simply activate the plugin and only administrators can see the website. 

= Features =
* No extra settings, just activate it, do maintenance work, deactivate it.
* Alert message in the backend, when the plugin is active.
* Works with any theme.
* Support for the following cache plugins: Cachify, Super Cache and W3 Total Cache.
* Sends HTTP response status code `503 Service Unavailable`, especially relevant for search engines. 
* Available in six languages: English, German, French, Spanish, Brazilian Portuguese, Polish.

= Bug reports and Contribution =
Hints, bug reports, translations and other contributions are highly appreciated. Please visit the [plugins github page](https://github.com/wpdocde/slim-maintenance-mode).

= Credits =
Slim Maintenance Mode is developed by [Johannes Ries](http://wpdoc.de).

== Installation ==
1. Download the plugin and unzip the zip-file.
2. Upload the folder `slim-maintenance-mode` to the `/wp-content/plugins/` directory.

Activate the plugin through the `Plugins` menu in WordPress every time you need the maintenance mode and deactivate it as soon as work is done.

== Frequently Asked Questions ==
= Where are the settings of the plugin? =

There is no settings page. This plugin is designed to be small and simple.

= Can I change the content of the maintenance page? =

This is only possible by directly changing the plugin file respectively the localization file.

= I found a bug. How can I get in touch? =

Please comment an existing or create a new issue on the [plugins github page](https://github.com/wpdocde/slim-maintenance-mode/issues).

= I made a new translation. How can I submit it? =

Please create a pull request on the [plugins github page](https://github.com/wpdocde/slim-maintenance-mode/pulls).

== Screenshots ==
1. Maintenance message for website visitors in English
2. Maintenance message for website visitors in German

== Changelog ==
= 1.3 =
* Fixed a bug which caused problems, when loading translated strings
* Brazilian Portuguese translation
* Fixed the FAQ

= 1.2 =
* French translation
* Spanish translation

= 1.1 =
* Several corrections and enhancements of the information texts
* Added two screenshots
* Polish translation

= 1.0 =
* Initial version
* Support for the following cache plugins: Cachify, Super Cache, W3 Total Cache
* German translation

== Upgrade Notice ==
= 1.3 =
Slim Maintenance Mode is now avialable in Brazilian Portuguese and comes with a bug fix for better loading translated strings.

= 1.2 =
Slim Maintenance Mode is now available in French and Spanish.
