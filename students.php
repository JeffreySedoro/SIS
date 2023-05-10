<?php 
include "connection.php";

$sql = "SELECT * FROM student";
$result = $conn->query($sql);


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
  th td tr{
    color: black;
   
  }
  
  </style>
</head>

<body>
<?php 
include "connection.php";
  $sql = "SELECT username FROM admin ";
  $result = mysqli_query($conn, $sql);
  
  // Fetch the result
  $row = mysqli_fetch_assoc($result);
  $name = $row['username'];


  ?>
  
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
        <span class="d-none d-md-block dropdown-toggle ps-3"><?php echo $name?></span>
      </a><!-- End Profile Iamge Icon -->
    </button>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><b><?php echo $name?></b></h6>
          <span>Admin</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
            <i class="bi bi-person"></i>
            <span>DEFAULT ACCOUNT</span>
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
<section style="margin-right: 50%;">
<form method="POST" action="AddStudent.php">
  <label for="student_id">Student ID:</label>
  <input type="number" id="student_id" name="student_id"><br>


  <label for="firstname">First Name:</label>
  <input type="text" id="firstname" name="firstname"><br>

  <label for="middlename">Middle Name:</label>
  <input type="text" id="middlename" name="middlename"><br>

  <label for="lastname">Last Name:</label>
  <input type="text" id="lastname" name="lastname"><br>

  <label for="suffix">Suffix:</label>
  <input type="text" id="suffix" name="suffix"><br>

  <label for="sex">Sex:</label>
  <select id="sex" name="sex">
    <option value="M">Male</option>
    <option value="F">Female</option>
  </select><br>

  <label for="contact_number">Contact Number:</label>
  <input type="number" id="contact_number" name="contact_number"><br>

  <label for="birthdate">Birthdate:</label>
  <input type="date" id="birthdate" name="birthdate"><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br>

  <label for="street">Street:</label>
  <input type="text" id="street" name="street"><br>

  <label for="barangay">Barangay:</label>
  <input type="text" id="barangay" name="barangay"><br>

  <label for="municipality">Municipality:</label>
  <input type="text" id="municipality" name="municipality"><br>

  <label for="province">Province:</label>
  <input type="text" id="province" name="province"><br>
  
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br>

  <input type="submit" value="Submit">
</form>


</section>
    

  </main>

  
<?php

include "footer.php";

?>