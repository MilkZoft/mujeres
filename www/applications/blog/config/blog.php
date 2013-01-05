<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

if(!defined("_maxLimit")) {
	define("_maxLimit", 10);
}

define("_lock", "www/lib/images/icons/blog/lock.png");

define("_muralWidth", 940);
define("_muralHeight", 320);