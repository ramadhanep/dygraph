<?php

    $conn = mysqli_connect("localhost", "root", "", "dygraph");

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $q = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    $num = mysqli_num_rows($q);
    $res = mysqli_fetch_array($q);

    if ($num > 0) {
        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['id_user'] = $res['id'];
        $_SESSION['name'] = $res['name'];
        $_SESSION['email'] = $res['email'];

        $data['id_user'] = $res['id'];
        $data['name'] = $res['name'];
        $data['email'] = $res['email'];
        echo json_encode($data);
    }
    else{
        echo "0";
    }
?>