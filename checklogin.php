<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
  header("Location: /website/homepage.php");
  exit();
}
?>