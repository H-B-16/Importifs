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
if (isset($_POST['userid'])) {
  $userid = $_POST['userid'];
}

$query = ("SELECT email, password FROM credentials WHERE userid = $userid");
$result = $con->query($query);

if (!$result) {
    die("Error executing query: " . $con->error);
}

if ($row = $result->fetch_assoc()) {
    $email = $row["email"];
    $password = $row["password"];
} else {
    $email = "Email not found";
    $password = "Password not found";
}

$con->close();
?>