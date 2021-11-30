<?php

namespace Core\controller;

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
class CheckOutController extends Model
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
        $user_id = $_SESSION['customer'];
        //lấy payment từ customer
        $payment_sql = "SELECT * FROM payment WHERE id_user = " . $user_id['id'];
        $payment = $this->DB()->prepare($payment_sql);
        $payment->execute();
        $result = $payment->fetchAll(\PDO::FETCH_ASSOC);
        
        if (isset($_SESSION['order_status']) && $_SESSION['order_status'] == 1) {    
            // Xử lý data lấy từ cookie:
            $list = explode("}}", $_COOKIE['id']);
            $orders = array(); // data sau khi được xử lý sẽ được lưu vào biến này!
            $total = 0; // tổng thanh toán!
            for ($i = 0; $i < count($list) - 1; $i++) {
                $list[$i] = str_replace("]", "", $list[$i]);
                $list[$i] = str_replace("[", "", $list[$i]);
                $item = explode(",", $list[$i]);
                $order = array();
                foreach ($item as $j) {
                    if (strpos($j, "{\"quantity\"") !== false) {
                        $order['quantity'] = (int)str_replace("{\"quantity\":", "", $j);
                    }
                    if (strpos($j, "\"name\"") !== false) {
                        $temp = str_replace("\"name\":", "", $j);
                        $order['name'] = str_ireplace("\"", "", $temp);
                    }
                    if (strpos($j, "\"id\"") !== false) {
                        $temp = str_replace("\"id\":", "", $j);
                        $order['id'] = str_ireplace("\"", "", $temp);
                    }
                    if (strpos($j, "\"price_value\"") !== false) {
                        $temp = str_replace("\"price_value\":", "", $j);
                        $order['price_value'] = (int)str_ireplace("\"", "", $temp);
                        $total += $order['price_value'] * $order['quantity'];
                    }
                }
                $orders[$i] = $order;
                unset($_COOKIE['id']);
            }
            //Lấy giá trị order_id tiếp theo:
            $sql = "SELECT order_id FROM `pre_orders`";
            $query = $this->DB()->prepare($sql);
            $query->execute();
            $total = $query->rowCount();

            // Đẩy lên csdl:
            for ($i = 0; $i < count($orders); $i++) {
                $insert_sql = "INSERT INTO pre_orders (order_id, customer_id, food_id, quantity_order) VALUES (:val_0, :val_1, :val_2, :val_3)";
                $insert = $this->DB()->prepare($insert_sql);
                $insert->execute([":val_0" => $total, ":val_1" => $user_id['id'], ":val_2" => $orders[$i]['id'], ":val_3" => $orders[$i]['quantity']]);
            }
            $_SESSION['order_status'] = 0;
            setcookie('id', '', time()-3600);
        }
        
        $order_sql = "SELECT * FROM `pre_orders`
        JOIN dish_orderes
        ON dish_orderes.id = pre_orders.food_id
        WHERE pre_orders.status = 0 and pre_orders.customer_id = ?  and pre_orders.order_id >= ALL (SELECT order_id FROM pre_orders WHERE customer_id = ?)";
        $query = $this->DB()->prepare($order_sql);
        $query->execute(array($user_id['id'], $user_id['id']));
        $orders = $query->fetchAll(\PDO::FETCH_ASSOC);

        $total = 0;
        foreach ($orders as $order) {
            $total += (int)$order['quantity_order'] * (int)$order['price_value'];
        }
        View::render("checkout", compact(['total', 'orders', 'user_id', 'result']));
    }
}
