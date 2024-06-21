
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log in</title>
    <link rel="stylesheet" href="kstyle.css">
</head>
<body>
    <?php
      include 'headerk.php';
    
    ?>
    <div class="table">
        <h2>Login</h2>
            
        <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="User Name">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>
    </div>

    <?php
      include 'footerPay.php';
    
    ?>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $connection = new mysqli('localhost', 'root', '', 'advertise_db');

    if ($connection->connect_error) {
        die("Connection error: " . $connection->connect_error);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM registration WHERE email = ? AND password = ? LIMIT 1";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $result_set = $stmt->get_result();

    if ($result_set && $result_set->num_rows == 1) {
        $user = $result_set->fetch_assoc();
         echo "<script> alert('Login successful')</script>";
         header('Location: Homepage.php');
        
    } else {
        echo "<script> alert('Login Unsuccessful')</script>";
    }
}


?>