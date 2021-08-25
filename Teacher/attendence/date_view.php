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
          <a href="attendence/index.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Attendence</span>
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




	<div class="container">
<?php 
	if (isset($insertattend)) {
		echo $insertattend;
	}
?>
		<div class="card">
			<div class="card-header">
				<h2>
					<!-- <a class="btn btn-success" href="add.php">Add Student</a> -->
					<a class="btn btn-info float-right" href="index.php">Take Addendance</a>
				</h2>
			</div>

			<div class="card-body">
				<form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="30%">S/L</th>
							<th width="50%">Attendance Date</th>
							<th width="20%">Action</th>
						</tr>
<?php 
	$getdate = $stu->getDateList();
	if ($getdate) {
		$i = 0;
		while ($value = $getdate->fetch_assoc()) {
			$i++;
?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value['att_time']; ?></td>
							<td>
							<a class="btn btn-primary" href="student_view.php?dt=<?php echo $value['att_time']; ?>">View</a>
							</td>
						</tr>
<?php } } ?>
					</table>
				</form>
			</div>
		</div>
	</div>
