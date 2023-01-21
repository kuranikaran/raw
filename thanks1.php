<?php

if(isset($_POST['skill_form']))
{
 $contact_subject = "Skill Development Form"; 
 $first_name = $_POST['first_name'];
 $email_id = $_POST['email'];
 $mobile = $_POST['mobile'];
 $address = $_POST['address']; 
 $contact_message = $_POST['msg'];
	

	$sender = $first_name;
	$receiver = "sales@duralite.co.in";
	//$receiver = "yogeshtestmail@gmail.com";
	$client_ip = $_SERVER['REMOTE_ADDR'];
	
	//echo $email_body = "<html><body style='background-color:#123; color:white'><h1>".$contact_subject."</h1><br/><h2>Message:".$contact_message."</h2></body></html>";
	
	 $email_body = "<html><body style='background-color:#123; color:white'><h1>".$contact_subject."</h1><hr>
	 <h2>
	 <table><tr><td>
	  Name: </td><td>".$first_name."</td></tr><tr><td>
	  Office Address: </td><td>".$_POST['officeaddress']."</td></tr><tr><td>
	  Residence Address: </td><td>".$_POST['address']."</td></tr><tr><td>
	  City: </td><td>".$_POST['city']."</td></tr><tr><td>
	  Land Line No.: </td><td>".$_POST['phone']."</td></tr><tr><td>
	  Mobile No: </td><td>".$_POST['mobile']."</td></tr><tr><td>
	  Email: </td><td>".$_POST['email']."</td></tr><tr><td>
	  Date of Birth: </td><td>".$_POST['dob']."</td></tr><tr><td>
	  Qualification: </td><td>".$_POST['qualification']."</td></tr><tr><td>
	  Experience: </td><td>".$_POST['exp']."</td></tr><tr><td>
	  Remarks: </td><td>".$_POST['remark']."</td></tr><tr><td>
	 IP:  </td><td>".$client_ip."</td></tr><tr><td>
	 Website : </td><td>".$_SERVER['PHP_SELF']."</td></tr></table></h2>
	 <hr/>Web Management Services | Duralite AAC Blocks</body></html>";
	
	 $email_body_auto_reply = "<html><body style='background-color:#123; color:white'><h1>".$contact_subject."</h1><hr/><h2>Hello ".$contact_name." This is the auto reply message. Thank you. - <b>Duralite AAC Blocks</b></h2>Thank You for your interest ,We will revert you back as soon as possible<hr></body></html>";
	
	//$extra = "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();
	
	$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers2 .= "From: $receiver\r\n" . "Reply-To: $receiver \r\n" . "X-Mailer: PHP/" . phpversion();
	//$extra_auto_reply = "From: $receiver\r\n" . "Reply-To: $receiver \r\n" . "X-Mailer: PHP/" . phpversion();
	
	mail( $sender, "Auto Reply - Re: $contact_subject", $email_body_auto_reply, $headers2);	// auto reply mail to sender

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();

	if( mail( $receiver, " $contact_subject", $email_body, $headers ) )
	{
		  $msg="Thanks for your Quote Request, We will revert you back as soon as possible";
	}
	else
	{
		die("success=no");
	}

}


if(isset($_POST['online_form']))
{
 $contact_subject = "Online Order Form"; 
 $first_name = $_POST['first_name'];
 $email_id = $_POST['email'];
 $mobile = $_POST['mobile'];
	

	$sender = $first_name;
	$receiver = "sales@duralite.co.in";
	//$receiver = "yogeshtestmail@gmail.com";
	$client_ip = $_SERVER['REMOTE_ADDR'];
	
	//echo $email_body = "<html><body style='background-color:#123; color:white'><h1>".$contact_subject."</h1><br/><h2>Message:".$contact_message."</h2></body></html>";
	
	 $email_body = "<html><body style='background-color:#123; color:white'><h1>".$contact_subject."</h1><hr>
	 <h2>
	 <table><tr><td>
	  Segment: </td><td>".$_POST['segment']."</td></tr><tr><td>
	  City: </td><td>".$_POST['city']."</td></tr><tr><td>
	  Block Sizes 3-100mm: </td><td>".$_POST['block1']."</td></tr><tr><td>
	  Block Sizes 4-100mm: </td><td>".$_POST['block2']."</td></tr><tr><td>
	  Block Sizes 6-150mm: </td><td>".$_POST['block3']."</td></tr><tr><td>
	  Block Sizes 8-200mm: </td><td>".$_POST['block4']."</td></tr><tr><td>
	  Block Sizes 9-230mm: </td><td>".$_POST['block5']."</td></tr><tr><td>
	  Block Jointing Mortar: </td><td>".$_POST['mortarbag']."</td></tr><tr><td>
	  Name: </td><td>".$first_name."</td></tr><tr><td>
	  Billing Address: </td><td>".$_POST['billingaddress']."</td></tr><tr><td>
	  Site Address: </td><td>".$_POST['siteaddress']."</td></tr><tr><td>
	  Land Line No.: </td><td>".$_POST['phone']."</td></tr><tr><td>
	  Mobile No: </td><td>".$_POST['mobile']."</td></tr><tr><td>
	  Email: </td><td>".$_POST['email']."</td></tr><tr><td>
	  Delivery Date: </td><td>".$_POST['deliverydate']."</td></tr><tr><td>
	  Remarks: </td><td>".$_POST['remarks']."</td></tr><tr><td>
	 IP:  </td><td>".$client_ip."</td></tr><tr><td>
	 Website : </td><td>".$_SERVER['PHP_SELF']."</td></tr></table></h2>
	 <hr/>Web Management Services | Duralite AAC Blocks</body></html>";
	
	 $email_body_auto_reply = "<html><body style='background-color:#123; color:white'><h1>".$contact_subject."</h1><hr/><h2>Hello ".$contact_name." This is the auto reply message. Thank you. - <b>Duralite AAC Blocks</b></h2>Thank You for your interest ,We will revert you back as soon as possible<hr></body></html>";
	
	//$extra = "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();
	
	$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers2 .= "From: $receiver\r\n" . "Reply-To: $receiver \r\n" . "X-Mailer: PHP/" . phpversion();
	//$extra_auto_reply = "From: $receiver\r\n" . "Reply-To: $receiver \r\n" . "X-Mailer: PHP/" . phpversion();
	
	mail( $sender, "Auto Reply - Re: $contact_subject", $email_body_auto_reply, $headers2);	// auto reply mail to sender

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();

	if( mail( $receiver, " $contact_subject", $email_body, $headers ) )
	{
		  $msg="Thanks for your Quote Request, We will revert you back as soon as possible";
	}
	else
	{
		die("success=no");
	}

}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duralite</title>
<link href="images/fevicon.png" rel="shortcut icon" />
<link href="css/duralite-style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto' rel='stylesheet' type='text/css'>
<!-- header -->
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
        
