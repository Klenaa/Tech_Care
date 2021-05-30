<?php
session_start();
$_SESSION['langue'] = 'english';

header('location:../view/html/home.php');
