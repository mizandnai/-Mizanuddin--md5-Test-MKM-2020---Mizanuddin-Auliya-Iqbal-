<?php

include "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $response = array();
    $email = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['name'];
    $cek = "SELECT * FROM user_registration WHERE username='$username' AND password='$password";
    $result = mysqli_fetch_array(mysqli_query($con, $cek));

    if(isset($result)){
        $response['value'] = 1;
        $response['message'] = 'username telah digunakan';
        echo json_encode($response);

    } else{
        $insert = "INSERT INTO user_registration VALUE(NULL, '$username', '$password','$name')";
        if(mysqli_query($con, $insert)){
            $response ['value'] = 2;
            $response ['message'] = "Berhasil didaftarkan";
            echo json_encode($response);

        }else{
            $response['value'] = 3;
            $response['message'] = "gagal didaftarkan";
            echo json_encode($response);
        }
    }
}
?>