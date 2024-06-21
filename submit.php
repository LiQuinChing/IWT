<?php
include 'config.php';
?>

<?php

$fname = $_POST["name"];
$lname = $_POST["lname"];
$telephone = $_POST["telephone"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql="INSERT INTO complaint(
   
    first_name,
    last_name,
    telephone,
    email,
    message)
    VALUES(
     '$fname',
     '$lname',
     '$telephone',
     '$email',
     '$message'
)";

if(mysqli_query($conn,$sql)){
    echo"<script>alert('Record Inserted Successfully')</script>";
    header("location:compdetails.php");
}
else{
     echo"<script>alert('Error occured when inserting data.please try again')</script>";
}

mysqli_close($conn);

?>