<?php
include '../includes/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $res = $stmt->get_result();
    $admin = $res->fetch_assoc();

    if ($admin && password_verify($pass, $admin['password'])) {
        $_SESSION['logged_in'] = true;
        header("Location: dashboard.php");
    } else {
        echo "Złe dane logowania";
    }
}
?>
<form method="post">
    <input name="username" placeholder="login">
    <input name="password" type="password" placeholder="hasło">
    <button>Zaloguj</button>
</form>
