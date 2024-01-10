<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
ini_set('display_errors', 1); 
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sadagopan.Org</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	
	</head>
	<body style='color:#303030;line-height:1.7em;text-align:justify; padding-top: 20px;'>
	<style>
	.captcha_play_image
	{
	display:none;	
	}
	a img
	{
  	border: 0 none;
	}
	a, a:link, a:hover, a:focus {
    text-decoration: none;
	}
	.image-link
	{
  	text-decoration: none;
	}
	#siteBanner_bg{
	background-image: url(WSBanner_bg_medium.png);
	background-repeat: repeat;
	background-size: contain;
	}	
	
	@media only screen and (min-width:451px) and (max-width:800px)
	{
	.bannerTable1{
	display: none;
	}
	.bannerTable2{
	display: block;
	}	
	}
	
	
	@media only screen and (min-width: 150px) and (max-width: 450px)
	{
		.bannerTable1{
		display: none;
		}
		.bannerTable2{
		display: block;
		}
		#banner2 tr td 
		{
		width:35%;		
		}	
		#banner2 tr td img
		{
		width:45px;		
		}	
	}

	@media only screen and (min-width:801px) and (max-width:2000px){
	.bannerTable1{
	display: block;
	}
	.bannerTable2{
	display: none;
	}	
	}		
	</style>
	<?php
	//set_time_limit(300);
		include_once $_SERVER['DOCUMENT_ROOT'].'/sadagopannew/securimage/securimage.php';
		$securimage = new Securimage();
		
		
		if (isset($_REQUEST["Save1"]))
		{	
				$_SESSION["emailname"]=filter_var($_REQUEST["emailname"],FILTER_SANITIZE_STRING);
				$_SESSION["emailaddress"]=filter_var($_REQUEST["emailaddress"], FILTER_VALIDATE_EMAIL);
				$_SESSION["emailmessage"]=filter_var($_REQUEST["emailmessage"], FILTER_SANITIZE_STRING);
		
			$captcha=$_REQUEST["ct_captcha"];
			$returnvalue=$securimage->check($captcha);
		//	echo $returnvalue;
			if ($returnvalue==0) 
			{
				$message='<span style="color:red;">Incorrect security code entered</span>';
           }
        
			if ($returnvalue==1)
			{	
			require_once "Mail.php";
			$_SESSION["emailname"]="";
			$_SESSION["emailaddress"]="";
			$_SESSION["emailmessage"]="";
			$emailname=filter_var($_REQUEST["emailname"], FILTER_SANITIZE_STRING);
			$from=$emailname."<".filter_var($_REQUEST["emailaddress"], FILTER_VALIDATE_EMAIL).">";
			$to=filter_var("info@sadagopan.org", FILTER_VALIDATE_EMAIL); 
			$subject=filter_var("Email from website Sadagopan.Org", FILTER_SANITIZE_STRING);
			$body=filter_var($_REQUEST["emailmessage"], FILTER_SANITIZE_STRING);;
			$host = "mail.sadagopan.org";
			$username = "info@sadagopan.org";
			$password = "Narasimha127#";
			$port = "587";
			$headers = array ('From' => $from,'To' => $to,'Subject' => $subject);
			$smtp = Mail::factory('smtp',array ('host' => $host,'auth' => true,'port' => $port,'username' => $username,'password' => $password));
			$mail = $smtp->send($to, $headers, $body);
			if ($mail) 
			{
				 $message="<span style='color:green;'>Your Message has been submitted successfully!  Thank you for contacting us.</span>";
			}
			else 
			{
				echo("".$mail->getMessage()."");
		
			}
			}
		}		
	?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
						  <header>
							<!-- Removed id="header" from the header tag above -->
							<!--		<a href="index.php" class="logo"> 
										<strong>Sadagopan.Org</strong>
								<div class="banner" id="siteBanner_bg">&nbsp;</div>
								</a> -->
<div class="bannerTable1" id="siteBanner_bg">
  <table width="100%">
	  <tbody>
    <tr width="100%">
      <td width="40%" height="100px" align="right" style="vertical-align: middle;">
		  <img class="image" src="WSBanner_left_medium.png" alt="Sri Namperumal" height="200" width="280px"></img>
		</td>
      <td align="center" style="vertical-align: middle;"><img src="WSBanner_center_medium.png" title="Click here to go to Sadagopan.org home page" height="100" width="257" border="0"></img>
	</td>
      <td width="40%" align="left" style="vertical-align: middle;">
		  <img class="image" src="WSBanner_right_medium.png" alt="Sri Namperumal" height="200px" width="219px"></img>
</td>
    </tr>
  </tbody>
