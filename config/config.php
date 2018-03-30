<?php 

/**
 * base path config 
 *
 */
define(BASE_URL, 'http://localhost/phpbeech/'); // your project name

define(LINK, BASE_URL . 'index.php/'); // default index.php (exam. http://location/index.php/...)

define(IMG, BASE_URL . 'public/images/'); // your base path image 


/**
 * default controller config 
 *
 */
define(DEFAULT_CRL, 'welcome'); // default controller


/**
 * mysql database config
 *
 */
define(DB_HOST, 'localhost');
define(DB_USER, 'root');
define(DB_PASS, '');
define(DB_NAME, '');