<?php
session_start();
include('dbconfig.php');

if(!$_SESSION['username'])
{
    header('location: login.php');
}


// if($conn)
// {
//     echo "Database Connected";
// }
// else
// {
//     header("Location: dbconfig.php");
// }

// if(!$_SESSION['username'])
// {
//     header('location: login.php');
// }
?>