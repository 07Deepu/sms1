<?php

session_start();
include("db.php");


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
          <a href="notice.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Notice</span>
          </a>
          <a href="attendence/index.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Attendence</span>
          </a>
          <a href="../fee/fee.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Fee</span>
          </a>
          <a href="../timetable/time_table.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Time Table</span>
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
        <span class="student_name"><?php  echo " $_SESSION[u_email]" ; ?></span>
        <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                
          </a>
      </div>

          </nav>


          <div class="ScriptTop">
      <div class="rt-container">
          <div class="col-rt-4" id="float-right">
  
                      
         </div>
         
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

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <form action="" method="POST">


 <div class="card-body">
     <div class="table-responsive">
      <div class="table-responsive">
      <?php
           $query = 'select * from notice';
            $query_run = mysqli_query($conn,$query);
            ?>

            <table class="table table-borderd" id="dataTable" width="100%" cellspacing="0" border="2px" padding="20px" >
                 <thead>
                       <tr>
                          <th >Title</th>
                          <th>message</th>  
                          <th>Date</th>  
                       </tr>
                </thead>
                 <tbody>
                 <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                        ?>
                            <tr>
                                <td><?php echo $row['title'];?></td>
                                <td><?php echo $row['message'];?></td>
                                <td><?php echo $row['post_date'];?></td>
                            </tr>
                        <?php
                            
                        }
                       
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
  



