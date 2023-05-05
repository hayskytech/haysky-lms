<?php
/*
php_basics,numbers,strings,boolean,arrays,operators,conditions,loops,functions,scope,globals,form_handling,date_time,files,cookie,session,object,mysql_1,mysql_2,mysql_3,mysql_4
*/
add_action('admin_menu' , function(){
	$p = 'php_admin';
    add_submenu_page($p, 'Numbers','Numbers','manage_options', 'numbers_vam', 'numbers_vam');
    add_submenu_page($p, 'Strings','Strings','manage_options', 'strings_vam', 'strings_vam');
    add_submenu_page($p, 'Boolean','Boolean','manage_options', 'boolean_vam', 'boolean_vam');
    add_submenu_page($p, 'Arrays','Arrays','manage_options', 'arrays_vam', 'arrays_vam');
    add_submenu_page($p, 'Operators','Operators','manage_options', 'operators_vam', 'operators_vam');
    add_submenu_page($p, 'Conditions','Conditions','manage_options', 'conditions_vam', 'conditions_vam');
    add_submenu_page($p, 'Loops','Loops','manage_options', 'loops_vam', 'loops_vam');
    add_submenu_page($p, 'Functions','Functions','manage_options', 'functions_vam', 'functions_vam');
    add_submenu_page($p, 'Scope','Scope','manage_options', 'scope_vam', 'scope_vam');
    add_submenu_page($p, 'Globals','Globals','manage_options', 'globals_vam', 'globals_vam');
    add_submenu_page($p, 'Form Handling','Form Handling','manage_options', 'form_handling_vam', 'form_handling_vam');
    add_submenu_page($p, 'Date Time','Date Time','manage_options', 'date_time_vam', 'date_time_vam');
    add_submenu_page($p, 'Files','Files','manage_options', 'files_vam', 'files_vam');
    add_submenu_page($p, 'Cookie','Cookie','manage_options', 'cookie_vam', 'cookie_vam');
    add_submenu_page($p, 'Session','Session','manage_options', 'session_vam', 'session_vam');
    add_submenu_page($p, 'Object','Object','manage_options', 'object_vam', 'object_vam');
    
});

function php_basics_vam(){ include 'php_basics.php'; }
function numbers_vam(){ include 'numbers.php'; }
function strings_vam(){ include 'strings.php'; }
function boolean_vam(){ include 'boolean.php'; }
function arrays_vam(){ include 'arrays.php'; }
function operators_vam(){ include 'operators.php'; }
function conditions_vam(){ include 'conditions.php'; }
function loops_vam(){ include 'loops.php'; }
function functions_vam(){ include 'functions.php'; }
function scope_vam(){ include 'scope.php'; }
function globals_vam(){ include 'globals.php'; }
function form_handling_vam(){ include 'form_handling.php'; }
function date_time_vam(){ include 'date_time.php'; }
function files_vam(){ include 'files.php'; }
function cookie_vam(){ include 'cookie.php'; }
function session_vam(){ include 'session.php'; }
function object_vam(){ include 'object.php'; }