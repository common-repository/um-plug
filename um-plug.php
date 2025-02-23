<?php
/*
Plugin Name: UM-Plug
Plugin URI: http://tacoen.github.io/um-plug/
Description: Themes core and tool-kits, a Wordpress developer Toolkit for creating/ maintaining/ optimizing a theme.
Author: tacoen
Author URI: http://github.com/tacoen
Version: 1.2.0
Text Domain: um
*/

defined('ABSPATH') or die('um?');
DEFINE ('UMPLUG_DIR', plugin_dir_path( __FILE__ ) );
DEFINE ('UMPLUG_URL', plugin_dir_url(__FILE__) );
$umo = array();
$um_hp = array();
function um_ver() { return '1.2.0'; }
function um_req_role() { return 'edit_theme_options'; }

require(UMPLUG_DIR . 'um/_common.php');
require(UMPLUG_DIR . 'um/um-compat.php');
require(UMPLUG_DIR . 'um/_etc.php');
require(UMPLUG_DIR . 'um/init.php');

require(UMPLUG_DIR . 'um/ajax-adminpage.php');
require(UMPLUG_DIR . 'um/um-setup.php');

require_once(UMPLUG_DIR . 'um/tweaks.php');
require_once(UMPLUG_DIR . 'um/themes.php');
require_once(UMPLUG_DIR . 'um/min.php');
require_once(UMPLUG_DIR . 'um/custom-layout.php');

//---- Enable this to copy props from parent/core back to plugins props.
require_once(UMPLUG_DIR."um/um-prop-sync.php");

// -- apply them all
require_once(UMPLUG_DIR . 'um/apply.php');
