<?php

// Check PHP version.
if (version_compare(PHP_VERSION, '7.2', '<')) {
    throw new Exception('PHP version >= 7.2 required');
}

// Check PHP Curl & json decode capabilities.
if (!function_exists('curl_init') || !function_exists('curl_exec')) {
  throw new Exception('Rest Call needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('Rest Call needs the JSON PHP extension.');
}

// Configurations
require_once('Config.php');

// Plumbing
require_once('ApiRequestor.php');