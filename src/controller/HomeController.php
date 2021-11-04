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
class HomeController extends Model
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
    // public function __construct($table_name)
    // {
    //     parent::__construct($table_name);
    //     session_start();
    //     if (isset($_POST['cust_email'])) {
    //         echo $_POST['cust_email'] . '\n';
    //     } else {
    //         echo 'email empty\n';
    //     }
    //     if (isset($_POST['cust_password'])) {
    //         echo $_POST['cust_password'] . '\n';
    //     } else {
    //         echo 'empty password\n';
    //     }
    // }
    public function index($params): void
    {
        // print($params);
        $query_sql = "SELECT *
                        FROM restaurants
                        JOIN restaurant_photos
                        ON restaurants._id = restaurant_photos._id
                        WHERE restaurant_photos.width = 1242
                        limit 27";
        $query = $this->DB()->prepare($query_sql);
        $query->execute();

        $result = $query->fetchAll(\PDO::FETCH_ASSOC);

        $query_sql2 = "SELECT *
                        FROM  category_groups";
        $query2 = $this->DB()->prepare($query_sql2);
        $query2->execute();

        $result2 = $query2->fetchAll(\PDO::FETCH_ASSOC);


        View::render("home", compact(["result", "result2"]));
    }
}
