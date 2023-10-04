<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./add-contact.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="add-contact">
      <div class="frame-div">
        <a href="about-after-login.html">
        <img class="frame-inner" alt="" src="./public/rectangle-1.svg" />
        <b class="about1">About</b>
        </a>
      </div>
      <div class="vector-parent1">
        <a href="your-account.php">
        <img class="group-child2" alt="" src="./public/rectangle-12.svg" />
        <b class="your-account2">Your Account</b>
        </a>
      </div>
      <div class="vector-parent2">
        <a href="contacts.php">
        <img class="group-child3" alt="" src="./public/rectangle-11.svg" />
        <b class="contacts">Contacts</b>
        </a>
      </div>
      <div class="importifs-container">
        <b class="importifs1">IMPORTIFS</b>
      </div>
      <a href="homepage.html">
      <img class="home-icon-11" alt="" src="./public/home-icon-1@2x.png" />
      </a>
      <div class="add-contact-child"></div>
      <form action="adding-contacts.php" method="post">
      <div class="add-contact-inner">
        <div class="rectangle-div"><input type="text" name="name" id="name" placeholder="name here"/></div>
      </div>
      <div class="add-contact-inner1">
        <div class="rectangle-div"><input type="number" name="number" id="number" placeholder="number here"/></div>
      </div>
      <div class="add-contact-inner2">
        <div class="rectangle-div">
          <select name="role" id="role">
            <option value="Family">Family</option>
            <option value="Close Friends">Close Friends</option>
            <option value="Friends">Friends</option>
            <option value="Professional">Professional</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
      <div class="rectangle-group">
        <div class="group-child6"></div>
        <input type="submit" name="submit" class="submit" value="Submit"/>
      </div>
      </form>

      <?php
      session_start();
      $host = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";

      $con = new mysqli("localhost", "root", "", "contacts");

      if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }

      if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $role = $_POST['role'];
        include "adding-contacts.php";
      }
      ?>

      <b class="name">Name</b>
      <b class="number">Number</b>
      <b class="role">Role</b>
      <div class="rectangle-container">
        <div class="group-child7"></div>
        <b class="please-insert-your-container">
          <span class="please-insert-your-container1">
            <p class="please-insert-your">
              Please insert your contact’s name, number and choose a role from:
            </p>
            <p class="please-insert-your">
              Family / Close Friends / Friends / Professional / Other
            </p>
          </span>
        </b>
      </div>
    </div>
  </body>
</html>
