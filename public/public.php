<?php 

date_default_timezone_set('Asia/Bangkok');

/**
 * index file for start engine
 *
 */
require 'config/config.php';
require 'beech/_beech.conf.php';
function __autoload($class){
    require INC.$class.EXT;
}

// engine start
new System();