<?php
include("db.php");
if(isset($_POST['updatebtn']))
{
    $card = $_POST['u_card'];
    $name = $_POST['u_f_name'];
    $email = $_POST['u_email'];
    $class = $_POST['class_id'];
    $total = $_POST['total'];
    $remain = $_POST['remain'];

    // $query = "UPDATE register SET username='$username', email='$email', password='$password', usertype='$usertype'  WHERE id='$id' ";
    $update = "UPDATE fee SET u_card='$card',u_f_name='$name',u_email='$email',class_id='$class',total='$total',remain='$remain' WHERE u_card=$card ";
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