<?php
session_start();
include('../Models/user.php');
require '../Models/dbConfig.php';
if(!isset($_SESSION['user'])){
    header("location: ../index.php");
}
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
                </tr>
                </thead>
                <tbody>
                <?php
                    $closedQuery = "SELECT * FROM `Permission Requests` WHERE USER_ID = '$user->id' AND IS_OPEN = '0'";
                    $closedResult = mysqli_query($db, $closedQuery);
                    $i = 5;
                    while($row = mysqli_fetch_array($closedResult)){
                        $i-=1;
                        //Get App name
                        $appid = $row['APPLICATION_ID'];
                        $app1Query = "SELECT * from Applications WHERE APP_ID = '$appid'";
                        $app1Result = mysqli_query($db, $app1Query);
                        $appRow1 = mysqli_fetch_array($app1Result,MYSQLI_ASSOC);
                        echo "<tr>";
                            echo "<td data-title=\"ID\"><a href=\"../Controllers/openRequest.php?id=". $row['REQUEST_ID'] . "\" target=\"_blank\">" . $row['REQUEST_ID'] . "</a></td>";
                            echo "<td data-title=\"Application Name\">" . $appRow1['APP_NAME'] . "</td>";
                            echo "<td data-title=\"Request By\">" . $user->firstName . " " . $user->lastName . "</td>";
                         echo "</tr>";
                         if($i == 0){
                             break;
                         }
                    }
                ?>
                </tbody>
            </table>
        </div>


    </div>

    <?php
        if($user->isAnalyst == 1 || $user->isApprover == 1){
            echo "<br>";

            echo "<header class=\"container-header\">";
                echo "<h3>Need Approval</h3>";
            echo "</header>";
           echo " <div id=\"open-table\">";
               echo " <div class=\"table-responsive-vertical shadow-z-1\">";
            echo "<table id=\"opentable\" class=\"table table-hover table-mc-light-blue\">";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Application Name</th>";
            echo "<th>Request By</th>";
            echo "</tr>";
            echo "</thead>";
            echo " <tbody>";
            $approveQuery = "SELECT * FROM `Permission Requests` WHERE (APPROVER_ID = '$user->id' AND APPROVER_APPROVED = '0' AND ANALYST_APPROVED = '1') OR (ANALYST_ID = '$user->id' AND (ANALYST_APPROVED = '0' OR (APPROVER_APPROVED = '1' AND IS_OPEN = '1')))";
            $approvedResult = mysqli_query($db, $approveQuery);
            $i = 5;
            while($row = mysqli_fetch_array($approvedResult)){
                $i-=1;
                //Get App name
                $appid = $row['APPLICATION_ID'];
                $app1Query = "SELECT * from Applications WHERE APP_ID = '$appid'";
                $app1Result = mysqli_query($db, $app1Query);
                $appRow1 = mysqli_fetch_array($app1Result,MYSQLI_ASSOC);
                //Get user's name
                $uID = $row['USER_ID'];
                $uQuery = "SELECT * from Users WHERE USER_ID = '$uID'";
                $uResult = mysqli_query($db, $uQuery);
                $uRow = mysqli_fetch_array($uResult,MYSQLI_ASSOC);
                echo "<tr>";
                echo "<td data-title=\"ID\"><a href=\"../Controllers/openRequest.php?id=". $row['REQUEST_ID'] . "\" target=\"_blank\">" . $row['REQUEST_ID'] . "</a></td>";
                echo "<td data-title=\"Application Name\">" . $appRow1['APP_NAME'] . "</td>";
                echo "<td data-title=\"Request By\">" . $uRow['FIRST_NAME'] . " " . $uRow['LAST_NAME'] . "</td>";
                echo "</tr>";
                if($i == 0){
                    break;
                }
            }

                     echo "</tbody>";
                    echo "</table>";
                echo "</div>";
            echo "</div>";
        }

    ?>

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
                </tr>
                </thead>
                <tbody>
                <?php
                $openQuery = "SELECT * FROM `Permission Requests` WHERE USER_ID = '$user->id' AND IS_OPEN = '1'";
                $openResult = mysqli_query($db, $openQuery);
                $i = 5;
                while($row = mysqli_fetch_array($openResult)){
                    $i-=1;
                    //Get App name
                    $appid = $row['APPLICATION_ID'];
                    $app1Query = "SELECT * from Applications WHERE APP_ID = '$appid'";
                    $app1Result = mysqli_query($db, $app1Query);
                    $appRow1 = mysqli_fetch_array($app1Result,MYSQLI_ASSOC);
                    echo "<tr>";
                    echo "<td data-title=\"ID\"><a href=\"../Controllers/openRequest.php?id=". $row['REQUEST_ID'] . "\" target=\"_blank\">" . $row['REQUEST_ID'] . "</a></td>";
                    echo "<td data-title=\"Application Name\">" . $appRow1['APP_NAME'] . "</td>";
                    echo "<td data-title=\"Request By\">" . $user->firstName . " " . $user->lastName . "</td>";
                    echo "</tr>";
                    if($i == 0){
                        break;
                    }
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>
