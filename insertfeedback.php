<?php
	
		$conn = mysqli_connect("localhost", "root", "", "e-leavesystem");
		 if($conn === false)
		{
		die("ERROR: Could not connect. " . mysqli_connect_error());
		header("Location: reg.php");
		} 
		
		
		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$contact_no=$_POST['contact'];
			$category=$_POST['category'];
			$feedback=$_POST['feedback'];
			
			$sql= "insert into feedback (name,contact_no,category ,feedback) values
								('$name','$contact_no','$category','$feedback')" ;
			
			if( mysqli_query($conn,$sql))
			{
				
				$sec='3';
				header("Refresh: $sec; url=index.php");
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYOU HAVE SUCESSFULLY SUBMITTED YOUR FEEDBACK FORM ";
			}
			else echo "not inserted" ;
			
		}
		else
		{
			echo 'alert(" Sorry , Cannot post due to some problem ")' ;
			header("location : feedback.php");
		}
 
 
 ?>