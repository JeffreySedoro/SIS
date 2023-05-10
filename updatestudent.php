<?php 
include "connection.php";

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

if (empty(trim($firstname)) || empty(trim($lastname)) || empty(trim($contactnumber)) || empty(trim($birthdate)) || empty(trim($email)) || empty(trim($street)) || empty(trim($barangay)) || empty(trim($municipality)) || empty(trim($province)) || empty(trim($password))) {
    echo "<script>alert('Error: All fields are required.');</script>";
    echo "<script>window.location = 'editstudent.php?student_id=" . $id . "';</script>";
    exit;
}


$sql = "UPDATE `student` 
        SET `firstname` = ?,
            `middlename` = ?,
            `lastname` = ?,
            `suffix` = ?,
            `sex` = ?,
            `contact_number` = ?,
            `birthdate` = ?,
            `email` = ?,
            `street` = ?,
            `barangay` = ?,
            `municipality` = ?,
            `province` = ?,
            `password` = ?
        WHERE `student`.`student_id` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssisssssssi", $firstname, $middlename, $lastname, $suffix, $sex, $contactnumber, $birthdate, $email, $street, $barangay, $municipality, $province, $password, $id);
if ($stmt->execute()) {
    echo "Student Update Successfuly. id inserted is " . $conn->insert_id;
    header("Location: enroll.php");
} else {
    echo "Student update failed!";
}

?>