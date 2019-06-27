<?php
    $url = $_GET['img_url'];
    $c = "logo.png";
    file_put_contents($c, file_get_contents($url));
?>