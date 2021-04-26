<?php
require_once "controller/userDB.class.php";
if(($_POST['country'] >= 1 && $_POST['country'] <= 198) && ($_POST['password'] === $_POST['passwordConfirmation'])){
    session_start();
    $user = new UserDB();
    $user->createUser($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['country'],$_POST['password']);
    $_SESSION['ID'] = $user->login($_POST['email'], $_POST['password']);
    var_dump($_SESSION);
}
else{
    header("Location: ../view/signup.php");   
}