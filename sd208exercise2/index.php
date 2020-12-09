<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Chicle' rel='stylesheet'>
    <title>SIGNUP/LOGIN FORM </title>

</head>

<body>
    <?php
    session_start();
    
    if (isset($_POST['login'])) {
        $_SESSION["email"] = $_POST['email'];

        header('location: ./blink.php');
    }

    if(isset($_POST['start'])){
        $_SESSION["fname"] = $_POST['email'];
        $_SESSION["lname"] = $_POST['lname'];
        $_SESSION["address"] = $_POST['address'];
    }
?>

    <div class="form">

        <ul class="tab-group">
            <li class="tab active ">
                <a href="#signup ">Sign Up</a>
            </li>
            <li class="tab ">
                <a href="#login">Log In</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="signup">
                <h2>Sign Up for Free</h2>

                <form action="./index.php" method="post" id="signupForm">

                    <div class="top-row">
                        <div class="field-wrap">
                            <input type="text" required autocomplete="off" name="fname" placeholder="First Name" />
                        </div>

                        <div class="field-wrap">
                            <input type="text" required autocomplete="off" name="lname" placeholder="Last Name" />
                        </div>
                    </div>

                    <div class="field-wrap">
                        <input type="text" required autocomplete="off" name="address" placeholder="Address" />
                    </div>

                    <div class="field-wrap">
                        <input type="email" required autocomplete="off" name="email" placeholder="Email Address" />
                    </div>

                    <div class="field-wrap">
                        <input type="email" required autocomplete="off" name="confirm_add"
                            placeholder="Confirm Email Address" />
                    </div>

                    <div class="field-wrap">
                        <input type="password" required autocomplete="off" name="password" placeholder="Password" />
                    </div>

                    <div class="field-wrap">
                        <input type="password" required autocomplete="off" name="confirm_pass"
                            placeholder="Confirm Password" />
                    </div>

                    <button type="submit" class="button button-block" name="start">Get Started </button>

                </form>

            </div>

            <div id="login">
                <h2>Welcome Back!</h2>

                <form action="./index.php" method="post">

                    <div class="field-wrap">
                        <input type="email" required autocomplete="off" name="email" placeholder="Email Address"
                            value="<?php echo $_SESSION['email']?>" />
                    </div>

                    <div class="field-wrap">
                        <input type="password" required autocomplete="off" name="passwd" placeholder=" Password" />
                    </div>

                    <p class="forgot"><a href="#">Forgot Password?</a></p>
                    <button class="button button-block" name="login">Log In</button>

                </form>

            </div>
        </div><!-- tab-content -->
    </div> <!-- /form -->
    <!-- link to jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- link to javascript-->
    <script src="main.js"></script> --


</body>

</html>