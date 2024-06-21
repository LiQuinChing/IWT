<?php

include_once'config.php';

?>
<?php
$category=$_POST["field1"];
$title=$_POST["field2"];
$des=$_POST["field3"];
$loc=$_POST["field4"];
$price=$_POST["field5"];
$name=$_POST["field6"];
$phn=$_POST["field8"];

$sql="INSERT INTO adDetails(post_id, Category , Title , Description, Location,Price,Name, Phone_no) 
                        VALUES('','$category','$title','$des', '$loc', '$price', '$name', '$phn')";

//execute the query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Inserted Successfully!!')</script>";
    header ("Location: displayADdetails.php");
}else{
    echo "<script>alert ('Error in Insertion!!')</script>";
}

//close the conection
mysqli_close($conn);

?>
