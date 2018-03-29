<?php
//start session so we can use it later
session_start();

//for error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');

//includes
require '../Models/dbConfig.php';
include('../Models/user.php');

//SQL query to find the credentials
$email = mysqli_real_escape_string($db, $_POST['email1']);
$password = mysqli_real_escape_string($db, $_POST['password1']);
$q ="SELECT * FROM Users WHERE EMAIL = '$email' AND PASSWORD = '$password'";
$result = mysqli_query($db, $q);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

//Set session variable
if($count == 1) {//if data was returned set session variable to new user and go to home page
    //setup user
    $userVar = new user();
    $userVar->set_user($row['USER_ID'], $row['FIRST_NAME'], $row['LAST_NAME'], $row['EMAIL'], $row['IS_APPROVER'], $row['IS_ANALYST']);
    $_SESSION['user'] = serialize($userVar);
    //Go to home page if successful -- put in java script?
    mysqli_close($db);
    header("location: ../Views/home.php");
}
else{//refresh index
    mysqli_close($db);
    header("location: ../index.php");
}

