<?php
session_start();
if(isset($_GET['cancel']))
						{
							
							$con = mysqli_connect('localhost','root','','e-leavesystem');
							$status= $_GET['status'];
							$l_from= $_GET['l_from'];
							$l_to= $_GET['l_to'];
							$con = mysqli_connect('localhost','root','','e-leavesystem');
							$empid=$_SESSION['emp_id'];
							$leavetype = $_GET['cancel'];

							if( $status=='pending' )
							{
								mysqli_query($con," DELETE FROM apply_for_leave WHERE emp_id='$empid' AND leave_type='$leavetype' AND leave_from='$l_from' AND leave_to='$l_to' ");
								header("refresh:1,url=status.php");
							}
							else if( $status =='sanctioned')
							{ 
							$msg="entered cancel";
							echo "<script> echo('$msg'); </script>" ;
							$d1= date_create($l_from);
							$d2=date_create($l_to);
							$num=$d1->diff($d2);
							$sql= " UPDATE remaining_leave SET $leavetype=$leavetype+($num->days) WHERE emp_id='$empid' ";
							mysqli_query($con,$sql);
							mysqli_query($con," DELETE FROM apply_for_leave WHERE emp_id='$empid' AND leave_type='$leavetype' AND leave_from='$l_from' AND leave_to='$l_to' ");
							header("refresh:1,url=status.php");
							}
						}
?>
<html>
<head><title>Status | leave hive</title>
	<link rel="stylesheet" href="assets/css/main.css" /></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<body>

<div id="wrapper">

        <header id="header">
          <h1>Status</h1>
          <p></p>
        </header>
		<nav id="nav">
            <ul>
				<?php
				if($_SESSION['designation'] == 'hod' ||$_SESSION['designation'] == 'registrar')
				{
				?>
					<li><a href="interface.php">Home</a></li>
					<li><a href="#"  class="active" >Status</a></li>
					<li><a href="logout.php" >Sign out</a></li>
				<?php
				}
				else
				{
				?>
					<li><a href="userpage.php">Home</a></li>
					<li><a href="#"  class="active" >Status</a></li>
					<li><a href="logout.php" >Sign out</a></li>
				<?php
				}
				?>
            </ul>
        </nav>

          <!-- Content -->
          <div id="main" style="padding-left: 4%;padding-top:10%">

						<section>

										<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>Leave type</th>
														<th>From</th>
														<th>To</th>
														<th>Status</th>
														<th>Cancel<th>
													</tr>
												</thead>
												<?php display(); ?>
												
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
										</div>
						</section>
        </div>
									
						<?php
						function display()
						{
						$con = mysqli_connect('localhost','root','','e-leavesystem');
						$empid=$_SESSION['emp_id'];
						$result = mysqli_query($con,"select emp_id,leave_type,leave_from,leave_to,status from apply_for_leave where emp_id='$empid' and (status='pending' or status='sanctioned') ");
						
						if ( mysqli_num_rows($result) >0)	
							{
			
									while ($row = $result->fetch_assoc())
									{  
						?>	   
									<tbody style="color:gray;">
									<tr>
									<td><?php echo $row['leave_type']; ?></td>
									<td><?php echo $row['leave_from']; ?></td>
									<td><?php echo $row['leave_to']; ?></td>
									<td><?php echo $row['status']; ?></td>
									<td>
									<form method="get">
									<input type="hidden" name="status" value="<?php echo $row['status']; ?>" />
									<input type="hidden" name="l_from" value="<?php echo $row['leave_from']; ?>" />
									<input type="hidden" name="l_to" value="<?php echo $row['leave_to']; ?>" />
									<button type="submit" class="button special fit" style="background-color:red; hover background-color:gray" name="cancel" value="<?php echo $row['leave_type']; ?>" >cancel</button>
									</form>
									</td>
									</tr>
									</tbody>
						<?php
									}
							}
							else 
							{
								$mssg= "You dont have applied for any leave";
								echo "<script> alert('$mssg'); </script>"; 
							}
						}
						
						?>
									
		

      <footer id="footer">
            <section>
              <h2>About Leave hive</h2>
              <p>Leave hive is a genral web application for Approving leave online.</p>
              <ul class="actions">
                <li><a href="about.html" class="button">Learn More</a></li>
              </ul>
            </section>
            <section>
              <h2>Contact Us</h2>
              <dl class="alt">

                <dt>Phone</dt>
                <dd>(+91)8090 410 264</dd>
                <dt>Email</dt>
                <dd><a href="mail.google.com/">Vikrant.mnnit00@gmail.com</a></dd>
              </dl>
              <ul class="icons">
                <li><a href="https://twitter.com/svicky516" target="_blank" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100003661545540&ref=bookmarks" target="_blank" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/crise_time/" target="_blank" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
                <li><a href="https://github.com/crisetime"  target="_blank" class="icon fa-github alt"><span class="label">GitHub</span></a></li>

              </ul>
            </section>
            <p class="copyright">&copy; Leave hive team. Designd by Vikrant</p>
          </footer>

  </div>
</body>
</html>
