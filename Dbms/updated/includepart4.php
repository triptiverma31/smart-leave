<html>
<head>
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 10px 12px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 80px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    size:5px;
    padding: 5px 6px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
<div id="menu" align="middle" >
<ul>
<li><a href="home.php"><font size="4" >Home<img src="home1.png" width="20" height="20">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></a></li>
<li><a href="details.php"><font size="4" >About us&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></a></li>

<li class="dropdown">
<a class="dropbtn"><font size="4"  > Select Leave type: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></a>
<div class="dropdown-content">
<a href="a_casual.php"><font size="4">Casual Leave</font></a>
<a href="a_commuted.php"><font size="4">Commuted Leave</font></a>
<a href="a_earned.php"><font size="4">Earned Leave</font></a>
<a href="a_restricted.php"><font size="4">Restricted Leave</font></a>
<a href="a_childcare.php"><font size="4">Child Care Leave</font></a>
<a href="a_medical.php"><font size="4">Medical Leave</font></a>
<a href="a_adoption.php"><font size="4">Child Adoption Leave</font></a>
<a href="a_maternity.php"><font size="4">Maternity Leave</font></a>
<a href="a_paternity.php"><font size="4">Paternity Leave</font></a>
<a href="a_abortion.php"><font size="4">Abortion Leave</font></a>
<a href="a_study.php"><font size="4">Study Leave</font></a>
<a href="a_subactical.php"><font size="4">Subactical Leave</font></a>
<a href="a_duty.php"><font size="4">Duty Leave</font></a>
</div>
</li> 
<li style="float:right"><a href="logout1.php"><font size="4"  face="algerian">
<mark>Log out</mark><img src="logo.png" width="20" height="20"</font></a></li>
</ul>
</div>
</body>
</html>