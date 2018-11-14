   <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password)*/

    $link = mysqli_connect("localhost", "root", "", "e-leavesystem");

    // Check connection

    if($link === false)
	{
	die("ERROR: Could not connect. " . mysqli_connect_error());
	header("Location: reg.php");
    } 
	else
	{
		$fname= mysqli_real_escape_string($link, $_POST['fname']);
		if(!preg_match("/^[a-zA-Z ]*$/",$fname))
		{
		$nameErr = "Only letters and white space allowed"; 
		echo $nameErr;
		}
		$lname= mysqli_real_escape_string($link, $_POST['lname']);
		if (!preg_match("/^[a-zA-Z ]*$/",$lname))
		{
	    $nameErr = "Only letters and white space allowed"; 
	
		}
		if(isset($_POST['empid']))
		{
		  $empid=mysqli_real_escape_string($link, $_POST['empid']); 
		  $query = mysqli_query($link,"SELECT * FROM faculty WHERE emp_id = '$empid' ") ;
		  if(mysqli_num_rows($query) > 0)
		  { 
			echo "User already exist ";
			
		  }
		  else
		  {
		    $sex = mysqli_real_escape_string($link, $_POST['gender']); 	 
		    $email= mysqli_real_escape_string($link, $_POST['email']);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
			$emailErr = "Invalid email format"; 
			}
			$designation= mysqli_real_escape_string($link, $_POST['designation']);
			$department = mysqli_real_escape_string($link, $_POST['department']);
			$password= mysqli_real_escape_string($link, $_POST['password']);
			$cpassword= mysqli_real_escape_string($link, $_POST['cpassword']);
		
			$sql = "INSERT INTO  faculty (fname,lname,emp_id,gender,department,designation,email_id,password) VALUES ('$fname','$lname','$empid','$sex','$department','$designation','$email','$password')";
			$res1 = "INSERT INTO remaining_leave (emp_id,commuted,earn,half_pay,special_cl,restricted,vacation,medical) values('$empid',8,15,15,15,2,28,15)";
			if( $designation === 'hod' || $designation === 'registrar')
			{
			$res = " INSERT INTO leave_providers (head_id,fname,lname,department,designation,password,gender) values('$empid','$fname','$lname','$department','$designation','$password','$sex')";
			if( mysqli_query($link,$res)&& mysqli_query($link,$sql) && mysqli_query($link,$res1))
			header("Location: login_sucessful.php");
			}
			else
			{
			if(mysqli_query($link ,$sql) && mysqli_query($link,$res1))
			header("Location: login_sucessful.php");
			else echo " do again" ;
			
			}
			}
		
	}
	else 
	{
		$mssgq = "User registration failed "; 
		echo ' $mssqq ';
		echo 'window.location.href = "reg.php" ' ;
	}
		}
	/*else
	{ */

        //echo "ERROR: Could not able to Register You,Kindly Fill Correct Details. ".mysqli_error($link);

    /* } */
    // close connection
    
    mysqli_close($link);
    ?> 