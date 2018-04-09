<?php
include("header.php");
    if($_GET['c']==1)
    {
        echo "<script>alert('Admin Already Exist');</script>";
    }
?>
    <body>
            <ul>
                    <li><a href="index.php">Home</a></li>
                    <div  style="float:right;">
                        <li><a href="adminlogin.php">login</a></li>
                    <li><a href="./adminsignup.php">Signup</a></li>
                    </div>
                    
                  </ul> 
        <div class="container">
            
        <form action="save_admin.php" method="post" > 
                <header>Admin Registration Form</header>  
                <label for="name">Name</label>
          <input type="text" onblur=nameValidation() required   id="name" name="name">
          <br/>     
          <label for="email">Email</label>
            <input type="email" name="email" id="" >
            <br/>                 
            <label for="token">Your Token</label>
            <input type="text" name="token" id="" >
            <br/> 
           
            <label for="Password">New Password</label>
            <input type="password" name="pass" id="">
            <br/>  
            <label for="ConfirmPassword">Confirm Password</label>
            <input type="password" name="cpass" id="">
            <br/> 
            <button type="submit" name="submit">SignUp</button>
            
        </form>

        </div>
    </body>
</html>

<script>
function nameValidation() {
  var name = document.getElementById("name").value;
  // console.log(name);
  var regexp1=new RegExp("[^a-z A-Z,.]");
  if(regexp1.test(name)) {
    alert("Enter proper name");
  }
}
</script>
<?php include("footer.php") ?>