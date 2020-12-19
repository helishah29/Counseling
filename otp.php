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
						<tr><td>OTP :&nbsp;</td><td><input type="text" name="otp" required></td></tr>
						<tr><td><br></td>
						<tr><td></td><td><input type="submit" name="chkotp" value="Check OTP"></td></tr>
                        </table>	
						</form>
                        <hr class="intro-divider">

<?php
require 'PHPMailerAutoload.php';
session_start();
if(isset($_REQUEST["chkotp"]))
{
$otp=$_SESSION["otp"];
$otp_time=(time()-$_SESSION["otp_time"])/60;
$email=$_SESSION["email"];
$name=$_SESSION["name"];
if($otp == $_REQUEST["otp"] && $otp_time<1)
{
	header("Location:home.php");
}
else
{
	if($otp!=$_REQUEST['otp'])
	{	
		echo "<h4 style='color:white'>InCorrect OTP. A New OTP has been sent to You. Re-Enter OTP</h4>";	
	}
	if($otp_time>=1)
	{
		echo "<h4 style='color:white'>OTP TIME OUT. A New OTP has been Sent to You. Re-Enter OTP</h4>";	
	}
	date_default_timezone_set("Asia/Calcutta");
	$otp1=mt_rand(100000,999999);
	$otp_time1=time();
		
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

	$body="$otp1 is Your OTP and it is valid for 1 Minute. Sent At ".date("d-m-Y H:i:s",$otp_time).".";
	$mail->MsgHtml($body);

		$mail->Send();
		$_SESSION["otp"]=$otp1;
		$_SESSION["otp_time"]=$otp_time1;
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
