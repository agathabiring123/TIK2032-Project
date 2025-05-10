<?php
include 'databaseconfig.php';

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Validasi
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check === false) {
    die("File bukan gambar.");
}

if ($_FILES["fileToUpload"]["size"] > 2000000) {
    die("Ukuran file terlalu besar (maks 2MB).");
}

$allowed = ['jpg', 'jpeg', 'png', 'gif'];
if (!in_array($imageFileType, $allowed)) {
    die("Hanya file JPG, JPEG, PNG, GIF yang diizinkan.");
}

// Simpan file
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // Simpan nama file ke database
    $filename = basename($_FILES["fileToUpload"]["name"]);
    $sql = "INSERT INTO upload (filename) VALUES ('$filename')";
    $conn->query($sql);

    echo "Upload berhasil!<br>";
    echo "<img src='$target_file' width='300'>";
} else {
    echo "Upload gagal.";
}
?>