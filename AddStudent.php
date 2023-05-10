<?php 
include "connection.php";


$sql ="INSERT INTO `student`(`student_id`, `firstname`, `middlename`, `lastname`, `suffix`, `sex`, `contact_number`, `birthdate`, `email`, `street`, `barangay`, `municipality`, `province`, `password`) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

if (isset($_POST['student_id'])){

    $id = trim($_POST['student_id']);
    $firstname = trim($_POST['firstname']);
    $middlename = trim($_POST['middlename']);
    $lastname = trim($_POST['lastname']);
    $suffix = trim($_POST['suffix']);
    $sex = trim($_POST['sex']);
    $contactnumber = trim($_POST['contact_number']);
    $birthdate = trim($_POST['birthdate']);
    $email = trim($_POST['email']);
    $street = trim($_POST['street']);
    $barangay = trim($_POST['barangay']);
    $municipality = trim($_POST['municipality']);
    $province = trim($_POST['province']);
    $password = trim($_POST['password']);
    
    if(empty($id) || empty($firstname) || empty($middlename) || empty($lastname) || empty($sex) || empty($contactnumber) || empty($birthdate) || empty($email) || empty($street) || empty($barangay) || empty($municipality) || empty($province) || empty($password)){
        echo "Error: All fields are required and must not contain blank or whitespace characters.";
        exit;
    }

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("issssssissssss", $id,$firstname,$middlename,$lastname,$suffix,$sex,$contactnumber,$birthdate,$email,$street,$barangay,$municipality,$province, $password);
        if($stmt->execute()){
            header("Location: enroll.php");
            exit();
        }
        else{
            echo "failed";
        }
        $conn->close();
}else{
    $conn->close();
    header("Location: error.php");
    die();
}    
        

?>