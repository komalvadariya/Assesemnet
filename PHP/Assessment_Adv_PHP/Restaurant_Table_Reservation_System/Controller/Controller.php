
<?php
session_start();
require_once("Model/Model.php");

class Controller extends Model
{

    function __construct(public $URL = "")
    {
        parent::__construct();
        $this->URL = "http://localhost/Laravel/Assesment2/Restaurant_Table_Reservation_System/";

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/home.php");
                    include_once("Views/footer.php");
                    break;
                case '/logout':
                    session_destroy();
                    header("location:login");
                    break;
                case '/admin':
                    include_once("Views/admin/adminheader.php");
                    include_once("Views/home.php");
                    include_once("Views/footer.php");

                    break;
                case '/deletecustomer':
                    $DeleteRes = $this->Delete("users",array("id"=>$_GET['id'],"role_id"=>"2"));
                    if($DeleteRes['Code'] == 1){
                        header("location:viewcustomer");
                    }
                    break;
                case '/editcustomer':
                    $EditRes = $this->Select('users',array("id"=>$_GET['id'],"role_id"=>"2"));
                    // echo "<pre>";
                    // print_r($EditRes['Data']);
                    // echo "</pre>";
                    include_once("Views/admin/editcustomer.php");
                    // include_once("Views/home.php");
                    // include_once("Views/footer.php");
                    if(isset($_POST['update'])){
                        array_pop($_POST);
                        // echo "<pre>";
                        // print_r($_POST);
                        // echo "</pre>";
                        $data= $_POST;
                        $UpdateRes = $this->Update("users",$data,array("id"=>$_GET['id'],"role_id"=>"2"));
                        if($UpdateRes['Code'] ==1){
                            header("location:viewcustomer");
                        }
                    }


                    break;
                case '/viewcustomer':
                    $ViewcustomerRes = $this->Select("users",array("role_id"=>"2"));
                    // echo "<pre>";
                    // print_r($ViewcustomerRes['Data']);
                    // echo "</pre>";
                    // include_once("Views/admin/adminheader.php");
                    include_once("Views/admin/viewcustomer.php");
                    // include_once("Views/footer.php");

                    break;
                case '/bookdata':
                    $bookdata = $this->Select("booking");
                    // echo "<pre>";
                    // print_r($bookdata['Data']);
                    // echo "</pre>";
                    // include_once("Views/admin/adminheader.php");
                    include_once("Views/admin/bookdata.php");
                    // include_once("Views/footer.php");

                    break;
                case '/customer':
                    include_once("Views/customer/customerheader.php");
                    include_once("Views/home.php");
                    include_once("Views/footer.php");
                    break;
                case '/booktable':
                    // include_once("Views/customer/customerheader.php");
                    include_once("Views/customer/booktable.php");
                    // include_once("Views/footer.php");
                    if(isset($_POST['book'])){
                       array_pop($_POST);
                        // echo "<pre>";
                        // print_r($_POST);
                        // echo "</pre>";
                        $bookres= $this->Insert("booking",$_POST);
                        //  echo "<pre>";
                        // print_r($bookres);
                        // echo "</pre>";
                        // exit;
                        if ($bookres['Data']==1) {

                            echo "<script>
                            alert('You Are SuccessFully booked !!!!')
                            window.location.href='customer';
                            </script>";
                        }

                    }
                    // exit;
                    break;
                case '/about':
                    include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");
                    break;
                case '/menu':
                    include_once("Views/header.php");
                    include_once("Views/menu.php");
                    include_once("Views/footer.php");
                    break;
                case '/specials':
                    include_once("Views/header.php");
                    include_once("Views/specials.php");
                    include_once("Views/footer.php");
                    break;
                case '/events':
                    include_once("Views/header.php");
                    include_once("Views/events.php");
                    include_once("Views/footer.php");
                    break;
                case '/chefs':
                    include_once("Views/header.php");
                    include_once("Views/chefs.php");
                    include_once("Views/footer.php");
                    break;
                case '/gallery':
                    include_once("Views/header.php");
                    include_once("Views/gallery.php");
                    include_once("Views/footer.php");
                    break;
                case '/contact':
                    include_once("Views/header.php");
                    include_once("Views/contact.php");
                    include_once("Views/footer.php");
                    break;
                case '/login':          
                    include_once("Views/login.php");
                    if (isset($_POST['login'])) {
                        $LoginRes = $this->Select("users", array("username" => $_REQUEST['username'], "password" => $_REQUEST['password']));
                        if ($LoginRes['Code'] == 1) {
                            $_SESSION['UserData'] = $LoginRes['Data'];
                            // echo "<pre>";
                            // print_r($LoginRes['Data'][0]);
                            // echo "</pre>";
                            if ($LoginRes['Data'][0]->role_id == 1) {
                                header("location:admin");
                            } else {
                                header("location:customer");
                            }
                        } else {
                            echo " <script>
                            alert('Invalid User')
                            </script>";
                        }
                    }


                    break;
                case '/register':
                    include_once("Views/register.php");
                    if (isset($_POST['register'])) {
                        unset($_POST['register']);
                        // echo "<pre>";
                        // print_r($_POST);
                        // echo "</pre>";
                        $InsertRes = $this->Insert("users", $_POST);
                        if ($InsertRes['Code'] == 1) {
                            echo "<script>
                            alert('You Are SuccessFully Sign Up !!!!')
                            window.location.href='login'
                            </script>";
                        }
                    }
                    break;

                default:
                    
                    break;
            }
        } else {
            header("location:home");
        }
    }
}

$Controller = new Controller;
?>