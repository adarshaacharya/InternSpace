<?php
// Include the database configuration file
include 'dbh.inc.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$targetDirCV= "uploads/cv/";
$fileName = basename($_FILES["file"]["name"]);
$cv=basename($_FILES["cv"]["name"]);
$cvpath=$targetDirCV . $cv;
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$cvtype = pathinfo($cvpath,PATHINFO_EXTENSION);
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"]) && !empty($_FILES["cv"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    $allowTypesCV=array('pdf');
    if(in_array($fileType, $allowTypes) && in_array($cvtype, $allowTypesCV)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath) && move_uploaded_file($_FILES["cv"]["tmp_name"], $cvpath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into users (file_name, cv) VALUES ('".$fileName."','".$cv."' )");
            if($insert){
                $statusMsg = "The file ".$fileName. " and ".$cv." has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'File Format Incompatible';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>