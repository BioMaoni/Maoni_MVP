<?php
 require_once "userDB.class.php";
 $a = new UserDB();
    $id = $a->login($_POST['email'], $_POST['password']);
    if($id != 0){
    session_start();
    $_SESSION['ID'] = $id;
    $_SESSION['email'] = $_POST['email'];
    }
else{
    session_destroy();
    header("Location: ../views/login.php"); 
}