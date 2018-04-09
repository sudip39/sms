<?php
include("common.php");
include("./header.php");
include "check.php";


?>


<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <div  style="float:right;">
          
        <li><a href="./logout.php" >Sign Out</a></li>
        </div>

      </ul>
     
  
    <div class="container">
        <h1 style="color:white;">Your request has been rejected by Admin</h1>
        <h1 style="color:white;">Send request again <a href="setnull.php">Send</a></h1>
    </div>
    
      
</body>


</html>
<?php include("footer.php") ?>