<!-- header -->

<!-- banner -->
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="src/transit.js"></script>
		<script type="text/javascript" src="src/touchswipe.js"></script>
		<script type="text/javascript" src="src/jquery.simpleslider.js"></script>
		<script type="text/javascript" src="src/backstretch.js"></script>
		<script type="text/javascript" src="src/custom.js"></script>
<!-- banner -->

<!-- date picker -->
    
	<link href="datepicker/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-1.8.1.js"></script>
	<!--<script type="text/javascript" src="datepicker/jquery.min.js"></script>-->
	<script src="datepicker/jquery-ui.min.js"></script>
  	
    <script>
  	$(document).ready(function() {
    $('#datepicker').datepicker({
		minDate: 0,						
	});
	
	$("#datepicker2").datepicker();
	});
	</script>
    <!-- end date picker -->

</head>

<body>
<div id="map-link"><a href="area-calculator.html" class="area-btn"></a></div>
<div class="cbp-af-header">
<div class="cbp-af-inner">
<a href="index.html"><img src="images/logo.jpg" width="280" height="104" class="logo" /></a>
<div class="h-right1">
<ul>
<li><a href="https://www.facebook.com/pages/Duralite-AAC-Blocks/979088982152754" target="_blank" class="i-area1"></a></li>
<li><a href="https://plus.google.com/u/1/" target="_blank" class="i-area2"></a></li>
<li><a href="https://www.linkedin.com/home?trk=nav_responsive_tab_home" target="_blank" class="i-area3"></a></li>
<li><a href="https://twitter.com/duraliteaac" target="_blank" class="i-area4"></a></li>
</ul>
<div class="clear"></div>
</div>

<div class="h-right2">
<a href="feedback.html" class="feedback-bt"></a>
<a href="images/duralite-profile-new.pdf" target="_blank" class="broucher-bt"></a>
<div class="clear"></div>
</div>


</div>

<div class="menu-area">
<div class="menu-area-wrapper">
<ul class="topmenu-links">
	<li><a href="index.html">Home</a></li>
    <li><a href="about-us.html">About Us</a></li>
    <li><a href="products.html">Products</a></li>
    <li><a href="tools.html">Tools</a></li>
    <li><a href="what-is-aac.html">What is AAC</a></li>
    <li><a href="procedure.html">Procedure</a></li>
    <li><a href="online-order.html">Online Order </a></li>
    <li><a href="skill-development.html">Skill Development </a></li>
    <li><a href="faq.html">FAQ's</a></li>
    <li><a href="contact-us.html">Contact Us</a></li>
</ul>
</div>
</div>

<div class="clear"></div>
</div>
<!-- header close -->



<!-- banner close -->


<div id="content-wrapper2">
<img src="images/skill.png" alt="" style="float:right;" />
<div class="area-calculator-box">
<table border="0" class="area-tbl1" cellpadding="0" cellspacing="0">
<tr><td colspan="3" class="area-bg2"><strong>Thank You!</strong></td></tr>
</table>

<h4 style="padding:10px;">Thank you for your enquiry, our team will contact you soon.</h4> 

</div>
<div class="clear"></div>
<br />
<div class="clear"></div>
<!--<p><strong>Note:</strong> </p>	
<ul class="list2">				
<li>Above values are approximate wastage, breakage and other losses are not considered</li>
<li>Mortar consumption / coverage is approximate, actual consumption may vary depending working condition and workmanship </li>				
<li>Shreeji Blocks Pvt. Ltd. is in no way responsible for any deviations or claims on above	</li>				
</ul>-->



<div class="clear"></div>
</div>
<!-- content wrapper close -->

<div id="footer">
<div id="footer-wrapper">
<div class="footer-left">
Copyright : 2015 | Shreeji Blocks Pvt. Ltd. 
</div>

<div class="footer-right">
Designed & Developed by : <a href="http://www.iperfect.in" target="_blank">I Perfect Online</a>
</div>


<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<!-- footer close -->





<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.min.js"></script>
</body>
</html>


