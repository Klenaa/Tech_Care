<?php
    require '../model/connect.php';
    session_destroy();
header('Location: ../view/html/home.php');
?>