<?php
   define('DB_SERVER', 'http://ec2-18-218-62-126.us-east-2.compute.amazonaws.com');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'rootpassword');//change this in server!!!!
   define('DB_DATABASE', 'HELLs App Permissions');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>