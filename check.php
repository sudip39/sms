<?php 
    include("common.php");
    if(isset($_SESSION['id']))
    {

    }
    else
    {
        header('Location: '.'expired.php');
    }
?>