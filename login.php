<?php

session_start();

$conn = new mysqli("localhost", "root", "", "login_db");

if ($conn->connect_error) {
    die("Koneksi gagal");
}

$username = $_POST["username"];
$password = $_POST["password"];

$stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 1) {

    $user = $result->fetch_assoc();

    if (password_verify($password, $user["password"])) {

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];

        header("Location: dashboard.php");
        exit();

    }

}

echo "Username atau password salah.";