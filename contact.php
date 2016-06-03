<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Contact Us</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="styleee.css" />
	<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

    <?php include("../header.php"); ?>

	<div id="page-wrap">

	<h1>Contact Us</h1>
		<div id="contact-area">
			
			<form method="post" action="contactengine.php">
				<table>
					<tr>
						<td class="left"><label for="Name">Name:</label></td>
						<td><input type="text" name="Name" /></td>
					</tr>
					<tr>
						<td class="left"><label for="City">City:</label></td>
						<td><input type="text" name="City" /></td>
					</tr>
					<tr>
						<td class="left"><label for="Email">Email:</label></td>
						<td><input type="text" name="Email" /></td>
					</tr>
					<tr>
						<td class="left"><label for="Message">Message:</label></td>
						<td><textarea name="Message" rows="20" cols="20"></textarea></td>
					</tr>
				</table>
				
				<div id="captcha-area">
				
				<form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6LfjryETAAAAAOs0jiVXK8J2ks4aMUaZHjAdzZrl"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>
				<div class="g-recaptcha" data-sitekey="6LfjryETAAAAAOs0jiVXK8J2ks4aMUaZHjAdzZrl"></div>
				
				</div>
								
				<input type="submit" name="submit" value="Submit" class="submit-button" />
			</form>
		
		</div>
	
	</div>
	
	<?php include("../footer.php"); ?>

</body>

</html>