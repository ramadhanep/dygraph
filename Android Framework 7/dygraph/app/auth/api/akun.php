<?php

    $conn = mysqli_connect("localhost", "root", "", "dygraph");

    $id = $_POST['id_user'];
    $name = $_POST['name'];
    $pw_idf = $_POST['pw_idf'];

    if($pw_idf == "0"){
        $q = mysqli_query($conn, "UPDATE users SET name='$name' WHERE id ='$id'");
        if ($q){
            echo "1";
        }
    }
    else{
        $password_ = md5($_POST['ch_password']);
        $q = mysqli_query($conn, "UPDATE users SET name='$name', password='$password_' WHERE id ='$id'");
        if ($q){
            echo "1";
        }
    }
?>