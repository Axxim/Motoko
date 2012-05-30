<?php namespace Motoko;
/**
 * Motoko - The Better Content Engine
 *
 * @package   Motoko
 * @author    Luke Strickland <luke@axxim.net>
 * @copyright Axxim, LLC 2012
 * @link      http://motoko.axxim.net
 */


class Motoko {
	
	public function __construct() {
		echo "Hello world!";
	}

	public function __autoload($class_name) {
		include $class_name . '.php';
	}
	
}

/* Location: ./system/motoko.php */