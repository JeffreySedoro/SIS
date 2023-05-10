<?php
include "connection.php";

if(isset($_POST['adminid']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){

    $id = $_POST['adminid'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE admin_id = ? AND username = ? AND email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $id, $username, $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 1){
        header("Location: index2.php");
        exit();
    }else{
        echo "<center><h1>Invalid email or password.</h1><br>
        <a href='login.php'><input type='submit' value='Go Back?'style='background-color: #4CAF50; color: white;padding: 10px 20px;border: none;border-radius: 4px;cursor: pointer;font-size: 16px;'></a></center>";
    }

    $stmt->close();
    $conn->close();
}else{
    header("Location: error.php");
    exit();
}

?>