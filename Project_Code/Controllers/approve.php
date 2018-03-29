<?php
/**
 * Created by PhpStorm.
 * User: jenni
 * Date: 2018-03-29
 * Time: 1:10 AM
 */

session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

include('../Models/user.php');
include('../Models/request.php');
require '../Models/dbConfig.php';

$user = unserialize($_SESSION['user']);
$request = unserialize($_SESSION['request']);
$reqID = $request->requestID;
$query = "";

if($request->permissionGranted == 1){
    $query = "UPDATE `Permission Requests` SET IS_OPEN = '0' WHERE REQUEST_ID = $reqID";
}
else if($request->approverApproved == 1){
    $query = "UPDATE `Permission Requests` SET PERMISSION_GRANTED = '1' WHERE REQUEST_ID = $reqID";
}
else if($request->analystApproved == 1){
    $query = "UPDATE `Permission Requests` SET APPROVER_APPROVED = '1' WHERE REQUEST_ID = $reqID";
}
else{
    $query = "UPDATE `Permission Requests` SET ANALYST_APPROVED = '1' WHERE REQUEST_ID = $reqID";
}

if(mysqli_query($db, $query)){
    mysqli_close($db);

    header("location: ../Controllers/openRequest.php?id=". $reqID);
}
else{
    echo "uh oh";
    mysqli_close($db);
}