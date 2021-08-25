

<?php

session_start();
include("db.php");

 
if(isset($_POST['update']))
{
  $id = $_POST['id'];
    $total = $_POST['total'];
    $remain = $_POST['remain'];
    $u_card = $_POST['u_card'];

    $update = "UPDATE `fee` SET total='$total',remain='$remain',u_card='$u_card' WHERE id='$id'"; 
    
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


<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <meta name="author" content="Codeconvey" />
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
 
     <!--Only for demo purpose - no need to add.-->
     <link rel="stylesheet" href="css/demo.css" />
     
       <link rel="stylesheet" href="css/style1.css">



   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Teacher</span>
    </div>
      <ul class="nav-links">
        <li>
        <a href="../profile.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Teacher Profile</span>
          </a>
          
          <a href="../attendence/index.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Attendence</span>
          </a>
          <a href="fee/fee.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">fee</span>
          </a>
        </li>
        
      
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    

      <div class="profile-details">
        
        <span class="student_name"></span>
        <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                
          </a>
        <!-- <i class='bx bx-chevron-down' >logout</i> -->
      </div>

    </nav>

    <div class="ScriptTop">
      <div class="rt-container">
          <div class="col-rt-4" id="float-right">
  
             <!-- Ad Here -->
             
         </div>
          <!-- <div class="col-rt-2">
              <ul>
                  <li><a href="logout.php" title="Back to tutorial page">log Out</a></li>
             </ul>
         </div> -->
     </div>
  </div>
 
  <header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<!-- <h1>Student Profile Page Design Example</h1>
                <p>A responsive student profile page design.</p> -->
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
 <!--datatabel example-->
  <div class="card show mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Edit fee </h6>
      </div>

        <div class="card-body">
        <?php

          if(isset($_POST['edit_btn']))
          {
                // $u_card = $_POST['u_card'];
                // $u_f_name = $_POST['u_f_name'];
                // $u_email = $_POST['u_email'];
                // $class_id = $_POST['class_id'];
                // $total = $_POST['total'];
                // $u_id = $_POST['u_id'];

              // $query = "SELECT * FROM fee  ";
              
              // $query = '
              // SELECT student_data.id,student_data.u_card, student_data.u_f_name,student_data.u_email,student_data.class_id,fee.total,fee.remain
              // FROM student_data
              //  LEFT JOIN fee ON student_data.id = fee.enroll_id';


               
               $query = 'SELECT student_data.id,student_data.u_card, student_data.u_f_name,student_data.u_email,student_data.class_id,fee.u_card,fee.total,fee.remain ,fee.u_card 
               FROM student_data
               LEFT JOIN fee ON student_data.u_card= fee.u_card';

                 $query_run = mysqli_query($conn, $query);

                 foreach($query_run as $row)  
          {
        ?>
         <form action="" method="POST">


         <div class="form-group">
         <label>#sl no:</label>
        <input type="text" class="form-control" name="id" value="<?php echo $row['id'] ;?> " class="form-control" >
       </div>
         <div class="form-group">
         <label>Name:</label>
        <input type="text" class="form-control" name="u_f_name" value="<?php echo $row['u_f_name'] ;?> " class="form-control" placeholder="Enter student name">
       </div>
       <div class="form-group">
         <label>Student Id</label>
        <input type="text" class="form-control" name="u_card" value="<?php echo $row['u_card'] ;?> " >
       </div>
    
        <div class="form-group">
         <label>Total Fee:</label>
          <input type="text" class="form-control" name="total" value="<?php echo $row['total']; ?> " class="form-control" placeholder="Enter Total fee">
        </div>
         <div class="form-group">
           <label>Remaining Fee:</label>
         <input type="text" class="form-control" name="remain" value="<?php echo $row['remain']; ?> " class="form-control" placeholder="Enter Remaining fee">
         </div>


        
        
        


         <button type="submit" name="update" class="btn btn-primary"> Update </button>

         </form>
        <?php
                }
            }
        ?>



         </div>
    </div>
</div>

</div>











