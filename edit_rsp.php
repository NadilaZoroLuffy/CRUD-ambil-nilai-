<?php 

require 'functions.php';

$id = $_GET["id"];
$Rsp = query("SELECT * FROM resepsionis WHERE id_resepsionis = '$id'")[0];

if(isset($_POST["kirim"])){
    if(edit_rsp($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data Resepsionis berhasil diubah');
            window.location = 'resepsionis.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Resepsionis gagal ditambahkan');
            window.location = 'resepsionis.php';
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
    <title>Edit gtk</title>
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

        <form action="" method="POST">
            <input type="hidden" name="id_resepsionis" value="<?= $Rsp["id_resepsionis"]; ?>"><br><br>

            <label for="username">Username</label> 
            <input type="text" name="username" id="username" class="form-control" value="<?= $Rsp["username"]; ?>"><br><br>

            <label for="nama_lengkap">Nama Lengkap</label> 
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $Rsp["nama_lengkap"]; ?>"><br><br>

            <label for="kelas">Kelas</label> 
            <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $Rsp["kelas"]; ?>"><br><br>

            <label for="password">Password</label> 
            <input type="password" name="password" id="password" class="form-control" value="<?= $Rsp["password"]; ?>"><br><br>

            <label for="roles">Roles</label> 
            <select name="roles" class="form-control" value="<?= $username["roles"]; ?>">
                <option value="Admin">Admin</option>
                <option value="Resepsionis">Resepsionis</option>
            </select><br><br>
            <button type="submit" name="kirim" class="btn-login-4">Edit</button>
        </form>
        </div>
    </div>
    </body>
</html>