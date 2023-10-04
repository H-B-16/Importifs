<?php
session_start();

$host = "sql302.infinityfree.com";
$username = "if0_35165801";
$password = "xo6acxzsUILxIA";
$database = "if0_35165801_contacts";

$con = new mysqli("sql302.infinityfree.com", "if0_35165801", "xo6acxzsUILxIA", "if0_35165801_contacts");
if ($con->connect_error) {
    die("Econnection failed: " . $con->connect_error);
}

$userid = $_SESSION['userid'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $role = $_POST['role'];

    $contactquery = "INSERT INTO contacts (userid, name, number, role) VALUES (?,?,?,?)";
    $stmt = $con->prepare($contactquery);
    $stmt->bind_param("isss", $userid, $name, $number, $role);

    if ($stmt->execute()) {
        echo "Contact added successfully";
        header("Location: contacts.php");
    } else {
        echo "Failure. Try again!";
        header("Location: add-contact.php");
    }
}