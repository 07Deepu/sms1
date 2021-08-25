<?php
include("db.php");
if(isset($_POST['updatebtn']))
{
    $id =$_POST['id'];
    $u_card = $_POST['u_card'];
    $u_f_name = $_POST['$u_f_name'];
    $total = $_POST['total'];
    $remain = $_POST['remain'];

    // $query = "UPDATE register SET username='$username', email='$email', password='$password', usertype='$usertype'  WHERE id='$id' ";
    
    // $update = "UPDATE `fee` SET `total`='$total ',`remain`='$remain'";
    
    
    $update = "UPDATE fee SET total='$total',remain='$remain' WHERE id=$id ";
    $query_run = mysqli_query($conn, $update);

    if($query_run)
    {
       
        header('Location: fee.php'); 
    }
    else
    {
        
        header('Location: fee.php'); 
    }
}


?>