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
class PaymentController extends Model
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
        if (!isset($_SESSION['customer'])) {
            header("Location: login");
        }
        $user = $_SESSION['customer'];


        if (isset($_POST['newwalletnumber'])) {
            $wallet_sql = "INSERT INTO payment(`id_user`, `type`, `number`, `vaild`, `method`) VALUES (:id, 'Ví ShopeePay', :num, '', 1)";
            $payment = $this->DB()->prepare($wallet_sql);
            $payment->execute([":id" => $user['id'], ":num" => $_POST['newwalletnumber']]);

            if (isset($_POST['newwalletdefault'])) {
                $last_sql = "SELECT LAST_INSERT_ID();";
                $payment = $this->DB()->prepare($last_sql);
                $payment->execute();
                $default = $payment->fetchAll(\PDO::FETCH_ASSOC);
                $update_sql = "UPDATE users SET payment_default = :default WHERE id = :id";
                $payment = $this->DB()->prepare($update_sql);
                $payment->execute([":default" => $default[0]["LAST_INSERT_ID()"], ":id" => $user["id"]]);
            }
        }

        if (isset($_POST['newcardnumber']) && isset($_POST['newcardvaild']) && isset($_POST['newcardcvc']) && isset($_POST['newcardzip'])) {
            $type = "NON";
            switch ($_POST['newcardnumber'][0]) {
                case '3':
                    $type = "AMEX";
                    break;
                case '4':
                    $type = "VISA";
                    break;
                case '5':
                    $type = "MASTER";
                    break;
            }
            $card_sql = "INSERT INTO payment(`id_user`, `type`, `number`, `vaild`, `method`) VALUES (:id, :type, :num, :vaild, 3)";
            $payment = $this->DB()->prepare($card_sql);
            $payment->execute([":id" => $user['id'], ":type" => $type, ":num" => $_POST['newcardnumber'], ":vaild" => $_POST['newcardvaild']]);

            if (isset($_POST['newcarddefault'])) {
                $last_sql = "SELECT LAST_INSERT_ID();";
                $payment = $this->DB()->prepare($last_sql);
                $payment->execute();
                $default = $payment->fetchAll(\PDO::FETCH_ASSOC);
                $update_sql = "UPDATE users SET payment_default = :default WHERE id = :id";
                $payment = $this->DB()->prepare($update_sql);
                $payment->execute([":default" => $default[0]["LAST_INSERT_ID()"], ":id" => $user["id"]]);
            }
        }

        if (isset($_POST['newatmbank']) && isset($_POST['newatmnumber'])) {
            $atm_sql = "INSERT INTO payment(`id_user`, `type`, `number`, `vaild`, `method`) VALUES (:id, :bank, :num,'', 5)";
            $payment = $this->DB()->prepare($atm_sql);
            $payment->execute([":id" => $user['id'], ":bank" => $_POST['newatmbank'], ":num" => $_POST['newatmnumber']]);

            if (isset($_POST['newatmdefault'])) {
                $last_sql = "SELECT LAST_INSERT_ID();";
                $payment = $this->DB()->prepare($last_sql);
                $payment->execute();
                $default = $payment->fetchAll(\PDO::FETCH_ASSOC);
                $update_sql = "UPDATE users SET payment_default = :default WHERE id = :id";
                $payment = $this->DB()->prepare($update_sql);
                $payment->execute([":default" => $default[0]["LAST_INSERT_ID()"], ":id" => $user["id"]]);
            }
        }


        $payment_sql = "SELECT * FROM payment WHERE id_user = " . $user['id'];
        $payment = $this->DB()->prepare($payment_sql);
        $payment->execute();
        $credit = $payment->fetchAll(\PDO::FETCH_ASSOC);


        // echo $_POST['newwalletdefault'];

        View::render("payment", compact(["user", "credit"]));
    }
}
