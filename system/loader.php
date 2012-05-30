<?php namespace Motoko;
/**
 * Loader - Motoko's Loader
 *
 * @package   Motoko
 * @author    Luke Strickland <luke@axxim.net>
 * @copyright Axxim, LLC 2012
 * @link      http://motoko.axxim.net
 */

class Loader {

	public function __construct() {
		spl_autoload_register(array($this, 'load'));
	}
	
	private function load($class) {
		$class = explode('\\', $class);
		include $class[1] . '.php';
	}
}

/* Location: ./system/loader.php */