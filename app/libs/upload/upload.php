<?php 
if(!empty($_FILES)){ 
    // Include the database configuration file 
   // require 'dbConfig.php'; 
     
    // File path configuration 
    $uploadDir = "uploads/"; 
    $fileName = basename($_FILES['file']['name']); 
    $uploadFilePath = $uploadDir.$fileName; 
     
    // Upload file to server 
    if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)){ 
        echo $fileName;
    } 
} 
?>