<?php
if(isset($_POST['signup-submit'])){
    require 'dbh.inc.php';
    
    $name= $_POST['name'];
    $username = $_POST['uid'];
    $email= $_POST['mail'];
    $password= $_POST['pwd'];
    $password_rpt= $_POST['rp-pwd'];
    $date = $_POST['date'];
    $about=$_POST['about'];
    $targetDir = "uploads/company/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 
 
 
 
    if (empty($username)|| empty($email)||empty($password)||empty($password_rpt) || empty($about) ||empty($name)) {
 
        header("Location: ../company.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
            header("Location: ../company.php?error=invalidmailuid");
            exit();
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: ../company.php?error=invalidmail&uid=".$username);
        exit();
    }  
    else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../company.php?error=invaliduid&mail=".$email);
        exit();
    }
    else if($password !== $password_rpt){
        header("Location: ../company.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
       
    else{
 
        $sql = "SELECT uidusers FROM company WHERE uidusers=?";
        $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location:../company.php?error=sqlerror");
            exit();
            }  
 
            else{
                mysqli_stmt_bind_param($stmt,"s",$username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
 
                if($resultCheck>0){
                header("Location:../company.php?error=usertaken&mail=".$email);
                exit();
                }
                else{
                    if(!empty($_FILES["file"]["name"])){
                             $allowTypes = array('jpg','png','jpeg','gif');
                            if(in_array($fileType, $allowTypes) ){
                                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath) ){
                                    $sql = "INSERT INTO company (uidusers,emailusers,pwdusers,about,estd,file_name,name) VALUES(?,?,?,?,?,?,?)";
                                        $stmt = mysqli_stmt_init($conn);
                                            if (!mysqli_stmt_prepare($stmt,$sql)) {
                                            header("Location:../company.php?error=sqlerror");
                                            exit();
                                            }
                                            else{
                                                $hash=password_hash($password, PASSWORD_DEFAULT);
                                                mysqli_stmt_bind_param($stmt,"sssssss",$username,$email,$hash,$about,$date,$fileName,$name);
                                                mysqli_stmt_execute($stmt);
                                                header("Location:../index.php?signup=success");
                                            }
 
                                }
                            }
                        }
                    }      
                }          
            }  
       
   
   
    //file upload script
   
 
 
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
 
}  
else{
header("Location:../signup.php");
exit();
 
}