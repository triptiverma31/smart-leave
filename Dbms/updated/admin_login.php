
<html>
<head>
<title>
admin.login
</title>
<style>
#border{
border:5px solid black;
width:100%;
height:73%;
}
body{
background-color:wheat;
}
#border2{
border-bottom:20px collapse;
color:black;
width:100%;
}
form fieldset a1.hover {
	 text-decoration: underline; }
/* ---------- LOGIN ---------- */
#LOGIN {

	border: 4;
	 color: black;
	cursor: pointer;
	height: 40px;
  	width:40px;
	text-transform: uppercase;
	  background-image:url("button.jpg");
               
}
form fieldset  ,input[type="password"],input[type="text"]
 {
color:black;
border-width:3px;
font-family: Cambria;
font-size: 15px;
height: 30px;
padding: 0px 8px;
width: 150px;
}
p { 
font-size: 30px ;
font-weight:bold;
font-family:Bradley Hand ITC;
 }

.btn-round {
		background-color: lightblue;
		border-radius: 70%;
		color: black;
		display: block;
		font-size: 18px;
		height: 50px;
		line-height: 50px;
		margin: 15px 115px;
		text-align: center;
		text-transform: uppercase;
		width: 70px;
		}
.reg {
	
		border: 4;
	color: soloidblack;
	cursor: pointer;
	height: 30px;
	text-transform: uppercase;
	width: 200px;
}

a{
text-decoration:none;
font-size:30px;
text-decoration:none;
font-family:calibri,Helvetica,sans-serif;
}
h1{
text-decoration:none;
font-size:20px;
font-family:Bookman Old Style,sans-serif;
color:FF2A55;
}
#border1{
border-top:20px double;
color: A0B07A ;
width:100%;
}
#bck {
    background-image: url("images_.jpg");
    background-color: white;
    height:100%;
  width:100%;
}
</style>
</head>
<body>
<?php include 'includepart.php';?>

<table cellpadding="3px">
<tr>
<td>
<h1><b><div style="font-family:Century Schoolbook,font-size:35px,color:blue">
Welcome !!!</div></b><img src="images4.jpg"/></h1>
</td>
<td>
<h2>
<div style="background-color:brown">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Administrator Login
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 </div></h2>
</td>
</tr>
</table>
<div id="border2"></div>
<div id="border">
<div id="bck">
<br>
</body>
<center>
<form action="admin_file.php" method="post">

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<br>
<br>
<a>Username: <input type="text" name="username"></a>
<br>
<br>
<a>Password :  <input type="password" name="password"></a>
<br>
<br>
<a href="forget.php"><u><font face="arial" size="3" color="red">Forgot Password?</font></u></a>
<br>
<p><h4><input type="image" src="button.jpg" value="LOGIN"/></h4></p>
</form>
</div>
</div>
</center>
</html>