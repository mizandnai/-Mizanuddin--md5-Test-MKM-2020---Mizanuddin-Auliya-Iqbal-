<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'user_reg_flutter');

//conncetion
$con = mysqli_connect(HOST, USER, PASS, DB);
if($con){
    echo "sukses";
} else {
    echo "Error";
    exit();
}
?>