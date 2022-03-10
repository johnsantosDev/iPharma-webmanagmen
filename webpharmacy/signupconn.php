<?php require 'connection.php'; ?>
<?php require'signup.php';?>
<?php
//for registration
if (isset($_POST['signup'])) {
	
	$email = $_POST['email'];
	$password = $_POST['pass'];


	$stmt = $conn->query("insert into signup (email,password) values('$email','$password')") or die mysqli_error($conn)."at line number ".__LINE__;
	if ($stmt) {
		echo "Data Inserted"
	}
}
?>
