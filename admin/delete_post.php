<?php include '../includes/db.php'; include '../includes/auth.php'; ?>
<?php
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: dashboard.php");
?>
