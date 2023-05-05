<?php
add_action('admin_menu' , function(){
    add_submenu_page('jquery_admin', 'Selectors','Selectors','student', 'query_selectors', 'query_selectors');
    add_submenu_page('jquery_admin', 'Get Set','Get Set','student', 'query_get_set', 'query_get_set');
    add_submenu_page('jquery_admin', 'Add Remove','Add Remove','student', 'add_remove_eyn', 'add_remove_eyn');
    add_submenu_page('jquery_admin', 'Effects','Effects','student', 'effects_eyn', 'effects_eyn');
    add_submenu_page('jquery_admin', 'Animations','Animations','student', 'animations_eyn', 'animations_eyn');
    add_submenu_page('jquery_admin', 'Traversing','Traversing','student', 'traversing_eyn', 'traversing_eyn');
    add_submenu_page('jquery_admin', 'Examples','Examples','student', 'query_examples', 'query_examples');
    add_submenu_page('jquery_admin', 'To Do List','To Do List','student', 'to_do_list_eyn', 'to_do_list_eyn');
    add_submenu_page('jquery_admin', 'Image Counter','Image Counter','student', 'image_counter_eyn', 'image_counter_eyn');
    add_submenu_page('jquery_admin', 'Ajax Load','Ajax Load','student', 'ajax_load_eyn', 'ajax_load_eyn');
});

function jquery_znh(){ include 'jquery.php'; }
function query_selectors(){ include 'selectors.php'; }
function query_get_set(){ include 'get_set.php'; }
function query_examples(){ include 'examples.php'; }
function to_do_list_eyn(){ include 'todolist.php'; }
function effects_eyn(){ include 'effects.php'; }
function animations_eyn(){ include 'animations.php'; }
function traversing_eyn(){ include 'traversing.php'; }
function add_remove_eyn(){ include 'add_remove.php'; }
function image_counter_eyn(){ include 'image_counter.php'; }
function ajax_load_eyn(){ include 'ajax.php'; }
