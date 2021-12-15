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
class CustomerListController extends Model
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
        if (isset($_POST['deactive'])) {
            $update_sql = "UPDATE users SET Status = 0 WHERE id = :id";
            $query = $this->DB()->prepare($update_sql);
            $query->execute([":id" => $_POST['deactive']]);
        };
        if (isset($_POST['active'])) {
            $update_sql = "UPDATE users SET Status = 1 WHERE id = :id";
            $query = $this->DB()->prepare($update_sql);
            $query->execute([":id" => $_POST['active']]);
        };

        $customer_sql = "SELECT * FROM users";
        $query = $this->DB()->prepare($customer_sql);
        $query->execute();
        $customers = $query->fetchAll(\PDO::FETCH_ASSOC);


        View::render_admin("customerlist", compact(["params_request", "customers"]), array("data-tables.js", "datatables.min.js"));
    }
}
