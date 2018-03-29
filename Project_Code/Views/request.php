<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: ../index.php");
}
include('../Models/user.php');
$user = unserialize($_SESSION['user']);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="request" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css"  type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCk"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Login</title>
</head>
<body>
<style>
    .btn-dark{
      margin-top: 30px;
      border: 0;
      border-radius: 30px;
      padding: 0 10 0 10;
      width: 100px;
    }
</style>

<?php include_once('navbar.php'); ?>

<script>
    function checkAppName(){
        var appName = document.getElementById('appName');
    }
</script>


<header class="container float-left">
    <h1>NEW REQUEST</h1>
</header>
<div class="container col-lg-12">
    <form class="form-horizontal col-lg-6 centered-box" role="form" method="POST" action="../Controllers/submitRequest.php" onsubmit="checkAppName()">
        <div class="input-group">
            <label class="request-label col-lg-3" for="firstName">First Name: </label>
            <input type="text" class="form-control col-lg-9" id="firstName" name="firstName" placeholder="Enter first name">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-3" for="lastName">Last Name: </label>
            <input type="text" class="form-control col-lg-9" id="lastName" name="lastName" placeholder="Enter last name">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-3" for="email">E-mail: </label>
            <input type="text" class="form-control col-lg-9" id="email" name="email" placeholder="E-mail address">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-3" for="phoneNumber">Phone Number: </label>
            <input type="text" class="form-control col-lg-9" id="phoneNumber" name="phoneNumber" placeholder="(###)-###-####">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-3" for="department">Department: </label>
            <input type="text" class="form-control col-lg-9" id="department"  name="department" placeholder="Enter department">
        </div>
        </br>
        <br>
        <div class="input-group">
            <label class="request-label col-lg-4" for="appName">Application Name: </label>
            <input type="text" class="form-control col-lg-8" id="appName" name="appName" placeholder="Search...">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-4" for="permType">Permission Type: </label>
            <input type="text" class="form-control col-lg-8" id="permType" name="permType" placeholder="Search...">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-4" for="approver">Approver Name: </label>
            <input type="text" class="form-control col-lg-8" id="approver" name="approver" placeholder="Search...">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-4" for="reason">Reason: </label>
            <textarea id="reason" name="reason" type="text" class="form-control col-lg-8" placeholder="Write something.." style="height:100px"></textarea>
        </div>


        <div class="input-group">
            <div class="container">
                <a class="" href="#"><button class="btn btn-dark float-left" type="submit" value="request-back"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Back</button></a>
                <button class="btn btn-dark  float-right" type="submit" value="request-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Submit</button>

            </div>
        </div>
    </form>

</div>







</body>
</html>
