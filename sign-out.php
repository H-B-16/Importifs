<?php
if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    unset($_SESSION['logged']);
    header("Location: index.html");
    exit();
}
?>