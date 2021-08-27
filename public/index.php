<?php

/**
 * Beech - A PHP Framework For Web beech
 *
 * @package  phpbeech
 * @author   bombkiml
 * 
 */

date_default_timezone_set('Asia/Bangkok');

/**
 * Index file for start engine
 *
 */
require 'config/config.php';
require 'beech-framework/_beech.conf.php';

/**
 * Auto-load main class
 * 
 */
function __autoload($class) {
  require INC . $class . EXT;
}

/**
 * Engine start
 * 
 */
new System();
