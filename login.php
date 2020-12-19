<?php
session_start();
if(isset($_REQUEST["Login"]))
{
	$email=$_REQUEST["email"];
	$pass=$_REQUEST["pass"];
	
	$link=mysql_connect("localhost","root");
	$db=mysql_select_db("counseling",$link);
	
	$result=mysql_query("select * from register where email='$email' and password='$pass'");
	$res=mysql_fetch_assoc($result);
	if(mysql_num_rows($result)==1)
	{
		$_SESSION["user"]=$res['name'];
		$_SESSION["email"]=$res['email'];
		header("Location:home.php");
	}
	else
	{
		echo "<h4 style='color:white' align=center>Email or Password Incorrect</h4>";
	}
}
?>
