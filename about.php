<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./about.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body>
  <div class="about2">
    <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) : ?>
      <a href="homepage.html">
    <?php else : ?>
      <a href="index1.php">
    <?php endif; ?>
      <div class="vector-parent6">
        <img class="frame-child6" alt="" src="./public/rectangle-1.svg" />
        <b class="home1">Home</b>
      </div>
    </a>
    <div class="vector-parent7">
        <a href="about.php">
        <img class="frame-child6" alt="" src="./public/rectangle-1.svg" />
        <b class="home1">About</b>
      </div>
    </a>
      <div class="importifs-frame">
        <b class="importifs2">IMPORTIFS</b>
      </div>
      <div class="vector-parent8">
        <img class="frame-child8" alt="" src="./public/rectangle-11.svg" />
        <b class="welcome-back">Welcome Back!</b>
      </div>
      <div class="importifs-is-a-website-that-al-wrapper">
        <b class="importifs-is-a"
          >Importifs is a website that allows you to import contacts and
          organise them into 5 main importance roles - Family, Close Friends,
          Friends, Professional and Other, all of which are displayed from top
          to bottom respectively. Furthermore, the website allows you to assign
          reminders to specific contacts. These reminders are auto-sorted
          according to the importance role the contact has.
        </b>
      </div>
    </div>
  </body>
</html>