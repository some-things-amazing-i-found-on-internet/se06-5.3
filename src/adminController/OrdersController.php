<?php

namespace Core\adminController;

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
class OrdersController extends Model
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

    public function index($params_request): void
    {
        $sql = "SELECT
                    post_orders.pre_orders_id,
                    users.fname,
                    users.lname,
                    post_orders.status,
                    post_orders.time_order,
                    post_orders.total,
                    dish_orderes.restaurant_name
                FROM
                    `post_orders`
                JOIN pre_orders ON pre_orders.order_id = post_orders.pre_orders_id
                JOIN users ON users.id = pre_orders.customer_id
                JOIN dish_orderes ON dish_orderes.id = pre_orders.food_id
                GROUP BY
                    post_orders.pre_orders_id";
        $query = $this->DB()->prepare($sql);
        $query->execute();
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);

        // $update_sql = "UPDATE dish_orderes SET restaurant_name = :name WHERE _id=:id";
        // $query = $this->DB()->prepare($update_sql);
        // foreach ($data as  $row) {
        //     // $query->execute([":name" => $row['name'], ":id" => $row['_id']]);
        //     echo "UPDATE dish_orderes SET restaurant_name=\"" . $row['name'] . "\" WHERE _id=\"" . $row['_id'] . "\";";
        // }

        // echo "Success";

        View::render_admin("orders", compact(["data"]), array());
    }
}
