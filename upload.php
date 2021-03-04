<?php

require_once 'dbconfig.php';
// If file upload form is submitted
$target_dir = "/home/asa368/production/";
$target_file = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$imagesize = $_FILES["fileToUpload"]["size"];
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
         $insert = $db->query("INSERT into images (image,size,type,path,time) VALUES ('$target_file','$imagesize','$imageFileType','$target_dir',NOW())");
        header("Location: http://adrianatanasov.com/view.php", true, 301);
        exit();
// Display status message
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
?>