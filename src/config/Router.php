<?php

namespace Core\config;

use Core\config\Request;

/**
 * 
 * Class Route
 * 
 */
class Router
{

    /**
     * 
     * - Mảng lưu trữ route của ứng dụng
     * - Mỗi route sẽ gôm url, method, action và params
     * 
     */
    private $__routes;

    // Hàm khởi tạo
    public function __construct()
    {
        $this->__routes = [
            "" => "HomeController@index",
            "home" => "HomeController@index",
            "login" => "LoginController@index",
            "register" => "RegisterController@index",
            "restaurant" => "RestaurantController@index",
        ];
    }
    // public static function getParam(string $name, string $default = NULL): ?string
    // {
    //     if (isset(Request::$params[$name])) {
    //         return Request::$params[$name];
    //     } else {
    //         return $default;
    //     }
    // }
    /**
     * 
     * Hàm xử lý khi một URL được gọi
     * 
     * @param string $url URL được gọi đến server
     * @param string $method Phương thức url được gọi. GET | POST
     * 
     * @return void
     * 
     */
    public function map(string $url, string $method)
    {
        $params = Request::getParam();
        // array_shift($params);
        //    print var_dump($params);
        // Lặp qua các route trong ứng dụng, kiểm tra có chứa url được gọi không
        foreach ($this->__routes as $route => $route_value) {
            // echo $route . "</br>";
            // echo $route_value . "</br>";
            // kiểm tra route hiện tại có phải là url đang được gọi.
            $reg = '/^' . $route . '$/';
            $url = ltrim($url, "/");
            // print($reg . "</br>");
            // print(preg_match($reg, $url, $params) . "</br>");
            if (preg_match($reg, $url, $params2)) {
                // print("ok");
                // array_shift($params);
                // print(var_dump($params) );
                $this->__call_action_route($route_value, $params ? $params : Array("No thing here"));
                return;
            }
        }

        // nếu không khớp với bất kì route nào cả.
        echo '404 - Not Found';
        return;
    }
    private function __call_action_route($action, $params)
    {
        // Nếu $action là một callback (một hàm).
        if (is_callable($action)) {
            call_user_func_array($action, $params);
            return;
        }

        // Nếu $action là một phương thức của controller. VD: 'HomeController@index'.
        if (is_string($action)) {
            $action = explode('@', $action);
            $controller_name = 'Core\\controller\\' . $action[0];
            $controller = new $controller_name("");
            call_user_func_array([$controller, $action[1]], $params);

            return;
        }
    }
}
