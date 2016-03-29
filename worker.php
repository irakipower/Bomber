<?php
define("random_str",NULL);
if (isset($_POST['to']) && isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['max']))
{
	$max = $_POST['max'];
	$to = $_POST['to'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	if ($message != random_str)
	{
		for ($x = 0; $x <= $max -1; $x++)
		{
			// Normal Message
			mail($to, $subject, $message, "From: " . md5(openssl_random_pseudo_bytes("5")) . "@gmx.com");
		}
	}
	else
	{
		for ($x = 0; $x <= $max -1; $x++)
		{
			// Random Message
			mail($to, $subject, md5(openssl_random_pseudo_bytes("5")), "From: " . md5(openssl_random_pseudo_bytes("5")) . "@gmx.com");
		}
	}
}
?>