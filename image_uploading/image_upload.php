<?php
include_once "../db.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
   if(isset($_POST["upload"])){
    $fName = $_FILES["file"]["name"];
    $fTmpName = $_FILES["file"]["tmp_name"];
    $fSize = $_FILES["file"]["size"];
    $fError = $_FILES["file"]["error"];
    $fType = $_FILES["file"]["type"];

   $fExtension =  explode('.', $fName);
   $fRealExtension = strtolower(end($fExtension));

   $legal = array('jpg','jpeg', 'png', 'pdf');

   if(in_array($fRealExtension, $legal)){
       if($fError === 0){
          if($fSize < 1000000){
             $fNameFinal = uniqid('', true).".".$fRealExtension;
             
             $filePath = 'uploads/'.$fNameFinal;

             move_uploaded_file($fTmpName, $filePath);

             header("location: image_form.php?SuccessfullyUploaded");
          } else {
            echo "File Size too large. try again <br>";
          }
       } else {
        echo "There was an error while uploading the file <br>";
       }
   } else {
    echo "Invalid File Extension. Try again! <br>";
   }

   }
}

?>