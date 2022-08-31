<?php

use function PHPSTORM_META\sql_injection_subst;

require "../database/db.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST["submit"])){
    
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
                    
                    $filePath = 'images/'.$fNameFinal;

                    move_uploaded_file($fTmpName, $filePath);

                    // header("location: image_form.php?SuccessfullyUploaded")
                } else {
                    echo "File Size too large. try again <br>";
                }
            } else {
                echo "There was an error while uploading the file <br>";
            }
        } else {
            echo "Invalid File Extension. Try again! <br>";
        }

        $enroll = intval($_POST["enroll"]); /* String -> Integer */
        $fName = $_POST["firstName"];
        $lName = $_POST["lastName"];
        $email = $_POST["email"];
        $password = password_hash($_POST["codeWord"], PASSWORD_DEFAULT);
        $branch = $_POST["branch"];
        $gender = $_POST["gender"];
        $image_url = $filePath;

        $sub1 = $_POST["sub1"];
        $sub2 = $_POST["sub2"];
        $sub3 = $_POST["sub3"];
        $sub4 = $_POST["sub4"];
        $sub5 = $_POST["sub5"];

        $sql_students = "INSERT INTO `students` (`enroll`, `first_name`, `last_name`, `email`, `password`, `branch`, `gender`, `photo`) VALUES ('$enroll', '$fName', '$lName', '$email', '$password', '$branch', '$gender', '$image_url')";

        $sql_subjects = "INSERT INTO `subjects` (`enroll`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`) VALUES ('$enroll', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5')";

        $result_students = mysqli_query($connection, $sql_students);
        $result_subjects = mysqli_query($connection, $sql_subjects);
      
        if($result_students == true && $result_subjects == true){
            echo "<h5> Data Inserted Into Database Successfully! <br> <h5>";
            echo "<a href=\"../index.php\"> Go to home page! </a>";
        } else {
            echo "Data insertion failed due to an unexpected error".mysqli_error($connection);
        }
    }
}

?>