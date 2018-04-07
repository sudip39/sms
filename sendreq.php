<?php
include("common.php");
include("./header.php");
include "check.php";
$name=$_SESSION['name'];

echo "<input type='text' id='username' hidden='true' value='$name'>";


?>


<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <div  style="float:right;">
            <li id="user"><a href="details.php"></a></li>

        <li><a href="./logout.php" >Sign Out</a></li>
        </div>

      </ul>
     
  
    <div class="container">
        <h1>Your request has been rejected by Admin</h1>
        <h1>Send request again <a href="setnull.php">Send</a></h1>
    </div>
    
      
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

function phoneValidation() {

}

function cgpaValidation() {
  var cgpa = document.getElementById("cgpa").value;
  if (isNaN(cgpa)||cgpa<0||cgpa>10) {
    alert("Not a valid cgpa value");
  }

}

function emailValidation() {
  var email = document.getElementById("email").value;
      var atpos = email.indexOf("@");
      var dotpos = email.lastIndexOf(".");
      if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
          alert("Not a valid e-mail address");
          return false;
      }
}

function nameValidation() {
  var name = document.getElementById("name").value;
  // console.log(name);
  var regexp1=new RegExp("[^a-z A-Z,.]");
  if(regexp1.test(name)) {
    alert("Enter proper name");
  }
}

function rollNoValidation() {
  var rollno=document.getElementById("rollno").value;

  if(rollno.length!=8)
  {
    alert("Invalid roll no");
  }

}

function registrationNoValidation() {

}



</script>
</html>
<?php include("footer.php") ?>