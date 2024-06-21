<?php
	include_once 'config.php';
?>

<?php
	$fn = $_POST["firstname"];
	$ln = $_POST["lastname"];
	$email = $_POST["email"];
	$pw = $_POST["password"];
	$contactno = $_POST["mobilenumber"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];

    $sql = "INSERT INTO registration (Firstname,Lastname,Gender,Email,Password,Mobile,Country) VALUES ('$fn','$ln','$gender','$email','$pw','$contactno','$country')";

    if (mysqli_query($conn, $sql)){
		echo "<script>alert ('Record inserted successfully')</script>";
        header("Location: signup.php");
	}	
	else {
		echo "<script>alert ('Error in insertion')</script>";
	}	
	
	//close the connection
	mysqli_close($conn);
?>    