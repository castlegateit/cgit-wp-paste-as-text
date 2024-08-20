<?php

/**
 * Plugin Name:  Castlegate IT WP Paste as Text
 * Plugin URI:   https://github.com/castlegateit/cgit-wp-paste-as-text
 * Description:  Force paste-as-text in TinyMCE.
 * Version:      1.0.0
 * Requires PHP: 8.2
 * Author:       Castlegate IT
 * Author URI:   https://www.castlegateit.co.uk/
 * License:      MIT
 * Update URI:   https://github.com/castlegateit/cgit-wp-paste-as-text
 */

use Castlegate\PasteAsText\Plugin;

if (!defined('ABSPATH')) {
    wp_die('Access denied');
}

define('CGIT_WP_PASTE_AS_TEXT_VERSION', '1.0.0');
define('CGIT_WP_PASTE_AS_TEXT_PLUGIN_FILE', __FILE__);
define('CGIT_WP_PASTE_AS_TEXT_PLUGIN_DIR', __DIR__);

require_once __DIR__ . '/vendor/autoload.php';

Plugin::init();
