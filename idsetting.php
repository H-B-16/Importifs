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

    $query = "SELECT userid, email, password FROM credentials WHERE email = ?";
    $stmt = $con->prepare($query);

    if (!$stmt) {
        die("Error preparing query: " . $con->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($userid, $email, $storedPassword);
        $stmt->fetch();

        if ($password === $storedPassword) {
            $_SESSION['userid'] = $userid;
            $_SESSION['email'] = $email;
            header("Location: homepage.html");
        } else {
            echo "Invalid Email or Password";
        }
    } else {
        echo "User not found";
    }
    $stmt->close();
}

$con->close();
?>
