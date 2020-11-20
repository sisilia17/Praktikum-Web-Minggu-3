<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tugas PHP Lanjut</title>
</head>
<body>
    <form method="POST">
    <label>Masukkan nama</label> <br>
    <input type="text" name="n">
    <button type="submit" name="isi">CARI</button>
    </form>
<?php
    if(isset($_POST['isi'])){
        require_once("penentu_harga.php");
        $nama = $_POST['n'];
        $harga  = penentu_harga($nama);
        echo "Harga dari $nama adalah $harga dan warna $hijau" ;
    }
?>
</body>
</html>