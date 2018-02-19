<?php
$servername = "localhost";
$username = "root";
$password = "jharvard";
$db_name = "sms";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
echo "Connected successfully";
$sql = "INSERT INTO student (name, roll_no, registration_no, dept, session, degree, email)
VALUES ('Sudip Saha', '15/IT/78', '20150760', 'IT', '2015-2019', 'B.Tech', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
