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
class NewRestaurantController extends Model
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
        if($params_request[0]) {
            $id = str_replace("id=", "", $params_request[0]);
            $update_sql = "UPDATE new_restaurants
                            SET restaurant_status = 2
                            WHERE restaurant_id = ?";
            $update = $this->DB()->prepare($update_sql);
            $update->execute(array($id));
        }

        $query_sql = "SELECT *
                        FROM new_restaurants
                        WHERE restaurant_status = 0";
        $query = $this->DB()->prepare($query_sql);
        $query->execute();
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);

        View::render_admin("newRestaurants", compact(["result"]), array("Chart.bundle.min.js", "Resturant.js", "data-tables.js", "datatables.min.js"));
    }
}
