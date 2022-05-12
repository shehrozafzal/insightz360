<?php
if (isset($_POST['submit'])) {
	$name = htmlentities($_POST['name']);
	$email = htmlentities($_POST['email']);
	$mobile = htmlentities($_POST['mobile']);
	$service = htmlentities($_POST['service']);
	$message = htmlentities($_POST['message']);

//echo "$name $email  $phone $subject  $message";

	$servername = "localhost";
	$username = "tanzeemeitehaad_Db_360user";
	$password = "Hbm$~U$)]g4@";
	$dbname = "tanzeemeitehaad_Cf_insights360";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "insert into contact_form(Id, Name, Email, Phone, Services, Message, Time) values ('$name','$email','$mobile','$service','$message')";

	if ($conn->query($sql) === TRUE) {
	  // echo "New record created successfully";
	  // echo filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$to = $email;
		$subject = $subject;
		$message = $message;
		$from = "info@insights360.com";
		$headers = "From: $from";

		if(mail($to,$subject,$message,$headers))
		{
		    echo "Done";
// 			session_start();
// 	        $_SESSION['flash_message'] = "Thanks! for submitting your respnse";
// 			header('Location: http://insights360.tanzeemeitehaad.org/thank-you');
		}
	else{
			session_start();
	        $_SESSION['flash_message1'] = "Email Sending Fialed, Try Again Later";
			header('Location: http://insights360.tanzeemeitehaad.org/contact');
		}

	} 
	else {
	        session_start();
	        $_SESSION['flash_message1'] = "Email Sending Fialed, Try Again Later";
			header('Location: http://insights360.tanzeemeitehaad.org/contact');
	}

	$conn->close();

}


?>