<?php
$_SESSION["user"] = "username";
$conn = mysql_connect("localhost","root","");
mysql_select_db("leave",$conn);
if(count($_POST)>0) {
$result = mysql_query("SELECT * from teaching_staff WHERE username='" . $_SESSION["user"] . "'");
$row=mysql_fetch_array($result);
if($_POST["currentPassword"] == $row["password"]) {
mysql_query("UPDATE teaching_staff set password='" . $_POST["newPassword"] . "' WHERE username='" . $_SESSION["user"] . "'");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>