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
    padding: 5px 6px;
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
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 10px 12px;
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
<li><a href="index.php"><font size="4" >Home<img src="home1.png" width="20" height="20">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></a></li>
<li><a href="details.php"><font size="4" >About us&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></a></li>
<li class="dropdown">
<a class="dropbtn"><font size="4"  >Log in&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></a>
<div class="dropdown-content">
<a href="admin_login.php"><font size="4">Administrator</font></a>
<a href="userpage.php"><font size="4">Employee</font></a>
<a href="principal_login.php"><font size="4">Principal</font></a>
</div>
</li> 
</ul>
</div>
</body>
</html>