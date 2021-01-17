<?php
include("config.php");
$email = "";
$password = "";
$firstname = "";
$lastname = "";
$error = false;
$loginOK = null;

if (isset($_POST["login"])) {
  if (isset($_POST["email"])) $email = $_POST["email"];
  if (isset($_POST["password"])) $password = $_POST["password"];
  if (empty($email) || empty($password)) {
    $error = true;
  }
  if (!$error) {
    $sql = "select password from login where email='$email'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
    if ($row) {
      if (strcmp($password, $row["password"]) == 0) {
        $loginOK = true;
      } else {
        $loginOk = false;
      }
    }
    if ($loginOK) {
      session_start();
      $_SESSION["email"] = $email;
      $_SESSION["password"] = $password;
      Header("Location:index2.php.");
    }
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
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <header id="login-head"><a href="index.php">Kandy Buy </a><i class='fas fa-desktop' style="font-size:1.75rem"></i></header>
    <div class="Log-in-form">
      <h1>Sign-In</h1>
      <input type="email" class="input-box" placeholder="Your email" name="email" value="<?php if (!empty($email)) echo $email; ?>" /><?php if ($error && empty($email)) echo "<span class='errlabel'> Please enter your email</span>"; ?>
      <input type="password" class="input-box" placeholder="Your Password" name="password" value="<?php if (!empty($password)) echo $password; ?>" /><?php if ($error && empty($password)) echo "<span class='errlabel'> Please enter your password</span>"; ?>
      <p><span><input type="checkbox"></span> Remember me</p>
      <?php if (isset($_POST["login"]) && ($loginOK == false) || $error) echo "<span class='errlabel'>email and the password does not match</span>"; ?>
      <button type="submit" class="login-btn" name="login">Sign In</button>
      <hr>
      <p class="or">OR</p>
      <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>
  </form>

  <footer class="container-fluid text-center">
    <p>Copyright @ 2021 Kandy</p>
    <div id="foot">
      <form class="form-inline">
        <div style="margin-right:5px">Get deals:</div>
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