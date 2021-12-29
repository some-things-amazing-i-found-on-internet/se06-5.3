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
class HistoryController extends Model
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
        if (session_status() === PHP_SESSION_DISABLED || session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['customer'])) {
            header("Location: login");
        }
        $user = $_SESSION['customer'];

        $sql1 = "SELECT *
                FROM post_orders
                JOIN pre_orders
                ON post_orders.pre_orders_id = pre_orders.order_id
                WHERE pre_orders.customer_id = ?
                GROUP BY post_orders.id";
        $query1 = $this->DB()->prepare($sql1);
        $query1->execute(array($user['id']));
        $post_orders = $query1->fetchAll(\PDO::FETCH_ASSOC);

        $sql2 = "SELECT *
                FROM pre_orders
                JOIN dish_orderes
                ON pre_orders.food_id = dish_orderes.id
                WHERE pre_orders.customer_id = ?";
        $query2 = $this->DB()->prepare($sql2);
        $query2->execute(array($user['id']));
        $pre_orders = $query2->fetchAll(\PDO::FETCH_ASSOC);

        View::render("history", compact(["user", "post_orders", "pre_orders"]));
    }
}
