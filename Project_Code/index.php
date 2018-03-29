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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCk"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="Views/style.css" type="text/css" />
    <title>Login</title>

</head>
<body>

<style>
.btn-dark{
    border: 0;
    border-radius: 30px;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-dark">
    <a class="navbar-brand"href="#">HELL <i class="fa fa-rebel" aria-hidden="true"></i></a>

</nav>
<!--  end navbar -->
<section id="tabs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-login" aria-selected="true">Login</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-signup" aria-selected="false">Signup</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <!--login--->
                        <form method="post" action="Controllers/login.php" class="form-horizontal">
                            <div class="logo">
                                <h1><i class="fa fa-reddit-alien" aria-hidden="true"></i></h1>
                            </div>
                            <div class="input-group lg">
                                <span class="input-group-addon"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email1" placeholder="Enter email">
                            </div>
                            <div class="input-group lg">
                                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password1" placeholder="Enter password">
                            </div>
                            <div class="form-group in">
                                <input type="submit" class="btn btn-dark btn-block" value = "Login">
                            </div>
                        </form>
                            <!-- end login -->
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="container">
                            <form class="form-horizontal" role="form" method="POST" action="Controllers/signUp.php">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <h2>Register</h2>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 field-label-responsive">
                                        <label for="name">First Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <div class="input-group-addon lg" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                                                <input type="text" name="firstName" class="form-control" id="firstName"
                                                       placeholder="John" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-control-feedback">
                                    <span class="text-danger align-middle">
                                        <!-- Put name validation error messages here -->
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 field-label-responsive">
                                        <label for="name">Last Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <div class="input-group-addon lg" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                                                <input type="text" name="lastName" class="form-control" id="lastName"
                                                       placeholder="Doe" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-control-feedback">
                                    <span class="text-danger align-middle">
                                        <!-- Put name validation error messages here -->
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 field-label-responsive">
                                        <label for="email">E-Mail</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <div class="input-group-addon lg" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                                                <input type="text" name="email" class="form-control" id="email"
                                                       placeholder="you@example.com" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-control-feedback">
                                    <span class="text-danger align-middle">
                                        <!-- Put e-mail validation error messages here -->
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 field-label-responsive">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <div class="input-group-addon lg" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                                                <input type="password" name="password" class="form-control" id="password"
                                                       placeholder="Enter password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-control-feedback">
                              <span class="text-danger align-middle">
                                  <!-- Put password validation error messages here -->
                              </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 field-label-responsive">
                                        <label for="password">Confirm Password</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <div class="input-group-addon lg" style="width: 2.6rem">
                                                    <i class="fa fa-repeat"></i>
                                                </div>
                                                <input type="password" name="password-confirmation" class="form-control"
                                                       id="password-confirm" placeholder="Re-enter password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-user-plus"></i> SignUp</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
