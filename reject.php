
<?php
    include "common.php";
    include "check.php";
    include "header.php";
    $id=$_GET['id'];
    $sql ="update student set valid = 0 where id=$id";
    $result=$conn->query($sql);
    if($result)
    {
        header("Location: admin.php");
    }
    else
    {
        echo "Error happened";
    }
    
?>