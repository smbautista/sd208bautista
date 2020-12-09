<?php
session_start();

$error = array('firstname'=> '','lastname'=> '','email'=> '');
$regex = '/\S+@\S+\.\S+/';

if(isset($_POST['submit'])){

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$address = $_POST["address"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$address = $_POST["address"];

$totalfname = strlen($fname);
$totallname = strlen($lname);


if ($totalfname < 2 || $totalfname > 25) {
   $error['firstname'] = "*Lenght of first Name must be atleast 2 characters and not exceeded 25 characters*";
}else {
    echo $fname . "<br>";
}

if ($totallname < 2 || $totallname > 25) {
    $error['lastname'] = "*Lenght of last Name must be atleast 2 characters and not exceeded 25 characters*";
}else {
    echo $lname . "<br>";
}


if(empty($_POST['email'])){
    $error['email'] = "*Email Address is empty";
}else {

if(preg_match($regex, $_POST['email'])){
    $emailAdd = $_POST['email'];
}
else {
    $error['email'] = "*Email must be valid*"; 
}   

}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FORM VALIDATION</title>
<style>

.error {
    color:red;
    font-size:12px;
}
</style>
</head>
<body>
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form action = "index.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="First Name" name="fname" required>
                         <div class="error"><?php echo $error['firstname']; ?></div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Last Name" name="lname" required>
                            <div class="error"><?php echo $error['lastname']; ?></div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required>
                            <div class="error"><?php echo $error['email']; ?></div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Address" name="address" required>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name = "submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>