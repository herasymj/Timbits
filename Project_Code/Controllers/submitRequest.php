<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

include('../Models/user.php');
include('../Models/request.php');
require '../Models/dbConfig.php';

$user = unserialize($_SESSION['user']);
unset($_SESSION['error']);

//page will check to make sure app exists first and change the app name to its full name
$appName = mysqli_real_escape_string($db, $_POST['appName']);
//get the app ID, or app name like this one
$appQuery = "SELECT * from Applications WHERE APP_NAME = '$appName' OR APP_ACRONYM = '$appName'";
$appResult = mysqli_query($db, $appQuery);
$row = mysqli_fetch_array($appResult,MYSQLI_ASSOC);
$count = mysqli_num_rows($appResult);
if($count == 0 ){
    $_SESSION['error'] = "Improper App name, check your answer or call an IT analyst.";
    header("location: ../Views/request.php");
}
$appID = $row['APP_ID'];
echo $appID;

//randomly chose approver ID
$approverQuery = "SELECT * FROM `App Permissions` WHERE APP_ID = '$appID' ORDER BY RAND()";
$approverResult = mysqli_query($db, $approverQuery);
$approverRow = mysqli_fetch_array($approverResult,MYSQLI_ASSOC);
$approverCount = mysqli_num_rows($approverResult);
if($approverCount == 0 ){
    $_SESSION['error'] = "No approvers for that software, contact IT department.";
    header("location: ../Views/request.php");
}
$approverID = $approverRow['APPROVER_ID'];
echo " " . $approverID;

//get the approver name
$approverNameQuery = "SELECT * FROM Users WHERE USER_ID = '$approverID'";
$approverNameResult = mysqli_query($db, $approverNameQuery);
$approverNameRow = mysqli_fetch_array($approverNameResult,MYSQLI_ASSOC);
$approverName = $approverNameRow['FIRST_NAME'] . " " . $approverNameRow['LAST_NAME'];

//randomly chose the analyst
$analystQuery = "SELECT * FROM Users WHERE IS_ANALYST = '1' ORDER BY RAND()";
$analystResult = mysqli_query($db, $analystQuery);
$analystRow = mysqli_fetch_array($analystResult,MYSQLI_ASSOC);
$analystCount = mysqli_num_rows($analystResult);
if($analystCount == 0 ){
    $_SESSION['error'] = "No analysts, contact IT department.";
    header("location: ../Views/request.php");
}
$analystID = $analystRow['USER_ID'];
echo " " . $analystID;

//Prepared Statement
$insert = $db->prepare("INSERT INTO `Permission Requests`(USER_ID, CONTACT_NUM, DEPARTMENT, APPLICATION_ID, PERMISSION_TYPE,  REASON, 
					  APPROVER_ID, ANALYST_ID, ANALYST_APPROVED, APPROVER_APPROVED, PERMISSION_GRANTED, IS_OPEN) 
						VALUES ( ?, ?, ?, ?, ?,?, ?, ?, ?, ? , ?, ?)");

$insert->bind_Param('ississiiiiii', $uID, $num, $department, $appID, $permission, $reason, $approverID, $analystID, $analystApproved, $approverApproved, $permissionSet, $isOpen);

//Set Values
$uID = $user->id;
$num = mysqli_real_escape_string($db, $_POST['phoneNumber']);
$department = mysqli_real_escape_string($db, $_POST['department']);
$permission = mysqli_real_escape_string($db, $_POST['permType']);
$reason = mysqli_real_escape_string($db, $_POST['reason']);
$approverApproved = 0;//set to 0
$analystApproved = 0;//set to 0
$permissionSet = 0;//set to 0
$isOpen = 1;//set to 1 since itll be open

//Run Query
$insert->execute();
//$insert->close();


//get the request ID, last request for this app that is open that the user has entered
$getID = "SELECT * from `Permission Requests` WHERE IS_OPEN = '$isOpen' AND USER_ID = '$uID' AND APPLICATION_ID = '$appID'";
$idResult = mysqli_query($db, $getID);
$idRow = mysqli_fetch_array($idResult,MYSQLI_ASSOC);
$ID = $idRow['REQUEST_ID'];
//set the request session var and let it go to view page
//date_default_timezone_set("Central Standard Time");
$newRequest = new request(
    $ID, $uID, $approverID, $analystID, $appID, $user->firstName . " " . $user->lastName, $user->email, $num, $department,
    $appName, $permission, $reason, $approverName, 0, 0, 0, 1, time()
);
$_SESSION['request'] = serialize($newRequest);
mysqli_close($db);
//Go to home page if successful
header("location: ../Views/view.php");
?>