<?php
include("./common.php");
session_start();
$name=$_GET['name'];
echo "<input type='text' id='username' hidden='true' value='$name'>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="student.css">

    <title>Profile</title>
</head>
<body>
    <ul>
        <li><a href="index.html">Home</a></li>
        <div  style="float:right;">
            <li id="user"><a href="login.html"></a></li>
        <li><a href="./student.html">Sign Out</a></li>
        </div>

      </ul>
      <h1 class="header">Student Profile</h1>
      <div class="container">

      <form action="save_profile.php" method="post">
              <header>Details</header>

          <label for="department">Departement</label>
          <br/>
          <select name="departement" id="department" class="dropdown">
              <option value="0">select departement</option>
              <option value="1">IT</option>
              <option value="2">CS</option>
              <option value="3">CE</option>
              <option value="4">BT</option>
              <option value="5">CH</option>
              <option value="6">EE</option>
              <option value="7">ME</option>
              <option value="8">MM</option>
          </select>
          <br/>
          <label for="sesssion">Session</label>
          <br/>
          <select name="session" id="session" class="dropdown">
              <option value="0">Select Session</option>
              <option value="17">2017-2021</option>
              <option value="15">2015-2019</option>
              <option value="16">2016-2020</option>
          </select>
          <br/>
          <label for="roll_no">Roll No</label>
          <input type="text" onblur=rollNoValidation() name="roll_no" required id="rollno" placeholder="15/IT/XX">
          <br/>
          <label for="degree">Degree</label>
          <br/>
          <select name="degree" id="" class="dropdown">
              <option value="1">B.TECH</option>
              <option value="2">M.TECH</option>
              <option value="3">MCA</option>
          </select>
          <br/>
          <label for="registration_no">Registration No</label>
          <input type="text" onblur=registrationNoValidation() required name="registration_no" id="registration_no" placeholder="2015XXXX">
          <br/>
          <label for="email">Email Id</label>
          <input type="email" onblur="emailValidation()" name="email"  id="email" placeholder="nitdgp@btech.com">

          <label for="present_address">Present Address</label>
          <input type="textarea" onblur=validation() name="present_address" id="present_address">

          <label for="permanent_address">Permanent Address</label>
          <input type="textarea" name="permanent_address" id="permanent_address">

          <label for="cgpa">CGPA</label>
          <input type="text" onblur=validation() name="cgpa" id="cgpa">

          <label for="phone_number">Phone Number</label>
          <input type="text" onblur=validation()  name="phone_number" id="phone_number">

          <label for="parent_phone_number">Parent Phone Number</label>
          <input type="text" onblur=validation()  name="parent_phone_number" id="phone_number">

          <button type="submit" name="submit">Save</button>

      </form>
      </div>
      <script src="js/profile.js"></script>
</body>

<script>
  var dept=document.getElementById("department");
  var roll_no=document.getElementById("rollno");
  var session=document.getElementById("session");
  var regno=document.getElementById("registration_no")
  var a="";
  var b="";
    dept.addEventListener("change",function(){
         a=dept.options[dept.selectedIndex].text;

    });
    session.addEventListener("change",function(){
        b=session.value;
        roll_no.value=b+"/"+a+"/";

            regno.value="20"+b;

    })
    var user=document.getElementById('username').value;
    document.getElementById('user').children[0].text=user;



</script>
</html>
