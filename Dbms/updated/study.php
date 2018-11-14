<!doctype html>
<html>
<head>
<title>
casual leave
</title>
<style>
body{
background-image:url("emp.jpg");
background-repeat:no-repeat;
}
h1{
color:blue;
font-family:Bradley Hand ITC;
font-size:40px;
}
#border{
border: 5px solid black;
height:600px;
}
p1
{
color:black;
font-family: 'Open Sans', Bookman Old Style;
font-size: 15px;
height: 30px;
padding: 1px 0px;
width: 200px;
}
form fieldset input[type="text"],input[type="text"],input[type="text"],input[type="date"],input[type="date"], input[type="date"], input[type="text"],input[type="text"],input[type="date"]
 {
color:black;
font-family: 'Open Sans', Bookman Old Style;
font-size: 15px;
height: 30px;
padding: 1px 0px;
width: 200px;
}
a{
font-color:red;
font-family:Cooper;
}
</style>
</head>
<body>
<?php include 'includepart.php' ; ?>
<center>
<div id="border">
<h1><u>Apply for Study Leave</u></h1>
<form action="studyfile.php" method="POST">
<table  border="3" height="320px" width="700px" cell-padding="3px" cell-spacing="150px">
<tr>
<td><a>Employee ID:</a></td>
<td><input type="text" name="Empid" id="Empid" required></td>
</tr>
<tr>
<td><a>First Name:</a></td>
<td><input type="text" name="fname" id="fname"required></td>
</tr>
<tr>
<td><a>Last Name:</a></td>
<td><input type="text" name="lname" id="lname" required></td>
</tr>
<tr>
<td><a>Sex:</a></td>
<td><input type="radio" name="sex" value="male" />Male
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="sex" value="female"/>Female
</td>
</tr>
<tr>
<td>
<a>Department:</a></td>
<td>
<select id="deptname" name="deptname">
<option value="null">Select Department</option>
<option value="Physics">Physics</option>
<option value="Chemistry">Chemistry</option>
<option value="Mathematics">Mathematics</option>
<option value="Geography">Geography</option>
<option value="Computer Science">Computer Science</option>
<option value="Statistics">Statistics</option>
</select>
<br><font color="red"><?php echo @$_GET['deptname'];?></font>
</td></tr>
<tr>
<td><a>Designation:</a></td>
<td>
<select id="designation" name="designation" required>
<option value="null" selected>Select Designation</option>
<option value="professor">Professor</option>
<option value="Associate professor">Associate Professor</option>
<option value="Assistant Professor">Assistant professor</option>
<option value="Reader">Reader</option>
<option value="Lecturer">Lecturer</option>
</select>
<br><font color="red"><?php echo @$_GET['designation'];?></font>
</td>
</td>
</tr>
<tr>
<td><a>From:</a></td>
<td><input type="date" name="leave_from" id="leave_from"  required/></td>
</tr>
<tr>
<td><a>To: </a></td>
<td><input type="date" name="leave_to" id="leave_to" required></td>
</tr>
<tr>
<td><a>Number of days:</a></td>
<td><input type="text" name="duration" id="duration" required></td>
</tr>
<tr>
<td><a>Purpose of Leave:</a></td>
<td><input type="text" name="reason" required></td>
</tr>
<tr>
<td><a>Address when on Leave:</a> </td>
<td><input type="text" name="add_leave" required></td>
</tr>
<tr>
<td><a>Date of Application:</a></td>
<td><input type="text" name="dateofapply" value="<?php echo date('d/m/y');?>"/></td>
</tr>
</table>
<br>
<a><input type="submit" value="SUBMIT"></a>
</div>
</body>
</form>
</html>

