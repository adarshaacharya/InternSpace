<?php

include_once "includes/dbh.inc.php";
require 'header_nav.php';
?>
<br><br><br><br>
    <section id="job-details" class="p-3">
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
                                            <?php
                                                $sql="select * from software_engineer";
                                                $result=mysqli_query($conn,$sql);
                                            ?>
                                            <th>Job</th>
                                            <th>Company</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $counter = 0;
                                            foreach ($result as $key => $data) {
                                               $counter++;
                                            

                                        ?>
                                        <tr>
                                            <td><?php
                                            echo $data['job']?></td>
                                            <td><?php
                                            echo $data['name']?></td>
    
                                            <td>
                                                <button href="details.html" target="_blank"
                                                    class="btn btn-outline-success btn-sm " data-toggle="modal"
                                                    data-target="#details-page_<?php echo $counter; ?>">Details<i
                                                        class="fa fa-arrow-alt-circle-right"></i></button>
                                            </td>
                                        </tr>
                                        <?php
                                            
                                        }
                                        ?>
                                    </tbody>
    
                                </table>
    
                            </div>
                        </div>
                    </div>


           

        </section>
    
                <?php
                    $counter = 0;
                    foreach ($result as $key => $datta) {
                        $counter++;
                        ?>
                            <!-- Modal -->
                            <div class="modal fade" id="details-page_<?php echo $counter; ?>" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">
                                                <p class="text-info">
                                                    Company Name : <?php 
                                                   
                                                        echo $datta['name'];
                                                    ?>
                                                </p>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="font-weight-bold"> 
                                                Job Category : <?php echo "Software Engineering";?>
                                            </p>
                                            <hr>
                                         

                                            <p class="font-weight-bold"> 
                                                No. of Vacancy/s : <?php echo $datta['vacancy'];?>
                                            </p>   
                                            <hr>
                                            <p class="font-weight-bold"> 
                                                Offered Salary : <?php echo $datta['salary'];?>
                                            </p>
                                            <hr>
                                        
                                            <p class="font-weight-bold"> 
                                                Job Description : <?php echo $datta['descript'];?>
                                            </p>
                                            <hr>
                                            <p class="font-weight-bold"> 
                                                Requirements : <?php echo $datta['requirement'];?>
                                            </p>
                                            <hr>

                                            <p class="font-weight-bold"> 
                                                Apply Before(Deadline) : <?php echo $datta['deadline'];?>
                                            </p>
                                            <hr>
                                        
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#secondPopup">Apply Now</button>
                                        </div>

                                    </div>
                                </div>
                            </div>



                                        <!-- Modal -->
                            <div class="modal fade" id="secondPopup" tabindex="-1" role="dialog" aria-labelledby="secondModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                              <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="secondModalLabel">Compose Email</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                               
                                <!-- Default form login -->
<form class=" border border-light p-5">

   <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email Subject</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
  </div>


  <div class="alert alert-success" role="alert">
  Your CV has been uploaded!
</div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Write your Application Letter</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
    <!-- Sign in button -->
    <a class="btn btn-info btn-block my-4" href="index.php">Send Email</a>

   

</form>
<!-- Default form login -->
                         </div>
                             
                            </div>
                 </div>
                </div>
                        <?php
                    }
                ?>
    
      <br>  <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br>
    


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