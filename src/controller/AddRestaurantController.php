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
class AddRestaurantController extends Model
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
        return $this->DB()
            ->query('SELECT id, first_name FROM customers')
            ->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function index($params): void
    {
        if (isset($_POST['restaurantName'])) {
            $insert_sql = "INSERT INTO new_restaurants (restaurant_name, restaurant_phone, manager, manager_phone, restaurant_email, city, district, restaurant_address)
                            VALUES (:restaurant_name, :restaurant_phone, :manager, :manager_phone, :restaurant_email, :city, :district, :restaurant_address)";
                $insert = $this->DB()->prepare($insert_sql);
                $insert->execute([":restaurant_name" => $_POST['restaurantName'], ":restaurant_phone" => $_POST['restaurantPhone'], ":manager" => $_POST['restaurantManager'], ":manager_phone" => $_POST['restaurantPhoneManager'], ":restaurant_email" => $_POST['restaurantEmail'], ":city" => $_POST['RestaurantCity'], ":district" => $_POST['RestaurantDistrict'], ":restaurant_address" => $_POST['RestaurantAddress']]);
        }
        View::render("add-restaurant", compact([]));
    }
}
