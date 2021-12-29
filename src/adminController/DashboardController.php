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
class DashBoardController extends Model
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
        $total_revenue_sql = "SELECT SUM(total), COUNT(*)
                            FROM post_orders";
        $query1 = $this->DB()->prepare($total_revenue_sql);
        $query1->execute();
        $total_revenue = $query1->fetchAll(\PDO::FETCH_ASSOC);

        $count_users_sql = "SELECT COUNT(*)
                            FROM users";
        $query2 = $this->DB()->prepare($count_users_sql);
        $query2->execute();
        $count_users = $query2->fetchAll(\PDO::FETCH_ASSOC);

        $count_users_sql = "SELECT COUNT(*)
                            FROM restaurants";
        $query3 = $this->DB()->prepare($count_users_sql);
        $query3->execute();
        $count_restaurants = $query3->fetchAll(\PDO::FETCH_ASSOC);

        $trending_food_sql = "SELECT *, SUM(pre_orders.quantity_order)
                                FROM `pre_orders`
                                JOIN dish_orderes
                                ON dish_orderes.id = pre_orders.food_id
                                GROUP BY food_id
                                ORDER BY SUM(pre_orders.quantity_order) DESC
                                LIMIT 4;";
        $query4 = $this->DB()->prepare($trending_food_sql);
        $query4->execute();
        $trending_food = $query4->fetchAll(\PDO::FETCH_ASSOC);

        $sql5 = "SELECT *
                FROM post_orders
                ORDER BY id DESC
                limit 6";
        $query5 = $this->DB()->prepare($sql5);
        $query5->execute();
        $post_orders = $query5->fetchAll(\PDO::FETCH_ASSOC);

        $sql6 = "SELECT *
                FROM pre_orders
                JOIN dish_orderes
                ON pre_orders.food_id = dish_orderes.id";
        $query6 = $this->DB()->prepare($sql6);
        $query6->execute();
        $pre_orders = $query6->fetchAll(\PDO::FETCH_ASSOC);

        View::render_admin("dashboard", compact(["params_request", "total_revenue", "count_users", "count_restaurants", "trending_food", "post_orders", "pre_orders"]), array("Chart.bundle.min.js", "widgets.js"));
    }
}
