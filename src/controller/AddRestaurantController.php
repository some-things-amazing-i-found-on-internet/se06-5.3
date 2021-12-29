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
            $_id = rand(1, 1000000000);;
            $id = rand(1000000, 1000000000);

            $insert_sql = "INSERT INTO restaurants (_id, id, `name`, `address`)
                            VALUES (:_id, :id, :_name, :_address)";
            $insert = $this->DB()->prepare($insert_sql);
            $insert->execute([":_id" => $_id, ":id" => $id, ":_name" => $_POST['restaurantName'], ":_address" => $_POST['RestaurantAddress'] . ", " . $_POST['RestaurantDistrict'] . ", " . $_POST['RestaurantCity']]);

            $insert_sql = "INSERT INTO operating (_id)
                            VALUES (:_id)";
            $insert = $this->DB()->prepare($insert_sql);
            $insert->execute([":_id" => $_id]);

            $insert_sql = "INSERT INTO restaurant_photos (_id)
                            VALUES (:_id)";
            $insert = $this->DB()->prepare($insert_sql);
            $insert->execute([":_id" => $_id]);

            $insert_sql = "INSERT INTO dish_types (_id, id_restaurant)
                            VALUES (:_id, :id_restaurant)";
            $insert = $this->DB()->prepare($insert_sql);
            $insert->execute([":_id" => $id, ":id_restaurant" => $id]);
        }
        View::render("add-restaurant", compact([]));
    }
}
