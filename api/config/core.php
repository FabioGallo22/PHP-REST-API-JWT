<?php
// show error reporting
error_reporting(E_ALL);
 
// set your default time-zone
date_default_timezone_set('America/Argentina/Buenos_Aires'); // Check here certain timezome: https://www.php.net/manual/es/timezones.php
 
// variables used for jwt
$key = "example_key";
$iss = "http://example.org";
$aud = "http://example.com";
$iat = 1356999524;
$nbf = 1357000000;
?>