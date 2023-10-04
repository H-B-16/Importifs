<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./sign-in.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
    <script src="validation.js"></script>
  </head>
  <body>
    <div class="sign-in1">
      <a href="index.html">
      <div class="vector-parent9">
        <img class="frame-child9" alt="" src="./public/rectangle-1.svg" />
        <b class="home2">Home</b>
      </div>
      </a>

      <div class="vector-parent10">
        <a href="about.html">
        <img class="frame-child9" alt="" src="./public/rectangle-1.svg" />
        <b class="home2">About</b>
      </div>
      </a>

      <div class="importifs-wrapper1">
        <b class="importifs3">IMPORTIFS</b>
      </div>

      <div class="vector-parent11">
        <img class="frame-child11" alt="" src="./public/rectangle-11.svg" />
        <b class="welcome-back1">Welcome Back!</b>
      </div>

      <img class="sign-in-child" alt="" src="./public/rectangle-11.svg" />
      <b class="sign-in2">Sign In</b>
      <div class="sign-in-item"></div>
      <div class="sign-in-inner"></div>
      <div class="rectangle-div"></div>
      <div class="sign-in-child1"></div>

      <form action="idsetting.php" method="post" onsubmit="return validateForm()">
        <div class="email-address-here">
          <input type="text" name="email" id="email" placeholder="email here"/>
        </div>
        <b class="email">Email</b>
        <div class="password-here">
          <input type="password" name="password" id="password" placeholder="password here"/>
        </div>
        <div class="sign-in-child2"></div>
        <div class="sign--child3"></div>
        <b class="password">Password</b>
        <input type="submit" name="submit" class="submit" value="Submit"/>
      </form>

      <?php
session_start();

$host = "sql302.infinityfree.com";
$username = "if0_35165801";
$password = "xo6acxzsUILxIA";
$database = "if0_35165801_credentials";

$con = new mysqli("sql302.infinityfree.com", "if0_35165801", "xo6acxzsUILxIA", "if0_35165801_credentials");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    include "idsetting.php";
}
?>

    </div>
  </body>
</html>