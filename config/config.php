<?php 

/**
 * Project name config
 * 
 */
define("PJ_NAME", "phpbeech");

/**
 * Host name config ** default "http://localhost"
 * 
 */
define("HOST_NAME", "http://localhost:8071");

/**
 * BASE URL 
 * 
 */
define("BASE_URL", HOST_NAME ."/". PJ_NAME ."/");

/**
 * Image path config
 * 
 */
define("IMG", BASE_URL . "public/images/");

/**
 * Default controller config 
 *
 */
define("DEFAULT_CRL", "welcome");

/**
 * mysql database config
 * 
 */
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "");
define("DB_PORT", "3306");