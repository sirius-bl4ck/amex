<?php
session_start();
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = true;
    header("location: index.php");
}