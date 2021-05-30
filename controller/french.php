<?php
session_start();
$_SESSION['langue'] = 'français';

header('location:../view/html/home.php');
