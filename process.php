<?php

	$to = "your@domain.com";
	$from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$city = $_REQUEST['city'];
	$subject = $_REQUEST['subject'];
	$headers = "From: $from";
    

	$fields = array();
	$fields{"name"} = "Name";
	$fields{"email"} = "E-mail";
	$fields{"city"} = "city";
	$fields{"subject"} = "Subject";
	$fields{"message"} = "Message";

    $body = "Here is the message from your website:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
