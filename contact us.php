<?php
	$first name = $_POST['first name'];
	$last name = $_POST['last name'];
	$Blood Group = $_POST['email'];
	$age = $_POST['message'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact us(first name, last name,email, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $first name, $last name, $email, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>