<?php 

session_start();

if (isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $_SESSION["userGreeting"] = $_POST["username"];

    if ( $username == "zidan.hamid@ogr.sakarya.edu.tr" && $password == 123) {
        $_SESSION['login'] = true;

        header("Location: index.php");
        exit;
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

     <!--  Bootstrap css file  -->

    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    


</head>
<body>
  <!-- ============================== Login Container Basligi ============================== -->
  
  <div class="d-flex justify-content-center align-items-center login-container">
    <form class="login-form text-center" method="POST">
      <h1 class="mb-5 font-weight-light text-uppercase">Login</h1>
      <div class="form-group">
        <input type="email"  name="username" id="username" class="form-control rounded-pill form-control-lg" placeholder="Username">
      </div>
      <div class="form-group">
        <input type="password" name="password" id="password" class="form-control rounded-pill form-control-lg" placeholder="password">
      </div>
      <div class="forgot-link form-group d-flex justify-content-between align-items-center">
        <div class="form-check">
          <?php if ( isset($error) ) : ?>
          <p style="color: red; font-style: italic;">wrong username/password !</p>
          <?php endif; ?>
        </div>
      </div>
      <button type="submit" name="login" class="btn btn-custom btn-block rounded-pill btn-lg">Login</button>
    </form>
  </div>

</body>
</html>