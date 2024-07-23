<?php
include 'db.php';
session_start();

// Ambil data dari form
$npm = $_SESSION['npm'];
$candidate = $_POST['candidate'];

// Validasi data
if (empty($candidate)) {
    echo "Pilih kandidat terlebih dahulu.";
    exit();
}

// Masukkan vote ke database
$sql = "INSERT INTO votes (npm, candidate) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $npm, $candidate);

if ($stmt->execute()) {
    // Tandai bahwa pengguna telah memberikan suara
    $sql_update = "UPDATE users SET voted=1 WHERE npm=?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("s", $npm);
    $stmt_update->execute();

    // Redirect ke halaman terima kasih
    header("Location: thank_you.php");
    exit();
} else {
    echo "Gagal menyimpan vote: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
