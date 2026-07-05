<?php

include "config.php";

$username = "admin";
$password = password_hash("123456", PASSWORD_DEFAULT);

$sql = "INSERT INTO users(username,password)
VALUES(?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ss",$username,$password);

$stmt->execute();

echo "User berhasil dibuat";