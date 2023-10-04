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

$email = $_SESSION['email'];

$query1 = "SELECT userid FROM credentials WHERE email = ?";
$stmt1 = $con->prepare($query1);

if (!$stmt1) {
    die("Error preparing query 1: " . $con->error);
}

$stmt1->bind_param("s", $email);
$stmt1->execute();
$stmt1->store_result();

if ($stmt1->num_rows === 1) {
    $stmt1->bind_result($userid);
    $stmt1->fetch();

    $query2 = "SELECT email, password FROM credentials WHERE userid = ?";
    $stmt2 = $con->prepare($query2);

    if (!$stmt2) {
        die("Error preparing query 2: " . $con->error);
    }

    $stmt2->bind_param("i", $userid);
    $stmt2->execute();
    $stmt2->store_result();

    if ($stmt2->num_rows === 1) {
        $stmt2->bind_result($email, $password);
        $stmt2->fetch();
    } else {
        echo "User not found";
    }

    $stmt2->close();
} else {
    echo "User not found";
}

$stmt1->close();
$con->close();
?>
