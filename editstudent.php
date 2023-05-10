<?php 
include "connection.php"; 

$id = $_GET['student_id'];
$sql= "SELECT * FROM `student` WHERE student_id = " .$id;
$result = $conn->query($sql);

if ($result->num_rows > 0){
    $row = $result->fetch_assoc();
    echo "Student Found: " . $row['firstname'];

}else{
    echo "Failed";
}
?>



<form method="POST" action="updatestudent.php">
  <label for="student_id">Student ID:</label>
  <input type="number" id="student_id" name="student_id" value="<?php echo $row['student_id'] ?>" readonly><br>


  <label for="firstname">First Name:</label>
  <input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname'] ?>"><br>

  <label for="middlename">Middle Name:</label>
  <input type="text" id="middlename" name="middlename" value="<?php echo $row['middlename'] ?>"><br>

  <label for="lastname">Last Name:</label>
  <input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname'] ?>"><br>

  <label for="suffix">Suffix:</label>
  <input type="text" id="suffix" name="suffix" value="<?php echo $row['suffix'] ?>"><br>

  <label for="sex">Sex:</label>
  <select id="sex" name="sex" value="<?php echo $row['sex'] ?>">
    <option value="M">Male</option>
    <option value="F">Female</option>
  </select><br>

  <label for="contact_number">Contact Number:</label>
  <input type="number" id="contact_number" name="contact_number" value="<?php echo $row['contact_number'] ?>"><br>

  <label for="birthdate">Birthdate:</label>
  <input type="date" id="birthdate" name="birthdate" value="<?php echo $row['birthdate'] ?>"><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>"><br>

  <label for="street">Street:</label>
  <input type="text" id="street" name="street" value="<?php echo $row['street'] ?>"><br>

  <label for="barangay">Barangay:</label>
  <input type="text" id="barangay" name="barangay" value="<?php echo $row['barangay'] ?>"><br>

  <label for="municipality">Municipality:</label>
  <input type="text" id="municipality" name="municipality" value="<?php echo $row['municipality'] ?>"><br>

  <label for="province">Province:</label>
  <input type="text" id="province" name="province" value="<?php echo $row['province'] ?>"><br>
  
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" value="<?php echo $row['password'] ?>"><br>

  <input type="submit" value="Submit">
</form>