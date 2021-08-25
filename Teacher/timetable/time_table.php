<?php

session_start();
include('db.php');
if(isset($_POST['save'])){



  $day = $_POST['day'];
  $class_id = $_POST['class_id'];
  $subject = $_POST['subject'];
  $start_time = $_POST['start_time'];
  $end_time = $_POST['end_time'];
   
    // $query = "insert into time_table values(null,'$_POST[day]','$_POST[subject]','$_POST[start_time]','$_POST[end_time]')";
    $query ="INSERT INTO `time_table`( `day`,`class_id`, `subject`, `start_time`, `end_time`) VALUES ('$day','$class_id','$subject','$start_time','$end_time')";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
      echo "<script>alert('timetable Created...');
      window.location.href = ''time_table.php';
      </script>";
    }
    else{
      echo "<script>alert('Please try again');
      window.location.href = 'time_table.php';
      </script>";
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
          <a href="../notice.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Notice</span>
          </a>
          <a href="../attendence/index.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Attendence</span>
          </a>
          <a href="../fee/fee.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Fee</span>
          </a>
          <a href="time_table.php" class="active">
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

<form action="" method="POST">

<div class="form-group">

<label for="inputdays">Class</label>
 <select name="class_id" class="form-control">
  <option selected>Choose...</option>
  <option value="5">5</option>
									
							
								
</select>
</div>

  <label for="inputdays">Days</label>
 <select name="day" class="form-control">
  <option selected>Choose...</option>
  <option value="Monday">Monday</option>
									<option value="Tuesday">Tuesday</option>
									<option value="Wednesday">Wednesday</option>
									<option value="Thrusday">Thrusday</option>
                  <option value="Friday">Friday</option>
                  <option value="Saturday">Saturday</option>
								
</select>
</div>


<div class="form-group">
    <label>subject</label>
    <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
  </div>
  <div class="form-group">
    <label>Start Time</label>
    <input type="time" class="form-control" name="start_time" placeholder="Enter Start Time">
  </div>
  <div class="form-group">
    <label>End Time</label>
    <input type="time" class="form-control" name="end_time" placeholder="Enter End Time">
  </div>

</div>
<div class="modal-footer">

<button type="submit" class="btn btn-primary"name="save">Save</button>
    
</div>
</form>

<div class="container">
<!--datatabel example-->
<div class="card show mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary"></h6>
   
<!-- <button type ="button" class="btn btn-primary" data-toggle="modal" data-target="#create_notice">Add Notice </button> -->

</div>

<div class="card-body">
<div class="table-responsive">
<div class="table-responsive">
<?php


                // $query = '
                // SELECT student_data.id,time_table.class_id,time_table.day,time_table.subject,time_table.start_time,time_table.end_time
                //  FROM student_data 
                // LEFT JOIN time_table ON student_data.id = time_table.id;';


                $query = "SELECT * FROM `time_table` ";

                $query_run = mysqli_query($conn,$query);
    ?>
    <table class="table table-borderd" id="dataTable" width="100%" cellspacing="0">
         <thead border="2px">
               <tr>
               <th>SL NO</th>
               <th>class</th>
               <th>Days</th>
                 <th>subject</th>
                 <th>Start Time</th>
                 <th>End Time</th>  
                 
                  
               </tr>
        </thead>
         <tbody>
         <tbody>
                <?php
                while($row = mysqli_fetch_assoc($query_run))
                {
                ?>
                    <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['class_id'];?></td>
                    <td><?php echo $row['day'];?></td>
                    <td><?php echo $row['subject'];?></td> 
                    <td><?php echo $row['start_time'];?></td> 
                     <td><?php echo $row['end_time'];?></td>
                     
                     
                                                          
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




