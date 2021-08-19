<?php

date_default_timezone_set('Asia/Bangkok');

/**
 * index file for start engine
 *
 */
require 'config/config.php';
require 'beech-framework/_beech.conf.php';
function __autoload($class)
{
    require INC . $class . EXT;
}
// engine start System(Boolean true for development)
new System(true);
