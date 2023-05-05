<?php
add_action('admin_menu', function () {
	$p = 'htmlcss_admin';
	add_submenu_page($p, 'Basic Tags', 'Basic Tags', 'student', 'basic_tags_fhc', 'basic_tags_fhc');
	add_submenu_page($p, 'CSS Basics', 'CSS Basics', 'student', 'css_basics_fhc', 'css_basics_fhc');
	add_submenu_page($p, 'Box Model', 'Box Model', 'student', 'box_model_fhc', 'box_model_fhc');
	add_submenu_page($p, 'HTML Table', 'HTML Table', 'student', 'table_fhc', 'table_fhc');
	add_submenu_page($p, 'HTML List', 'HTML List', 'student', 'list_fhc', 'list_fhc');
	add_submenu_page($p, 'Other Tags', 'Other Tags', 'student', 'other_tags_fhc', 'other_tags_fhc');
	add_submenu_page($p, 'Structure', 'Structure', 'student', 'structure_fhc', 'structure_fhc');
	add_submenu_page($p, 'Form Fields', 'Form Fields', 'student', 'form_fields_fhc', 'form_fields_fhc');
	add_submenu_page($p, 'Form Attributes', 'Form Attributes', 'student', 'form_attributes_fhc', 'form_attributes_fhc');
	add_submenu_page($p, 'CSS Display', 'CSS Display', 'student', 'display_fhc', 'display_fhc');
	add_submenu_page($p, 'CSS Position', 'CSS Position', 'student', 'position_fhc', 'position_fhc');
	add_submenu_page($p, 'Combinators', 'Combinators', 'student', 'combinators_fhc', 'combinators_fhc');
	add_submenu_page($p, 'Grid Layout', 'Grid Layout', 'student', 'grid_layout_fhc', 'grid_layout_fhc');
	add_submenu_page($p, 'Fixed Sidebar', 'Fixed Sidebar', 'student', 'fixed_sidebar_fhc', 'fixed_sidebar_fhc');
});

function htmlcss_fhc() {
	include 'html_css.php';
}
function basic_tags_fhc() {
	include 'basic_tags.php';
}
function table_fhc() {
	include 'html_table.php';
}
function list_fhc() {
	include 'list.php';
}
function other_tags_fhc() {
	include 'other_tags.php';
}
function structure_fhc() {
	include 'structure.php';
}
function form_fields_fhc() {
	include 'form_fields.php';
}
function form_attributes_fhc() {
	include 'form_attributes.php';
}
function css_basics_fhc() {
	include 'css_basics.php';
}
function box_model_fhc() {
	include 'box_model.php';
}
function display_fhc() {
	include 'display.php';
}
function position_fhc() {
	include 'position.php';
}
function combinators_fhc() {
	include 'combinators.php';
}
function grid_layout_fhc() {
	include 'grid_layout.php';
}
function fixed_sidebar_fhc() {
	include 'fixed_sidebar.php';
}