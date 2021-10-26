<?php

use Core\Model;

class LoginController extends Model
{
  public function __construct()
  {

    /**
     * The database table name.
     */
    parent::__construct("users");
  }
  public function getAll(): iterable
  {
    return $this->DB()
      ->query('SELECT id, first_name FROM customers')
      ->fetchAll(\PDO::FETCH_ASSOC);
  }

  function loginAction($form1, $cust_email, $cust_password, $error_message)
  {
    if ($form1) {

      if (empty($_POST['cust_email']) || empty($_POST['cust_email'])) {
        $error_message = "Nhập đầy đủ thông tin!!" . '<br>';
      } else {

        $cust_email = strip_tags($_POST['cust_email']);
        $cust_password = strip_tags($_POST['cust_password']);

        $statement = $pdo->prepare("SELECT * FROM tbl_customer WHERE cust_email=?");
        $statement->execute(array($cust_email));
        $total = $statement->rowCount();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
          $cust_status = $row['cust_status'];
          $row_password = $row['cust_password'];
        }

        if ($total == 0) {
          $error_message .= "Không tồn tại email !!!" . '<br>';
        } else {
          //using MD5 form
          if ($row_password != md5($cust_password)) {
            $error_message .= "Thông tin mật khẩu nhập chưa đúng" . '<br>';
          } else {
            $_SESSION['customer'] = $row;
            header("location: " . BASE_URL . "index.php");
          }
        }
      }
    }
  }

  function logoutAction()
  {
  }
}
