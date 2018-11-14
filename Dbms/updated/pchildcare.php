<html>
<head>
<title>
appliedleaves
</title>
<style>
.dropbtn {
    background-color: green;
    color: white;
    min-width: 100px;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    //position: relative;//
    display: inline-block;
}

.dropdown-content {
    display: none;
   // position: absolute;//
    right: 0;
    background-color: black;
    min-width: 90px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: yellow;
    padding: 6px 8px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: grey}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

td {
    text-align: left;
    width:100px;
 height:50px;
}
tr:hover{background-color:wheat}
th {
    background-color: darkblue;
    color: white;
 width:90px;
 height:50px;
}
</style>
</head>
<body>
<div class="left_content">
<ul class="ulclass">
<h4 align="center">Employees Who have Applied for leave </h4>
 <table width="100%">  
<thead> 
<tr>
<th>Emp_id</th>
<th>FName</th>
<th>LName</th>
<th>Sex</th>
<th>Department</th>
<th>Designation</th>
<th>Leave_from</th>
<th>Leave_to</th>
<th>Remained Leave</th>
<th>Address during leave</th>
<th>Reason</th>
<th>Date of apply</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead> 
</table>
</body>
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'leave');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>
<?php

        $selectvolunteer=mysql_query("(SELECT * FROM child_care_leave where status='pending')");

	 $i=1;
        while($volunteerrow=mysql_fetch_array($selectvolunteer))
        
        {
          $uid=$volunteerrow['Empid'];
          $ufname=$volunteerrow['fname'];
          $ulname=$volunteerrow['lname'];
          $usex=$volunteerrow['sex'];
         $udept=$volunteerrow['deptname'];
         $udesig=$volunteerrow['designation'];
        $ufrom=$volunteerrow['leave_from'];
       $uto=$volunteerrow['leave_to'];
      $uadd=$volunteerrow['add_leave'];
      $ureason=$volunteerrow['reason'];
     $uapplydate=$volunteerrow['dateofapply'];
 $ustatus=$volunteerrow['status'];
$remainedleave=$volunteerrow['remained_leave'];
 
 

                    ?>
<form action="sanction_child.php" method="post">
  <table width="100%">
<tr>
<td><strong> <input type="text" size="4px" name="empid" value="<?php echo $uid; ?>"></strong></td>
<td><strong> <?php echo $ufname; ?></strong></td>
<td><strong> <?php echo $ulname; ?></strong></td>
<td><strong> <?php echo $usex; ?></strong></td>
<td><strong> <?php echo $udept; ?></strong></td>
<td><strong> <?php echo $udesig; ?></strong></td>
<td><strong> <?php echo $ufrom; ?></strong></td>
<td><strong> <?php echo $uto; ?></strong></td>
<td><strong><input type="text" size="6px" name="remainedleave" value="<?php echo $remainedleave; ?>"></strong></td>
<td><strong> <?php echo $uadd; ?></strong></td>
<td><strong> <?php echo $ureason; ?></strong></td>
<td><strong> <?php echo $uapplydate; ?></strong></td>
 <td>
<select id="status" name="ustatus" >
<option value="pending">still pending</option>
<option value="decline">decline</option>
<option value="Sanctioned">Sanctioned</option>
</select>
</td>
<td>
<input type="submit" value="SUBMIT">
</td>
  </tr>
</table>
</form>
<?php
 }
 ?>
</ul>
</div>
