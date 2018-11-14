<?php
 $link = mysqli_connect("localhost", "root", "", "leave");
 // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
  // Escape user inputs for security
       $emp_id = mysqli_real_escape_string($link, $_POST['Empid']);

    $fname = mysqli_real_escape_string($link, $_POST['fname']);
 $lname = mysqli_real_escape_string($link, $_POST['lname']);

    $sex = mysqli_real_escape_string($link, $_POST['sex']);

  $designation = mysqli_real_escape_string($link, $_POST['designation']);
  $department= mysqli_real_escape_string($link, $_POST['deptname']);

    $from = mysqli_real_escape_string($link, $_POST['leave_from']);

    $to = mysqli_real_escape_string($link, $_POST['leave_to']);

    $PurposeofLeave= mysqli_real_escape_string($link, $_POST['reason']);
    $Addresswhenonleave = mysqli_real_escape_string($link, $_POST['add_leave']);

  $dateofapply= mysqli_real_escape_string($link, $_POST['dateofapply']);


       // attempt insert query execution

    $sql = "INSERT INTO  study_leave(Empid,fname,lname,sex,deptname,designation,leave_from,leave_to,reason,add_leave,dateofapply) VALUES
 ('$emp_id', '$fname', '$lname', '$sex', '$department', '$designation', '$from', '$to', '$PurposeofLeave','$Addresswhenonleave','$dateofapply')";

    if(mysqli_query($link, $sql))
{
    echo "You have sucessfully Applied for Study Leave." ;

    } else
{

        echo "ERROR: Could not able to appy,Kindly Fill Correct Details. ".mysqli_error($link);

    }
if($designation=='null')
		{     
			echo"<script>window.open(insertcl.php?designation='Select Designation','_self')</script>";
			exit();
		}
		if($department=='null')
		{     
			echo"<script>window.open(insertcl.php?deptname='Select Department','_self')</script>";
			exit();
		}
     

    // close connection

    mysqli_close($link);



?>