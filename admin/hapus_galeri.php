<?php
include 'layout/header.php';

if (!$_SESSION['login']) {
  header('location:login.php');
}

$id = $_GET['id'];

$query  = $conn->query("DELETE FROM galeri WHERE id_media = '$id'");

if ($query) {
  header('location:list_galeri.php');
}

?>