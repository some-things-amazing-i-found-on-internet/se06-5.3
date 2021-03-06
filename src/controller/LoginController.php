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
class LoginController extends Model
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
        if (session_status() === PHP_SESSION_DISABLED || session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['customer'])) {
            header("Location: home");
        }
        if (isset($_POST['cust_email']) && isset($_POST['cust_password'])) {
            $cust_email = $_POST['cust_email'];
            $cust_password = $_POST['cust_password'];
            $query_sql = "SELECT * FROM users WHERE email=:email AND user_password=:pass";

            $query = $this->DB()->prepare($query_sql);
            $query->execute([":email" => $cust_email, ":pass" => md5($cust_password)]);

            $total = $query->rowCount();
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);

            if ($total > 0) {
                $_SESSION['customer'] = $result[0];
                header("Location: home");
            } else {
                View::render("login", compact([]));
            }
        } else {
            View::render("login", compact([]));
        }
    }
}
