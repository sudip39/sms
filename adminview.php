<?php include "common.php";
      include "check.php";
      include "header.php";
      $id=$_GET['id'];
      $name=$_GET['name'];
    $sql ="select * from stu_det where s_id=$id";
    $result=$conn->query($sql);
    if($result)
    {
    while($obj=mysqli_fetch_array($result))
    {
        $roll_no=$obj['roll_no'];
        $cgpa=$obj['cgpa'];
        $dept=$obj['dept'];
        $sess=$obj['sess'];
        $per_add=$obj['par_add'];
        $par_add=$obj['per_add'];
        $mob_no=$obj['mob_no'];
        $p_mob_no=$obj['p_mob_no'];
        $degr=$obj['degr'];
      


    }
    }
?>

<body>
<ul>
        <li><a href="index.php">Home</a></li>
        <div  style="float:right;">
            <li id="user"><a href="admindetails.php">Userdetails</a></li>
            <li id="user"><a href="admin.php">Pending Request</a></li>

        <li><a href="./logout.php" >Sign Out</a></li>
        </div>

      </ul>
    <div class="boxstyle container">
       
        <h1 style="text-align:center;"><?php echo $name;?></h1>
        <div class="container" style="padding-left:40px; padding-bottom:20px;">
        <span style="text-align:center;"><b>Roll No :</b><?php echo $roll_no ?></span><br>
        <span><b>Cgpa: </b><?php echo $cgpa?></span><br>
        <span><b>Mobile no:</b><?php echo $mob_no?></span><br>
        <span><b>Department:</b><?php echo $dept?></span><br>
        <span><b>Session:</b><?php  echo $sess ?></span><br>
        <span><b>Degree:</b><?php echo $degr?></span><br>
        <span><b>Present Address:</b><?php echo $per_add ?></span><br>
        <span><b>Parmanent Address:</b><?php echo $par_add?></span><br>
        </div>
</div>
  

</body>
</html>