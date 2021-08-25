<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');

include('dbconfig.php');
if(isset($_POST['send_notice'])){
   
    $query = "insert into notice values(null,'$_POST[post_date]','$_POST[to_whom]','$_POST[subject]','$_POST[message]')";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
      echo "<script>alert('Notice Created...');
      window.location.href = 'index.php';
      </script>";
    }
    else{
      echo "<script>alert('Please try again');
      window.location.href = 'index.php';
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


<div class="modal fade" id="create_notice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">

        <div class="modal-body">

        <div class="form-group">
              <label>To Whom:</label>
              <select class="form-control" name="to_whom">
                <option>To All</option>
              
              </select>
          </div>
          <div class="form-group">
            <label>Post Date:</label>
            <input type="date" class="form-control" name="post_date">
          </div>
          <div class="form-group">
            <label>Subject:</label>
            <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
          </div>
          <div class="form-group">
            <label>Message:</label>
            <textarea name="message" rows="8" cols="80" class="form-control" placeholder="Type your message..."></textarea>
          </div>

        </div>
        <div class="modal-footer">
        <!-- <input type="submit" class="btn" name="register" value="Register" /> -->
        <button type="submit" class="btn btn-primary"name="send_notice">Send Notice</button>
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
        <h6 class="m-0 font-weight-bold text-primary"></h6>
           
    <button type ="button" class="btn btn-primary" data-toggle="modal" data-target="#create_notice">Add Notice </button>
    
    </div>

 <div class="card-body">
     <div class="table-responsive">
      <div class="table-responsive">
      <?php


                        $query = 'select * from notice';
                        $query_run = mysqli_query($conn,$query);
            ?>
            <table class="table table-borderd" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                       <tr>
                          <th>Title</th>
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
  



<?php

include('includes/scripts.php');
include('includes/footer.php');

?>