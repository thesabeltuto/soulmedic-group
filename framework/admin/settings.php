<?php
add_action('admin_menu', 'create_admin_menu_group');
add_action('init', 'soulmedic_group_css');

function create_admin_menu_group() {
	add_menu_page ('Theme Support', 'Theme Support','manage_theme','soulmedic_group_support','soulmedic_group_support', '', 27); //after soulmedic-wm4d menu
}

function soulmedic_group_css() {
	wp_register_style('soulmedic_group_css.css', THEME_CHILD_URL.'/framework/admin/admin.css', '', $GLOBALS['THEME_CSS_VERSION'], '');
	wp_enqueue_style('soulmedic_group_css.css');
}
?>