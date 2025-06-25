<?php

if (isset($_POST['btnSubmit'])) {
	$fname = $_POST['cname'];
	$email = $_POST['uemail'];
	$sub = $_POST['usubject'];
	$phone = $_POST['ucontact'];

	if ($fname == '') {
		header('location:../index.html');
	}
	if ($email == '') {
		header('location:../index.html');
	}
	if ($phone == '') {
		header('location:../index.html');
	}

	$msg = $_POST['umsg'];
	$strtk  = substr($msg, 0, 5);
	$strmk = substr($msg, 0, 4);
	if ($strtk == "https" || $strmk == "http") {
		echo "<script type='text/javascript'>alert(\"Something is Wrong!\");window.location='../index.php';</script>";
		header('location:../index.html');
	} else {
		$to = "info@acspl.co";
		$cma = 'badhanmr711@gmail.com';
		$subject = $sub;
		$message = 'SUBJECT : ' . $sub . '<br>' . 'Name : ' . $fname . '<br>' . 'EMAIL : ' . $email . '<br>' . 'PHONE : ' . $phone . '<br>' . 'MESSAGE : ' . $msg;
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'To:<info@acspl.co>' . "\r\n";
		$headers .= 'From:' . $email . "\r\n";
		//	$headers .= 'Cc:'.$cma."\r\n";
		$headers .= 'Bcc:' . $to . "\r\n";
		if (mail($to, $subject, $message, $headers)) {
			echo "<script type='text/javascript'>alert(\"Thank You For Contacting Us,We Will get Bak to you soon!\");window.location='../index.html';</script>";
		} else {
			echo "<script type='text/javascript'>alert(\"Something is Wrong!\");window.location='../index.html';</script>";
			header('location:../index.html');
		}
	}
}
