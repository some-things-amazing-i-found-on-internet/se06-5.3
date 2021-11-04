<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define path to application directory
define('APPLICATION_PATH', realpath(dirname(__FILE__)));
require './src/config/AutoloaderClass.php';

// PSR4 autoloader class.
$loader = new Core\AutoloaderClass();
$loader->register();
use Core\config\Router;
use Core\config\Request;

$router = new Router(new Request);
// include_once APPLICATION_PATH . '/routes.php';
// Lấy url hiện tại của trang web. Mặc định la /
$request_url = !empty($_GET['url']) ? '/' . $_GET['url'] : '/';

// Lấy phương thức hiện tại của url đang được gọi. (GET | POST). Mặc định là GET.
$method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

// map URL
$router->map($request_url, $method_url);
