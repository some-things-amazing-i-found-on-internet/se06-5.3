<?php

namespace Core\adminController;

use Core\config\Database;
use Core\config\Model;
use Core\config\Request;
use Core\config\View;
require './vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

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
class AddMenuController extends Model
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
        $id = str_replace("id=", "", $params_request[0]);

        if(isset($_POST['food_name'])) {
            // AWS Info
            $bucketName = 'bukethuy';
            $IAM_KEY = 'AKIAWPXFTNKC2XRFNOFV';
            $IAM_SECRET = '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';

            // Connect to AWS
            try {
                // You may need to change the region. It will say in the URL when the bucket is open
                // and on creation.
                $s3 = S3Client::factory(
                    array(
                        'credentials' => array(
                            'key' => $IAM_KEY,
                            'secret' => $IAM_SECRET
                        ),
                        'version' => 'latest',
                        'region'  => 'ap-southeast-1'
                    )
                );
            } catch (S3Exception $e) {
                // We use a die, so if this fails. It stops here. Typically this is a REST call so this would
                // return a json object.
                die("Error: " . $e->getMessage());
            }
            
            // For this, I would generate a unqiue random string for the key name. But you can do whatever.
            $keyName = 'php/' . basename($_FILES["fileToUpload"]['name']);
            $pathInS3 = 'https://bukethuy.s3.ap-southeast-1.amazonaws.com/' . $keyName;

            // Add it to S3
            try {
                // Uploaded:
                $file = $_FILES["fileToUpload"]['tmp_name'];

                $s3->putObject(
                    array(
                        'Bucket'=>$bucketName,
                        'Key' =>  $keyName,
                        'SourceFile' => $file,
                        'StorageClass' => 'STANDARD'
                    )
                );

            } catch (S3Exception $e) {
                die('Error:' . $e->getMessage());
            }

            $food_id = rand(10000000, 99999999999);
            $insert_sql = "INSERT INTO dish_orderes (_id, `name`, price_text, price_value, price_unit,`description`, photos, id)
                            VALUES (:_id, :_name, :price_text, :price_value, :price_unit, :_description, :photos, :id)";
            $insert = $this->DB()->prepare($insert_sql);
            $insert->execute([":_id" => $id,  ":_name" => $_POST['food_name'], ":price_text" => number_format($_POST['food_price']) . $_POST['food_unit'], ":price_value" => $_POST['food_price'], ":price_unit" => $_POST['food_unit'], ":_description" => $_POST['food_description'], ":photos" => $pathInS3, ":id" => $food_id]);
        
            // $update_sql = "UPDATE new_restaurants
            //                 SET restaurant_status = 2
            //                 WHERE restaurant_id = ?";
            // $update = $this->DB()->prepare($update_sql);            
            // $update->execute(array($id));

            header("Location: menu-list&id=".$id);
            echo 'Done';
        }

        View::render_admin("product\/addproduct", compact(["params_request"]), array("Chart.bundle.min.js", "widgets.js"));
    }
}
