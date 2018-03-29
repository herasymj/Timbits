<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: ../index.php");
}
include('../Models/user.php');
$user = unserialize($_SESSION['user']);
echo $user->id;
echo $user->firstName . " " . $user->lastName;
echo $user->email;
echo $user->isApprover;
echo $user->isAnalyst;
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
    <title>Home</title>
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
        background-color: darkslategray;
        padding: 1% 1% 1% 1%;
        margin-top: 10px;
        margin-bottom: 10px ;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }

    .container-footer{
        background-color: darkslategray;
        /*width: 80%;*/
        /*padding: 1% 1% 1% 1%;*/
        /*margin-left: auto;*/
        /*margin-right: auto;*/
        /*display: flex;*/
    }

    /*.container-content{*/
    /*background-color: white;*/
    /*padding: 1% 1% 1% 1%;*/
    /*margin-bottom: 10px ;*/
    /*margin-left: auto;*/
    /*margin-right: auto;*/
    /*width: 80%;*/
    /*}*/

    .request-label{
        color: black;
        padding: 10px 0 5px 5px;
        align-items: normal;
        font-size: 20px;

        /*change color*/
    }
    .output-label{
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

<?php include_once('navbar.php'); ?>


<header class="container-header">
    <h1>REQUEST STATUS</h1>
</header>

<div class="container-content">
    <header class="container-header">
        <h3>Completed Tickets</h3>
    </header>
    <div id="competed-table">
        <!-- Responsive table starts here -->
        <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
        <div class="table-responsive-vertical shadow-z-1">
            <!-- Table starts here -->
            <table id="completedtable" class="table table-hover table-mc-light-blue">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Application Name</th>
                    <th>Request By</th>
                    <th>Approver</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td data-title="ID"><a href="#" target="_blank">123</a></td>
                    <td data-title="Application Name">Hell</td>
                    <td data-title="Request By">Brad Pitt</td>
                    <td data-title="Approver">John Wick</td>
                </tr>

                </tbody>
            </table>
        </div>


    </div>

    <br>

    <header class="container-header">
        <h3>Open Tickets</h3>
    </header>
    <div id="open-table">
        <div class="table-responsive-vertical shadow-z-1">
            <table id="opentable" class="table table-hover table-mc-light-blue">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Application Name</th>
                    <th>Request By</th>
                    <th>Approver</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td data-title="ID"><a href="#" target="_blank">123</a></td>
                    <td data-title="Application Name">Hell</td>
                    <td data-title="Request By">Brad Pitt</td>
                    <td data-title="Approver">John Wick</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>

