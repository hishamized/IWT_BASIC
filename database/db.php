<?php 
$server = "localhost";
$username = "root";
$password = "";
$db_name = "iwt"; 

$connection = mysqli_connect($server, $username, $password, $db_name);

if($connection){
    echo "<h4> Connection Successfull! </h4> <br> ";
    echo ("<strong>Connected To Database : $db_name </strong> <br>");
}else{
    echo "<h2> Connection  Failed!</h2>".mysqli_connect_error($connection); 
}

?>