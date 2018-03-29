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
    <title>Home</title>
</head>
<body>
<style>
    th{
      color:white

    }
    td{
      color:white

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
