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
            if(is_null($obj['valid'])){
                    header("Location: notactive.php");
            }
            else if($obj['valid']==1)
            {
                header("Location: profile.php");
            }
            else 
            {
                header("Location:sendreq.php");
            }
        }
    }

?>