<?php

include('dbconfig.php');

$id = $_GET['id'];
$delete = "DELETE FROM student_data WHERE id = $id";
$run_data = mysqli_query($conn,$delete);

if($run_data){
	header('location:add_student.php');
}else{
	echo "Donot Delete";
}


?>

<?php

include('dbconfig.php');

$id = $_GET['id'];
$delete = "DELETE FROM teacher_data WHERE id = $id";
$run_data = mysqli_query($conn,$delete);

if($run_data){
	header('location:add_teacher.php');
}else{
	echo "Donot Delete";
}


?>