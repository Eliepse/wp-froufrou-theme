<?php

function dd(...$val)
{
	foreach ($val as $value) {
		echo "<pre style='margin: .5rem; padding: .5rem; border-radius: .5rem; background: #230327; color: #ffe290; font-family: monospace'>";
		var_dump($value);
		echo "</pre>";
	}

	exit;
}

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('preflight', get_stylesheet_directory_uri() . "/css/preflight.css");
});

add_action('init', function () {
	register_nav_menus(['main' => "Menu principal"]);
});

add_action('after_setup_theme', function() {
	add_theme_support('custom-logo');
});