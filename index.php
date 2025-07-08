<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
</head>
<body>
<h1>Blog</h1>
<?php
$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
while ($row = $result->fetch_assoc()) {
    echo "<h2><a href='post.php?id={$row['id']}'>{$row['title']}</a></h2>";
    echo "<p>{$row['created_at']}</p>";
}
?>
</body>
</html>
