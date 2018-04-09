<?php
include("header.php");
    if($_GET['c']==1)
    {
        echo "<script>alert('User Already Exist');</script>";
    }
?>
<html>
    <head>
    <title>Signup</title> 
    <link rel="stylesheet" href="student.css">
    <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
            <ul>
                    <li><a href="index.php">Home</a></li>
                    <div  style="float:right;">
                        <li><a href="login.php">login</a></li>
                    <li><a href="./signup.php">Signup</a></li>
                    </div>
                    
                  </ul> 
        <div class="container">
            
        <form action="save_profile.php" method="post" > 
                <header>Registration Form</header>  
                <label for="name">Name</label>
          <input type="text" onblur=nameValidation() required  id="name" name="name">
          <br/>                     
            <label for="Registration">Registration No</label>
            <input type="text" onblur=regiValid() name="Registration" id="regg">
            <br/> 
           
            <label for="Password">New Password</label>
            <input type="password" name="pass" id="pass" >
            <br/>  
            <label for="ConfirmPassword">Confirm Password</label>
            <input type="password" onblur=checkPass() name="cpass" id="pass1">
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
function regiValid(){
    var reg=document.getElementById('regg').value;
    var regexp2=new RegExp("[^0-9]");
    if(regexp2.test(reg))
    {alert("invalid regg no");
    return;}
    if(reg.length<8 || reg.length >8)
    {
        alert("invalid regg no");
    }
}
function checkPass(){
    var pass=document.getElementById('pass').value;
    var pass1=document.getElementById('pass1').value;
    if(pass1!=pass)
    alert("Password doesn't match");

}
</script>
<?php include("footer.php") ?>