</table>
</div>
<div class="bannerTable2" id="siteBanner_bg">
  <table id="banner2" width="100%">
	  <tbody>
    <tr width="100%">
      <td width="40%" height="50px" align="right" style="vertical-align: middle;">
		  <img class="image" src="WSBanner_left_50.png" alt="Sri Namperumal" height="50" width="70"></img>
		</td>
      <td align="center" style="vertical-align: middle;"><img class="image" src="WSBanner_center_50.png" alt="Sadagopan.org" height="50" width="129"></img>
	</td>
      <td width="40%" align="left" style="vertical-align: middle;">
		  <img class="image" src="WSBanner_right_50.png" alt="Sri Namperumal" height="50" width="55"></img>
</td>
    </tr>
  </tbody>
</table>
</div>
								<!---	
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								--->
							 </header>

							<!-- Content -->
								<section style="">
									<header class="main">
										<h2>Contact Form</h2>
										<h4 style="color:red">Please use this page to send your questions or comments or if you need any help with this website.</h4>
									</header>
							<?php 
							if (isset($message))
							{	
							echo $message;
							}
							?>
						<form method="post" id="contact_form" name="contact_form" onsubmit="processForm()" action="">
							<div class="row uniform">
								
								<div class="12u$">
									<input type="text" name="emailname" id="emailname" placeholder="Your Name" 
									value="<?php if (isset($_SESSION["emailname"])){echo $_SESSION["emailname"];} ?>" required />
								</div>
								
								<div class="12u$">
									<input type="email" name="emailaddress" id="emailaddress" 
									value="<?php if (isset($_SESSION["emailaddress"])){echo $_SESSION["emailaddress"];} ?>"
									placeholder="Your Email Address" value="" required/>
								</div>
								
								<div class="12u$">
								<textarea name="emailmessage" id="emailmessage"	rows="6" placeholder="Your Message" required><?php if (isset($_SESSION["emailmessage"])){echo $_SESSION["emailmessage"];}?></textarea>
								</div>
								
								<div class="12u$">
								<?php echo Securimage::getCaptchaHtml(array('input_name' => 'ct_captcha')); ?>
								</div>
								
								
								<div class="12u$">
									<ul class="actions">
										<li><input type="submit" id="Save1" name="Save1" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
								
							</div>
						</form>
						</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="searchfile.php">
										<input type="text" name="query" id="query" placeholder="Search Sadagopan.org" required/>
										<input type="submit" id="search" class="button special small" name="search" />
										<input type="reset" id="cancel" class="button small" name="cancel" value="Reset" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
									<li><a href="Home"><strong>Home</strong></a></li>
										<ul style="list-style-type:none"><strong>E-Books Search</strong>
										<li><a href="QuickSearch">&nbsp;&nbsp;Quick Search</a></li>
										<li><a href="SearchBySeries">&nbsp;&nbsp;List by Series</a></li>
										<li><a href="AlphabeticalBookList">&nbsp;&nbsp;List Alphabetically</a></li>
										<li><a href="SearchByTitle">&nbsp;&nbsp;List By Title</a></li>
										<li><a href="CategoryBookList">&nbsp;&nbsp;List by Category</a></li>
										</ul>
								<!--	<li><a href="AudioFileList"><strong>Audio Files</strong></a></li>	-->
										<li><a href="SignGuestBook"><strong>Sign GuestBook</strong></a></li>
										<li><a href="ViewGuestBook"><strong>View GuestBook</strong></a></li>
										<li><a href="ContactUs"><strong>Contact Us</strong></a></li>
										<li><a href="FAQ"><strong>Frequently Asked Questions</strong></a></li>
									</ul>
								</nav>

							<!-- 
								
								<section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>

								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
										<li class="fa-phone">(000) 000-0000</li>
										<li class="fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Sadagopan.Org - All Rights Reserved.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

<script>

	reloadCaptcha()
    {
        jQuery('#siimage').prop('src', './securimage/securimage_show.php?sid=' + Math.random());
    }

    function processForm()
    {
        jQuery.ajax({
            url: 'contact.php',
            type: 'POST',
            data: jQuery('#contact_form').serialize(),
            dataType: 'json',
        }).done(function(data) {
            if (data.error === 0) {
                jQuery('#success_message').show();
                jQuery('#contact_form')[0].reset();
                reloadCaptcha();
            } else 
			{
                alert("There was an error with your submission.\n\n" + data.message);

                if (data.message.indexOf('Incorrect security code') >= 0) {
                    jQuery('#captcha_code').val('');
                }
            }
        });
        return false;
    }
   
$(document).ready(function()
{
	$("a.toggle").attr("title","Click here to show or hide menubar");
	$("#sidebar.toggle").attr("title","Click here to show or hide menubar");	
	$("img.captcha_play_image").hide();
});
</script>

	</body>
</html>