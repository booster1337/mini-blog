<?php include 'includes/db.php'; ?>
<?php
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$post = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title><?= $post['title'] ?></title></head>
<body>
<h1><?= $post['title'] ?></h1>
<p><?= $post['content'] ?></p>
<a href="index.php">← Powrót</a>
</body>
</html>
