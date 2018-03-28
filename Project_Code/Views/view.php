<?php
include('../Models/session.php');
if(!isset($request)) {
    header("Location: home.php");
}
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCk></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>View Request</title>
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
    .container-header{
        background-color: green;
        padding: 1% 1% 1% 1%;
        margin-top: 10px;
        margin-bottom: 10px ;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
    }

    .container-footer{
        background-color: blue;
        padding: 1% 1% 1% 1%;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
    }

    .container-content{
        background-color: lightblue;
        padding: 1% 1% 1% 1%;
        margin-bottom: 10px ;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
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
    .btn-dark{
        border: 0;
        border-radius: 30px;
    }
    input[type=text],
    input[type=password]:focus{
        box-shadow:none;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-dark">
    <a class="navbar-brand"href="#">HELL <i class="fa fa-rebel" aria-hidden="true"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Login/Signup <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <li class="nav-item active">
            <a class="nav-link" href="#">Logout <span class="sr-only">(current)</span></a>
        </li>
    </div>
</nav>


<header class="container-header">
    <h1>REQUEST #:<?php echo $request->requestID ?></h1>
</header>

<div class="container-content">

</div>

<footer class="container-footer">
    <div class="container">
        <button class="btn btn-dark float-left" type="submit" value="request-back"><a href="#"><h3>Back</h3></a></button>
        <button class="btn btn-dark float-right" type="submit" value="request-approve"><a href="#"><h3>Approve</h3></a></button>
    </div>

</footer>




</body>
</html>
