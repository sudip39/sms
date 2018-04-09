<?php 
    include("common.php");
    include("header.php");
    include "check.php";
    $id=$_SESSION['id'];
    $sql="select * from stu_det where s_id=".$id;

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
    else
    {
        var_dump($conn->error);
        die($result->error);
        
    }
   

?>
<body>
<ul>
        <li><a href="index.php">Home</a></li>
        <div  style="float:right;">
            <li id="user"><a href="profile.php">Edit</a></li>

        <li><a href="./logout.php" >Sign Out</a></li>
        </div>

      </ul>
    <div class="boxstyle container">
        <h1 style="text-align:center;"><?php echo $_SESSION['name']?></h1>
        <span style="text-align:center;"><b>Roll No :</b><?php echo $roll_no ?></span><br>
        <span><b>Cgpa: </b><?php echo $cgpa?></span><br>
        <span><b>Mobile no:</b><?php echo $mob_no?></span><br>
        <span><b>Department:</b><?php echo $dept?></span><br>
        <span><b>Session:</b><?php  echo $sess ?></span><br>
        <span><b>Degree:</b><?php echo $degr?></span><br>
        <span><b>Present Address:</b><?php echo $per_add ?></span><br>
        <span><b>Parmanent Address:</b><?php echo $par_add?></span><br>
  

</body>
</html>