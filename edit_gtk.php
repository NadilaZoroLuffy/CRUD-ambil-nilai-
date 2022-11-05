<?php
session_start();

require 'functions.php';

$id = $_GET["id"];
$data = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];

if(isset($_POST["submit"])){
    if(edit_gtk($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil diubah');
            window.location = 'gtk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal diubah');
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
    <title>Edit GTK</title>
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
                <h2>Menu Resepsionis</h2>
                <p>Ini Adalah Menu Resepsionis</p>
            </div>
            <div class="row">
                <div class="col-lg-4">

                <div class="maino col-lg-8">
        <h3>Data Resepsionis</h3>
        <div class="main">
        <div class="ediitrp">    
            <h3>Edit Data Resepsionis</h3>
        <div class="row">
                <div class="box">
                    
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_gtk" value="<?= $data["id_gtk"]; ?>"> <br>

                        <label for="nama_lengkap">nama lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" value="<?= $data["nama_lengkap"]; ?>"><br>
            
                        <label for="job">job</label>
                        <input type="text" name="job" class="form-control" value="<?= $data["job"]; ?>"><br>
            
                        <label for="foto">foto</label>
                        <input type="file" name="foto" class="form-control" value="<?= $data["foto"]; ?>"><br>
            
                        <label for="roles">roles</label>
                        <select name="roles" class="form-control" value="<?= $data["roles"]; ?>"><br>
                            <option value="kepala sekolah">kepala sekolah</option>
                            <option value="wakil kepala sekolah">wakil kepala sekolah</option>
                            <option value="guru">guru</option>
                        </select><br>
            
                        <button type="submit" class="btn-login-4" name="submit">kirim</button>
                    </form>
                </div>
        </div>
        
    </div>
    
</body>
</html>