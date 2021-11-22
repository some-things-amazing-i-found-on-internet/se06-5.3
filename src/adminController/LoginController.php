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
    private function login($usr, $pass): void
    {
        $cust_email = strip_tags($usr);
        $cust_password = strip_tags($pass);
        $query_sql = "SELECT * FROM users WHERE email=:email AND user_password=:pass";
        $query = $this->DB()->prepare($query_sql);
        $query->execute([":email" => $cust_email, ":pass" => md5($cust_password)]);
        $total = $query->rowCount();
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);
        // echo var_dump($result[0]['role']);
        if ($total > 0) {
            if ($result[0]['role'] == 0) {
                echo "not have right";
            } else {
                session_start();
                $_SESSION['admin'] = $result;
                header("Location: /se06-5.3/admin/");
            }
        } else {
            echo "Wrong";
        }
    }
    public function index($params_request): void
    {
        // echo $_SESSION['admin'];
        if (isset($_SESSION['admin'])) {
            header("Location: /se06-5.3/admin/");
        } else {
            if (isset($_POST['admin_login'])) {
                if (isset($_POST['validationCustom08']) && isset($_POST['validationCustom09'])) {
                    $this->login($_POST['validationCustom08'], $_POST['validationCustom09']);
                } else {
                }
            }
            View::render_admin("prebuilt-pages\/default-login", compact(["params_request"]), array("Chart.bundle.min.js", "widgets.js"), true);
        }
    }
}
