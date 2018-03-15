<html>
 <head>
  <title>Sign Up</title>
 </head>
 <body>

 <p>Creating account...</p>
 
<?php
 error_reporting(E_ALL);
ini_set('display_errors', '1');

//For security
 function ExtendedAddslash(&$params)
{ 
        foreach ($params as &$var) {
            // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
            unset($var);
        }
} 

// Initialize ExtendedAddslash() function for every $_POST variable
 ExtendedAddslash($_POST);
 
 //connect to db
 $db_host = 'http://ec2-18-218-62-126.us-east-2.compute.amazonaws.com';
 $db_username = 'root';
 $db_password = 'fu';//EDIT PASSWORD ON SERVER
 $db_name = 'HELLs App Permissions';

 //Try to connect
 $conn = mysqli_connect( $db_host, $db_username, $db_password, $db_name);
 if ($conn->connect_error) {
	 echo "Error!";
	 die("Connection failed: " . $conn->connect_error);
	 //RETURN TO INDEX
 } 

 //Prepared Statement
 $insert = $conn->prepare("INSERT INTO `Users`(`FIRST_NAME`, `LAST_NAME`, `EMAIL`, `IS_APPROVER`, `IS_ANALYST`, `PASSWORD`) 
						VALUES (?, ?, ?, ?, ?, ?,)");
 
 $insert->bind_Param('sssiis', $first, $last, $email, $approver, $analyst, $password);

 //Set Values
 $first = mysqli_real_escape_string($conn, $_POST['firstName']); 
 $last = mysqli_real_escape_string($conn, $_POST['lastName']);
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $approver = 0;//set to 0
 $analyst = 0;//set automatically to 0
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 
 //Validation just in case JavaScript not enabled
 //If failed validation, return to index
	 
//Run Query
 $insert->execute();

 //Go to home page if successful
 //Get user from table
 //Set session variable
 
 
 //If errors, rertun to login

 $insert->close();
 mysqli_close($conn);
 ?>
 
  </body>
</html>