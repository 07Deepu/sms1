<?php

session_start();
include('db.php');
if(isset($_POST['save'])){
  
  $id = $_POST['id'];
  $u_card = $_POST['u_card'];
  $total = $_POST['total'];
  $remain = $_POST['remain'];
 
    // $query = "INSERT INTO `fee`(  `u_id`, `total`, `remain`) VALUES (' $u_id','$total','$remain')";


    $query ="INSERT INTO `fee`( `id`,`total`, `remain`, `u_card`) VALUES ('$id','$total','$remain',' $u_card')" ;
    $query_run = mysqli_query($conn,$query);
    if($query_run){
      echo "<script>alert('Notice Created...');
      window.location.href = 'fee.php';
      </script>";
    }
    else{
      echo "<script>alert('Please try again');
      window.location.href = 'fee.php';
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
          <a href="fee.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">fee</span>
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

<form action="" method="POST">
<!-- <div class="form-group">
         <label>Name:</label>
        <input type="text" class="form-control" name="u_f_name"  class="form-control" placeholder="Enter student Name">
       </div> -->
<div class="form-group">
<label> sl No:</label>
    <input type="text" class="form-control" name="id" placeholder="Enter Student id">
  </div>
    <label>student id no:</label>
    <input type="text" class="form-control" name="u_card" placeholder="Enter Student id">
  </div>
  <div class="form-group">
    <label>Total Fee:</label>
    <input type="text" class="form-control" name="total" placeholder="Enter Totalfee">
  </div>
  <div class="form-group">
    <label>Remaining Fee:</label>
    <input type="text" class="form-control" name="remain" placeholder="Enter Remainfee">
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
 $query = ' SELECT student_data.id,student_data.u_card, student_data.u_f_name,student_data.u_email,student_data.class_id,fee.total,fee.total,fee.remain 
            FROM student_data
             LEFT JOIN fee ON student_data.id = fee.id';
                $query_run = mysqli_query($conn,$query);
    ?>
    <table class="table table-borderd" id="dataTable" width="100%" cellspacing="0">
         <thead border="2px">
               <tr>
               <th>SL NO</th>
                 <th>name</th>
                 <th>student id no</th>
                 <th>email</th>
                 <th>class</th>
                  <th>Total Fee</th>  
                  <th>Remaining fee</th>  
                  <th class="text-center" scope="col">Edit</th>
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
                    <td><?php echo $row['u_f_name'];?></td> 
                    <td><?php echo $row['u_card'];?></td> 
                    <td><?php echo $row['u_email'];?></td> 
                    <td><?php echo $row['class_id'];?></td> 
                     <td><?php echo $row['total'];?></td>
                     <td><?php echo $row['remain'];?></td>
                     <td>
                                    <form action="update.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                                          
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
