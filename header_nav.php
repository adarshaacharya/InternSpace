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
    if (isset($_SESSION['uidusers'])) {

        ?>
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
                        <?php
                        if ($_SESSION['type'] == 'company') {
                            ?>

                            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">New
                                Post</button>
                        <?php
                    }
                    ?>

                        <form action="includes/logout.inc.php" method="post">

                            <button id="navbar-static-login" class="btn btn-sm btn-info btn-rounded  waves-effect waves-light" data-toggle="modal" data-target="#modalLoginForm" name="logout-submit">Log Out
                        </form>

                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">New Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <form action="includes/upload_post.php" method="post">
                            <div class="form-group mb-3">
                                <label for="">Job</label>
                                <input type="text" class="form-control validate" name='job'>

                            </div>

                            <div class="form-group  mb-3">
                                <label for="">Job Category</label>
                                <br>
                                <select name="category">
                                    <option value="software engineer">software engineer</option>
                                    <option value="WebDeveloper">Web Developer</option>
                                    <option value="SeoManagr">SEO Manager</option>
                                    <option value="Management">Management</option>
                                </select>
                            </div>

                            <div class="form-group  mb-3">
                                <label for="">No. of Vacancy</label>
                                <input type="text" class="form-control" name="vacancy">
                            </div>

                            <div class="form-group  mb-3">
                                <label for="">Offered Salary</label>
                                <input type="number" class="form-control" name="salary">

                            </div>


                            <div class="form-group  mb-3">
                                <label for="">Description</label>
                                <input type="text" name="descript" class="form-control">

                            </div>

                            <div class="form-group mb-3">
                                <label for="">Requirements</label>
                                <input type="text" name="requirement" class="form-control">

                            </div>

                            <div class="form-group mb-3">
                                <label for="">Deadline :</label>
                                <input type="date" class="form-control" name="date">

                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary  btn-sm" name="submit-post">Save changes</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>







    <?php } else { ?>
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

                        <a id="navbar-static-login" class="btn btn-sm btn-info btn-rounded  waves-effect waves-light" data-toggle="modal" data-target="#modalLoginForm">Log In

                        </a>
                    </ul>
                </div>
            </div>
        </div>





        <form action="includes/login.inc.php" method="post">

            <!--Modal for Login Form-->
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <input type="text" id="defaultForm-email" class="form-control validate" name="mailuid">
                                <label data-error="wrong" data-success="right" for="defaultForm-email">Your username</label>
                            </div>

                            <div class="md-form mb-4">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" class="form-control validate" name="pwd">
                                <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-default" type="submit" name="login-submit">Login</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    <?php
}
?>