<?php

require 'functions.php';

$id = $_GET["id"];

if(hapus_gtk($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data gtk Berhasil Dihapus')
        window.location = 'gtk.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Data gtk Gagal Dihapus')
        window.location = 'gtk.php';
</script>
    ";
}
?>