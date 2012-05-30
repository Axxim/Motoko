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
		include 'Loader.php';
		$loader = new Loader();
		
		$logger = new Logger();
		$db = new Database();
		
		$logger->log("Motoko Loaded");
	}
	
}

/* Location: ./system/core/Motoko.php */