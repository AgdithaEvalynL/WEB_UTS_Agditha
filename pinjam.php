<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam Buku</title>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="addbook.css?v6" rel="stylesheet">
</head>
<body>
<br><br><br><br>
<div align="center">
        <div class="box" align="center">
            <div class="input">
                <h3>Peminjaman Buku</h3>
                
                <form action ="" method = "post" enctype="multipart/form-data">
                    <p> Tanggal Pinjam : <?= date("Y-m-d");?></p>
                    <label for=""> tanggal kembali : </label>
                    <input type="date" name= "kembalikan"><br><br>

                    <label for=""> Nama Peminjam : </label>
                    <input type="text" name= "namagambar"><br><br>

                    <label for=""> Upload Gambar Buku : </label>
                    <input type="file" name= "gambar"><br><br>

                    <input type="hidden" name = "pinjam" value= <?=date("Y-m-d");?>>
                    <input type="submit" name="submit">
                </form>
            </div>
        </div>
</div>
</body>
</html>

<?php
require 'koneksi.php';

if(isset($_POST['submit'])){
    $pinjam = $_POST['pinjam'];
    $kembali = $_POST['kembalikan'];
    $nama = $_POST['namagambar'];

    $gambar= $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $gambar_baru = "$nama.$ekstensi";

    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, "gambar2/".$gambar_baru)){
        $query = "INSERT INTO perpus (pinjam, kembali, gambar)
        VALUES ('$pinjam', '$kembali', '$gambar_baru')";
        $result = $conn->query($query);

        if($result){
        header("Location: borrowbook.php");
        }else {
        echo "Gagal Kirim";
        }
    }
}

?>