<?php
session_start();
if(isset($_POST['login-submit'])){
	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	//var_dump($mailuid);

	if(empty($mailuid)||empty($password)){
		header("Location: ../user.php?error=emptyfields");
		exit();
	}
	else{
		//$sql = "SELECT `uidusers` AND `pwdusers` FROM `users` WHERE '$uidusers'='$mailuid' and $pwdusers='$password' or select uidusers and pwdusers from company WHERE $uidusers='$mailuid' and $pwdusers='$password'";


		$sql = "SELECT * FROM `company` WHERE `uidusers` = '$mailuid'";
		$result=mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				var_dump($row);
				//session_start();
				$_SESSION['uidusers'] = $row['uidusers'];
				$_SESSION['type']='company';
				//$_SESSION['useruid'] = $row['uidusers'];
				$_SESSION['login']=true;
				header("Location: ../index.php?login=success");
			}
		}
		else{
			$sql = "SELECT * FROM `users` WHERE `uidusers` = '$mailuid'";
			$result=mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)){
					var_dump($row);

					$_SESSION['uidusers'] = $row['uidusers'];
					$_SESSION['type']='user';
					//$_SESSION['useruid'] = $row['uidusers'];
					$_SESSION['login']=true;
					header("Location: ../index.php?login=success");
				}
			}
		}


		//$sql2 = "SELECT `uidusers` AND `pwdusers` FROM `users`";

		//$result=mysqli_query($conn,$sql);

		/*if(!$result){
		}
		else{
			
			session_start();
			$_SESSION['userid'] = $row['idusers'];
			$_SESSION['useruid'] = $row['uidusers'];
			$_SESSION['login']=true;
			header("Location: ../user.php?login=success");
			//exit();
		}*/
	}
}

else{
	header("Location: ../user.php");
	exit();
}
