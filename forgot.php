<!DOCTYPE html>
<html lang="en">

<head>
<style>
input[type=text]
{
	color:black;
}
input[type=submit]
{
	background-color:gray;
	border-radius:5px;
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OTP</title>

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

    

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <form action="" method="post">
                        <table align="center">
						<tr><td>E-mail :&nbsp;</td><td><input type="text" name="email" required></td></tr>
						<tr><td><br></td>
						<tr><td></td><td><input type="submit" name="genpass" value="Generate Password"></td></tr>
                        </table>	
						</form>
                        <hr class="intro-divider">

<?php
require 'PHPMailerAutoload.php';
session_start();
if(isset($_REQUEST["genpass"]))
{
	$email=$_REQUEST["email"];
	
	$link=mysql_connect("localhost","root");
	$db=mysql_select_db("counseling",$link);
	
	$result=mysql_query("select * from register where email='$email'");
	if(mysql_num_rows($result)!=0)
	{
		date_default_timezone_set("Asia/Calcutta");
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$pass = '';
		for ($i = 1; $i < 11; $i++)
		{
			$pass .= $characters[rand(0, strlen($characters)-1)];
		}
		
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
		$mail->AddAddress($email);
		$mail->Subject = "New Password for Counseling.org";

		$body="$pass is Your New Password .<a href='login.php'>Click Here To Login.</a>";
		$mail->MsgHtml($body);

		$mail->Send();
		
		echo "<h4 style='color:white' align=center>New Password has been Sent to Your Email. 
				<br><br> <a href='login.php'> Click Here To Login</a></h4>";
		mysql_query("update register set password='$pass' where email='$email' ");
		mysql_close($link);
	}
	else
	{
		echo "<h4 style='color:white'> Enter Correct Email Address</h3>";
	}
}

?>
                    </div>
                </div>
            </div>
			

        </div>
        <!-- /.container -->
	
</div>
</body>

</html>
