<?php include "common.php";
      include "check.php";
      include "header.php";
    $sql ="select * from student where valid is not null; ";
    $result=$conn->query($sql);
?>

<body>
<ul>
        <li><a href="index.php">Home</a></li>
        <div  style="float:right;">
            <li><a href="admin.php">Pending Request</a></li>
        <li><a href="./logout.php">logout</a></li>
        </div>

      </ul>
<div class="container">

<table>
    <tr>
    <th>Name</th>
    <th>Registration No</th>
    <th>Status</th>
    </tr>
    <?php while($obj=mysqli_fetch_array($result)) {?>
    <?php if(!is_null($obj['valid'])) {?>
    <tr>
    <td><?php echo $obj['name']; ?></td>
    <td><?php echo $obj['reg_no']; ?></td>
    
    <td><?php if( !is_null($obj['valid'])) if($obj['valid']) echo "Accepted"; else echo "rejected"; ?></td>
    <?php }?>
    <?php } ?>
   
    
    </table>
</div>
    
</body>
</html>