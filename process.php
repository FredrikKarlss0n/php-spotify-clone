<?php
include_once 'database.php';

if(isset($_POST['login']))
{	 

	$user_name = $conn -> real_escape_string($_POST['user_name']);
	$password = $conn -> real_escape_string($_POST['password']);
		$encryptedpassword = md5($password);

	$sqli= "SELECT * FROM users WHERE user_name = '$user_name' AND password = '$encryptedpassword' ";

	$result = mysqli_query($conn, $sqli) or die(mysqli_error());   
	$num_rows = mysqli_num_rows($result);

	if ($num_rows>0){
		echo "Login Successful!";
		header("Location: http://localhost:1234/2022_2023/TekAvNatjanst/yrkesprov/home.php");
	}
	else{
	  echo "Login Failed! User not found";
	}
}
if(isset($_POST['signup']))
{	 
    $user_name = $_POST['user_name'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$email_confirm = $_POST['email2'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password2'];
	
		$encryptedpassword = md5($password);
		$profilepic = "immages/profile_pics/001.png";
		$date = date("Y-m-d");
	
		if ($email == $email_confirm && $password == $password_confirm) {
		$sql = "INSERT INTO users VALUES ('','$user_name','$first_name','$last_name','$email','$encryptedpassword')";
			if (mysqli_query($conn, $sql)) {
				echo "New record created successfully !";
				header("Location: http://localhost:1234/2022_2023/TekAvNatjanst/yrkesprov/home.php");
			} else {
				echo "New record not created!!!";
				echo "Error: " . $sql . "" . mysqli_error($conn);
			}
			mysqli_close($conn);
		} else {
			if ($email !== $email_confirm && $password !== $password_confirm) {
				echo "emails and passwords don't match";
			} elseif ($email !== $email_confirm) {
				echo "emails don't match";
			} elseif ($password !== $password_confirm) {
				echo "passwords don't match";
			} else {
				echo "idk wut happen";
			}
			
		}
}
?>