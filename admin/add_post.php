<?php include '../includes/db.php'; include '../includes/auth.php'; ?>
<form method="post">
    <input name="title" placeholder="Tytuł"><br>
    <textarea name="content" placeholder="Treść posta"></textarea><br>
    <button>Dodaj</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();
    header("Location: dashboard.php");
}
?>
