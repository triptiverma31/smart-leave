<?php
		session_start();
		$designation=$_POST['designation'];	
		$empid=$_POST['empid'];
		$headid=$_POST['empid'];
		$password=$_POST['password'];
		//echo " $designation " ;
		if( $empid && $password && $designation)
		{
				$connect=mysqli_connect("localhost", "root","") or die("Couldn't connect to the database");
				mysqli_select_db($connect,"e-leavesystem") or die("Couldn't find the database");
				
				if( ($designation) == 'hod' || ($designation) == 'registrar')
				{
					
					$query1=mysqli_query($connect,"SELECT * FROM leave_providers WHERE head_id='$empid' ");
					$query=mysqli_query($connect,"SELECT * FROM faculty WHERE emp_id='$empid' ");
					$numrows1=mysqli_num_rows($query1);
					$numrows=mysqli_num_rows($query);
					
					
					if($numrows>0 && $numrows1>0  )
					{     
					while($row=mysqli_fetch_assoc($query))
					{ 	
						
						$dbempid=$row['emp_id'];
						$dbpassword=$row['password'];
						$dbdesignation=$row['designation'];
						$db_firstname=$row['fname'];
						$db_lastname=$row['lname'];
						
					}
					while($row=mysqli_fetch_assoc($query1))
					{ 	
						
						$dbheadid=$row['head_id'];
						$dbpassword1=$row['password'];
						$dbdesignation1=$row['designation'];
						
					}
					if( ($headid)==$dbheadid &&($password)==$dbpassword1 && ($designation) ==$designation && ($empid) ==$dbempid && ($password)==$dbpassword )
					{
						session_start();
						//alert('fvhnbhvf ');
						@$_SESSION['emp_id']=$dbempid;
						@$_SESSION['name']=$db_firstname;
						header("Location:userpage.php?user=".$dbempid);
					}
					else echo 'alert ( "Password not matched as HOD or registrar "); ' ;
					}
					else  echo ( "Incorrect details. Fill correct details") ;
				}
				else if($designation == 'g_faculty' || $designation == 'lecturar' || $designation == 'associate_professor' || $designation == 'faculty' || $designation == 'assistant_professor' || $designation == 'other' )
					{ 
				        
						$query=mysqli_query($connect,"SELECT * FROM faculty WHERE emp_id='$empid' ");
						if(mysqli_num_rows($query))
						{     
						while($row=mysqli_fetch_assoc($query))
						{ 	
						
						$dbempid=$row['emp_id'];
						$dbpassword=$row['password'];
						$dbdesignation=$row['designation'];
						$db_firstname=$row['fname'];
						$db_lastname=$row['lname'];
						}
						if( ($headid)==$dbempid )
						{
							if(($password)==$dbpassword)
							{
								if( ($designation) ==$designation)
								{
									@$_SESSION['emp_id']=$empid;
									@$_SESSION['name']=$db_firstname;
									header("Location:userpage.php?user=".$dbempid); 
								}
								else
									
								{	echo '<script type="text/javascript">';
									echo ' alert("designation not matched");';
									echo 'window.location.href="login.php";';
									echo '</script>' ;    
								}
							}
							else
							{	echo '<script type="text/javascript">';
								echo ' alert("Password not matched");';
								echo 'window.location.href="login.php";';
								echo '</script>' ;    
							}
						}
						else
						{	echo '<script type="text/javascript">';
							echo ' alert("Employee Id does not exist");';
							echo 'window.location.href="reg.php";';
							echo '</script>' ;    
						}
						}
						else
						{	
					    echo '<script type="text/javascript">';
						echo ' alert("User does not exist");';
						echo 'window.location.href="reg.php";';
						echo '</script>' ;    
						}
					}
					else
					{	echo '<script type="text/javascript">';
						echo ' alert("designation not valid");';
						echo 'window.location.href="login.php";';
						echo '</script>' ;    
					}
			}
			else
			{
			echo '<script type="text/javascript">';
			alert("Please Enter Employee Id and Password");
			echo ("Please Enter Employee Id and Password");
			header("location : login.php");
			//echo '</script>' ;   
			}
			

?>