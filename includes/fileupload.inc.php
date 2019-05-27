<?php
if (isset($_POST['submit-file'])) {
	$file = isset($_FILES['file']);

	$file_name = $file['name'];
	$file_tmpname = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];
	$file_type = $file['type'];

	$file_ext = explode('.',$file_name);
	$file_act_ext = strtolower(end($file_ext));

	$allowed = array('jpg','jpeg','png','pdf');

		if(in_array($file_act_ext,$allowed)){
			if ($file_error===0) {
				if ($file_size < 1000000) {
					$file_name_new = uniqid('',true).".".$file_act_ext;//so every image has different name
					$file_dest= '../uploads/'.$file_name_new;
					move_uploaded_file($file_tmpname,$file_dest);
					header('Location: ../index.php?upload=success');
				}
				else{
					echo "File too large! (Must be < 1MB)";
				}
			}
			else{
				echo'Error in Uploading!';
			}
			
		}
		else{
			echo 'Cannot Upload Files of this type!';
		}

}