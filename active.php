<?php 
    include "common.php";
    include "check.php";
    $id=$_SESSION['id'];
    $sql ="select valid from student where id=$id ;";
    $result=$conn->query($sql);
    if($result)
    {
        while($obj=mysqli_fetch_array($result))
        {
            if($obj['valid']==1)
            {
                header("Location: admin.php");
            }
        }
    }

?>