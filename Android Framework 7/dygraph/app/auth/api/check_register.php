<?php

    $conn = mysqli_connect("localhost", "root", "", "dygraph");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $password_ = md5($_POST['password']);
    
    $ch = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $num = mysqli_num_rows($ch);
    if($num >= 1){
        echo "Email telah digunakan!";
    }
    else if($password != $password_confirm){
        echo "Konfirmasi password salah!";
    }
    else{
        $q = mysqli_query($conn, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password_')");

        if ($q){
            echo "noError";
        }
    }
?>