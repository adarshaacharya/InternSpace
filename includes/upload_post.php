<?php
session_start();
include_once "dbh.inc.php";
$category=$_POST['category'];
$job=$_POST['job'];
$salary=$_POST['salary'];
$vacancy=$_POST['vacancy'];
$descript=$_POST['descript'];
$require=$_POST['requirement'];
$date=$_POST['date'];
$name=$_SESSION['uidusers'];
if(isset($_POST['submit-post'])){
	$sql="INSERT INTO software_engineer (job,descript,requirement,name,salary,deadline,vacancy) VALUES('$job','$descript','$require','$name','$salary','$date','$vacancy')";
	$result=mysqli_query($conn,$sql);
	if(!$result)
		header("Location: ../index.php?fileupload=failed");
	else
		header("Location: ../index.php?fileupload=success");


}
?>