<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- InstanceBegin template="/Templates/haran.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<!-- InstanceBeginEditable name="head" -->

	<!-- InstanceBeginEditable name="meta" -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- InstanceEndEditable -->

	<!-- InstanceBeginEditable name="doctitle" -->
		<title>Thought-Bubble: contact us</title>
	<!-- InstanceEndEditable -->

	<!-- InstanceBeginEditable name="CSS" -->
		<link href="CSS/thoughtbubble.css" rel="stylesheet" type="text/css" />
	<!-- InstanceEndEditable -->
	
	<!-- InstanceBeginEditable name="JS" -->
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
		<script>

		$(document).ready(function(){
			$("#contactFrm").validate();
		});
		</script>
		
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<script>
		   function onSubmit(token) {
			 document.getElementById("contactFrm").submit();
		   }
		 </script>
	<!-- InstanceEndEditable -->

<!-- InstanceEndEditable -->

<!-- NAV HTML HEAD CSS AND JS INCLUDES START HERE-->
<?php include("includes/navdiv_htmlhead.php"); ?>
<!-- NAV HTML HEAD CSS AND JS INCLUDES END HERE-->

</head>

<body>
<!-- SKIP TAG FOR SCREEN READERS-->
<div id="skip"><a href="#content" accesskey="n" title="Click here to skip the navigational elements">Skip Navigation</a></div>
<!-- MAIN STARTS HERE-->
<div id="main">
  <!-- COMMONLINKS STARTS HERE-->
  <div id="commonlinks"> <a href="sitemap.php" accesskey="s" title="Click here to see the architecture of the site">Site map</a>
    <!-- COMMONLINKS ENDS HERE-->
  </div>
  <!-- TOP STARTS HERE-->
  <?php include("includes/top.php"); ?>
  <!-- TOP ENDS HERE-->
    
  <!-- GNB STARTS HERE-->
  <?php include("includes/navdiv.php"); ?>
  <!-- GNB ENDS HERE-->

  <!-- CONTENT STARTS HERE-->
  <div id="content">
    <!-- LNB STARTS HERE-->
    <?php include("includes/lnb.php"); ?>
	<!-- LNB ENDS HERE-->
	
    <!-- TEXT STARTS HERE-->
    <div id="text">
		<!-- InstanceBeginEditable name="text" -->
		<h1>Contact Us</h1>
					
		<!-- CONTACT STARTS HERE-->
		<div id="contact">
		
			<h2>Locations</h2>
			<p><span>North Finchley:</span></p>
			<p>Near Woodside Park station</p>
			<p><a class="contact" href="https://www.google.co.uk/maps/place/Westbury+Rd,+London+N12+7NY/@51.6154989,-0.1908125,17z/data=!3m1!4b1!4m5!3m4!1s0x487619e1fb85bc2b:0xf2f74666fb668b82!8m2!3d51.6153144!4d-0.1883439" title="Click here to see the map" target="_blank">London N12 (click here for map)</a></p>
			<p>&nbsp;</p>
			<p><span>Online:</span></p>
			<p>Please enquire for details</p>
			<p>&nbsp;</p>
			<p>Please send your message in the form below:</p>

			<!-- FORM STARTS HERE--> 
			<div id="form">
				<form id="contactFrm" action="thankyou.php" method="post">
					<p><label for="Name">Name <span class="star">*</span></label></p>
					<p><input class="required" maxlength="35" size="35" type="text" id="Name" name="Name"></p>
					<p><label for="EmailAddress">Email address <span class="star">*</span></label></p>
					<p><input class="required email" maxlength="35" size="35" type="text" id="EmailAddress" name="EmailAddress"></p>
					<p><label for="ContactNumber">Contact number <span class="star">*</span></label></p>
					<p><input class="required" maxlength="20" size="20" type="text" id="ContactNumber" name="ContactNumber"></p>
					<p><label for="Message">Message <span class="star">*</span></label></p>
					<p><textarea class="required" rows="5" cols="45" id="Message" name="Message"></textarea></p>
					<p><input type="submit" value="Submit" id="Submit" name="Submit"></p>
				</form>
				<p class="starsentence"><span class="star">*</span> Asterisks indicate required fields</p>
			</div>
			<!-- FORM ENDS HERE-->
			
		</div>
		<!-- CONTACT ENDS HERE-->
                      
		<!-- InstanceEndEditable -->
    </div>
	<!-- TEXT ENDS HERE-->
  </div>
  <!-- CONTENT ENDS HERE-->
  
  <!-- FOOTER STARTS HERE-->
  <?php include("includes/footer.php"); ?>
  <!-- FOOTER ENDS HERE-->
  
</div>
<!-- MAIN ENDS HERE-->
</body>
<!-- InstanceEnd --></html>
