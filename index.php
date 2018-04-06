<?php
include("common.php");
include("header.php");
?>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <div  style="float:right;">
            <li><a href="login.php">login</a></li>
        <li><a href="./signup.php">Signup</a></li>
        </div>

      </ul>
      <h1 class="header" style="color:white;">Welcome to Student Database Management System</h1>
      <div class="container">
      <form action="#" >
              <header>Home</header>
          <br/>
          <a href="/sms/signup.php"><button type="submit">Register</button></a>
          <a href="/sms/login.php"><button type="submit">Login</button></a>

      </form>
      </div>
</body>
</html>
<?php include("footer.php") ?>