<?php
require 'config/db_connect.php';
require 'config/function.libs.php';
?>



<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>Website Kesenet</title>
  <link rel="stylesheet" href="assets\css\main.css">
  <link rel="stylesheet" href="assets/css/fonts.css">
  <link rel="stylesheet" href="assets\css\fontawesome-all.css">
  <link rel="stylesheet" href="assets\icofont\icofont.min.css">
  <script src="script.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
  <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

  </head>
  <body>

    <header>
    <!-- <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="navbar-brand">
            <a href="index.php">
                <img src="img/logo.png" alt="Logo">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="visi-misi.php">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="sejarah-desa.php">Sejarah Desa</a></li>
                        <li><a class="dropdown-item" href="#">Geografis Desa</a></li>
                        <li><a class="dropdown-item" href="demografi.php">Demografi Desa</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle" href="berita.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kondisi Desa
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="keadaan-sosial.php">Keadaan Sosial</a></li>
                        <li><a class="dropdown-item" href="keadaan-ekonomi.php">Keadaan Ekonomi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle" href="galeri.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kondisi Pemerintahan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="lembaga-pemerintahan.php">Lembaga Pemerintahan</a></li>
                        <li><a class="dropdown-item" href="lembaga-kemasyarakatan.php">Lembaga Kemasyarakatan</a></li>
                        <li><a class="dropdown-item" href="pembagian-wilayah.php">Pembagian Wilayah</a></li>
                        <li><a class="dropdown-item" href="struktur-organisasi.php">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galeri.php">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="berita.php">Artikel</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->


<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="profile.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="visi-misi.php">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="sejarah-desa.php">Sejarah Desa</a></li>
            <li><a class="dropdown-item" href="#">Geografis Desa</a></li>
            <li><a class="dropdown-item" href="demografi.php">Demografi Desa</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kondisi Desa
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="keadaan-sosial.php">Keadaan Sosial</a></li>
            <li><a class="dropdown-item" href="keadaan-ekonomi.php">Keadaan Ekonomi</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kondisi Pemerintahan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="lembaga-pemerintahan.php">Lembaga Pemerintahan</a></li>
            <li><a class="dropdown-item" href="lembaga-kemasyarakatan.php">Lembaga Kemasyarakatan</a></li>
            <li><a class="dropdown-item" href="pembagian-wilayah.php">Pembagian Wilayah</a></li>
            <li><a class="dropdown-item" href="struktur-organisasi.php">Struktur Organisasi</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galeri.php">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="berita.php">Artikel</a>
        </li>
      </ul>
    </div>
  </div>
</nav>







    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <div class="clear"></div> -->
