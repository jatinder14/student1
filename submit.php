<?php

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password,"jatinder2");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$qualification = $_POST['qualification'];


$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country= $_POST['country'];

$About = $_POST['about'];
$sql="insert into Student  (name, email, phone, qualification,address,city,state,country) values('$name','$email','$phone','$qualification','$address','$city','$state','$country') ";

//$sql="insert into Student  (name, email, phone, qualification,address,city,state,country) values('jatinder','akfgagfi','dafaf','af','address','city','state','country') ";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



mysqli_query($conn,$q);

  header("Location: http://localhost/jatinder/dashboard.php");


?> 