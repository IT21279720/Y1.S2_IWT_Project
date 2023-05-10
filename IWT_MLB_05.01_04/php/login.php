<?php
include_once 'config.php';
?>
<?php
    session_start();
    $message="";
    
    
        $result = mysqli_query($conn,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["username"] = $row['username'];
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['fullName'];
        $_SESSION["mob"] =$row["mobile"];
        $_SESSION["email"] =$row["email"];
        $_SESSION["birth"] =$row["dob"];
            if(isset($_SESSION["username"])) {
            header("Location:user.php");
            }
        
        } 
        else {
         $message =  "<script>alert('Invalid Username or Password')</script>";
         
         
        if($message!="") {
            echo $message;
            echo "<script>setTimeout(\"location.href = '../html/login.html';\",700);</script>";
        }
        }

    
  
?>
