<?php
session_start();
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
	.captcha_play_image
	{
	display:none;	
	}
	
	@media only screen and (min-width:150px) and (max-width:735px)
	{
	.bannerTable1{
	display: none;
	}
	.bannerTable2{
	display: block;
	}
	input 
	{
	width:300px;	
	}	
	}
	
	
	@media only screen and (min-width:736px) and (max-width:1800px){
	.bannerTable1{
	display: block;
	}
	.bannerTable2{
	display: none;
	}	
	/*
	input 
	{
	width:90%;	
	}	
	*/
	}
	
	@media only screen and (min-width: 150px) and (max-width: 450px)
	{
		input 
		{
		width:80px;
		}
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

	</style>
	<?php
	//set_time_limit(300);
	date_default_timezone_set("Asia/Kolkata");
		$includepath=$_SERVER["DOCUMENT_ROOT"];
		include $includepath.'/sadagopannew/db/db.php';
		include_once $_SERVER['DOCUMENT_ROOT'].'/sadagopannew/securimage/securimage.php';
			$securimage = new Securimage();
		    
		if (isset($_REQUEST["Save1"]))
		{	
			$_SESSION["guestname"]=filter_var($_REQUEST["guestname"],FILTER_SANITIZE_STRING);
			$_SESSION["guestemail"]=filter_var($_REQUEST["guestemail"],FILTER_VALIDATE_EMAIL);
			$_SESSION["guesturl"]=filter_var($_REQUEST["guesturl"],FILTER_SANITIZE_STRING);
			$_SESSION["guestcity"]=filter_var($_REQUEST["guestcity"],FILTER_SANITIZE_STRING);
			$_SESSION["gueststate"]=filter_var($_REQUEST["gueststate"],FILTER_SANITIZE_STRING);
			$_SESSION["guestcountry"]=filter_var($_REQUEST["guestcountry"],FILTER_SANITIZE_STRING);
			$_SESSION["guestcomments"]=filter_var($_REQUEST["guestcomments"],FILTER_SANITIZE_STRING);
			$captcha=$_REQUEST["ct_captcha"];
			$returnvalue=$securimage->check($captcha);
			if ($returnvalue==0) 
			{
			    $message='<span style="color:red;">Incorrect security code entered</span>';
            }
        	$guestname=filter_var($_REQUEST["guestname"],FILTER_SANITIZE_STRING);	
			
		  if ($returnvalue==1) 
			{
        	$guestname=filter_var($_REQUEST["guestname"],FILTER_SANITIZE_STRING);	
			$guestemail=filter_var($_REQUEST["guestemail"],FILTER_VALIDATE_EMAIL);
			$guesturl=filter_var($_REQUEST["guesturl"],FILTER_VALIDATE_URL);
			$guestcity=filter_var($_REQUEST["guestcity"],FILTER_SANITIZE_STRING);
			$gueststate=filter_var($_REQUEST["gueststate"],FILTER_SANITIZE_STRING);
			$guestcountry=filter_var($_REQUEST["guestcountry"],FILTER_SANITIZE_STRING);
			$guestcomments=filter_var($_REQUEST["guestcomments"],FILTER_SANITIZE_STRING);
			$timestamp=date("d-m-Y h-i-sa");
			
			$_SESSION["guestname"]="";
			$_SESSION["guestemail"]="";
			$_SESSION["guesturl"]="";
			$_SESSION["guestcity"]="";
			$_SESSION["gueststate"]="";
			$_SESSION["guestcountry"]="";
			$_SESSION["guestcomments"]="";
			
			$queryinsert="Insert into guestbook (name,email,url,city,state,country,comments,timestamp) 
			values ('".$guestname."','".$guestemail."','".$guesturl."','".$guestcity."','".$gueststate."','".$guestcountry."',
			'".$guestcomments."','".$timestamp."')";
			
			
			
			if (mysqli_query($conn,$queryinsert))
			{
			$message="<span style='color:green;'>Your comments have been submitted Successfully!!!</span>";		
			}
			else
			{
			$message="<span style='color:red;'>Error in posting guest comments!!!</span>";		
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
  <table width="100%" id="banner2">
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
								<section>
									<header class="main">
										<h2>Sign in Guestbook</h2>
										<h4 style="color:red">Thanks for visiting Sadagopan.org.  We hope you found what you were looking for with reference to Sri Vaishnava Literature.  Please use this page to record your experience with this website.  This will help us further update this portal for a better user experience.</h4>
									</header>
			<div id="formdiv">
			<?php 
			if (isset($message))
			{	
			echo $message;
			}
			?>
			<div id="success_message" style="display: none">
			</div>

			<form class="form-horizontal" enctype="multipart/form-data" id="form1" name="form1" 
			method="post" onsubmit="processForm()" action="">
			<table>
			<tr><td>
			<label  for="guestname">Your Name</label>
			</td>
			<td>
			<input type="text"  name="guestname" id="guestname"  
			value="<?php if (isset($_SESSION['guestname'])){echo $_SESSION['guestname'];} ?>" required>
			</td>
			</tr>
			
			<tr>
			<td>
			<label  for="guestemail">Email(optional):</label>
			</td>
			<td>
			<input type="email"  id="guestemail" 
			value="<?php if (isset($_SESSION['guestemail'])){echo $_SESSION['guestemail'];} ?>"
			name="guestemail" >
			</td>
			</tr>
			
			<tr>
			<td>
			<label  for="guesturl">Url(optional):</label>
			</td>
			<td><input type="text"  id="guesturl" value="<?php if (isset($_SESSION['guesturl'])){echo $_SESSION['guesturl'];}?>" name="guesturl"></td></tr>
			<tr><td>
			<label  for="guestcity">City:</label>
			</td><td>
			<input type="text"  id="guestcity" 
			value="<?php if (isset($_SESSION['guestcity'])){echo $_SESSION['guestcity'];} ?>"
			name="guestcity" required>
			</td>
			</tr>
			
			<tr><td>
			<label  for="gueststate">State:</label>
			</td><td>
			<input type="text"  id="gueststate" 
			value="<?php if (isset($_SESSION['gueststate'])){echo $_SESSION['gueststate'];} ?>"
			name="gueststate" required>
			</td>
			</tr>
			
			
			<tr><td>
			<label  for="guestcountry">Country:</label>
			</td><td>
			<input type="text" id="guestcountry" 
			value="<?php if (isset($_SESSION['guestcountry'])){echo $_SESSION['guestcountry'];} ?>"
			name="guestcountry" required>
			</td>
			</tr>
			
			<tr><td>
			<label for="category">Comments:</label>
			</td><td><textarea rows="4" cols="30" id="guestcomments" name="guestcomments" required><?php if (isset($_SESSION['guestcomments'])){echo $_SESSION['guestcomments'];}?></textarea>
			</td>
			</tr>
			
			
			<tr><td>
			<label  for="captcha">Captcha</label>
			</td>
			<td>
			<?php echo Securimage::getCaptchaHtml(array('input_name' => 'ct_captcha')); ?>
			</td>
			</tr>
			
			<tr>
			<td></td>
			<td>
			<button type="Submit" id="Save1" name="Save1" class="button special" >Submit</button>
			<button type="reset" id="Cancel1" name="Cancel1" class="button">Reset</button>
			</td>
			</tr>
			</form>
			</table>
			</div>		
								
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
            data: jQuery('#form1').serialize(),
            dataType: 'json',
        }).done(function(data) {
            if (data.error === 0) {
                jQuery('#success_message').show();
                jQuery('#form1')[0].reset();
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
			
	$(".captcha_play_button").hide();

	$('#table1 tbody').on('click', '#view', function() 
	{
        var data1 = $(this).parents("tr").find("td:eq(3)").html();
		window.open("viewpdf.php?filename="+data1);
	});

	$("#category").change( function()
	{
	  var category1=$("#category").val();
   	  location.href("advancefilters.php?filename="+category1);
   });
	
	$("#imagenew").click(function()
	{
		$("#captcha_image").prop('src', 'http://newsoftwares.rf.gd/sadagopan/securimage/securimage_show.php?sid=' + Math.random());
	});
});
</script>

	</body>
</html>