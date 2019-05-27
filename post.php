<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Intern Space</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

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
                        <a href="index.html" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>


                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">New
                        Post</button>

                    <button class="btn btn-sm btn-danger">Log Out</button>



                </ul>



            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">New Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">

                    <div class="md-form mb-3">
                        <label for="">Job Category</label>
                        <input type="text" class="form-control validate">

                    </div>

                    <div class="md-form mb-3">
                        <label for="">No. of Vacancy</label>
                        <input type="text" class="form-control validate">

                    </div>

                    <div class="md-form mb-3">
                        <label for="">Offered Salary</label>
                        <input type="number" class="form-control validate">

                    </div>


                    <div class="md-form mb-3">
                        <label for="">Job Description</label>
                        <input type="text" class="form-control validate">

                    </div>


                    <div class="md-form mb-3">
                        <label for="">Requirements</label>
                        <input type="text" class="form-control validate">

                    </div>

                    <div class=" mb-3">
                        <label for="">Deadline :</label>
                        <input type="date" class="form-control validate">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary  btn-sm">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <!--post section-->
    <section id="categories" class="p-2 bg-success text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1><i class="fa fa-sitemap"></i> Categories</h1>
                </div>
            </div>
        </div>
    </section>
    <!--Post search-->


    <!--Post search-->
    <section class="p-3 animated jello">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!--empty-->
                </div>
                <div class="col-md-6">
                    <form class="form-inline md-form form-sm mt-0">

                        <input class="form-control form-control-sm ml-3 w-50" type="text" placeholder="Search.."
                            aria-label="Search">

                        <button class="btn btn-success">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="p-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h1>Categories</h1>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>S.N.</th>

                                        <th>Category</th>

                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>

                                        <td>Software Engineer</td>

                                        <td>
                                            <a href="details.html" target="_blank"
                                                class="btn btn-outline-success btn-sm">Details<i
                                                    class="fa fa-arrow-alt-circle-right"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>

                                        <td>Web Developer</td>

                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-sm">Details<i
                                                    class="fa fa-arrow-alt-circle-right"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>

                                        <td>Android or iOS Developer</td>

                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-sm">Details<i
                                                    class="fa fa-arrow-alt-circle-right"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>

                                        <td>SEO Manager</td>

                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-sm">Details<i
                                                    class="fa fa-arrow-alt-circle-right"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>

                                        <td>Sales and Marketing</td>

                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-sm">Details<i
                                                    class="fa fa-arrow-alt-circle-right"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>

                                        <td>Banking</td>

                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-sm">Details<i
                                                    class="fa fa-arrow-alt-circle-right"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>

                                        <td>Movie and Cinematography</td>

                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-sm">Details<i
                                                    class="fa fa-arrow-alt-circle-right"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>

                                        <td>Management</td>

                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-sm">Details<i
                                                    class="fa fa-arrow-alt-circle-right"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>9</td>

                                        <td>Data Analyst</td>

                                        <td>
                                            <a href="#" class="btn btn-outline-success btn-sm">Details<i
                                                    class="fa fa-arrow-alt-circle-right"></i></a>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
    </section>








    <!--Main footer-->
    <footer id="main-footer" class="py-3 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    Copyright &copy; <span id="year"></span> <br>
                    Buld and Maintained by Intern Space
                </div>
            </div>
        </div>
    </footer>







    <!--Jquery JS-->
    <script src="vendor/jquery-3.3.1.min.js"></script>

    <!--Bootstrap JS-->
    <script src="vendor/bootstrap.min.js"></script>

    <!--Popper JS-->
    <script src="vendor/popper.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="./vendor/mdb.min.js"></script>

    <!--Custom JS -->
    <script src="js/custom.js"></script>


    <script>
        //JS Code Here

        $(".form_datetime").datetimepicker({
            format: "dd MM yyyy - hh:ii"
        });
    </script>

</body>

</html>