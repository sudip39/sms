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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="student.css">

    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="index.html">Home</a></li>
        <div  style="float:right;">
            <li><a href="login.html">Sudip Saha</a></li>
        <li><a href="./student.html">Sign Out</a></li>
        </div>

      </ul>
      <h1 class="header">Student Profile</h1>
      <div class="container">

      <form action="#" >
              <header>Details</header>
          <label for="Name">Name</label>
          <input type="text" value="" placeholder="Sudip Saha" name="Name">
          <br/>
          <label for="Roll">Roll No</label>
          <input type="text" name="Roll" id="" placeholder="15/IT/XX">
          <br/>
          <label for="Registration">Registration No</label>
          <input type="text" name="Registration" id="" placeholder="2015XXXX">
          <br/>
          <label for="Department">Departement</label>
          <br/>
          <select name="Departement" id="" class="dropdown">
              <option value="1">IT</option>
              <option value="2">CSE</option>
              <option value="3">ECE</option>
          </select>
          <br/>
          <label for="Sesssion">Session</label>
          <br/>
          <select name="Session" id="" class="dropdown">
              <option value="1">2017-2021</option>
              <option value="2">2015-2019</option>
              <option value="3">2016-2020</option>
          </select>
          <br/>
          <label for="Degree">Degree</label>
          <br/>
          <select name="Degree" id="" class="dropdown">
              <option value="1">B.TECH</option>
              <option value="2">M.TECH</option>
              <option value="3">MCA</option>
          </select>
          <br/>
          <label for="Email">Email Id</label>
          <input type="email" name="Email" id="" placeholder="nitdgp@btech.com">

          <label for="Present_Address">Present Address</label>
          <input type="text" name="Present_Address">

          <label for="Permanent_Address">Permanent Address</label>
          <input type="email" name="Permanent Address">

          <label for="CGPA">CGPA</label>
          <input type="text" name="CGPA">

          <label for="Phone_Number">Phone Number</label>
          <input type="text" name="Phone_Number">

          <label for="Parent_Phone_Number">Parent Phone Number</label>
          <input type="text" name="Parent_Phone_Number">

          <button type="submit">Save</button>

      </form>
      </div>
</body>
</html>
