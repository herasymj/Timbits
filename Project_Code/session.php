<?php
   include('dbConfig.php');
   session_start();
   //from https://www.tutorialspoint.com/php/php_mysql_login.htm
   //edit this to work with our db
   $user_email = $_SESSION['user'];
   
   $get_user = mysqli_query($db,"select * from Users where EMAIL = '$user_email' ");
   
   $row = mysqli_fetch_array($get_user,MYSQLI_ASSOC);
   
   $user = new user($row['USER_ID'], $row['FIRST_NAME'], $row['LAST_NAME'], $row['EMAIL'], $row['IS_APPROVER'], $row['IS_ANALYST']);
   
   if(!isset($_SESSION['user'])){
      header("location:index.php");
   }
?>
