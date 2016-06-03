<?php

//('recaptchalib.php');
//$privatekey = "6LfjryETAAAAAP6AjlKNpsqc5OIomBo3Fq5B1D2r";
//$resp = recaptcha_check_answer ($privatekey,
//                                $_SERVER["REMOTE_ADDR"],
//                                $_POST["recaptcha_challenge_field"],
//                                $_POST["recaptcha_response_field"]);
//
//if (!$resp->is_valid) {
//  die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
//       "(reCAPTCHA said: " . $resp->error . ")");
//}

$EmailFrom = "Jose@FixItFast.Org";
$EmailTo = "Jose@FixItFast.Org";
$Subject = "Help me with my computer issue please";
$Name = Trim(stripslashes($_POST['Name'])); 
$City = Trim(stripslashes($_POST['City'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "City: ";
$Body .= $City;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>