<?php
/**
 * Created by PhpStorm.
 * User: jenni
 * Date: 2018-03-27
 * Time: 11:09 PM
 */

include('../Models/session.php');
function checkApp($appName){

}
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCk></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
<style>
    html{
        width: 100%;
        height: 100%;
        background-color: #222;
        border-color: #080808;
    }

    input[type=text],
    input[type=password]{
        background: 0 0;
        border: 0;
        box-shadow: none;
        border-bottom: 1px solid #afb5c1;
        border-radius: 0;


    }

    .request-label{
        color: black;
        padding: 10px 0 5px 5px;
        align-items: normal;
        font-size: 20px;

        /*change color*/
    }
    .input-group{
        background: 0 0;
        border: 0;
        color: #afb5c1;
        padding: 0 0 5px 0;
    }
    .centered-box{
        margin-left:auto;
        margin-right:auto;
    }
    .label-group{
        background: 0 0;
        border: 0;
        color: #afb5c1;
        padding: 0 0 5px 0;
    }
    .container-footer{
        background-color: green;
    }
    .btn-dark{
        border: 0;
        border-radius: 30px;
    }
    input[type=text],
    input[type=password]:focus{
        box-shadow:none;
    }
</style>


<!--  end navbar -->
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
            <input type="text" class="form-control col-lg-9" id="firstName" placeholder="Enter first name">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-3" for="lastName">Last Name: </label>
            <input type="text" class="form-control col-lg-9" id="lastName" placeholder="Enter last name">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-3" for="email">E-mail: </label>
            <input type="text" class="form-control col-lg-9" id="email" placeholder="E-mail address">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-3" for="phoneNumber">Phone Number: </label>
            <input type="text" class="form-control col-lg-9" id="phoneNumber" placeholder="(###)-###-####">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-3" for="department">Department: </label>
            <input type="text" class="form-control col-lg-9" id="department" placeholder="Enter department">
        </div>
        </br>
        <br>
        <div class="input-group">
            <label class="request-label col-lg-4" for="appName">Application Name: </label>
            <input type="text" class="form-control col-lg-8" id="appName" placeholder="Search...">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-4" for="permType">Permission Type: </label>
            <input type="text" class="form-control col-lg-8" id="permType" placeholder="Search...">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-4" for="approver">Approver Name: </label>
            <input type="text" class="form-control col-lg-8" id="approver" placeholder="Search...">
        </div>
        <div class="input-group">
            <label class="request-label col-lg-4" for="reason">Reason: </label>
            <textarea id="reason" type="text" class="form-control col-lg-8" placeholder="Write something.." style="height:100px"></textarea>
        </div>


        <div class="input-group">
            <div class="container">
                <a class="" href="#"><button class="btn btn-dark float-left" type="submit" value="request-back"><h3>Back</h3></button></a>
                <button class="btn btn-dark float-right" type="submit" value="request-submit"><h3>Submit</h3></button>
            </div>
        </div>
    </form>

</div>







</body>
</html>
