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
<script>
 function editstudent(id) {
    var confirmation = confirm("Are you sure you want to edit this student?");
    if (confirmation) {
        window.location = "editstudent.php?student_id=" + id;
    }
}
function deletestudent(id){
  if(confirm("Proceed to Deletion?")){
    $.post("deletestudent.php", {id:id}, function(data,status){
      if(status =="success"){
        if(confirm("Student deleted successfully. Do you want to reload the page?")){
          setTimeout(function() {
            location.reload();
          }, 1000); // delay of 1 second
        }
      }else{
        alert("Deletion Failed");
      }
    });
  }
}
  
  
</script>
<style>
  th{
    color: black;
  }
  </style>
</head>

<body>

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
        <span class="d-none d-md-block dropdown-toggle ps-3">JEFFREY</span>
      </a><!-- End Profile Iamge Icon -->
    </button>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>JEFFREY</h6>
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
        <th>NAME</th>
        <th>SUFFIX</th>
        <th>SEX</th>
        <th>BIRTHDATE</th>
        <th>CONTACT NUMBER</th>
        <th>EMAIL</th>
        <th>STREET</th>
        <th>BARANGAY</th>
        <th>MUNICIPALITY</th>
        <th>PROVINCE</th>
        <th>ACTION</th>
      </tr>
    </tbody>
    <?php
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo '<tr>
      <td>'. $row['student_id'] .'</td>
      <td>'. $row['password'] .'</td>
      <td>'. $row['lastname'] .','.$row['firstname'] .','.$row['middlename'] .'</td>
      <td>'. $row['suffix'] .'</td>
      <td>'. $row['sex'] .'</td>
      <td>'. $row['contact_number'] .'</td>
      <td>'. $row['birthdate'] .'</td>
      <td>'. $row['email'] .'</td>
      <td>'. $row['street'] .'</td>
      <td>'. $row['barangay'] .'</td>
      <td>'. $row['municipality'] .'</td>
      <td>'. $row['province'] .'</td>
      <td>
      <input type="button" value="edit" onclick="editstudent('. $row['student_id'] .')">
      <input type="button" value="Delete" onclick="deletestudent('. $row['student_id'] .')">
</td>
      
      </tr>';
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>
  </div>

              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
 

  <?php
  include "footer.php";
  ?>