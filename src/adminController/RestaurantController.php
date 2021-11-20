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
        return $this->DB()
            ->query('SELECT id, first_name FROM customers')
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function index($params_request): void
    {
        $list = explode("=", $params_request[0]);
        $page = "";
        if (!isset($list[1])) {
            $page = 1;
        } else {
            $page = $list[1];
        }
        $limit = 27;
        $query_restaurant = 'SELECT count(*)
                FROM restaurants';
        $query = $this->DB()->query($query_restaurant);

        $count = $query->fetchColumn();
        $total_pages = ceil($count / $limit);
        $start_from = ($page - 1) * $limit;
        $pagLink = "";

        if ($page >= 2) {
            $pagLink .= "<li class='page-item'><a class='page-link' href='/se06-5.3/admin/restaurant&page=" . ($page - 1) . "'>  Prev </a></li>";
            $pagLink .= "<a class='page-link' href='/se06-5.3/admin/restaurant&page=1'>1</a>";
        }

        if ($page > 3) {
            $pagLink .= "<b>......</b>";
        }
        if ($page > 2) {
            $pagLink .= "<li class='page-item'><a class='page-link' href='/se06-5.3/admin/restaurant&page=" . (intval($page) - 1) . "'>" . (intval($page) - 1) . " </a></li>";
        }

        $pagLink .= "<li class='page-item active'><a class = 'page-link' href='/se06-5.3/admin/restaurant&page=" . $page . "'>" . $page  . " </a></li>";
        if ($page < intval($total_pages) - 1) {
            // print $page + 1; 
            $pagLink .= "<li class='page-item'><a class='page-link' href='/se06-5.3/admin/restaurant&page=" . (intval($page) + 1) . "'>" . (intval($page) + 1) . " </a></li>";
        }
        if ($page < $total_pages - 2) {
            $pagLink .= "<b>......</b>";
        }

        if ($page < $total_pages) {
            $pagLink .= "<li class='page-item'><a class='page-link' href='/se06-5.3/admin/restaurant&page=" . $total_pages . "'>" . $total_pages . " </a></li>";
            $pagLink .= "<li class='page-item'><a class='page-link' href='/se06-5.3/admin/restaurant&page=" . (intval($page) + 1) . "'>  Next </a></li>";
        }


        $query_sql = "SELECT *
        FROM restaurants
        JOIN restaurant_photos
        ON restaurants._id = restaurant_photos._id
        WHERE restaurant_photos.width = 1242 limit " . $start_from . "," . $limit;
        // echo $page;
        $query2 = $this->DB()->prepare($query_sql);
        $query2->execute();

        $result = $query2->fetchAll(\PDO::FETCH_ASSOC);
        View::render_admin("restaurants", compact(["params_request", "result", "pagLink"]), array("Chart.bundle.min.js", "Resturant.js", "data-tables.js", "datatables.min.js"));
    }
}
