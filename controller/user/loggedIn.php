<?php
session_start();
if(!(isset($_SESSION['ID'])  && $_SESSION['ID'] >= 1)){
    $_SESSION['ID'] = NULL;
    $_SESSION['name'] = NULL;
    session_destroy();
    header("Location: login.php");  
}