# Slim Maintenance Mode
* Requires at least: WordPress 3.5
* Tested up to: WordPress 4.1
* License: GPL-2.0+
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt

Slim Maintenance Mode is a lightweight WordPress plugin for scheduled maintenance. Simply activate the plugin and only administrators can see the website. 

## Features
* No extra settings, just activate it, do maintenance work, deactivate it.
* Alert message in the backend, when the plugin is active.
* Works with any theme.
* Support for the following cache plugins: Cachify, Super Cache and W3 Total Cache.
* Sends HTTP response status code `503 Service Unavailable`, especially relevant for search engines.
* Available in five languages: English, German, French, Spanish, Polish.

##Installation
1. Download the plugin and unzip the zip-file.
2. Upload the folder `slim-maintenance-mode` to the `/wp-content/plugins/` directory.

Activate the plugin through the `Plugins` menu in WordPress every time you need the maintenance mode and deactivate it as soon as work is done.

## Frequently Asked Questions
### Where are the settings of the plugin?

There is no settings page. This plugin is designed to be small and simple.

### Can I change the content of the maintenance page?

This is only possible by directly changing the plugin file respectively the localization file.

### I found a bug. How can I get in touch?

Please comment an existing or create a new issue on the [plugins github page](https://github.com/wpdocde/slim-maintenance-mode/issues).

### I made a new translation. How can I submit it?

Please create a pull request on the [plugins github page](https://github.com/wpdocde/slim-maintenance-mode/pulls).

## Credits
Slim Maintenance Mode is developed by [Johannes Ries](http://wpdoc.de).
