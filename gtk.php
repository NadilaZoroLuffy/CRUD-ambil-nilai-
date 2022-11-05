<?php

require 'koneksi.php';

$get = mysqli_query($conn, "SELECT * FROM gtk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nama GTK</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<header id="header">
    <div class="profile">
        <img src="foto/jp.jpg" alt="foto logo jp" class="img-fluid rounded-circle">
        <h1 class="text-light">SMK Jakarta Pusat-1</h1>
        <div class="social-links text-center mt-3">
            <a href="#" class="instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#" class="facebook">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="#" class="linkedin">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="#" class="github">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="#" class="tik-tok">
                <i class="fa-brands fa-tiktok"></i>
            </a>
        </div>
    </div>
    <div class="nav-menu navbar">
        <ul>
            <li><a href="#home"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="resepsionis.php"><i class="fa-solid fa-user"></i> Resepsionis</a></li>
            <li><a href="gtk.php"><i class="fa-solid fa-sharp fa-file"></i> GTK</a></li>
        </ul>
    </div>
</header>
<main id="main">
    <section id="about" class="about">
        <div class="container">
            <div class="section-tittle">
                <h2>Menu Utama GTK</h2>
                <p>Ini Adalah Menu GTK yaa</p>
            </div>
            <div class="row">
                <div class="col-lg-4">

                <div class="maino col-lg-8">
        <h3 class="data">Selamat Datang</h3>
        <div class="main">
        <h3 class="data"> Di Data GTK</h3>
        <a href="tambahGTK.php" class="tambah">Tambah GTK</a>

    <table border="1" cellpadding="10" cellspacing="0" class="tabl">
        <tr>
            <td>No.</td>
            <td>Nama lengkap</td>
            <td>Job</td>
            <td>Roles</td>
            <td>Foto</td>
            <td>Opsi</td>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($get as $guru) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $guru["nama_lengkap"]; ?></td>
                <td><?= $guru["job"]; ?></td>
                <td><?= $guru["roles"]; ?></td>
                <td><img src="foto/<?= $guru["foto"]; ?>" width="60px"></td>
                <td>
                    <a href="edit_gtk.php?id=<?= $guru["id_gtk"]; ?>" class="btn-login">Edit</a>
                    <a href="hapus_gtk.php?id=<?= $guru["id_gtk"]; ?>" onClick="return confirm('Anda Yakin Menghapus Data Ini??')" class="btn-login-2">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
    </table>
        </div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>