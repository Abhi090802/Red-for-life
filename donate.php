<?php
	$first name = $_POST['first name'];
	$last name = $_POST['last name'];
	$Blood Group = $_POST['Blood Group'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$address = $_POST['address'];

	// Database connection
	$conn = new mysqli('localhost','root','','abhishek');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into donate(first name, last name, Blood Group, age, email, address) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiss", $first name, $last name, $Blood Group, $age, $email, $address);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
