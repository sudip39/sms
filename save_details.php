<?php 
include('common.php');
$dept=$_POST['department'];
$sess=$_POST['sess'];
$roll=$_POST['roll_no'];
$degree=$_POST['degree'];
$email=$_POST['email'];
$psn_adr=$_POST['present_address'];
$par_adr=$_POST['permanent_address'];
$cgpa=$_POST['cgpa'];
$ph_no=$_POST['phone_number'];
$pph_no=$_POST['parent_phone_number'];
$s_id=$_SESSION['id'];
$sql="select * from stu_det where s_id=$s_id;";
$result=$conn->query($sql);
if($result->num_rows==0){
$sql="insert into stu_det(cgpa,sess,dept,roll_no,par_add,per_add,mob_no,p_mob_no,s_id,degr) values($cgpa,'$sess','$dept','$roll','$psn_adr','$par_adr','$ph_no','$pph_no',$s_id,'$degree');";
      if($conn->query($sql) ===true)
      {
           
    header('Location: '.'profile.php');  
        
      }
      else
      {
            echo "Error happened ";
      }
}
else
{
$sql="update stu_det set cgpa=$cgpa,sess='$sess',dept='$dept',roll_no='$roll',par_add='$psn_adr',per_add='$par_adr',mob_no='$ph_no',p_mob_no='$pph_no',degr='$degree' where s_id=$s_id;";
if($conn->query($sql) ===true)
{
     
header('Location: '.'profile.php');  
  
}
else
{
      echo "Error happened ";
}
}

?>