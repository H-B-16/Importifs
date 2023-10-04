<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $conn = new mysqli("sql302.infinityfree.com", "if0_35165801", "xo6acxzsUILxIA", "if0_35165801_credentials");
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO credentials (email, password, hashedpass) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $password, $hashedPassword);
        $stmt->execute();
        echo "Sign up Successful, redirecting...";
        $stmt->close();
        $conn->close();
        header("Location: /website/sign-in.php");
    }
    exit();
?>
