<?php
require 'koneksi.php';

if (isset($_GET['search'])) {
    $keyword = $_GET['keyword'];
    $query  = mysqli_query($conn, "SELECT * FROM buku WHERE
    judul     LIKE '%$keyword%' OR rak  LIKE '%$keyword%'
    ");
 } else {
    $query = mysqli_query($conn, "SELECT * FROM buku");
}


$buku = [];
while($row = mysqli_fetch_assoc($query)){
    $buku[] = $row;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="addbook.css?v4" rel="stylesheet">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="tabel.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css?v6" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body >

<div align="center">
   <div class="search-bar">
   <form class="search-form d-flex align-items-center" method="get" action="">
      <input type="text" name="keyword" id="keyword" placeholder="Search" title="Enter search keyword">
      <button type="submit" name="search" ><i class="bi bi-search"></i></button>
   </form>
   </div>
</div>
<br><br>

<table class="rwd-table">
         <tbody>
            <tr>
               <th>No.</th>
               <th>JUDUL</th>
               <th>GAMBAR </th>
               <th>KATEGORY</th>
               <th>RAK</th>
               <th>PENULIS</th>
            </tr>

            <?php
            $i = 1;
            foreach ($query as $data) :
            ?>
               <tr>
                  <td><?php echo $i ?></td>
                  <td data-th="judul"> <?php echo $data['judul']; ?> <br> </td>
                  <td data-th="gambar"><img src="gambar/<?php echo $data['gambar'] ?>" alt="" width="100px"></td>
                  <td data-th="kategory"> <?php echo $data['kategory']; ?> <br> </td>
                  <td data-th="rak"><?php echo $data['rak']; ?></td>
                  <td data-th="penulis"><?php echo $data['penulis']; ?></td>
               </tr>
            <?php
               $i++;
            endforeach;
            ?>
         </tbody>
</table>
<br><br>
<p align="center">apakah anda ingin meminjam buku? <a href="pinjam.php">klik disini</a> </p>
<p align="center">back to menu<a href="user.php"> klik disini</a> </p>
</body>
</html>