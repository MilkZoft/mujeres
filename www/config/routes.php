<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

$routes = array(
	0 => array(
		"pattern"	  => "/^cocina/",
		"application" => "blog",
		"controller"  => "blog",
		"method"	  => "tag",
		"params"	  => array("cocina")
	),
	1 => array(
		"pattern"	  => "/^belleza/",
		"application" => "blog",
		"controller"  => "blog",
		"method"	  => "tag",
		"params"	  => array("belleza")
	),
	2 => array(
		"pattern"	  => "/^casa/",
		"application" => "blog",
		"controller"  => "blog",
		"method"	  => "tag",
		"params"	  => array("casa")
	),
	3 => array(
		"pattern"	  => "/^familia/",
		"application" => "blog",
		"controller"  => "blog",
		"method"	  => "tag",
		"params"	  => array("familia")
	),
	4 => array(
		"pattern"	  => "/^salud/",
		"application" => "blog",
		"controller"  => "blog",
		"method"	  => "tag",
		"params"	  => array("salud")
	),
	5 => array(
		"pattern"	  => "/^sexualidad/",
		"application" => "blog",
		"controller"  => "blog",
		"method"	  => "tag",
		"params"	  => array("sexualidad")
	),
);