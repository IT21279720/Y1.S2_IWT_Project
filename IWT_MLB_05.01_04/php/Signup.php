<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinefitnesstrainer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$FirstName=$_POST['FirstName'];
$SecondName=$_POST['SecondName'];
$birthday=$_POST['birthday'];
$email=$_POST['email'];
$telnum=$_POST['telnum'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];

if($_POST['password1'] != $_POST['password2']){
	header("Location: ../html/Signup.html");
}

$submit=$_POST['submit'];

$result="SELECT Email FROM users WHERE Email='$email'||username='$SecondName'";

if($result=$conn->query($result)){
	
	if($result->num_rows>0){
		echo "<script>alert('Username or email already exists...')</script>";
        echo "<script>setTimeout(\"location.href='../html/Signup.html';\",800);</script>";
	}
	else
	{
		if($password1 == $password2){
			$sql = "INSERT INTO users (	username , password , mobile , email , dob , fullName )
			VALUES ('$SecondName','$password1','$telnum','$email','$birthday','$FirstName')";

			if ($conn->query($sql) === TRUE) 
			{
			header("Location: ../html/login.html");
			}
			else
			{
			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		echo "<script>alert('Password did not match...')</script>";
        echo "<script>setTimeout(\"location.href='../html/Signup.html';\",800);</script>";
	}
	
}

$conn->close();
?>