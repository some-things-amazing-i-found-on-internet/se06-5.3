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


        // Xử lý data lấy từ cookie:
        $i = 0;
        foreach ($_COOKIE as $row) {
            if ($i === 1) {
                $string = $row;
                break;
            }
            $i++;
        }
        $list = explode("}}", $string);
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
        }
        // Đẩy lên csdl:
        if (isset($_SESSION['order_status']) && $_SESSION['order_status'] == 1) {
            for ($i = 0; $i < count($orders); $i++) {
                $insert_sql = "INSERT INTO user_orders (customer_id, food_id, quantity) VALUES (:val_1, :val_2, :val_3)";
                $insert = $this->DB()->prepare($insert_sql);
                $insert->execute([":val_1" => $user_id, ":val_2" => $orders[$i]['id'], ":val_3" => $orders[$i]['quantity']]);
            }
            $_SESSION['order_status'] = 0;
        }

        View::render("checkout", compact(['total', 'orders', 'user_id', 'result']));
    }
}
