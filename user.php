

<?php
require 'header_nav.php';
if (isset($_GET['error'])) {
                
            
                if($_GET['error']=="passwordcheck"){
                    echo "<p>Passwords donot match!</p>";

                }
                else if($_GET['error']=="usertaken"){
                    echo "<p>Username Taken</p>";

                }

            }
            else if(isset($_GET['signup'])){
                echo 'Success!';
            }
?>
        <br><br><br><br><br>

        <div class="container">
            <form method="post" action="includes/signup.inc.php" enctype="multipart/form-data">
                <h3 style="font-weight: bold;" class="text-primary">User Sign Up Form</h3>
                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="uid" placeholder="Enter username..." required>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp"
                        placeholder="Enter email.." required>
                </div>

              
                    
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="pwd" id="exampleInputPassword1"
                        placeholder="Enter password..">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword2">Re-enter Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" name="rp-pwd" placeholder="Re-enter Password..."
                        required>
                </div>


                <label>Gender</label>
                <select name = "gender">
                <option style="padding:10px;"value="male">Male</option>
                <option style="padding:10px;"value="female">Female</option>
                </select>

            <br>
            Upload Image

            <input type="file" name="file"><br>
            Upload CV(PDF format):
            <input type="file" name="cv">
        

                <!-- Newsletter -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                    <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our
                        newsletter</label>
                </div>

                <!-- Sign up button -->
                <button class="btn btn-info my-4 btn-block" type="submit"name="signup-submit">Sign up</button>


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