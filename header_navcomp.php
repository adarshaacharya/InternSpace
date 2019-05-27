<?php
session_start();
?>
<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Intern Space</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Raleway Font-->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <!--Normalise css -->
        <link rel="stylesheet" type="text/css" href="vendor/normalize.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

        <!--Bootstrap-->
        <link rel="stylesheet" href="./vendor/bootstrap.min.css">

        <!--MDB-->
        <link rel="stylesheet" href="./vendor/mdb.min.css">


        <!--Style css-->
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">

        <!--Media Query -->
        <link rel="stylesheet" type="text/css" href="css/responsive.css">

    </head>

    <body>
    <?php
                            if(isset($_SESSION['userid'])){
                                echo'                     ?>
    <!--Main naviagtion-->
    <div class="nav navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="container">
                <img class="navbar-brand" src="img/Logo_crop_for_nav (1).png" class="img-fluid">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
    
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">About</a>
                        </li>
    
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">Contact</a>
                        </li>
    
                      
    
                   
    

                      <form action="includes/logout.inc.php" method="post">
                        
                        <button id="navbar-static-login" class="btn btn-sm btn-info btn-rounded  waves-effect waves-light"
                        data-toggle="modal" data-target="#modalLoginForm" name="logout-submit">Log Out
                   </form>
                    </a>
                    </ul>
                </div>
            </div>
        </div>




    
    
   
        <br><br><br><br><br>
';}
                            else{
                                echo' <!--Main naviagtion-->
    <div class="nav navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="container">
                <img class="navbar-brand" src="img/Logo_crop_for_nav (1).png" class="img-fluid">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
    
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">About</a>
                        </li>
    
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">Contact</a>
                        </li>
    
                      
    
                   
    

                      
                        <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sign Up
                                      </button>
    
                                      <div class="dropdown-menu">
                                            <a class="dropdown-item" href="user.php">User</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="company.php">Company</a>
                                          </div>
                        </div>

                        <a id="navbar-static-login" class="btn btn-sm btn-info btn-rounded  waves-effect waves-light"
                        data-toggle="modal" data-target="#modalLoginForm">Log In
                   
                    </a>
                    </ul>
                </div>
            </div>
        </div>




    
    <form action="includes/login.inc.php" method="post">
    
    <!--Modal for Login Form-->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="text" id="defaultForm-email" class="form-control validate"name="mailuid">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your username</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="defaultForm-pass" class="form-control validate" name="pwd">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass" >Your password</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default" type="submit" name="login-submit">Login</button>
                </div>
            </div>
        </div>
    </div>

    </form>
        <br><br><br><br><br>
';

                            }
                            
                        ?>
   
