<?php
add_action('admin_menu' , function(){
    add_menu_page('Jquery','Jquery','student', 'jquery_admin', 'jquery_znh', 'dashicons-admin-users','2');
    add_submenu_page('jquery_admin', 'Basics','Basics','student', 'query_basics', 'query_basics');
    add_submenu_page('jquery_admin', 'Examples','Examples','student', 'query_examples', 'query_examples');
    add_submenu_page('jquery_admin', 'To Do List','To Do List','student', 'to_do_list_eyn', 'to_do_list_eyn');
    add_submenu_page('jquery_admin', 'Animations','Animations','student', 'animations_eyn', 'animations_eyn');
});

function jquery_znh(){ include 'jquery.php'; }
function query_basics(){ include 'basics.php'; }
function query_examples(){ include 'examples.php'; }
function to_do_list_eyn(){ include 'todolist.php'; }
function animations_eyn(){ include 'animations.php'; }