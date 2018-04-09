<?php
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
        <form action="redirect.php" method='post' >
                <header>LogIn Form</header>
            <label for="Email">Registration No</label>
            <input type="text"   name="reg_no">
            <br/>                      
            <label for="Password">Password</label>
            <input type="password" name="pass" id="" >
            <button type="submit" name="submit">Login</button>
            
        </form>
        
        </div>
    </body>
    <?php
     
    ?>
</html>

<?php include("footer.php") ?>