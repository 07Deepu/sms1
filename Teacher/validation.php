<?php
include "db.php";
error_reporting();
$u_email=$_POST['u_email'];
$password=$_POST['password'];


$qry="select * from teacher_data where u_email='$u_email' and password='$password'";

$result=$conn->query($qry);

if($result-> num_rows > 0)
    {
        $data=$result->fetch_assoc();

        session_start();
        $_SESSION['u_email']=$data['u_email'];
        $_SESSION['id']=$data['id'];

            header("location: profile.php");
   }
else{
  echo "no data available";
}


?>