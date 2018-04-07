<?php 
    include "common.php";
    include "check.php";
    include("./header.php");
    $sql="select * from student";
    $result=$conn->query($sql);

?>

<body>
<ul>
        <li><a href="index.php">Home</a></li>
        <div  style="float:right;">
            <li><a href="admindetails.php">Admin</a></li>
        <li><a href="./logout.php">logout</a></li>
        </div>

      </ul>
<div class="container">

<table>
    <tr>
    <th>Name</th>
    <th>Registration No</th>
    <th>Accept/reject</th>
    </tr>
    <?php while($obj=mysqli_fetch_array($result)) {?>
    <?php if(is_null($obj['valid'])) {?>
    <tr>
    <td><?php echo $obj['name']; ?></td>
    <td><?php echo $obj['reg_no']; ?></td>
    <td><a href="accept.php?id=<?php echo $obj['id']; ?>">Yes</a>/ <a href="reject.php?id=<?php echo $obj['id']; ?>">No</a></td>

    </tr>
    <?php }?>
    <?php } ?>
   
    
    </table>
</div>
    
</body>
</html>