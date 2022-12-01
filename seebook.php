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
        <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <div class="logo d-flex align-items-center">
    <img src="img/logo.png" alt="">
    <span class="d-none d-lg-block" style = "font-size : 20px; color : grey;">LAWSON LIBRARY</span>
</div>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->


<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="img/profil.jpeg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">ADMIN</span>
      </a>
      <!-- End Profile Iamge Icon -->
      <!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->
  </ul>
</nav>
<!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="admin.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <!-- End Dashboard Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="addbook.php">
      <i class="bi bi-menu-button-wide"></i><span>Add Book</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="addbook.php">
          <i class="bi bi-circle"></i><span>book</span>
        </a>
      </li>
    </ul>
  </li>
  <!-- End Components Nav -->

  <li class="nav-item">
    <a  href="seebook.php" class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="landingpage.php">
      <i class="bi bi-journal-text"></i><span>See Book</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  </li>
  <!-- End Forms Nav -->

  <li class="nav-item">
    <a href="updatebook.php" class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="landingpage.php">
      <i class="bi bi-layout-text-window-reverse"></i><span>Update Book</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="updatebook.php"></a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a  href="borrowbook.php" class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Borrow Book</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="borrowbook.php">
          <i class="bi bi-circle"></i><span>show</span>
        </a>
      </li>
    </ul>
  </li>
  <!-- End Tables Nav -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="index.php">
      <i class="bi bi-person"></i>
      <span>signout</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-question-circle"></i>
      <span>Saran form</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

</ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

  <h1>ADD</h1>

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="get" action="">
    <input type="text" name="keyword" id="keyword" placeholder="Search" title="Enter search keyword">
    <button type="submit" name="search" ><i class="bi bi-search"></i></button>
  </form>
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
               <th>LAINNYA</th>
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
                  <td>
                     <button><a style="text-decoration: none;" href="updatebook.php?id=<?php echo $data['id']; ?>">Edit</a></button>
                     <button><a style="text-decoration: none;" href="deletebook.php?id=<?php echo $data['id']; ?>">Hapus</a></button>
                  </td>
               </tr>
            <?php
               $i++;
            endforeach;
            ?>
         </tbody>
      </table>


</body>
</html>


