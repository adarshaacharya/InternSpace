<?php
if(isset($_POST['signup-submit'])){
	require 'dbh.inc.php';

	$username = $_POST['uid'];
	$email= $_POST['mail'];
	$password= $_POST['pwd'];
	$password_rpt= $_POST['rp-pwd'];
	$gender = $_POST['gender'];
	$targetDir = "uploads/";
	$targetDirCV= "uploads/cv/";
	$fileName = basename($_FILES["file"]["name"]);
	$cv=basename($_FILES["cv"]["name"]);
	$cvpath=$targetDirCV . $cv;
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	$cvtype = pathinfo($cvpath,PATHINFO_EXTENSION);




	if (empty($username)|| empty($email)||empty($password)||empty($password_rpt)) {

		header("Location: ../user.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
			header("Location: ../user.php?error=invalidmailuid");
			exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header("Location: ../user.php?error=invalidmail&uid=".$username);
		exit();
	}	
	else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location: ../user.php?error=invaliduid&mail=".$email);
		exit();
	}
	else if($password !== $password_rpt){
		header("Location: ../user.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	}
		
	else{

		$sql = "SELECT uidusers FROM users WHERE uidusers=?";
		$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location:../user.php?error=sqlerror");
			exit();
			}	

			else{
				mysqli_stmt_bind_param($stmt,"s",$username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);

				if($resultCheck>0){
				header("Location:../user.php?error=usertaken&mail=".$email);
				exit();
				}
				else{
					if(!empty($_FILES["file"]["name"]) && !empty($_FILES["cv"]["name"])){
							 $allowTypes = array('jpg','png','jpeg','gif');
   							 $allowTypesCV=array('pdf');
							if(in_array($fileType, $allowTypes) && in_array($cvtype, $allowTypesCV)){
								if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath) && move_uploaded_file($_FILES["cv"]["tmp_name"], $cvpath)){
									$sql = "INSERT INTO users (uidusers,emailusers,pwdusers,gender,file_name,cv) VALUES(?,?,?,?,?,?)";
										$stmt = mysqli_stmt_init($conn);
											if (!mysqli_stmt_prepare($stmt,$sql)) {
											header("Location:../user.php?error=sqlerror");
											exit();
											}
											else{
												$hash=password_hash($password, PASSWORD_DEFAULT);
												mysqli_stmt_bind_param($stmt,"ssssss",$username,$email,$hash,$gender,$fileName,$cv);
												mysqli_stmt_execute($stmt);
												header("Location:../index.php?user=success");
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
header("Location:../user.php");
exit();

}


