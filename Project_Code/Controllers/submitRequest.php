<?php

include("dbConfig.php");
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');


//Prepared Statement
$insert = $db->prepare("INSERT INTO `Permission Requests`(`USER_ID`, `CONTACT_NUM`, `DEPARTMENT`, `APPLICATION_ID`, `PERMISSION_TYPE`, `PASSWORD`, `PERMISSION_TYPE`, `REASON, `APPROVER_ID`, `ANALYST_ID, `ANALYST_APPROVED`, `APPROVER_APPROVED, `PERMISSION_GRANTED`, `IS_OPEN`) 
						VALUES (?, ?, ?, ?, ?, ?,?, ?, ?, ?, ? , ?, ?)");

$insert->bind_Param('sssiis', $first, $last, $email, $approver, $analyst, $password);

//Set Values
$first = mysqli_real_escape_string($db, $_POST['firstName']);
$last = mysqli_real_escape_string($db, $_POST['lastName']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$approver = 0;//set to 0
$analyst = 0;//set automatically to 0
$password = mysqli_real_escape_string($db, $_POST['password']);

//Run Query
$insert->execute();

//Get user from table
//Set session variable
$_SESSION['user'] = $email;

$insert->close();
mysqli_close($db);

//Go to home page if successful
header("home.php");
?>