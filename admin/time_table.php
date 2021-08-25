
<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');

include('dbconfig.php');
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
   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-search fa-fw"></i>
</a>
<!-- Dropdown - Messages -->
<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
aria-labelledby="searchDropdown">
<form class="form-inline mr-auto w-100 navbar-search">
<div class="input-group">
    <input type="text" class="form-control bg-light border-0 small"
        placeholder="Search for..." aria-label="Search"
        aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn btn-primary" type="button">
            <i class="fas fa-search fa-sm"></i>
        </button>
    </div>
</div>
</form>
</div>
</li>




<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>

<?php echo $_SESSION['username']; ?>


<img class="img-profile rounded-circle"
src="img/undraw_profile.svg">
</a>
<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
aria-labelledby="userDropdown">
<a class="dropdown-item" href="#">
<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
Profile
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
Logout
</a>
</div>
</li>

</ul>

</nav>




<div class="modal fade" id="create_table" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">

        <div class="modal-body">

            <div class="form-group">
            <label> Class </label>
                <select name="class_id" class="form-control">
                   <option selected>Choose...</option>
                  <option value="5">5</option>
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
               <input type="time" class="form-control" name="end_time" placeholder="Enter Start Time">
            </div>

            <div class="form-group">
            <label>Days</label>
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
           

        </div>
        <div class="modal-footer">
        <input type="submit" class="btn" name="save" value="save" />
            <!-- <button type="submit" name="register" class="btn btn-primary">Save</button> -->
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container">
    <!--datatabel example-->
    <div class="card show mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Time Table</h6>
           
    <button type ="button" class="btn btn-primary" data-toggle="modal" data-target="#create_table">Add time table</button>
    
    </div>

 <div class="card-body">
     <div class="table-responsive">
      <div class="table-responsive">
      <?php

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
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
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
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>







<?php

include('includes/scripts.php');
include('includes/footer.php');

?>






