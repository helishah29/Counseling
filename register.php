<!DOCTYPE html>
<html lang="en">

<head>
<style>
input[type=text],input[type=password],input[type=email],input[type=date]
{
	color:black;
}
input[type=date]
{
	width:173px
}
</style>

<script>
						var f2=0;
						var f3=0; 
						var f4=0; 
						var f5=0;
						var f6=0;
						
						function chkpass()
						{
							var pass=f1.pass.value;
							var pat="^[A-Za-z0-9]{10}$";
							var r1=new RegExp(pat);
							
							if(r1.test(pass))
							{	
								f2=1;
								document.getElementById("cp").innerHTML="";
							}
							else
							{
								document.getElementById("cp").innerHTML="Enter Proper Password";
							}
						}
						
						function chkpass1()
						{
							var pass=f1.pass.value;
							var pass1=f1.pass1.value;
							
							if(pass1==pass)
							{
								f3=1;
								document.getElementById("crp").innerHTML="";
							}
							else
							{
								document.getElementById("crp").innerHTML="Password Doesn't match";
							}
						}
						
						function chkumob()
						{
							var umob=f1.uno.value;
							var mmob=f1.fno.value;	
						
							var umob1=umob.charAt(0);
							var umob2=umob.substring(1,umob.length);
							
							var p1="^[789]{1}$";
							var p2="^[0-9]{9}$";
						
							var r1=new RegExp(p1);
							var r2=new RegExp(p2);
							
							if(r1.test(umob1) && r2.test(umob2))
							{
								f4=1;
								document.getElementById("um").innerHTML="";
							}
							else
							{
								document.getElementById("um").innerHTML="Enter Valid Mobile Number";
							}
						}
						
						function chkfmob()
						{
							var fmob=f1.fno.value;	
							var fmob1=fmob.charAt(0);
							var fmob2=fmob.substring(1,fmob.length);
						
							var p1="^[789]{1}$";
							var p2="^[0-9]{9}$";
						
							var r1=new RegExp(p1);
							var r2=new RegExp(p2);
							
							if(r1.test(fmob1) && r2.test(fmob2))
							{
								f5=1;
								document.getElementById("fm").innerHTML="";
							}
							else
							{
								document.getElementById("fm").innerHTML="Enter Valid Mobile Number";
							}
						
						}
						
						function chkmmob()
						{
							var mmob=f1.mno.value;	
							var mmob1=mmob.charAt(0);
							var mmob2=mmob.substring(1,mmob.length);
						
							var fmob=f1.fno.value;
						
							var p1="^[789]{1}$";
							var p2="^[0-9]{9}$";
						
							var r1=new RegExp(p1);
							var r2=new RegExp(p2);
							
							if(r1.test(mmob1) && r2.test(mmob2))
							{
								f6=1;
								document.getElementById("mm").innerHTML="";
							}
							else
							{
								document.getElementById("mm").innerHTML="Enter Valid Mobile Number";
							}
						}
						
						function checksub()
						{
							if(f2==1 && f3==1 && f4==1 && f5==1 && f6==1)
								return true;
							
							else
								return false;
						}
						
