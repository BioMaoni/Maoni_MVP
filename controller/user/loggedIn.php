<?php
session_start();
$_SESSION['ID'] = "abc";
if(!(isset($_SESSION['ID']) && isset($_SESSION['name']) && $_SESSION['ID'] >= 1)){
    echo "shit";
    $_SESSION['ID'] = NULL;
    $_SESSION['name'] = NULL;
    session_destroy();
    header("Location: view/login.php");
}