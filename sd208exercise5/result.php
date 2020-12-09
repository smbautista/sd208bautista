<?php
include('helper.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <title>Document</title>
</head>
<style>
 body {
  background-image: url("veg.jpg");
  background-repeat:no-repeat;
  background-size:cover;
  color: white;
  font-family: 'Aclonica';font-size: 23px;
  margin: 0;

}
.align__item--start {
  align-self: flex-start;
}
.align__item--end {
  align-self: flex-end;
}

.site__logo {
  margin-bottom: 2rem;
}

input {
    padding:5px;
  /* border: 0;
  font: inherit; */
}
.form__field {
  margin-bottom: 1rem;

}
.form input {
  outline: 0;
  padding: .5rem 1rem;
}
.grid {
  margin: 0 auto;
  max-width: 25rem;
  width: 100%;
}
.register {
  width:100%; 
  box-shadow: 0 0 250px gray;
  text-align: center;
  padding: 4rem 2rem;
  margin-left:-2%;
} 
</style>
<body>
    <div class = "register">
    <form action="" method="POST">
    <h3>Hello, My Friend!</h3>
    <h4>Your BMI is: <?php echo $_SESSION['input'][0];?></h4>
    <h4>Equivalent: <?php echo $_SESSION['input'][1]; ?></h4>
    <input type="submit" name="back" value="Calculate Again">
    </form>
    </div>
</body>
</html>