<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
//put in index page

require '../Models/dbConfig.php';

session_start();

//Prepared Statement
$insert = $db->prepare("SELECT 'EMAIL' FROM `Users` WHERE 'EMAIL' = ? AND 'PASSWORD' = ?");
echo "2";

$insert->bind_Param('ss', $email, $password);
echo "3";

//Set Values
$email = mysqli_real_escape_string($db, $_POST['email1']);
$password = mysqli_real_escape_string($db, $_POST['password1']);

echo $email;

//Run Query
$insert->execute();
//$result = $insert->get_result();
$insert->bind_result($result);
$insert->fetch();

//Set session variable
if(mysqli_num_rows($result) == 1) {
    $_SESSION['user'] = $email;
}
else{
    header("Location: ..index.php");
}

$insert->close();
mysqli_close($db);

//Go to home page if successful -- put in java script?
header("home.php");