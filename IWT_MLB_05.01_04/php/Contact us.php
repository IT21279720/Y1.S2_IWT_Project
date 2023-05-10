<?php

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "https://formsubmit.co/madhukaiwt55@gmail.com";

mail($recipient,$subject,$message,$mailheader)
or die("Error!");

echo'
<!DOCTYPE html>
<html>
<head>
    <title>Contact form</title>
    <link rel="stylesheet" href="Newest.css">
</head>
<body>
    <div class="container2">
        <img src="images/logo.png" height="70px" width="125px">
        <br><br><h1>Thank you for Contacting Us.</h1><br>
        <p class="back">Go back to <a href="index.html">Contact us</a>.</p>      
        </form>
    </div>
</body>
</html>
';
?>