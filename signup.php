<?php
  include("config.php");

  $email = "";
  $password = "";
  $firstname = "";
  $lastname = "";
  $error = false;

  if (isset($_POST["signup"])) {
      if(isset($_POST["email"])) $email=$_POST["email"];
      if(isset($_POST["password_1"])) $password_1=$_POST["password_1"];
      if(isset($_POST["password_2"])) $password_2=$_POST["password_2"];
      if(isset($_POST["firstname"])) $firstname=$_POST["firstname"];
      if(isset($_POST["lastname"])) $lastname=$_POST["lastname"];

      if (!empty($email) && !empty($password_1) && !empty($password_2) && !empty($firstname) && !empty($lastname) && ($password_1=$password_2))
      {
          $sql = "insert into login (email,password,firstname,lastname) values('$email','$password_1','$firstname','$lastname')";
          $result = mysqli_query($conn,$sql);
          Header("Location:index2.php.");            
      }
      else {
          $error = true;
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="all">
    <header id="login-head"><a href="index.php">Kandy Buy </a><i class='fas fa-desktop' style="font-size:1.75rem"></i></header>
    <div class="Log-in-form">
        <h1> Sign Up</h1>
        <form method = "POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="email" class="input-box" placeholder="Your email" name="email" value="<?php if(!empty($email)) echo $email; ?>" /><?php if($error && empty($email)) echo "<span class='errlabel'> Please enter your email</span>";?>
        <input type="password" class="input-box" placeholder="Your Password" name="password_1" value="<?php if(!empty($password_1)) echo $password_1; ?>" /><?php if($error && empty($password_1)) echo "<span class='errlabel'> Please enter your password</span>";?>
        <input type="password" class="input-box" placeholder="Re-type Password" name="password_2" value="<?php if(!empty($password_2)) echo $password_2; ?>" /><?php if($error && empty($password_2)) echo "<span class='errlabel'> Please enter your re-enter password</span>";?>
        <input type="text" class="input-box" placeholder="First Name" name="firstname" value="<?php if(!empty($firstname)) echo $firstname; ?>" /><?php if($error && empty($firstname)) echo "<span class='errlabel'> Please enter your first name</span>";?>
        <input type="text" class="input-box" placeholder="Last Name" name="lastname" value="<?php if(!empty($lastname)) echo $lastname; ?>" /><?php if($error && empty($lastname)) echo "<span class='errlabel'> Please enter your last name</span>";?>
        <p><span><input type="checkbox"></span> I agree with the terms and sevices</p>
        <button type="submit" class="login-btn" name="signup">Sign Up</button>
        <hr>
        <p class="or">OR</p>
        <p>Already have an account? <a href="login.php">Sign In</a></p>
        </form>
    </div>
        <footer class="container-fluid text-center">
            <p>Copyright @ 2021 Kandy</p>
            <div id="foot">
            <form class="form-inline"><div style="margin-right:5px">Get deals:</div>
              <input type="email" class="form-control" size="50" placeholder="email Address" style="margin-right:5px">
              <button type="button" class="btn btn-danger">Sign Up</button>
            </form>
            </div>
          </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>
