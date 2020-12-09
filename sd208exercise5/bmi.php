

<?php
include('helper.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <title>BMI CALCULATOR</title>

</head>
<style>

* {
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  background-image: url("veg.jpg");
  background-repeat:no-repeat;
  background-size:cover;
  color: white;
  font-family: 'Aclonica';font-size: 23px;
  margin: 0;
  min-height: 100%;
}

.align {
  align-items: center;
  display: flex;
  flex-direction: row;
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
  /* border: 0;
  font: inherit; */
}
input::placeholder {
  color: #7e8ba3;
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
<body class="align">

  <div class="grid align__item">

    <div class="register">

      <h3>Calculate Your Body Mass Index</h3>
      <form action="" method="post" class="form">

        <div class="form__field">
          <input type="number" name="height" placeholder="Enter height" required>
        </div>

        <div class="form__field">
          <input type="number" name="mass" placeholder="Enter mass"required>
        </div>

        <div class="form__field">
          <input type="submit" name="submit" value="Calculate" >
        </div>

      </form>

    </div>

  </div>
</body>

</html>
