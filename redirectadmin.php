<?php 
    include "common.php";
    include "header.php";
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="select * from admin where email='$email' and pass='$pass';";
    $result=$conn->query($sql);
    if($result)
    {
        while($obj=mysqli_fetch_array($result)){
            $_SESSION['id']=$obj['id'];
            $_SESSION['name']=$obj['name'];
            $_SESSION['email']=$obj['email'];
        }
        header("Location: admin.php");
    }
    else
    {
        header("Location: adminlogin.php");
    }
    
    ?>