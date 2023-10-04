<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./your-account.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="your-account1">
      <div class="vector-container">
        <a href="about-after-login.html">
        <img class="frame-child2" alt="" src="./public/rectangle-1.svg" />
        <b class="about1">About</b>
        </a>
      </div>
      <div class="frame-div">
        <a href="your-account.php">
        <img class="frame-child3" alt="" src="./public/rectangle-12.svg" />
        <b class="your-account2">Your Account</b>
      </div>
      <div class="importifs-container">
        <b class="importifs1">IMPORTIFS</b>
      </div>
      <a href="homepage.html">
      <img class="home-icon-11" alt="" src="./public/home-icon-1@2x.png" />
      </a>
      <div class="rectangle-group">
        <div class="group-item"></div>
        <b class="email">Email</b>
        <b class="password">Password</b>
        <div class="group-inner"><?php include "displayacc.php"; echo $email?></div>
        <div class="rectangle-div"><?php echo $password?></div>
      </div>
      <div class="group-div">
        <a href="change-details.php">
        <img class="group-child1" alt="" src="./public/rectangle-11.svg" />
        <b class="change-account-details">Change account details</b>
      </div>
      <div class="vector-parent1">
        <img class="group-child1" alt="" src="./public/rectangle-11.svg" />
        <a href="sign-out.php?logout=true">
        <b class="change-account-details">Sign Out</b>
        </a>
      </div>
    </div>
  </body>
</html>
