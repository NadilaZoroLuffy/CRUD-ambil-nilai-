<?php

require 'functions.php';

$id = $_GET["id"];

if(hapusrsp($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data Resepsionis Berhasil Dihapus')
        window.location = 'Resepsionis.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Data Resepsionis Gagal Dihapus')
        window.location = 'Resepsionis.php';
</script>
    ";
}
?>