<?php
include("./common.php");
include("./header.php");
include "check.php";
$name=$_SESSION['name'];
$id=$_SESSION['id'];
echo "<input type='text' id='username' hidden='true' value='$name'>";
$sql="select * from student,stu_det where student.id=s_id";
$result=$conn->query($sql);
while($obj=mysqli_fetch_array($result)){
  $dept=$obj['dept'];
  $sess=$obj['sess'];
  $cgpa=$obj['cgpa'];
  $roll_no=$obj['roll_no'];
  $psn_add=$obj['par_add'];
  $par_add=$obj['per_add'];
  $mob_no=$obj['mob_no'];
  $p_mob_no=$obj['p_mob_no'];
  $degr=$obj['degr'];
  $email=$obj['email'];
}

?>


<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <div  style="float:right;">
            <li id="user"><a href="details.php"></a></li>

        <li><a href="./logout.php" >Sign Out</a></li>
        </div>

      </ul>
     
  
</ul>

<h1 class="header" style="color:white;">Student Profile</h1>
      <div class="container" style="padding-bottom:40px;">

      <form action="save_details.php" method="post">
              <header>Details</header>

          <label for="department">Departement</label>
          <br/>
        
                
                <select name="department" id="department" class="dropdown">
                <?php if(isset($dept)) {?>
                  <option value="<?php echo $dept;?>"><?php echo $dept ?></option>
                <?php } else {?>
                <option value="0">select departement</option>
                <?php }?>
                <option value="IT">IT</option>
                <option value="CS">CS</option>
                <option value="CE">CE</option>
                <option value="BT">BT</option>
                <option value="CH">CH</option>
                <option value="EE">EE</option>
                <option value="ME">ME</option>
                <option value="MM">MM</option>
            </select>
            <br/>
          <label for="sesssion">Session</label>
          <br/>
          <select name="sess" id="session" class="dropdown">
          <?php if(isset($sess)) {?>
            <option value="<?php echo $sess;?>"><?php echo $sess;?></option>
            <?php } else {?>
              <option value="0">Select Session</option>
              <?php }?>
              <option value="2017-2021">2017-2021</option>
              <option value="2015-2019">2015-2019</option>
              <option value="2016-2020">2016-2020</option>
          </select>
          <br/>
          <label for="roll_no">Roll No</label>
          <input type="text" onblur=rollNoValidation() name="roll_no" required id="rollno" value="<?php if(isset($roll_no)) echo $roll_no;?>">
          <br/>
          <label for="degree">Degree</label>
          <br/>
          <select name="degree" id="" class="dropdown">
            <?php if(isset($degr)){ ?>
              <option value="<?php echo $degr;?>"><?php echo $degr;?></option>
            <?php }?>
              
              <option value="B.TECH">B.TECH</option>
              <option value="M.TECH">M.TECH</option>
              <option value="MCA">MCA</option>
          </select>
          <br/>
          <label for="email">Email Id</label>
          <input type="email" onblur="emailValidation()" name="email" reuqired id="email" value="<?php if(isset($email)) echo $email;?>">

          <label for="present_address">Present Address</label>
          <input type="textarea" onblur=validation() name="present_address" value="<?php if(isset($psn_add)) echo $psn_add;?>" id="present_address">
        <label for="permanent_address">Permanent Address</label>             
          <input type="textarea" name="permanent_address" value="<?php if(isset($par_add)) echo $par_add;?>" id="permanent_address">

          <label for="cgpa">CGPA</label>
          <input type="text" onblur=cgpaValidation() name="cgpa" value="<?php if(isset($cgpa)) echo $cgpa;?>" id="cgpa">

          <label for="phone_number">Phone Number</label>
          <input type="textbox" onblur=phonevalidation()  name="phone_number" value="<?php if(isset($mob_no)) echo $mob_no;?>" id="phone_number">

          <label for="parent_phone_number">Parent Phone Number</label>
          <input type="text" onblur=validation()  name="parent_phone_number" value="<?php if(isset($p_mob_no)) echo $p_mob_no;?>" id="parent_phone_number">

          <button type="submit" name="submit">Save</button>

      </form>
    </div>
  
    
   

    
      
</body>

<script>
  var dept=document.getElementById("department");
  var roll_no=document.getElementById("rollno");
  var session=document.getElementById("session");
  var regno=document.getElementById("registration_no")
  var a=dept.options[dept.selectedIndex].text;
  var b=session.value;
  var d=b.slice(2,4);
    dept.addEventListener("change",function(){
         a=dept.options[dept.selectedIndex].text;
         roll_no.value=d+"/"+a+"/";

    });
    session.addEventListener("change",function(){
        b=session.value;
        d=b.slice(2,4);
        roll_no.value=d+"/"+a+"/";

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
