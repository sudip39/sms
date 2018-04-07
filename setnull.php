<?php 
    include "common.php";
    include "check.php";
    $id=$_SESSION['id'];
    $sql ="update student set valid = NULL where id=$id;";
    $result=$conn->query($sql);
    if($result)
    {
        header("Location: active.php");
    }
    else
    {
        
        echo "404 Error!!Something went wrong";
    }
?>