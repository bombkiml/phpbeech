<?php

/**
 * Beech - A PHP Framework For Web beech
 *
 * @package  phpbeech
 * @author   bombkiml
 */

$uri = urldecode(
  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

/**
 * This file allows us to emulate Apache's "mod_rewrite" functionality from the
 * built-in PHP web server. This provides a convenient way to test a Beech
 * application without having installed a "real" web server software here.
 *
 */
if ($uri !== '/' && file_exists(__DIR__ . '/public' . $uri)) {
  return false;
}

require_once __DIR__ . '/public/index.php';
