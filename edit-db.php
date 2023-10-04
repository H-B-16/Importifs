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
    $newEmail = $_POST['new-email'];
    $newPassword = $_POST['new-password'];
    $userid = $_SESSION['userid'];

    $query = "UPDATE credentials SET email = ?, password = ? WHERE userid = ?";
    $stmt = $con->prepare($query);

    if (!$stmt) {
        die("Error preparing query: " . $con->error);
    }

    $stmt->bind_param("ssi", $newEmail, $newPassword, $userid);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Email and password updated successfully.";
        header("Location: index.html");
    } else {
        echo "Failed to update email and password.";
    }

    $stmt->close();
}

$con->close();
?>
