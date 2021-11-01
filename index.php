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
    } else if ($extract[2] === "login") {
        $router = new Core\controller\Login("");
        $router->index();
    } else if ($extract[2] === "register") {
        $router = new Core\controller\RegisterController("");
        $router->index();
    } else if ($extract[2] === "login-process") {
        session_start();

        $_SESSION['cust_email'] = $_POST['cust_email'];
        $_SESSION['cust_password'] = $_POST['cust_password'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "users";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT fname, lname FROM users WHERE email='" . $_POST['cust_email'] . "' AND user_password='" . $_POST['cust_password'] . "'";
        $result = $conn->query($sql);
        $conn->close();
        if ($result->num_rows > 0) {
            $router = new Core\controller\Home("");
            $router->index();
        } else {
            session_destroy();
            header('Location: ./login');
        }
    } else {
        $router = new Core\config\View();
        $router->render("home", compact([]));
    }
} else {
    $router = new Core\controller\HomeController("");
    $router->index();
}
