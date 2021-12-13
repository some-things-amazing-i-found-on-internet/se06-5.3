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
class OrderDetailController extends Model
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
        session_start();
        $order_sql = "SELECT * FROM `pre_orders`
                    JOIN dish_orderes
                    ON dish_orderes.id = pre_orders.food_id
                    WHERE pre_orders.order_status = 0 and pre_orders.customer_id = ?  and pre_orders.order_id >= ALL (SELECT order_id FROM pre_orders WHERE customer_id = ?)";
        $query = $this->DB()->prepare($order_sql);
        $query->execute(array($_SESSION['customer']['id'], $_SESSION['customer']['id']));
        $orders = $query->fetchAll(\PDO::FETCH_ASSOC);

        //Tổng tiền đồ ăn:
        $total = 0;
        foreach ($orders as $order) {
            $total += (int)$order['quantity_order'] * (int)$order['price_value'];
        }

        $user_sql = "SELECT * FROM `users` WHERE id = ?";
        $query2 = $this->DB()->prepare($user_sql);
        $query2->execute(array($_SESSION['customer']['id']));
        $user = $query2->fetchAll(\PDO::FETCH_ASSOC);

        if (isset($_SESSION['post_order_status']) && $_SESSION['post_order_status'] == 1) {
            $param = explode("=", $params[0])[1];
            $insert_sql = "INSERT INTO post_orders (pre_orders_id, time_order, description_order, total) VALUES (:val_0, :val_1, :val_2, :val_3)";
            $insert = $this->DB()->prepare($insert_sql);
            $insert->execute([":val_0" => $orders[0]['order_id'], ":val_1" => date("Y-m-d H:i:s"), ":val_2" => urldecode(utf8_decode($param)), ":val_3" => $total + $orders[0]['delivery_fee']]);

            $_SESSION['post_order_status'] = 0;
        }

        $post_order_sql = "SELECT * FROM `post_orders` WHERE pre_orders_id = ?";
        $query3 = $this->DB()->prepare($post_order_sql);
        $query3->execute(array($orders[0]['order_id']));
        $post_order = $query3->fetchAll(\PDO::FETCH_ASSOC);

        if($params[0] == "status=2") {
            $update_sql = "UPDATE post_orders
                        SET status = 2
                        WHERE id = ?";
            $update = $this->DB()->prepare($update_sql);
            $update->execute(array($post_order[0]['id']));
        }

         $restaurant_sql = "SELECT *
                        FROM dish_orderes
                        JOIN dish_types
                        ON dish_orderes._id = dish_types._id
                        JOIN restaurants
                        ON restaurants.id = dish_types.id_restaurant
                        JOIN operating
                        ON operating._id = restaurants._id
                        WHERE dish_orderes.id = ?";
        $query4 = $this->DB()->prepare($restaurant_sql);
        $query4->execute(array($orders[0]['food_id']));
        $restaurant = $query4->fetchAll(\PDO::FETCH_ASSOC);

        View::render("order-details", compact(['user', 'orders', 'post_order', 'total', 'restaurant']));
    }
}
