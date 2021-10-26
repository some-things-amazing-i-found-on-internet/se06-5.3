<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define path to application directory
define('APPLICATION_PATH', realpath(dirname(__FILE__)));
require './src/config/AutoloaderClass.php';

// PSR4 autoloader class.
$loader = new Core\AutoloaderClass();
$loader->register();

// Error and Exception handling.
// set_error_handler('Core\Error::errorHandler');
// set_exception_handler('Core\Error::exceptionHandler');

// Route dispatch
// $router = new Core\View();
// $router->render("home", compact([]));

$url = $_SERVER['REQUEST_URI'];
$extract = explode("/", $url);

$router = new Core\View();
if (isset($extract[2]) and $extract[2] !== "") {
    $router->render($extract[2], compact([]));
}else{
    $router->render("/home", compact([]));
}
