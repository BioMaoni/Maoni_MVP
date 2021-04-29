<?php

// include database and object files
include_once '../../config/database.php';
include_once '../../objects/user.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare user object
$user = new User($db);

// set ID property of user to be edited
// mudando validação..
$user->email = isset($_GET['email']) ? $_GET['email'] : die();
$user->password = base64_encode(isset($_GET['password']) ? $_GET['password'] : die());

// read the details of user to be edited
$stmt = $user->login();

//$id = $a->login($_POST['email'], $_POST['password']);

if ($stmt->rowCount() > 0) {

    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // create array
    $user_arr = array(
        "status" => true,
        "message" => "Successfully Login!",
        "id" => $row['ID'],
        "name" => $row['name']
    );

    session_start();
    $_SESSION['ID'] = $user_arr['id'];
    $_SESSION['name'] = $user_arr['name'];
    echo $_SESSION['ID'];
    header("Location: ../index.php"); 

} else {
    $user_arr = array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
    session_destroy();
    header("Location: ../view/login.php");
}

// make it json format
print_r(json_encode($user_arr));
