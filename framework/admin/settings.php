<?php
add_action('admin_menu', 'create_admin_menu_kris');
add_action('init', 'soulmedic_kris_css');

function create_admin_menu_kris() {
	add_menu_page ('Theme Support', 'Theme Support','manage_theme','soulmedic_kris_support','soulmedic_kris_support', '', 27); //after soulmedic-wm4d menu
}

function soulmedic_kris_css() {
	wp_register_style('soulmedic_kris_css.css', THEME_URL.'/framework/admin/admin.css', '', $GLOBALS['THEME_CSS_VERSION'], '');
	wp_enqueue_style('soulmedic_kris_css.css');
}
?>