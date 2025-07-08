<?php
session_start();

function check_login() {
    if (!isset($_SESSION['logged_in'])) {
        header('Location: login.php');
        exit();
    }
}
?>
