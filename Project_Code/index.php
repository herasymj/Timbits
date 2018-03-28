<?php

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCk></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
<style>


    body {
        width: 100%;
        height: 100%;
        background-color: #222;
        border-color: #080808;
    }
    .home{
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .item{
        width: 500px;
        height: 500px;
        background: #fff;

    }

    .in{
        padding: 15px;

    }
    .text-center{
        padding: 15px;

    }
    .logo{
        width: 90px;
        height: 90px;
        border-radius: 100%;
        margin: 0 auto;
        border: 3px solid #94979c;
        color: #94979c;
        margin-bottom: 20px;
        padding: 2px;
        line-height: 90px;
        color: #eee;
    }
    .logo h1{
        font-weight: 300;
        font-size: 40px;
        padding: 20px;
        align-items: center;
        justify-content: center;
        display: flex;
        color: #eee;
    }
    input[type=text],
    input[type=password]{
        background: 0 0;
        border: 0;
        box-shadow: none;
        border-bottom: 1px solid #afb5c1;
        border-radius: 0;



    }
    .lg{
        margin-bottom: 20px;
    }
    .input.group.addon{
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






    /* Tabs*/
    section {
        background: #222;
        border-color: #080808;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) }





    }


    #tabs{
        background-color: #222;
        border-color: #080808;
        color: #eee;
    }


    #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #f3f3f3;
        background-color: transparent;
        border-color: transparent transparent #f3f3f3;
        border-bottom: 4px solid !important;
        font-size: 20px;
        font-weight: bold;

        display: flex;
        align-items: center;
        justify-content: center;
    }
    #tabs .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: #eee;
        font-size: 20px;

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
                                <input type="text" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="input-group lg">
                                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" placeholder="Enter password">
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
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <div class="input-group-addon lg" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                                                <input type="text" name="name" class="form-control" id="name"
                                                       placeholder="John Doe" required autofocus>
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
<!-- ./Tabs -->
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>

