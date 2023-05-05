<?php
add_action('admin_menu', function () {
	add_submenu_page('javascript_admin', 'Operators', 'Operators', 'student', 'operators_ndr', 'operators_ndr');
	add_submenu_page('javascript_admin', 'Datatypes', 'Datatypes', 'student', 'datatypes_ndr', 'datatypes_ndr');
	add_submenu_page('javascript_admin', 'Conditions', 'Conditions', 'student', 'conditions_ndr', 'conditions_ndr');
	add_submenu_page('javascript_admin', 'Loops', 'Loops', 'student', 'loops_ndr', 'loops_ndr');
	add_submenu_page('javascript_admin', 'Functoins', 'Functoins', 'student', 'functions_ndr', 'functions_ndr');
	add_submenu_page('javascript_admin', 'Json', 'Json', 'student', 'json_ndr', 'json_ndr');
	add_submenu_page('javascript_admin', 'DOM', 'DOM', 'student', 'dom_ndr', 'dom_ndr');
	add_submenu_page('javascript_admin', 'DOM Examples', 'DOM Examples', 'student', 'dom_examples_ndr', 'dom_examples_ndr');
	add_submenu_page('javascript_admin', 'EventListener', 'EventListener', 'student', 'eventlistener_ndr', 'eventlistener_ndr');
	add_submenu_page('javascript_admin', 'Examples', 'Examples', 'student', 'js_examples_ndr', 'js_examples_ndr');
	add_submenu_page('javascript_admin', 'Todo List', 'Todo List', 'student', 'js_todo_list_ndr', 'js_todo_list_ndr');
	add_submenu_page('javascript_admin', 'QR Code', 'QR Code', 'student', 'js_qr_code_ndr', 'js_qr_code_ndr');
	add_submenu_page('javascript_admin', 'CSV Import', 'CSV Import', 'student', 'js_csv_import_ndr', 'js_csv_import_ndr');
	add_submenu_page('javascript_admin', 'Tabs', 'Tabs', 'student', 'js_tabs_ndr', 'js_tabs_ndr');
	add_submenu_page('javascript_admin', 'Calculator', 'Calculator', 'student', 'js_calculator_ndr', 'js_calculator_ndr');
});

function javascript_ndr() {
	include 'javascript.php';
}
function operators_ndr() {
	include 'operators.php';
}
function conditions_ndr() {
	include 'conditions.php';
}
function loops_ndr() {
	include 'loops.php';
}
function datatypes_ndr() {
	include 'datatypes.php';
}
function functions_ndr() {
	include 'functions.php';
}
function json_ndr() {
	include 'json.php';
}
function dom_ndr() {
	include 'dom.php';
}
function dom_examples_ndr() {
	include 'dom_examples.php';
}
function eventlistener_ndr() {
	include 'eventlistener.php';
}
function js_examples_ndr() {
	include 'js_examples.php';
}
function js_todo_list_ndr() {
	include 'todo_list.php';
}
function js_qr_code_ndr() {
	include 'qrcode.php';
}
function js_csv_import_ndr() {
	include 'csv_import.php';
}
function js_tabs_ndr() {
	include 'tabs.php';
}
function js_calculator_ndr() {
	include 'calculator.php';
}