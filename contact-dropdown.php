<?php
session_start();

$host = "sql302.infinityfree.com";
$username = "if0_35165801";
$password = "xo6acxzsUILxIA";
$database = "if0_35165801_contacts";

$con = new mysqli("sql302.infinityfree.com", "if0_35165801", "xo6acxzsUILxIA", "if0_35165801_contacts");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$userid = $_SESSION['userid'];

$contactQuery = "SELECT * FROM contacts WHERE userid = ?";
$stmt = $con->prepare($contactQuery);
$stmt->bind_param("i", $userid);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    $contactsArray = [];
    while ($row = $result->fetch_assoc()) {
        print_r($row);
        $contactsArray[] = $row;
    }
} else {
    echo "Error fetching contacts: " . $stmt->error;
}

$stmt->close();
$con->close();
?>