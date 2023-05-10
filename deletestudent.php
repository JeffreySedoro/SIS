<?php 
include "connection.php";


$id = $_POST['id'];
$sql= "DELETE FROM student WHERE `student`.`student_id` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
if ($stmt->execute()) {
    echo "Student Delete Successfuly. id inserted is " . $conn->insert_id;
    header("Location: enroll.php");
} else {
    echo "Student deletion failed!";
}

?>