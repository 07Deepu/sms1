<?php 
session_start();
include('db.php');

if(isset($_SESSION['u_email'])){
  // echo "welcome $_SESSION[u_email]";
  $qry="select * from student_data where id=$_SESSION[id]";
$run_data = mysqli_query($conn,$qry);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$card = $row['u_card'];
	$name = $row['u_f_name'];
	$name2 = $row['u_l_name'];
	$father = $row['u_father'];
	$mother = $row['u_mother'];
	$gender = $row['u_gender'];
	$email = $row['u_email'];
	$aadhar = $row['u_aadhar'];
	$Bday = $row['u_birthday'];
	$phone = $row['u_phone'];
	$address = $row['u_state'];
	$dist = $row['u_dist'];
	$pincode = $row['u_pincode'];
	$state = $row['u_state'];
	$time = $row['uploaded'];
  $pass = $row['password'];
	
	$image = $row['image'];
	
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
      <span class="logo_name">Student</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Student Profile</span>
          </a>
          <!-- <a href="edit.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Edit Profile</span>
          </a> -->

          <a href="notice.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Notice</span>
          </a>
          <a href="timetable/timetable.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Time Table</span>
          </a>

        </li>
        
        <!-- <li class="">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li> -->
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
      <!-- <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div> -->

      <div class="profile-details">
        <?php
        echo "
        <img src='upload_images/$image' alt='' style='width: 60px; height: 50px;' ><br>"
        ?>
        <span class="student_name"><?php  echo " $_SESSION[u_email]" ; ?></span>
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

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <form action="" method="POST">
              <?php    
              echo "<img src='upload_images/$image' alt='' style='width: 150px; height: 150px;' ><br> ";?>
            <!-- <img class="profile_img" src="" alt="student dp"> -->
            <h3><?php echo $name  ; ?></h3>
          </div>
       
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php echo $card; ?></p>
            <p class="mb-0"><strong class="pr-1">Student Name:</strong><?php echo $name ; ?></p>
            
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Student Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Father's Name</th>
                <td width="2%">:</td>
                <td><?php echo $father; ?></td>
              </tr>
              <tr>
                <th width="30%">Mother's Name</th>
                <td width="2%">:</td>
                <td><?php echo $mother; ?></td>
              </tr>
              <tr>
                <th width="30%">Aadhar Number</th>
                <td width="2%">:</td>
                <td><?php echo $aadhar; ?></td>
              </tr>
              <tr>
                <th width="30%">DOB</th>
                <td width="2%">:</td>
                <td><?php echo $Bday; ?></td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?php echo $gender; ?></td>
              </tr>
              <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td><?php echo $email; ?></td>
              </tr>
              <tr>
                <th width="30%">Password</th>
                <td width="2%">:</td>
                <td><?php echo $pass; ?></td>
              </tr>
              
              <tr>
                <th width="30%">State</th>
                <td width="2%">:</td>
                <td><?php echo $state; ?></td>
              </tr>
              <tr>
                <th width="30%">District </th>
                <td width="2%">:</td>
                <td><?php echo $dist; ?></td>
              </tr>
              <tr>
                <th width="30%">ZIP</th>
                <td width="2%">:</td>
                <td><?php echo $pincode; ?></td>
              </tr>
              <tr>
                <th width="30%">Mobile</th>
                <td width="2%">:</td>
                <td><?php echo $phone; ?></td>
              </tr>
            </table>
            </form>
            
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
         
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>


  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
