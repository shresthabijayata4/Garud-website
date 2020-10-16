<?php
	if (isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mailFrom = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message']; 

		$mailTo = "info@agiinfotech.com";
		$headers = "From: ".$mailFrom;
		$txt = "You have received an email from ".$fname." ".$lname.".\n\n"."Subject: ".subject."\n\n".$message.".";

		mail($mailTo, $subject, $txt, $headers);

		header('Location: https://www.agiinfotech.com/');
	}
?>