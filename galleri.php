<?php
include 'databaseconfig.php';

$result = $conn->query("SELECT filename FROM uploads ORDER BY uploaded_at DESC");

echo "<h2>Galeri Portofolio</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<img src='uploads/{$row['filename']}' width='200' style='margin:10px'>";
}
?>