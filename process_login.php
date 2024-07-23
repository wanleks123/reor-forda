<?php
include 'db.php';
session_start();

$npm = $_POST['npm'];
$password = $_POST['password'];

// Password yang diharapkan
$expected_password = 'Forda2024';

if ($password === $expected_password) {
    $sql = "SELECT * FROM users WHERE npm=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $npm);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user['voted'] == 0) {
            $_SESSION['npm'] = $npm;
            header("Location: vote.php");
            exit();
        } else {
            header("Location: already_voted.php");
            exit();
        }
    } else {
        header("Location: login.php?error=NPM tidak terdaftar.");
        exit();
    }

    $stmt->close();
} else {
    header("Location: login.php?error=Password salah.");
    exit();
}

$conn->close();
?>
