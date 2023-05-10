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



$f1Name=$_POST['f1Name'];
$f1number=$_POST['f1number'];
$f1country=$_POST['f1country'];
$f1address=$_POST['f1address'];
$f1city=$_POST['f1city'];
$f1zip=$_POST['f1zip'];

if(empty($f1Name)||empty($f1number)||empty($f1country)||empty($f1address)||empty($f1city)||empty($f1zip)){
	//header("Location: ../html/web.html");
}
else{
$sql = "INSERT INTO payment_details (Card_Holder, Card_Number,Country,Address,City,Zip_Code)
VALUES ('$f1Name', '$f1number','$f1country','$f1address','$f1city','$f1zip')";

if ($conn->query($sql) === TRUE) {
  header("Location: ../html/web.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>