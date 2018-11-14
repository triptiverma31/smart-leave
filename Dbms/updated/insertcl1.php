<?php
	session_start();
	if(isset($_POST['submit']))
	{
	$connect=mysqli_connect("localhost", "root","");
	mysqli_select_db($connect,"leave");
	$emp_id=mysqli_real_escape_string($connect,$_POST['Empid']);
	$fname=mysqli_real_escape_string($connect,$_POST['fname']);
	$lname=mysqli_real_escape_string($connect,$_POST['lname']);
	$sex=mysqli_real_escape_string($connect,$_POST['sex']);
	$deptname=mysqli_real_escape_string($connect,$_POST['dept name']);
	$designation=mysqli_real_escape_string($connect,$_POST['designation']);
	$leave_from=mysqli_real_escape_string($connect,$_POST['leave_from']);
	$leave_to=mysqli_real_escape_string($connect,$_POST['leave_to']);
	$purpose=mysqli_real_escape_string($connect,$_POST['reason']);
	$add_leave=mysqli_real_escape_string($connect,$_POST['add_leave']);
	$dateofapply=mysqli_real_escape_string($connect,$_POST['dateofapply']);

	if($emp_id&& $fname&& $lname && $sex && $deptname && $designation&& $leave_from && $leave_to && $purpose&& $add_leave&& $dateofapply)
	{			
		$query=mysqli_query($connect,"Insert into commuted_leave values('$emp_id','$fname','$lname','$sex','$deptname','$designation','$leave_from','$leave_to','$purpose','$add_leave','$dateofapply')");

		
		if($query)
		{
  			?>
  				<script>alert('Successfully applied...Go Back and Login!! ');</script>
     			<?php
				
			
 		}
		else
		 {
			 ?>
    			<script>alert('Error while applying...');</script>
      			  <?php
			
		 }
	}		
		if($designation=='null')
		{     
			echo"<script>window.open(cl.php?course=Select Designation','_self')</script>";
			exit();
		}
		if($department=='null')
		{     
			echo"<script>window.open(cl.php?course=Select Department','_self')</script>";
			exit();
		}
}
?>