</script>
						

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="robots" content="index follow">

    <title>Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--  <a class="navbar-brand topnav" href="#">Start Bootstrap</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                        <form name="f1" action="" method="post" onSubmit="return checksub()" autocomplete="on">
						<table align="center">
						<tr><td><font style="color:red;font-size:14px"> * </font>
						<font style="color:white">Marked Fields Are Mandatory</font>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
						<br>
							<tr><td width=33% align="right" class="formtext">Name<font style="color:red"> * </font>:&nbsp;&nbsp;&nbsp; </td><td width=33% align="left">
							<input type="text" name="name" required autofocus></td>
									<td width=33% align="left"></td></tr>
							<tr><td><br></td></tr>								
							<tr><td width=33% align="right" class="formtext">E-mail<font style="color:red"> * </font>:&nbsp;&nbsp;&nbsp;</td><td width=33% align="left">
							<input type="email" name="email" required></td>
									<td width=33% align="left"></td></tr>
							<tr><td><br></td></tr>	
							<tr><td width=33% align="right" class="formtext">Password<font style="color:red"> * </font>:&nbsp;&nbsp;&nbsp; </td>
							<td width=33% align="left"><input type="password" name="pass" onblur="chkpass()" required autocomplete="off"></td>
									<td width=33% align="left"><span id="cp"></span></td></tr>
							<tr><td><br></td></tr>	
							<tr><td width=33% align="right" class="formtext">Re-Enter Password<font style="color:red"> * </font>:&nbsp;&nbsp;&nbsp;</td>
							<td width=33% align="left"><input type="password" name="pass1" onblur="chkpass1()" required>
								</td><td width=33% align="left"><span id="crp"></span></td></tr>
							<tr><td><br></td></tr>	
							<tr><td width=33% align="right" class="formtext">Mobile Number<font style="color:red"> * </font>: &nbsp;&nbsp;&nbsp;</td><td width=33% align="left">
							<input type="text" name="uno" onblur="chkumob()"></td>
									<td width=33% align="left"><span id="um"><span></td></tr>
							<tr><td><br></td></tr>	
							<tr><td width=33% align="right" class="formtext">Gender<font style="color:red"> * </font>: &nbsp;&nbsp;&nbsp;</td><td width=33% align="left">
							<input type="radio" name="gender" value="Male" checked="checked">&nbsp;&nbsp;Male &nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="gender" value="Female">&nbsp;&nbsp;Female </td></tr> 
							<tr><td><br></td></tr>	
							<tr><td width=33% align="right" class="formtext">DOB<font style="color:red"> * </font>: &nbsp;&nbsp;&nbsp;</td><td width=33% align="left">
							<input type="date" name="date" max="2007-01-01" min="1960-01-01" required></td>
									<td width=33% align="left"></td></tr>
							<tr><td><br></td></tr>	
							<tr><td width=33% align="right" class="formtext">Father's Name<font style="color:red"> * </font>:&nbsp;&nbsp;&nbsp; </td><td width=33% align="left">
							<input type="text" name="fname" required></td>
									<td width=33% align="left"></td></tr>
							<tr><td><br></td></tr>	
							<tr><td width=33% align="right" class="formtext"> Father's Profession : &nbsp;&nbsp;&nbsp;</td><td width=33% align="left">
							<input type="text" name="fprof"></td>
									<td width=33% align="left"></td></tr>
							<tr><td><br></td></tr>	
							<tr><td width=33% align="right" class="formtext">Father's Mobile Number<font style="color:red"> * </font>: &nbsp;&nbsp;&nbsp;</td><td width=33% align="left">
							<input type="text" name="fno" onblur="chkfmob()"></td>
									<td width=33% align="left"><span id="fm"></span></td></tr>
							<tr><td><br></td></tr>	
							<tr><td width=33% align="right" class="formtext">Mother's Name<font style="color:red"> * </font>: &nbsp;&nbsp;&nbsp;</td><td width=33% align="left">
							<input type="text" name="mname" required></td>
									<td width=33% align="left"></td></tr>
							<tr><td><br></td></tr>	
							<tr><td width=33% align="right" class="formtext">Mother's Profession :&nbsp;&nbsp;&nbsp; </td><td width=33% align="left">
							<input type="text" name="mprof"></td>
									<td width=33% align="left"></td></tr>
							<tr><td><br></td></tr>	
							<tr><td width=33% align="right" class="formtext" >Mother's Mobile Number<font style="color:red"> * </font>:&nbsp;&nbsp;&nbsp; </td><td width=33% align="left">
							<input type="text" name="mno" onblur="chkmmob()"></td>
									<td width=33% align="left"><span id="mm"></span></td></tr>	
									
									<tr><td><br></td></tr>	
							<tr><td width=33%></td><td><input type="submit" name="reg" value="Register" style="background-color:gray;border-radius:5px;"></td></tr>		
							<tr><td><br></td></tr>
						</table>
						</form>
                  
                </div>

<?php
require 'PHPMailerAutoload.php';
session_start();

if(isset($_REQUEST["reg"]))
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pass'];
	$umob=$_REQUEST['uno'];
	$gender=$_REQUEST['gender'];
	$dob=$_REQUEST['date'];
	$fname=$_REQUEST['fname'];
	$fprof=$_REQUEST['fprof'];
	$fmob=$_REQUEST['fno'];
	$mname=$_REQUEST['mname'];
	$mprof=$_REQUEST['mprof'];
	$mmob=$_REQUEST['mno'];
	
		$link=mysql_connect("localhost","root");
		$db=mysql_select_db("counseling",$link);
		
		$result=mysql_query("select * from register where email='$email' or umob=$umob");
		
		if(mysql_num_rows($result)==0)
		{
			if(mysql_query("insert into register(name,email,password,umob,gender,dob,fname,fprof,fmob,mname,mprof,mmob) 
			values('$name','$email','$pass',$umob,'$gender','$dob','$fname','$fprof',$fmob,'$mname','$mprof',$mmob)"))
			{
				date_default_timezone_set("Asia/Calcutta");
				$otp=mt_rand(100000,999999);
				$otp_time=time();
		
				$mail=new PHPMailer();
				$mail->isSMTP();
				$mail->Host="mail.gmail.com";
				
				$mail->SMTPSecure = 'tls';
				$mail->Port = 587;
				$mail->Host = gethostbyname('smtp.gmail.com');
				//$mail->SMTPDebug=2;
				$mail->SMTPAuth=true;
				
	
				$mail->Username="erajan96";
				$mail->Password="Analrajan00";
				
				$mail->SetFrom("erajan96@gmail", "Counseling.org");
				$mail->AddReplyTo("erajan96@gmail.com","Counseling.org");
				$mail->AddAddress($email, $name);
				$mail->Subject = "OTP for Counseling.org";
	
				$body="$otp is Your OTP and it is valid for 1 Minute. Sent At ".date("d-m-Y H:i:s",$otp_time).".";
				$mail->MsgHtml($body);

				if (!$mail->Send())
				{
					echo "Mailer Error: " . $mail->ErrorInfo;
				} 
				else
				{
					$_SESSION["otp"]=$otp;
					$_SESSION["otp_time"]=$otp_time;
					$_SESSION["email"]=$email;
					$_SESSION["name"]=$name;
					header("Location:otp.php");
				}
			}
			else
				echo "<h3 style='color:white' align=center>Error Registering</h3>";
		}
		else
		{
				$result=mysql_query("select * from register where email='$email'");
				if(mysql_num_rows($result)!=0)
				{
					echo "<h4 style='color:white' align=center>Email Already Exists</h4>";
				}
				
				$result=mysql_query("select * from register where umob=$umob");
				if(mysql_num_rows($result)!=0)
				{
					echo "<h4 style='color:white' align=center>Phone Number Already Exists</h4>";
				}
		}
	mysql_close($link);
}
?>	
            </div>

        </div>
        <!-- /.container -->

    </div>
 

	
</body>
	

</html>
