<?php
session_start();
$con = mysqli_connect('localhost','root','','e-leavesystem');
$name=$_GET['emp'];
$empid=$_GET['empid'];
$type=$_GET['type'];
$no_days=$_GET['days'];
$sql="select * from remaining_leave where emp_id='$empid' ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);

//asfs
?>



<html>
<head><title>Profile | Leave hive</title>
	<link rel="stylesheet" href="assets/css/main.css" /></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Type', 'Leave taken per semester'],
          ['Commuted',    11],
          ['Earn',       10],
          ['Special CL',   49 ],
          ['Half Pay',   38],
          ['Medical',     50]
        ]);

        var options = {
          title: 'Leave of employee'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


<body>

<div id="wrapper">

        <header id="header">
          <h1>User leave</h1>

        </header>

        <div id="main">

          <nav id="nav">
          <ul>
            <li><a href="interface.php">Home</a></li>
						<li><a href="grant.php">Grant</a></li>
            <li><a href="#"  class="active" >leave details</a></li>
            <li><a href="logout.php" >Sign out</a></li>

          </ul>
        </nav>

          <!-- Content -->
            <section id="content" class="main">


						<div class="box alt">
									<div class="row uniform">
										<div class="1u"></div>
										<div class="2u"><b>Name</b></div>
										<div class="2u"><?php echo $name ?></div>
										<div class="3u"></div>
										<div class="2u"><b>Id</b></div>
										<div class="2u$"><?php echo $empid; ?></div>

										<div class="1u"></div>
										<div class="2u"><b>type</b></div>
										<div class="2u"><?php echo $type; ?></div>
										<div class="3u"></div>
										<div class="2u"><b>Days</b></div>
										<div class="2u$"><?php echo $no_days; ?></div>

										<div class="1u"></div>
										<div class="2u"><b>Application</b></div>
										<div class="9u$">
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
										</div>




							</div>
						</div>

					<center>		<div id="piechart" style="width: 900px; height: 500px;"></div></center>

            </section>

        </div>

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
            <p class="copyright">&copy; Leave hive team. Designd by Team Hive</p>
          </footer>

  </div>


</body>




</html>
