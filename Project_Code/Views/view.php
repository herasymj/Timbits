<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: ../index.php");
}
include('../Models/user.php');
$user = unserialize($_SESSION['user']);

?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="request" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCk"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="style.css" type="text/css" />
    <title>View Request</title>
</head>
<body>
<style>
  body {
    width: 100%;
    height: 200%;
    background-color: #222;
    border-color: #080808;
  }
    .btn-dark{
      margin-top: 30px;
      border: 0;
      border-radius: 30px;
      padding: 0 10 0 10;
      width: 100px;

    }
</style>

<?php include_once('navbar.php'); ?>

<header class="container-header">
    <h1>REQUEST #:</h1>
</header>
<div class="container-content">
    <div class="input-group">
        <label class="request-label col-sm-6" for="firstName">First Name: </label>

        <output class="output-label  " type="text" class="form-control col-lg-9" id="firstName">Maksym Zabutnyy</output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="lastName">Last Name: </label>
        <output class="output-label" type="text" class="form-control col-lg-9" id="lastName">Maksym Zabutnyy</output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="email">E-mail: </label>
        <output class="output-label" type="text" class="form-control col-lg-9" id="email">Maksym Zabutnyy</output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="phoneNumber">Phone Number: </label>
        <output class="output-label" type="text" class="form-control col-lg-9" id="phoneNumber">Maksym Zabutnyy</output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="department">Department: </label>
        <output class="output-label" type="text" class="form-control col-lg-9" id="department">Maksym Zabutnyy</output>
    </div>
    </br>
    <br>
    <div class="input-group">
        <label class="request-label col-sm-6" for="appName">Application Name: </label>
        <output class="output-label" type="text" class="form-control col-lg-8" id="appName">Maksym Zabutnyy</output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="permType">Permission Type: </label>
        <output class="output-label" type="text" class="form-control col-lg-8" id="permType">Maksym Zabutnyy</output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="approver">Approver Name: </label>
        <output class="output-label" type="text" class="form-control col-lg-8" id="approver">Maksym Zabutnyy</output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="reason">Reason: </label>
        <textarea-output id="reason" type="text" class="form-control col-lg-8" style="height:100px">My reason is...</textarea-output>
    </div>
    <div class="postition-absolute">
    <div class="container-footer">
        <button class="btn btn-dark float-left" type="submit" value="request-back"><a href="#"><i class="fa fa-frown-o" aria-hidden="true"></i> Back</a></button>
        <button class="btn btn-dark float-right" type="submit" value="request-approve"><a href="#"><i class="fa fa-smile-o" aria-hidden="true"></i> Approve</a></button>
    </div>
</div>
</body>
</html>
