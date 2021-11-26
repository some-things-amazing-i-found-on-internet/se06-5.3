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
class ProfileController extends Model
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
        session_start();
        if (!isset($_SESSION['customer'])) {
            header("Location: login");
        }
        $user = $_SESSION['customer'];

        // $insertFood = $this->insertFood();
        // print(gettype($params));
        View::render("profile", compact(["user"]));
    }
}
