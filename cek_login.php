<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($mysqli, "SELECT * FROM users WHERE username='$username' AND password='$password'");

$aName1 = mysqli_fetch_assoc($data);
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $role = $aName1['role'];
    $_SESSION["role"] = $role;
    $_SESSION["login"] = true;
    header("Location: dashboard.php");
} else {
    print("You are unauthorized");
    header("location: index.php");
}
