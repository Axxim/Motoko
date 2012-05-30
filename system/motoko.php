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
		include 'loader.php';
		$loader = new Loader();
		
		$db = new Database();
	}
	
}

/* Location: ./system/motoko.php */