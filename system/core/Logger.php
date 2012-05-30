<?php namespace Motoko;
/**
 * Logger - A Safe Logging System
 *
 * @package   Motoko
 * @author    Luke Strickland <luke@axxim.net>
 * @copyright Axxim, LLC 2012
 * @link      http://motoko.axxim.net
 */

class Logger {
	
	private $logName = null;
	
	function __construct() {
		$this->logName = date("Y-m-d", time()).'.php';
		
		$this->open();
	}
	
	private function open() {
		$this->handle = fopen('app/logs/'.$this->logName, 'a');
	}
	
	public function log($message) {
		$time = date('m-d-Y H:i:s -');
		fwrite($this->handle, $time . " " . $message . "\n");
	}
	
	public function clear() {
		ftruncate($this->handle(), 0);
	}

}

/* Location: ./system/core/Logger.php */