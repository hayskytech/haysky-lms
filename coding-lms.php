<?php
/**
 * Plugin Name: Coding LMS
 * Plugin URI: https://haysky.com/
 * Description: This plugin has study material to learn coding HTML CSS JavaScript React PHP Python Django etc.
 * Version: 1.0.0
 * Author: Haysky
 * Author URI: https://haysky.com/
 * License: GPLv2 or later
 */
// $wpdb->show_errors(); $wpdb->print_error();
error_reporting(E_ERROR | E_PARSE);

add_action('admin_menu', function () {
	add_menu_page('HTML CSS', 'HTML CSS', 'manage_options', 'htmlcss_admin', 'htmlcss_fhc', 'dashicons-media-code', '2.1');
	add_menu_page('JavaScript', 'JavaScript', 'student', 'javascript_admin', function () {
		include 'javascript/JavaScript.php';
	}, 'dashicons-media-code', '2.2');
	add_menu_page('JQuery', 'JQuery', 'student', 'jquery_admin', 'jquery_znh', 'dashicons-media-code', '2.3');
	add_menu_page('PHP', 'PHP', 'manage_options', 'php_admin', 'php_basics_vam', 'dashicons-pinterest', '2.4');
	add_menu_page('MySQL', 'MySQL', 'manage_options', 'mysql_admin', 'mysql_admin', 'dashicons-database', '2.5');
	add_menu_page('Python', 'Python', 'student', 'python_admin', function () {
		include 'python/01 python.html';
	}, 'dashicons-admin-users', '2.6');
});

add_action('pre_get_posts', 'wptw_query_disable_post_media');
function wptw_query_disable_post_media($wp_query) {
	global $current_user;
	if (is_admin() && !current_user_can('edit_others_tasks')) {
		$wp_query->set('author', $current_user->ID);
		// add_filter('views_edit-post', 'wptw_show_post_counts');
		// add_filter('views_upload', 'wptw_show_media_counts');
	}
}

// function show_code($file) {
// 	$org = file_get_contents($file . $i);
// 	$lines = explode("\n", $org);
// 	$org = implode("\n", array_slice($lines, 1));
// 	$org = str_replace('<', '˂', $org);
// 	$org = str_replace('>', '˃', $org);
// 	$org = str_replace('/', 'Ⳇ', $org);
// 	echo '<pre>' . htmlspecialchars($org) . '</pre>';
// }

function sc1() {
	echo '<div class="code"><pre>';
	ob_start();
}
function sc2() {
	$data = esc_html(ob_get_clean());
	$data2 = 'data:text/html;charset=UTF-8,<h1>hai</h1>';
	if (!current_user_can('administator')) {
		$new = str_replace('&lt;', '˂', $data);
		$new = str_replace('&gt;', '˃', $new);
		$new = str_replace('/', 'Ⳇ', $new);
		echo $new;
	} else {
		echo $data;
	}
	echo '</pre>
	<i onclick="openThis(this)" class="wp-menu-image dashicons-before dashicons-external open-html"></i>';
	echo '</div>';
}

include 'htmlcss/home.php';
// include 'javascript/home.php';
include 'jquery/home.php';
include 'php/home.php';
include 'mysql/home.php';

add_action('admin_menu', function () {
	$pages = array('Operators', 'Data types', 'Conditions', 'Loops', 'Functoins', 'Json', 'DOM', 'DOM Examples', 'EventListener', 'Examples', 'Todo List', 'QR Code', 'CSV Import', 'CSV UPI QRCode', 'Tabs', 'Calculator');

	$c = count($pages);
	for ($i = 0; $i < $c; $i++) {
		$slug = strtolower($pages[$i]);
		add_submenu_page('javascript_admin', $pages[$i], $pages[$i], 'student', $slug, function () {
			include 'javascript/' . $_GET["page"] . ".php";
		});
	}
});

add_action('admin_menu', function () {
	$pages = array('02 Data Types', '03 Strings', '04 Boolean', '05 Operators', '06 List', '07 Tuple', '08 Set', '09 Dictionaries', '10 If Else', '11 Loops', '12 Functions', 'SQLite', 'MySQL');
	$c = count($pages);
	for ($i = 0; $i < $c; $i++) {
		$slug = strtolower($pages[$i]);
		add_submenu_page('python_admin', $pages[$i], $pages[$i], 'student', $slug, function () {
			include 'python/' . $_GET["page"] . ".html";
		});
	}
});

add_action('admin_footer', function () {
	?>
	<script type="text/javascript">
		function openThis(icon) {
			x = window.open("");
			data = icon.parentElement.childNodes[0].innerHTML
			cdn = '&lt;script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"&gt;&lt;/script&gt;';
			z = htmlDecode(cdn + data);
			function htmlDecode(input) {
				var e = document.createElement('div');
				e.innerHTML = input;
				return e.childNodes[0].nodeValue;
			}
			x.document.write(z);
			x.document.title = "Haysky Output Window";
		}
	</script>
	<style type="text/css">
		pre {
			line-height: 22px;
			background: white;
			display: block;
			padding: 10px;
			margin: 10px 0;
			border-radius: 15px;
			tab-size: 4;
		}

		.code {
			position: relative;
		}

		#wpbody-content,
		p {
			font-size: 15px;
		}

		#wpfooter {
			display: none;
		}

		#wpbody {
			/*			padding: 20px 20px 20px 40px !important;*/
		}

		#adminmenuwrap {
			margin: 0 !important;
		}

		.tablenav .actions select {
			padding: 2px 30px 2px 15px !important;
		}

		.open-html {
			position: absolute;
			padding: 6px;
			border: 1px solid;
			border-radius: 5px;
			top: 10px;
			right: 10px;
		}

		.open-html:hover {
			background: skyblue;
			outline: 2px solid;
		}
	</style>
	<?php
});
/*
$files = array(
'php_basics.php','numbers.php','strings.php','boolean.php','arrays.php','operators.php','conditions.php','loops.php','functions.php','scope.php','globals.php','form_handling.php','date_time.php','files.php','cookie.php','session.php','object.php','mysql_1.php','mysql_2.php','mysql_3.php','mysql_4.php'
);
foreach ($files as $file) {
fopen('../wp-content/plugins/haysky-lms/php/'.$file, 'x');
}
*/