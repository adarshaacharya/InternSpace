<?php
require 'header_nav.php';
?>

<br><br><br><br><br>
	<main>
		<h1>Sign Up</h1>
		<br><br><br>

		<?php
			if (isset($_GET['error'])) {
				if($_GET['error']=="emptyfields"){
					echo "<p>Fill in All Fields!</p>";
				}
				else if($_GET['error']=="invalidmailuid"){
					echo "<p>Invalid username and email!</p>";

				}
				else if($_GET['error']=="invalidmailuid"){
					echo "<p>Invalid username and email!</p>";
				}
				else if($_GET['error']=="invaliduid"){
					echo "<p>Invalid username </p>";

				}
				else if($_GET['error']=="invalidmail"){
					echo "<p>Invalid email!</p>";

				}
				else if($_GET['error']=="passwordcheck"){
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
		<form action="includes/signup.inc.php" method="post" enctype="multipart/form-data">
			<input type="text" name="uid" placeholder="UserName">
			<input type="text" name="mail" placeholder="Email">
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="rp-pwd" placeholder="Re-enter Password">


			<select name = "gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
			</select>
			
			Upload Image
			 Select Image File to Upload:
		    <input type="file" name="file">
		    Upload CV(PDF format):
		    <input type="file" name="cv">
		

			<button type="submit" name="signup-submit">Sign Up</button>


		</form>
	</main>

<?php
require 'footer.php';
?>

