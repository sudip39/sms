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
$sql="insert into stu_det(cgpa,sess,dept,roll_no,par_add,per_add,mob_no,p_mob_no,s_id) values($cgpa,'$sess','$dept','$roll','$psn_adr','$par_adr','$ph_no','$pph_no',$s_id);";
      if($conn->query($sql) ===true)
      {
           
    header('Location: '.'profile.php?name='.urlencode($name));  
        
      }
      else
      {
            echo "Error happened ";
      }

?>