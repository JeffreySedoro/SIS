<?php
include "connection.php";



?>

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="./assets/css/homepage.css">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<script src="jquery.js"></script>
<script>
$(document).ready(function() {
  $('#Form').submit(function(e) {
    e.preventDefault(); // prevent form submission
    
    // check if any input field is blank or contains only whitespace
    var allFilled = true;
    $('#Form input').each(function() {
      if ($(this).val().trim() === '') {
        allFilled = false;
        return false; // exit loop early
      }
    });
    
    // submit form if all fields are filled, else display error message
    if (allFilled) {
      this.submit();
    } else {
      alert('Please fill in all fields.');
    }
  });
  
function enableInput1() {
  // Enable the first input element
  document.getElementById("Id").disabled = false;
}
});
</script>
<style>
  th{
    color: black;
  }
  </style>
</head>

<body>
  <?php 
  $sql = "SELECT username FROM admin ";
  $result = mysqli_query($conn, $sql);
  
  // Fetch the result
  $row = mysqli_fetch_assoc($result);
  $username = $row['username'];


  ?>
  


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
<ul class="left-ul">
  <li>
    <a href="index2.php" class="logo-container">
      <img src="./assets/img/Logo2.png" alt="logo2">
      <span><b>Student Information System</b></span>
    </a>
  </li>
</ul>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div>

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">
 
  

    <li class="nav-item dropdown pe-3">
      <button type="button" class="btn btn-light rounded-pill" data-bs-toggle="dropdown">
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" >
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-3"><?php echo $username?></span>
      </a><!-- End Profile Iamge Icon -->
    </button>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><b><?php echo $username?></b></h6>
          <span>Admin</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
            <i class="bi bi-person"></i>
            <span >DEFAULT ACCOUNT</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        
  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-heading">SETTINGS</li>

      <li class="nav-item">
        <a class="nav-link " href="index2.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
        <li class="nav-item">
        <a class="nav-link " href="students.php">
          <i class="bi bi-grid"></i>
          <span>EnrollStudents</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="Enroll.php">
          <i class="bi bi-grid"></i>
          <span>Enroll</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="subject.php">
          <i class="bi bi-grid"></i>
          <span>AddSubject</span>
        </a>
      </li>
      </li><!-- End Dashboard Nav -->
  </a>
</li>
    </ul>
  </aside>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-20" style="box-shadow: 1px 5px 5px black;">
          <div class="row">
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Information section<span>| Main Campus</span></h5>
                  <div style="overflow-x: auto; overflow-y: auto;">
                  <table class="table" style=" border: 1px solid black; color: black; font-family: 'Times New Roman', Times, serif; margin: auto;">
   <thead class="table-dark">
    </thead>
    <tbody>
      <tr>
        <th>STUDENT ID</th>
        <th>PASSWORD</th>
        <th>FIRSTNAME</th>
        <th>MIDDLENAME</th>
        <th>LASTNAME</th>
        <th>SUFFIX</th>
        <th>SEX</th>
        <th>BIRTHDATE</th>
        <th>CONTACT NUMBER</th>
        <th>INSTITUTIONAL EMAIL</th>
        <th>MARITAL STATUS</th>
        <th>STREET</th>
        <th>BARANGAY</th>
        <th>MUNICIPALITY</th>
        <th>PROVINCE</th>
        <th>ACTION</th>
      </tr>
    </tbody>
                </div>

              </div>
            </div>

          </div>
        </div>

      
        <?php
        include "connection.php";

$sql = "SELECT COUNT(*) as total FROM admin ";
$result = mysqli_query($conn, $sql);

// Fetch the result
$row = mysqli_fetch_assoc($result);
$total = $row['total'];
?>

<div class="col-lg-15">
  <div class="card info-card sales-card">
    <div class="card-body">
      <h5 class="card-title">Admin <span>| Main Campus</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-people"></i>
        </div>
        <div class="ps-3">
          <h6><?php echo $total ?></h6>
        </div>
      </div>
    </div>
  </div>
</div>
                

      </div>
      <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>BukSU Main</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">Syntax Error Group</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>