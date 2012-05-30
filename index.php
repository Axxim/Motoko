<?php
/**
 * Motoko - The Better Content Engine
 *
 * @package   Motoko
 * @author    Luke Strickland <luke@axxim.net>
 * @copyright Axxim, LLC 2012
 * @link      http://motoko.axxim.net
 */

define('PUBLIC', true);
define('DEBUG', false);

/*
 *---------------------------------------------------------------
 * PHP VERSION CHECK
 *---------------------------------------------------------------
 *
 * Since Motoko is all about evolving PHP, we need to check for
 * to make sure it's at least 5.3
 */

if(version_compare(PHP_VERSION, '5.3.0') <= 0) {
	exit("Your version of PHP is incorrect, Motoko requires 5.3 (5.4 recommended!).");
}

/*
 * --------------------------------------------------------------------
 * LOAD MOTOKO
 * --------------------------------------------------------------------
 *
 * And away we go...
 *
 */

require_once 'system/core/Motoko.php';
$motoko = new Motoko\Motoko();

/* Location: ./index.php */