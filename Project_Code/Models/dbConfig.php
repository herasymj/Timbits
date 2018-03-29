<?php

   //define('DB_SERVER', 'ec2-18-218-62-126.us-east-2.compute.amazonaws.com');
   //define('DB_USERNAME', 'root');
   //define('DB_PASSWORD', 'ense470T1mbits');//change this in server!!!!
   //define('DB_DATABASE', 'HELLs App Permissions');
$server = 'ec2-18-220-100-235.us-east-2.compute.amazonaws.com';
$username = 'root';
$pass = 'yolo';
$database = 'HELLs App Permissions';
   $db = mysqli_connect($server,$username,$pass,$database);
mysqli_ping($db);
if ($db->connect_error) {
    echo "Error!";
    die("Connection failed: " . $db->connect_error);
}
?>