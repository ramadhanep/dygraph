<?php
    session_start();
    if (isset($_SESSION['logged'])) {
        $data['id_user'] = $_SESSION['id_user'];
        $data['name'] = $_SESSION['name'];
        $data['email'] = $_SESSION['email'];
        echo json_encode($data);
    }else{
        echo "0";
    }
?>