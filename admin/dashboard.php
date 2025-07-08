<?php include '../includes/db.php'; include '../includes/auth.php'; ?>
<h2>Panel admina</h2>
<a href="add_post.php">+ Dodaj nowy post</a> | <a href="logout.php">Wyloguj</a>
<hr>
<?php
$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
while ($row = $result->fetch_assoc()) {
    echo "<h3>{$row['title']} 
    <a href='edit_post.php?id={$row['id']}'>[Edytuj]</a> 
    <a href='delete_post.php?id={$row['id']}'>[Usuń]</a></h3>";
}
?>
