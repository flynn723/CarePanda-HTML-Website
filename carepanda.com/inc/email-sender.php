<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

$Recipient = 'justin@justinestrada.com'; // <-- Set your email here

if($Recipient) {

	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Subject = 'Message from your website';
	$Message = $_POST['message'];

	$Email_body = "";
	$Email_body .= "From: " . $Name . "\n" .
				   "Email: " . $Email . "\n" .
				   "Subject: " . $Subject . "\n" .
				   "Message: " . $Message . "\n";

	$Email_headers = "";
	$Email_headers .= 'From: ' . $Name . ' <' . $Email . '>' . "\r\n".
					  "Reply-To: " .  $Email . "\r\n";

	$sent = mail($Recipient, $Subject, $Email_body, $Email_headers);

	if ($sent){
		$emailResult = array ('sent'=>'yes');
	} else{
		$emailResult = array ('sent'=>'no');
	}

	echo json_encode($emailResult);

} else {

	$emailResult = array ('sent'=>'no');
	echo json_encode($emailResult);

}
?>
