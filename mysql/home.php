<?php
add_action('admin_menu' , function(){
	$p = 'mysql_admin';
    add_submenu_page($p, 'DB Insert','DB Insert','manage_options', 'db_insert_vam', 'db_insert_vam');
    add_submenu_page($p, 'DB Select','DB Select','manage_options', 'db_select_vam', 'db_select_vam');
    add_submenu_page($p, 'DB Delete','DB Delete','manage_options', 'db_delete_vam', 'db_delete_vam');
    add_submenu_page($p, 'DB Update','DB Update','manage_options', 'db_update_vam', 'db_update_vam');
});

function mysql_admin(){ include 'mysql_admin.php'; }
function db_insert_vam(){ include 'db_insert.php'; }
function db_select_vam(){ include 'db_select.php'; }
function db_delete_vam(){ include 'db_delete.php'; }
function db_update_vam(){ include 'db_update.php'; }