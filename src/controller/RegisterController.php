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
class RegisterController extends Model
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
    public function index(): void
    {
        if (isset($_POST['register_fname']) && isset($_POST['register_lname']) && isset($_POST['register_email']) && isset($_POST['register_password'])) {
            $register_fname = strip_tags($_POST['register_fname']);
            $register_lname = strip_tags($_POST['register_lname']);
            $register_email = strip_tags($_POST['register_email']);
            $register_password = strip_tags($_POST['register_password']);

            $query_sql = "SELECT * FROM users WHERE email=?";
            $query = $this->DB()->prepare($query_sql);
            $query->execute(array($register_email));
            
            $total = $query->rowCount();

            if ($total === 0) {
                $insert_sql = "INSERT INTO users (email, user_password, fname, lname) VALUES (:email, :user_password, :fname, :lname)";
                $insert = $this->DB()->prepare($insert_sql);
                $insert->execute([":email"=>$register_email, ":user_password"=>md5($register_password), ":fname"=>$register_fname, ":lname"=>$register_lname]);
                // thiếu: thông báo đkí thành công + chuyển đến trang login!
            }
            else {
                //thiếu: Xuất thông báo email đã tồn tại!
            }
        }

        // Request params
        // $from = Request::getParam("from", date("Y-m-01"));
        // $to = Request::getParam("to", date("Y-m-t"));
        // $month = Request::getParam("month", date("Y-m"));

        // // Statistic counters
        // $modelStatistic = new \App\Models\Statistic();
        // $rows = $modelStatistic->getForDashboard($from, $to);

        // // Remove 0 index
        // $statistic = $rows[0];

        // // Format revenue
        // $statistic['total_revenue'] = number_format(
        //         $statistic['total_revenue'], 2, ".", ",");

        // // Graphic data
        // $graphic = $modelStatistic->getMountlyGraphicData($month);

        // $mdlOrders = new \App\Models\Order();
        // $orders = $mdlOrders->getLastTen();

        // Render view
        View::render("register", compact([]));
    }
}
