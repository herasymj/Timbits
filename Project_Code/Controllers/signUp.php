
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require('../Models/dbConfig.php');
session_start();

 //Prepared Statement
 $insert = $db->prepare("INSERT INTO `Users`(`FIRST_NAME`, `LAST_NAME`, `EMAIL`, `IS_APPROVER`, `IS_ANALYST`, `PASSWORD`) 
						VALUES (?, ?, ?, ?, ?, ?)");
 
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
header("Location:../Views/home.php");
 ?>
