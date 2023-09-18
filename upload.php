<?php
session_start();

// Check if a file was submitted through the form
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['uploadedfile'])) {
   $uploadDirectory = "/home/mercy/"; //path is wrong or permissions
   $filename = basename($_FILES['uploadedfile']['name']);

   // Check if filename is valid
   if (!preg_match('/^[\w_\.\-]+$/', $filename)) {
       echo "Invalid filename";
       exit;
   }

   // Check for allowed file types
   $allowedFileTypes = array(
       'jpg',
       'jpeg',
       'png',
       'pdf',
       'txt', 
   );
$fileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

   if (!in_array($fileType, $allowedFileTypes)) {
       echo "Invalid file type";
       exit;
   }

   $destinationPath = $uploadDirectory . $filename;

   if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $destinationPath)) {
       header("Location: upload_success.html"); // Upload success
       exit;
   } else {
       header("Location: upload_failure.html"); // Upload failure
       exit;
   }
}
?>