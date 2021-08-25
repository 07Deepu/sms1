<?php 
session_start();
include('db.php');

if(isset($_SESSION['u_email'])){
  // echo "welcome $_SESSION[u_email]";
  $qry="select * from teacher_data where id=$_SESSION[id]";
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
  $qualification = $row['qualification'];
  $subject = $row['subject'];
	
}
}
?>


<?php 
	include "inc/header.php"; 
	include "classes/Student.php"; 
	$stu = new Student();
?>


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
          <a href="index.php" class="active">
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
            <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
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



<?php 
	error_reporting(0);
	$cur_date = date('Y-m-d');
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$attend = $_POST['attend'];
		$insertattend = $stu->insertAttendance($attend);
	}
?>
	<div class="container">
<?php 
	if (isset($insertattend)) {
		echo $insertattend;
	}
?>



<div class='alert alert-danger' style="display: none;"><strong>Error !</strong> Student Roll Missing !</div>
		 <div class="card">
			<div class="card-header"> 
				 <h2>
					
					<a class="btn btn-info float-right" href="date_view.php">View All</a>
				</h2> 
			</div>

			<div class="card-body">
				<div class="card bg-light text-center mb-3">
					<h4 class="m-0 py-4"><strong>Date</strong>: <?php echo $cur_date; ?></h4>
					<a class="btn btn-info float-right" href="date_view.php">View All</a>
				</div>
				<form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="25%">S/L</th>
							<th width="25%">Student ID</th>
							<th width="25%">Student Name</th>
							<th width="25%">Email</th>
							<th width="25%">Student Roll</th>
							<th width="25%">Attendance</th>
						</tr>
<?php 
	$getstudent = $stu->getStudents();
	if ($getstudent) {
		$i = 0;
		while ($value = $getstudent->fetch_assoc()) {
			$i++;
?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value['u_card']; ?></td>
							<td><?php echo $value['u_f_name']; ?></td>
							<td><?php echo $value['u_email']; ?></td>
							<td><?php echo $value['roll']; ?></td>
							<td>
								<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="present">P
								<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="absent">A
							</td>
						</tr>
<?php } } ?>

						<tr>
							<td colspan="4" class="text-center">
								<input type="submit" name="submit" class="btn btn-primary px-5" value="Submit">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
