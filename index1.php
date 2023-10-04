<?php include 'checklogin.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"/>
  </head>
  <body>
  <div class="login-sign-up">
    <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) : ?>
      <a href="homepage.html">
    <?php else : ?>
      <a href="index1.php">
    <?php endif; ?>
    <div class="vector-parent">
        <img class="frame-child" alt="" src="./public/rectangle-1.svg" />
        <b class="home">Home</b>
      </div>
      </a>
      <div class="vector-group">
        <a href="about.php">
        <img class="frame-child" alt="" src="./public/rectangle-1.svg" />
        <b class="home">About</b>
      </div>
    </a>
      <div class="vector-container">
        <img class="frame-inner" alt="" src="./public/rectangle-11.svg" />
        <b class="welcome">Welcome!</b>
      </div>
      <div class="frame-div">
        <a href="sign-in.html">
        <img class="frame-inner" alt="" src="./public/rectangle-11.svg" />
        <b class="welcome">Sign In</b>
      </div>
      </a>
      <div class="vector-parent1">
        <a href="sign-up.html">
        <img class="frame-inner" alt="" src="./public/rectangle-11.svg" />
        <b class="welcome">Sign Up</b>
      </div>
      </a>
      <div class="importifs-wrapper">
        <b class="importifs">IMPORTIFS</b>
      </div>
    </div>
  </body>
</html>