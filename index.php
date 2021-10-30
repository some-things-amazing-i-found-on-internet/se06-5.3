<?php

use Core\Model;

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

// $router = new Core\View();
// $router = new App\controller\About("customers");
if (isset($extract[2]) and $extract[2] !== "") {
    // $A = "1";
    // echo $_SERVER["REQUEST_URI"];
    // echo $extract[2];
    if ($extract[2] === "home") {
        $router = new Core\controller\HomeController("");
        $router->index();
    } else if ($extract[2] === "about") {
        $router = new Core\controller\About("");
        $router->index();
    }else if($extract[2] === "login") {
        $router = new Core\controller\Login("");
        $router->index();
    }else if($extract[2] === "register") {
        $router = new Core\controller\RegisterController("");
        $router->index();
    } else {
        $router = new Core\config\View();
        $router->render("home", compact([]));
    }
} else {
    $router = new Core\controller\HomeController("");
    $router->index();
}
