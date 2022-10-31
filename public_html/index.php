<?php

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// Ensure the current directory is pointing to the front controller's directory
chdir(__DIR__);

/*
 *---------------------------------------------------------------
 * JY MOET HIERDIE VERANDER
 *---------------------------------------------------------------*/
// Load our paths config file
// This is the line that might need to be changed, depending on your folder structure.
// kry FTP username
$parts=explode("/",FCPATH);
if (count($parts)>1) {
    $pathsConfig="/usr/home/".$parts[4]."/app/Config/Paths.php";
    // xneelo
} else {
    $pathsConfig = FCPATH . '../app/Config/Paths.php';
    // local
}
// ^^^ Change this if you move your application folder

require realpath($pathsConfig) ?: $pathsConfig;

$paths = new Config\Paths();

// Location of the framework bootstrap file.
$bootstrap = rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';
$app       = require realpath($bootstrap) ?: $bootstrap;

ini_set("zlib.output_compression", 0);
/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do its thang.
 */
$app->run();
