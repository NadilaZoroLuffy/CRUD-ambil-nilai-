<?php 
require 'functions.php';

if(isset($_POST["kirim"])){
    if(tambahGTK($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data Gtk Berhasil Ditambahkan')
            window.location = 'gtk.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Gtk Gagal Ditambahkan')
            window.location = 'gtk.php';
    </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data gtk</title>
    <link rel="stylesheet" href="style.css">
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
                <h2>Menu GTK</h2>
                <p>Ini Adalah Menu GTK</p>
            </div>
            <div class="row">
                <div class="col-lg-4">

                <div class="maino col-lg-8">
        <h3>Data GTK</h3>
<div class="main">
    <div class="boxs">
        <h3>Tambah Data gtk</h3>

        <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama_lengkap">Nama lengkap</label><br><br>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control-1"><br>

        <label for="job">Job</label><br><br>
            <input type="text" name="job" id="job" class="form-control-1"><br>
            
            <select name="roles" id="roles" class="form-control-1"><br><br>
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                <option value="Guru">Guru</option>
            </select><br>
            <label for="foto">Foto</label><br><br>
            <input type="file" name="foto" id="foto" class="form-control-1"><br>

                <button tytpe="submit" name="kirim" class="btn-login-3">Tambah</button>
        </form>
    </div>
</div>
</body>
</html>