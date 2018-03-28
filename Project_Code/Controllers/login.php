<?php
/**
 * Created by PhpStorm.
 * User: jenni
 * Date: 2018-03-25
 * Time: 8:50 PM
 */
//put in index page
include("../Models/dbConfig.php");
session_start();

//Prepared Statement
$insert = $db->prepare("SELECT 'EMAIL' FROM `Users` WHERE 'EMAIL' = $email AND 'PASSWORD' = $password");

$insert->bind_Param('ss', $email, $password);

//Set Values
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);

//Run Query
$insert->execute();
$result = $insert->get_result();

//Set session variable
if(mysqli_num_rows($result) == 1) {
    $_SESSION['user'] = $email;
}
else{
    header("Location: ../Views/index.php");
}

$insert->close();
mysqli_close($db);

//Go to home page if successful -- put in java script?
header("home.php");