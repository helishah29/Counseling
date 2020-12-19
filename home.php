<html>
<head>
<title>VIDEOS
</title>
</head>
<body>
<?php
session_start();

$link=mysql_connect("localhost","root");
$db=mysql_select_db("counseling",$link);
$m=$_SESSION["email"];
$result=mysql_query("select * from register where email='$m'");
$row=@mysql_fetch_assoc($result);

if($row['vid']==0)
{
//echo getcwd() . "<br>";
chdir('video');
//echo getcwd() . "<br>";

$count= count(glob("*.{mp4}",GLOB_BRACE));
//echo "<br>$count";
echo "<h4>Counseling Videos</h4>";
for($i=1;$i<=$count;$i++) 
{
		echo "<br><br><div id='$i'><br><br>";
		echo "<video align=center id='v' width='320' height='240' controls onended='end($i)' controlsList='nodownload'>
			  <source id='v2' src='video/video$i.mp4' type='video/mp4'>
			  Your browser does not support the video tag.
			  </video>";
		echo "<hr></div>";	
}

chdir("../");   //goes up by one level in directory levels
chdir("video1"); 
//echo "<br>".getcwd() . "<br>";

$count= count(glob("*.{mp4}",GLOB_BRACE));
//echo "<br>$count";

echo "<h4>PD Videos</h4>";
for($i=1;$i<=$count;$i++) 
{
		echo "<br><br><div id='$i'><br><br>";
		echo "<video align=center id='v' width='320' height='240' controls onended='end($i)' controlsList='nodownload'>
			  <source id='v2' src='video/video$i.mp4' type='video/mp4'>
			  Your browser does not support the video tag.
			  </video>";
		echo "<hr></div>";	
	
}

mysql_query("update register set vid=1 where email='$m'");
}
else
{
	echo "<h1> Payment Required</h1>";
}
?>


<script>

function end(a)
{
	document.getElementById(a).remove();
}


</script> </body>
</html>