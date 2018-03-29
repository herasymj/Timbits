<?php
session_start();
include('../Models/user.php');
include('../Models/request.php');
if(!isset($_SESSION['user'])){
    header("location: ../index.php");
}
if(!isset($_SESSION['request'])){
    header("location: ../home.php");
}

$user = unserialize($_SESSION['user']);
$request = unserialize($_SESSION['request']);

//status: analyst, approver, permission, closed
$status = "";
//whether to display buttons or not depending on user looking at this request
$buttons = "";
//determine where we're at here
if($request->isOpen == 0){
    $status = "Request closed.";
}
else if($request->permissionGranted == 1){
    $status = "Waiting on request to be closed.";
    if($user->id == $request->analystID){
        $buttons = "<button class=\"btn btn-dark pull-right \" type=\"submit\" value=\"request-approve\"><a href=\"../Controllers/approve.php\"><i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i> Close Request</a></button>";
    }
}
else if($request->approverApproved == 1){
    $status = "Waiting on permissions to be given.";
    if($user->id == $request->analystID){
        $buttons = "<button class=\"btn btn-dark pull-right \" type=\"submit\" value=\"request-approve\"><a href=\"../Controllers/approve.php\"><i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i> Permissions Set</a></button>";
    }
}
else if($request->analystApproved == 1){
    $status = "Waiting on approver approval.";
    if($user->id == $request->approverID){
        $buttons = "
        <button class=\"btn btn-dark float-left\" type=\"submit\" value=\"request-back\"><a href=\"../Controllers/deny.php\"><i class=\"fa fa-frown-o\" aria-hidden=\"true\"></i> Deny</a></button>
        <button class=\"btn btn-dark pull-right \" type=\"submit\" value=\"request-approve\"><a href=\"../Controllers/approve.php\"><i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i> Approve</a></button>";
    }
}
else{
    $status = "Waiting on analyst approval.";
    if($user->id == $request->analystID){
        $buttons = "<button class=\"btn btn-dark float-left\" type=\"submit\" value=\"request-back\"><a href=\"../Controllers/deny.php\"><i class=\"fa fa-frown-o\" aria-hidden=\"true\"></i> Deny</a></button>
        <button class=\"btn btn-dark pull-right \" type=\"submit\" value=\"request-approve\"><a href=\"../Controllers/approve.php\"><i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i> Approve</a></button>";
    }
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
      //padding: 0 10 0 10;
      width: 100px;

    }
</style>

<?php include_once('navbar.php'); ?>

<header class="container-header">
    <h1>REQUEST #<?php echo $request->requestID; ?></h1>
</header>
<div class="container-content">
    <div class="input-group">
        <label class="request-label col-sm-6" for="firstName">Name: </label>

        <output class="output-label  " type="text" class="form-control col-lg-9" id="name"><?php echo $request->name; ?></output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="email">E-mail: </label>
        <output class="output-label" type="text" class="form-control col-lg-9" id="email"><?php echo $request->email; ?></output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="phoneNumber">Phone Number: </label>
        <output class="output-label" type="text" class="form-control col-lg-9" id="phoneNumber"><?php echo $request->contactNum; ?></output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="department">Department: </label>
        <output class="output-label" type="text" class="form-control col-lg-9" id="department"><?php echo $request->department; ?></output>
    </div>
    <br>

    <div class="input-group">
        <label class="request-label col-sm-6" for="appName">Application Name: </label>
        <output class="output-label" type="text" class="form-control col-lg-8" id="appName"><?php echo $request->appName; ?></output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="permType">Permission Type: </label>
        <output class="output-label" type="text" class="form-control col-lg-8" id="permType"><?php echo $request->permissionType; ?></output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="approver">Approver Name: </label>
        <output class="output-label" type="text" class="form-control col-lg-8" id="approver"><?php echo $request->approver; ?></output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="reason">Reason: </label>
        <textarea-output id="reason" type="text" class="form-control col-lg-8" style="height:100px"><?php echo $request->reason; ?></textarea-output>
    </div>
    <div class="input-group">
        <label class="request-label col-sm-6" for="status">Status: </label>
        <output class="output-label" type="text" class="form-control col-lg-8" id="status"><?php echo $status; ?></output>
    </div>
    <div class="position-absolute">
    <div class="container-footer">
        <?php echo $buttons; ?>
    </div>
</div>
</body>
</html>
