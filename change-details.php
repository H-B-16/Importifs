<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="change-details.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
    <script src="validate-new.js"></script>
  </head>
  <body>
    <div class="change-details">
      <div class="vector-parent">
        <a href="about-after-login.html">
        <img class="frame-child2" alt="" src="./public/rectangle-1.svg" />
        <b class="about">About</b>
        </a>
      </div>
      <div class="vector-group">
        <a href="your-account.php">
        <img class="frame-child3" alt="" src="./public/rectangle-12.svg" />
        <b class="your-account">Your Account</b>
        </a>
      </div>
      <div class="importifs-wrapper">
        <b class="importifs">IMPORTIFS</b>
      </div>
      <a href="homepage.html">
      <img class="home-icon-1" alt="" src="./public/home-icon-1@2x.png" />
</a>
      <form action="edit-db.php" method="post" onsubmit="return validateForm()">
        <div class="change-details-child"></div>
        <div class="change-details-item">
          <input type="text" name="new-email" id="email" placeholder="new email here"/>
        </div>
        <b class="change-email">Change email</b>
        <div class="change-details-inner">
          <input type="text" name="new-password" id="password" placeholder="new password here"/>
        </div>
        <b class="change-password">Change password</b>
        <div class="rectangle-parent">
        <input type="submit" name="submit" class="submit" value="Submit"/>

</a>
        </div>
      </form>
    </div>
  </body>
</html>
