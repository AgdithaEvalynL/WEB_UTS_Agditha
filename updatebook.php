
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

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

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
    <a href="seebook.php" class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="landingpage.php">
      <i class="bi bi-journal-text"></i><span>See Book</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="seebook.php">
          <i class="bi bi-circle"></i><span>show</span>
        </a>
      </li>
    </ul>
  </li>
  <!-- End Forms Nav -->

  <li class="nav-item">
    <a href="updatebook.php" class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="landingpage.php">
      <i class="bi bi-layout-text-window-reverse"></i><span>Update Book</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a href="borrowbook.php" class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Borrow Book</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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


<div class="pagetitle">
  <h1>ADD</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="landingpage.php">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div>

<div align="center">
    <div class="card"  >
        <div class="box" align="center">
            <h3> input your books</h3>
            <div class="input">
                <form action="" method="POST" enctype="multipart/form-data" >
                    <input type="hidden" name="id_buku" value='<?= $_GET['id']?>' ><br>
                    <label for=""><br>Judul       : <br></label>
                    <input type="text" name="judul" ><br>
                    <label for="">nama Gambar        :<br><br> </label>
                    <input type="text" name="namagambar"  required> <br>
                    <label for="">Upload Gambar        :<br><br> </label>
                    <input type="file" name="gambar"  required> <br>     
                    <label  for=""><br>Kategory    :<br> </label>
                    <input  type="text"  name="kategory" required> <br>
                    <label  for=""><br>Rak         :<br> </label>
                    <input  type="number"  name="rak" required> <br>
                    <label  for=""><br>penulis       :<br> </label>
                    <input  type="text"  name="penulis" required> <br>
                    <div class="submit">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block mt-3">Submit</button>
                    </div>
                </form>
            </di>
        </div>
    </div>
</div> 

<?php
require 'koneksi.php';

if(isset($_GET['id_buku'])){
    $id_buku = $_GET['id_buku'];
}

$result
 = mysqli_query($conn, 
"SELECT * FROM buku WHERE id_buku = '$id_buku'");
$row = mysqli_fetch_array($result);
   
// $result = mysqli_query($conn, "SELECT * FROM postest5 WHERE id='$id'");
// $row = mysqli_fetch_array($result); 

if(isset($_POST['submit'])){
    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $namagambar = $_POST['namagambar'];
    $gambar = $_FILES['gambar']['name'];
    $kategory = $_POST['kategory'];
    $rak = $_POST['rak'];
    $penulis = $_POST['penulis'];


    $x = explode('.', $gambar);
    $extension = strtolower(end($x));
    $gambar_baru = "$judul.$extension";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
        $query = 
            "UPDATE buku SET
                judul      = '$judul',
                namagambar = '$namagambar',
                gambar     = '$gambar_baru',
                kategory   = '$kategory',
                rak        = $rak,
                penulis    = '$penulis'
                WHERE id_buku   = '$id_buku'";
            $result=$conn->query($query);
            
            if($result){
                echo" 
                    <script> 
                    alert('Updating data has DONE');
                    document.location.href = 'seebook.php';
                    </script>
                ";
            } 
            else {
                echo " 
                    <script> 
                    alert('FAILED Updating Data!');
                    </script>
                ";
            }
    
        }
        }
?>
