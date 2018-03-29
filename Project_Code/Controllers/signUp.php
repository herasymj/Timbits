
<?php
//helps with error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');

//includes and session start for session variables
require('../Models/dbConfig.php');
include('../Models/user.php');
session_start();

 //Prepared Statement
 $insert = $db->prepare("INSERT INTO Users(FIRST_NAME, LAST_NAME, EMAIL, IS_APPROVER, IS_ANALYST, PASSWORD) 
						VALUES (?, ?, ?, ?, ?, ?)");
 //bind parameters to statement
 $insert->bind_Param('sssiis', $first, $last, $email, $approver, $analyst, $password);

 //Set Values
 $first = mysqli_real_escape_string($db, $_POST['firstName']);
 $last = mysqli_real_escape_string($db, $_POST['lastName']);
 $email = mysqli_real_escape_string($db, $_POST['email']);
 $approver = 0;//set to 0
 $analyst = 0;//set automatically to 0
 $password = mysqli_real_escape_string($db, $_POST['password']);
 $password2 = mysqli_real_escape_string($db, $_POST['password-confirmation']);

 if(strcmp($_POST['password'], $_POST['password-confirmation']) != 0){
     header("location:../index.php");
 }

//Run Query
 $insert->execute();

 //get the row from the table and set the session variable
$q ="SELECT * FROM Users WHERE EMAIL = '$email' AND PASSWORD = '$password'";
$result = mysqli_query($db, $q);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

//Set session variable
if($count == 1) {
    //setup user
    $userVar = new user();
    $userVar->set_user($row['USER_ID'], $row['FIRST_NAME'], $row['LAST_NAME'], $row['EMAIL'], $row['IS_APPROVER'], $row['IS_ANALYST']);
    $_SESSION['user'] = serialize($userVar);
    //Go to home page if successful -- put in java script?
    mysqli_close($db);
    header("location: ../Views/home.php");
}
else{
    mysqli_close($db);
    header("location: ../index.php");
}
 ?>
