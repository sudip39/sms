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
            <li><a href="login.html">Sudip Saha</a></li>
        <li><a href="./student.html">Sign Out</a></li>
        </div>

      </ul>
      <h1 class="header">Student Profile</h1>
      <div class="container">

      <form action="save_profile.php" method="post">
              <header>Details</header>
          <label for="name">Name</label>
          <input type="text" value="" placeholder="Sudip Saha" name="name">
          <br/>
          <label for="roll_no">Roll No</label>
          <input type="text" name="roll_no" id="" placeholder="15/IT/XX">
          <br/>
          <label for="registration">Registration No</label>
          <input type="text" name="registration" id="" placeholder="2015XXXX">
          <br/>
          <label for="department">Departement</label>
          <br/>
          <select name="departement" id="" class="dropdown">
              <option value="1">IT</option>
              <option value="2">CSE</option>
              <option value="3">ECE</option>
          </select>
          <br/>
          <label for="sesssion">Session</label>
          <br/>
          <select name="session" id="" class="dropdown">
              <option value="1">2017-2021</option>
              <option value="2">2015-2019</option>
              <option value="3">2016-2020</option>
          </select>
          <br/>
          <label for="degree">Degree</label>
          <br/>
          <select name="degree" id="" class="dropdown">
              <option value="1">B.TECH</option>
              <option value="2">M.TECH</option>
              <option value="3">MCA</option>
          </select>
          <br/>
          <label for="email">Email Id</label>
          <input type="email" name="email" id="" placeholder="nitdgp@btech.com">

          <label for="present_address">Present Address</label>
          <input type="text" name="present_address">

          <label for="permanent_address">Permanent Address</label>
          <input type="email" name="permanent_address">

          <label for="CGPA">CGPA</label>
          <input type="text" name="CGPA">

          <label for="phone_number">Phone Number</label>
          <input type="text" name="phone_number">

          <label for="parent_phone_number">Parent Phone Number</label>
          <input type="text" name="parent_phone_number">

          <button type="submit">Save</button>

      </form>
      </div>
</body>
</html>
