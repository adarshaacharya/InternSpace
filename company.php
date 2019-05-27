<?php
require 'header_nav.php';
?>


         <br><br><br><br><br>

        <div class="container">
            <form action="includes/signup.inccompany.php" method="post" enctype="multipart/form-data">
                <h3 style="font-weight: bold;" class="text-primary">Company Sign Up Form</h3>
                <div class="form-group">
                    <label for="username"> Username</label>
                    <input type="text" class="form-control" id="username"  name="uid" placeholder="Company Username" required>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp"
                        placeholder="Enter email" required>
                </div>


                <div class="form-group">
                        <label for="companyName">Company Name</label>
                        <input type="text" class="form-control"name="name" placeholder="Comapny Name">
                </div>

                    <div class="form-group">
                            <label for="dateofEstd">
                                Date of Establishment
                            </label>
                            <input type="date" name="date" class="form-control">
                </div>
          

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="pwd" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword2">Re-enter Password</label>
                    <input type="password" name="rp-pwd" placeholder="Re-enter Password" class="form-control">
                </div>



                <div class="form-group">
                        <label for="about">About:</label>
                        <textarea name="about" class="form-control"></textarea>
                      </div>
                


                <div class="input-group my-3">
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input">
                            <label class="custom-file-label" for="inputGroupFile01">Upload Company's Logo</label>
                        </div>
                    </div>
    


                <!-- Newsletter -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                    <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our
                        newsletter</label>
                </div>

                <!-- Sign up button -->
                <button class="btn btn-info my-4 btn-block" type="submit" name="signup-submit">Sign up</button>


                <hr>

                <!-- Terms of service -->
                <p>By clicking
                    <em>Sign up</em> you agree to our
                    <a href="" target="_blank">terms of service</a>
                </p>

            </form>
        </div>

   

<?php
require 'footer_nav.php';
?>

