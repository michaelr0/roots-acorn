<?php

/**
 * Plugin Name:   Acorn
 * Plugin URI:    https://roots.io/acorn
 * Description:   Lazy-loaded framework for WordPress themes and plugins
 * Version:       2.0.0
 * Author:        Roots
 * Author URI:    https://roots.io
 * License:       MIT
 * License URI:   http://opensource.org/licenses/MIT
 * GitHub Plugin URI: https://github.com/handmadeweb/roots-acorn
 * Primary Branch: main
 */

require_once __DIR__ . '/vendor/autoload.php';

Roots\add_actions(['plugins_loaded', 'rest_api_init'], \Roots\bootloader(), 5);
