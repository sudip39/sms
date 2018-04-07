<?php
include "common.php";
include("header.php");

?>
    <body>
            <ul>
                    <li><a href="index.php">Home</a></li>
                    <div  style="float:right;">
                        <li><a href="login.php">login</a></li>
                    <li><a href="./signup.php">Signup</a></li>
                    </div>
                    
                  </ul> 
        <div class="container">
        <form action="redirectadmin.php" method='post' >
                <header>Admin Login Form</header>
            <label for="email">Email</label>
            <input type="text"   name="email">
            <br/>                      
            <label for="Password">Password</label>
            <input type="password" name="pass" >
            <button type="submit" name="submit">Login</button>
            
        </form>
        
        </div>
    </body>
   
</html>

<?php include("footer.php") ?>