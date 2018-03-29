<?php
/**
 * Created by PhpStorm.
 * User: jenni
 * Date: 2018-03-29
 * Time: 1:04 AM
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
$open = intval(0);

$query = "UPDATE `Permission Requests` SET IS_OPEN = '$open' WHERE REQUEST_ID = $reqID";
echo $query;

if(mysqli_query($db, $query)){
    mysqli_close($db);

    //header("location: ../Controllers/openRequest.php?id=". $reqID);
}
else{
    echo "uh oh";
    mysqli_close($db);
}