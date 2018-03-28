<?php

include("../Models");

error_reporting(E_ALL);
ini_set('display_errors', '1');

//page will check to make sure app exists first and change the app name to its full name
$appName = mysqli_real_escape_string($db, $_POST['appName']);
//get the app ID

$appID = 0;

//get the approver ID


//randomly chose the analyst


//Prepared Statement
$insert = $db->prepare("INSERT INTO `Permission Requests`(`USER_ID`, `CONTACT_NUM`, `DEPARTMENT`, `APPLICATION_ID`, `PERMISSION_TYPE`,  `REASON`, 
					  `APPROVER_ID`, `ANALYST_ID, `ANALYST_APPROVED`, `APPROVER_APPROVED, `PERMISSION_GRANTED`, `IS_OPEN`) 
						VALUES (?, ?, ?, ?, ?, ?,?, ?, ?, ?, ? , ?, ?)");

$insert->bind_Param('sssiis', $first, $last, $email, $approver, $analyst, $password);

//Set Values
$uID = $user->id;
$num = mysqli_real_escape_string($db, $_POST['firstName']);
$department = mysqli_real_escape_string($db, $_POST['firstName']);
$permission = mysqli_real_escape_string($db, $_POST['firstName']);
$reason = mysqli_real_escape_string($db, $_POST['firstName']);
$approverApproved = 0;//set to 0
$analystApproved = 0;//set to 0
$permissionSet = 0;//set to 0
$isOpen = 1;//set to 1 since itll be open

//Run Query
$insert->execute();

$insert->close();
mysqli_close($db);

//get the request ID, last request for this app that is open that the user has entered
//set the request session var and let it go to view page
$_SESSION['request'] = new request();

//Go to home page if successful
header("../Views/view.php");
?>