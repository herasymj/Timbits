<?php
/**
 * Created by PhpStorm.
 * User: jenni
 * Date: 2018-03-29
 * Time: 1:57 AM
 */
//get query string
$reqID = $_GET['id'];

session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

include('../Models/user.php');
include('../Models/request.php');
require '../Models/dbConfig.php';

$user = unserialize($_SESSION['user']);
unset($_SESSION['error']);

//get permission request
$getRequest = "SELECT * from `Permission Requests` WHERE REQUEST_ID = '$reqID'";
$result = mysqli_query($db, $getRequest);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$uID = $row['USER_ID'];
$num = $row['CONTACT_NUM'];
$department = $row['DEPARTMENT'];
$appID = $row['APPLICATION_ID'];
$permission = $row['PERMISSION_TYPE'];
$reason = $row['REASON'];
$approverID = $row['APPROVER_ID'];
$analystID = $row['ANALYST_ID'];
$analystApproved = $row['ANALYST_APPROVED'];
$approverApproved = $row['APPROVER_APPROVED'];
$permissionGranted = $row['PERMISSION_GRANTED'];
$isOpen = $row['IS_OPEN'];
$date = $row['DATE_SUBMITTED'];

//get user name, email
$userNameQuery = "SELECT * FROM Users WHERE USER_ID = '$uID'";
$userNameResult = mysqli_query($db, $userNameQuery);
$userNameRow = mysqli_fetch_array($userNameResult,MYSQLI_ASSOC);
$userName = $userNameRow['FIRST_NAME'] . " " . $userNameRow['LAST_NAME'];
$userEmail = $userNameRow['EMAIL'];

//get app name
$appQuery = "SELECT * from Applications WHERE APP_ID = '$appID'";
$appResult = mysqli_query($db, $appQuery);
$appRow = mysqli_fetch_array($appResult,MYSQLI_ASSOC);
$appName = $appRow['APP_NAME'];

//get approver name
$approverNameQuery = "SELECT * FROM Users WHERE USER_ID = '$approverID'";
$approverNameResult = mysqli_query($db, $approverNameQuery);
$approverNameRow = mysqli_fetch_array($approverNameResult,MYSQLI_ASSOC);
$approverName = $approverNameRow['FIRST_NAME'] . " " . $approverNameRow['LAST_NAME'];


//set the request session var and let it go to view page
$newRequest = new request(
    $reqID, $uID, $approverID, $analystID, $appID, $userName, $userEmail, $num, $department,
    $appName, $permission, $reason, $approverName, $analystApproved, $approverApproved, $permissionGranted, $isOpen, $date
);
$_SESSION['request'] = serialize($newRequest);
mysqli_close($db);
//Go to home page if successful
header("location: ../Views/view.php");