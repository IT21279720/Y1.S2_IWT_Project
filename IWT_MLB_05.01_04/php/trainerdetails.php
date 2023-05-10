<?php
include 'config.php';


    $firstName = $_POST["FirstName"];
	$lastName = $_POST["LastName"];	
    $Day= $_POST["day"];
    $mobileNumber= $_POST["MobileNumber"];	
    $Email= $_POST["email"];
    $address= $_POST["Address"];
    
  

$sql = "INSERT INTO trainer_details(firstName,lastName,Day,mobileNumber,Email,address)
VALUES('$firstName','$lastName','$Day','$mobileNumber','$Email','$address')";

if($conn->query($sql)) {
    echo "<script>alert('Records added successfully!!');</script>";
    //header("Location: ../../paymentsuccessful page/html/paysucc.html");
}
else{
    echo "<script>alert('Error: Records not added!')</script>";
}

$conn->close();

?>