<?php
// Configuration
$servername = "localhost";
$username = " ";
$password = " ";
$dbname = "ohidans_workers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$address = $_POST['email_address'];
$phone_number = $_POST['phone_number'];
$job_type = $_POST['job_type'];

// Store data in database
$sql = "INSERT INTO workers (name, email_address, phone_number, job_type) VALUES ('$name', '$email_address', '$phone_number', '$job_type')";

if ($conn->query($sql) === TRUE) {
  echo "Worker data stored successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
