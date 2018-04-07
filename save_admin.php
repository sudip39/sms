<?php
    include "common.php";
    $token=$_POST['token'];
    $sql ="select * from tokens where token='$token';";
    if($conn->query($sql))
    {
        $sql="delete from tokens where token='$token';";
        $conn->query($sql);
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql="insert into admin(name,pass,email) values('$name','$pass','$email');";
        if($conn->query($sql))
        header("Location: admin.php");
        else{
            header("Location: "."adminsignup.php");
        }
    }   
    else
    {
       
        header("Location: "."adminsignup.php");
    } 
?>