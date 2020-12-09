<?php
    include "connection.php";


    if(isset($_POST["submit"])){
        $lname = $_POST["lastname"];
        $fname = $_POST["firstname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        //define the sql query
        $sql = "INSERT INTO `user`(`lastname`,`firstname`,`email`,`password`) VAlUES('$lname','$fname','$email','$password')";
    
        //check the query if it is executed well
        if(mysqli_query($conn, $sql)){
            echo "Inserted new row";
            header('location: registered_output.php');
        }else {
            echo "ERROR: ". mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class = "registration">
        <img src="avatar.png" class = "avatar">
            <h1>Sign Up Here</h1>
            <form action = "index.php" method="POST">
            <p>Lastname</p>
            <input type="text" name="lastname" placeholder="Enter Lastname" required>
            <p>Firstname</p>
            <input type="text" name="firstname" placeholder="Enter Firstname" required>
            <p>Email Address</p>
            <input type="text" name="email" placeholder="Enter Email Address" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Sign Up">         
    </form>
        <div>
</body>
</html>