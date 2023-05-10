<?php
include "connection.php";

$sql= "INSERT INTO `admin`(`admin_id`, `username`, `firstname`, `middlename`, `lastname`, `email`, `password`) 
VALUES (?,?,?,?,?,?,?)";

if (isset($_POST['adminid'])){

    $id = trim($_POST['adminid']); 
    $username = trim($_POST['username']);
    $firstname = trim($_POST['firstname']);
    $middlename = trim($_POST['middlename']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if($id == "" || $username == ""|| $firstname == "" || $lastname == "" || $email == "" || $password=="" ){
        echo "All fields are required!";
        die();
    }

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        die();
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssss",$id,$username, $firstname,$middlename,$lastname,$email, $password);
    if ($stmt->execute()){
        header("Location: login.php");
        exit();
    }
    else{
        echo "Student Insertion Failed!";
    }
    $conn->close();

}else{
    $conn->close();
    header("Location: error.php");
    die();
}
?>
