<?php
// Global define variables
$THEME_CHILD = '-group';
define('THEME_CHILD_FILE', __FILE__ );
define('THEME_CHILD_DIR', get_template_directory().$THEME_CHILD);
define('THEME_CHILD_URL', get_template_directory_uri().$THEME_CHILD);

// Global variables
$THEME_VERSION = '1.0.5';
$THEME_CSS_VERSION = '1.0.1';

require_once(THEME_CHILD_DIR.'/framework/admin.php');
require_once(THEME_CHILD_DIR.'/framework/sidebars.php');

//error_reporting(E_ALL); ini_set('display_errors', 1);

?>