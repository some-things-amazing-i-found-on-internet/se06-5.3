<?php

namespace Core\controller;

use Core\config\Database;
use Core\config\Model;
use Core\config\Request;
use Core\config\View;

/**
 * The home controller class.
 *
 * The controller is used to display the dashboard.
 *
 * @category   Controllers
 * @package    App\Controllers
 * @author     Andrej <*.*.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/PackageName
 * @since      Class available since Release 1.0.0
 */
class RestaurantController extends Model
{

    /**
     * The index controller action
     *
     * It displays the statistics:
     *  - The total number of orders, customers and revenue.
     *  - Monthly chart
     *  - Latest 10 orders.
     *
     * @return void
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    public function getAll(): iterable
    {
        // $this->insert(compact(['']));
        return $this->DB()
            ->query('SELECT id, first_name FROM customers')
            ->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function index($params): void
    {
        $list = explode("=", $params[0]);
        $id = $list[1];

        $query_dish_types = "SELECT * FROM dish_types WHERE id_restaurant=? GROUP BY dish_type_id";
        $query = $this->DB()->prepare($query_dish_types);
        $query->execute(array($id));
        $dish_types = $query->fetchAll(\PDO::FETCH_ASSOC);

        $query_dish_orders = "SELECT * FROM `dish_types`
                                JOIN dish_orderes
                                ON dish_types._id = dish_orderes._id
                                WHERE id_restaurant=?
                                GROUP BY dish_orderes.id";
        $query2 = $this->DB()->prepare($query_dish_orders);
        $query2->execute(array($id));
        $dish_orders = $query2->fetchAll(\PDO::FETCH_ASSOC);

        $query_restaurants = "SELECT * FROM restaurants
                                JOIN restaurant_photos
                                ON restaurants._id = restaurant_photos._id
                                WHERE restaurant_photos.width = 1242 AND restaurants.id = ?
                                GROUP BY restaurants.id";
        $query3 = $this->DB()->prepare($query_restaurants);
        $query3->execute(array($id));
        $restaurants = $query3->fetchAll(\PDO::FETCH_ASSOC);

        // l???y d??? li???u t??? database
        // echo var_dump($_COOKIE['id']);
        $insert_data_function = function ($food_id) {
            // insert v??o database
            
        };
        // Array of strings
        session_start();
        $_SESSION['order_status'] = 1;
        $_SESSION['post_order_status'] = 1;
        // $insertFood = $this->insertFood();
        // print(gettype($params));
        View::render("restaurant", compact(["dish_types", "dish_orders", "restaurants", "insert_data_function"]));
    }
}
