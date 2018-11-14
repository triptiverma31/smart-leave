<?php
		session_start();		
		$username=$_POST['username'];
		$password=$_POST['password'];
		if( $username && $password)
		{
				$connect=mysql_connect("localhost", "root","") or die("Couldn't connect to the database");
				mysql_select_db("leave") or die("Couldn't find the database");

				$query=mysql_query("SELECT * FROM admin WHERE username='$username' ");
				$numrows=mysql_num_rows($query);
	
				if($numrows!==0)
				{
					while($row=mysql_fetch_assoc($query))
					{ 	
						
						$dbusername=$row['username'];
						$dbpassword=$row['password'];
					}
					if( ($username)==$dbusername &&($password)==$dbpassword)
					{


						header('Location:aselectleave.php');

						@$_SESSION['username']=$username;
			
			
					}
				
					
					else echo '<script type="text/javascript">';
					echo ' alert("password does not match");';
					echo 'window.location.href="admin_login.php";';
					echo '</script>' ;     
			}
					else echo '<script type="text/javascript">';
					echo ' alert("User does not exist");';
					echo 'window.location.href="admin_login.php";';
					echo '</script>' ;     
					}
					else echo '<script type="text/javascript">';
					echo ' alert("Please Enter Username and Password");';
					echo 'window.location.href="admin_login.php";';
					echo '</script>' ;     
			

?>