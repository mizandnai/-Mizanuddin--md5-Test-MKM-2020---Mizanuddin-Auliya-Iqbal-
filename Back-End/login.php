<?php
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $response = array();
    $email = $_POST['username'];
    $password = md5($_POST['password']);
    
    //check data
    $check = "SELECT * FROM user_registration WHERE username='$username' AND password='$password";
    $result = mysqli_fetch_array(mysqli_query($con, $check));
    
    if(isset($result)){
        $response['value'] = 1;
        $response['message'] = 'Login Berhasil';
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Login Gagal";
        echo json_encode($response);
    }
} 
?>