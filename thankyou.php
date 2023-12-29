<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- InstanceBegin template="/Templates/haran.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Thought-Bubble: thank you for your enquiry</title>
<!-- InstanceEndEditable -->
<link href="CSS/thoughtbubble.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

<!-- NAV HTML HEAD CSS AND JS INCLUDES START HERE-->
<?php include("includes/navdiv_htmlhead.php"); ?>
<!-- NAV HTML HEAD CSS AND JS INCLUDES END HERE-->

</head>

<body>

<?php
	if($_POST["Submit"] == "Submit") :

		$toAddress = "haran@thought-bubble.co.uk";
		$headers = 'From: enquiries@thought-bubble.co.uk' . "\r\n" .
      "Reply-To: " . $_POST["EmailAddress"] . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
		mail($toAddress, "Enquiry: Thought-Bubble", "Name: ".$_POST["Name"]."\r\n\r\nEmail: ".$_POST["EmailAddress"]."\r\n\r\nContact Number: ".$_POST["ContactNumber"]."\r\n\r\nMessage: ".$_POST["Message"]."\r\n\r\nAccess inbox: http://www.haranrasalingam.com:2095", $headers);
?>

<!--
POST VARS: - - - - 
<?php print_r($_POST); ?>
-->

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
      <h6 class="ta">
		Thank you for your enquiry.<br />
		We will be in touch shortly.
	  </h6>
      <!-- TEXT ENDS HERE-->
    </div>
    <!-- CONTENT ENDS HERE-->
  </div>
  <!-- FOOTER STARTS HERE-->
  <?php include("includes/footer.php"); ?>
  <!-- FOOTER ENDS HERE-->
  <!-- MAIN ENDS HERE-->
</div>

<?endif;?>
<!-- 16:00 -->
</body>
</html>
