<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
} else {
    echo ('You are logged in as ' . $_SESSION["role"]);

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<a href='logout.php'>logout</a>";
}
