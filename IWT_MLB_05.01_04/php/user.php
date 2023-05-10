<!DOCTYPE html>
<html>
<?php
session_start();
?>
<?php
include_once 'config.php';
?>
    <head>
    <title>PowerZone</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/42ad09fc8e.js" crossorigin="anonymous"></script>
    </head>
    <body style="background:#000000;">
    <div class="header">
        <div class="header_content">
            <div class="logo">
                <a href="#">
                    <img src="../images/logo.png" height="70px" width="125px">
                </a>
            </div>
            <div class="navigation">
                <ul>
                    <li>
                        <a href="index.html">
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="plans.html">
                            <span class="title">Plans</span>
                        </a>
                    </li>
                    <li>
                        <a href="../php/shop.php">
                            <span class="title">Shop</span>
                        </a>
                    </li>
                    <li>
                        <a href="brands.html">
                            <span class="title">Brands</span>
                        </a>
                    </li>
                    <li>
                        <a href="aboutus.html">
                            <span class="title">About Us</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="buttons">
                <i class="bi bi-search" onclick="searchdropdown()"></i>
                <div class="search-dropdown">
                    <input type="text" spellcheck="false">
                </div>
                <i class="bi bi-cart4"></i>
                <i class="bi bi-person-circle" onclick="profiledropdown()"></i>
                <div class="profile-dropdown">
                    <a href="login.html">
                        <input type="button" value="Log In">
                    </a>
                    <a href="signup.html">
                        <input type="button" value="Sign Up">
                    </a>
                </div>
            </div>
        </div>
    </div>    
    <div class="hero"><center><a class ="c">USER ACCOUNT</a></center></div>
            <div class="container">
            <div ><img src="../images/200.png" class="image1"> </div>
            <center><a class="a"><?php echo $_SESSION["username"]; ?></a></center><br><br>
           
            <div class="container1">
            <label class="b">User Id : <?php echo $_SESSION["id"]; ?></label><br><br>
            <label class="b">Name    : <?php echo $_SESSION["name"]; ?></label><br><br>
            <label class="b">Mobile : <?php echo $_SESSION["mob"]; ?></label><br><br>
            <label class="b">Date of Birth :<?php echo $_SESSION["birth"]; ?> </label><br><br>
            <label class="b">Email   : <?php echo $_SESSION["email"]; ?></label><br><br>
            
            </div><br><br>
            
            
            <button class="bttnu" onclick="window.location.href = 'logout.php';">Logout</a></button>
            <button class="bttnu">Edit profile</button>
            
            </div>
            <footer>
            <div class="footer-left">
            <div class="footer-col">
                <ul>
                    <li><a href="#">How it works</a></li>
                    <li><a href="../html/TrainersHTML.html">Trainers</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <ul>
                    <li><a href="#">Support</a></li>
                    <li><a href="../html/Contact us.html">Contact Us</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            </div>
        <div class="footer-middle">
            <div id="logo">
                <img src="../images/logo.png" height="70px" width="125px">
                <p class="copyright">&copy; Copyright PowerZone 2022. All Right Reserved.</p>
            </div>
        </div>
        <div class="footer-right">
            <div class="app-links">
                <a href="#" class="appstore">App Store</a>
                <a href="#" class="playstore">Play Store</a>
            </div>
            <div class="social-media">
                <a href="#" class="social-buttons"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="social-buttons"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="social-buttons"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="social-buttons"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <script src="../js/javascript.js"></script>
    </body>
</html>

<style>

.image1{
    
    height: 115px;
    width: 29%;
    
    margin-left: 125px;
    margin-bottom:30px;

    
    
    
}
.b{ font-family: 'Bebas Neue';
	font-size: 20px;

}
	
.container{
    width:500px;
	height:830px;
	position:relative;
    padding: 80px 70px 60px 70px;
    margin: 5% auto;
    border: 1px;
	
    border-radius: 20px;
    background: white;}
.container1{
	
	
	padding: 30px 70px 30px 100px;}
  
    .a{
        
        text-align:center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    padding-bottom: 30px;

    font-size: 25px;
    }
   
.bttnu{
    
    font-family: Verdana, Geneva, Tahoma, sans-serif;
	font-size: 15px;
	border:1px ;
	text-align:center;
    margin-top: 10px;
    color:white;
	box-shadow: 0 0 2px;
	border-radius:10px;
	width:50%;
    height: 30px;
	cursor:pointer;
    background-color: black;
    margin-left: 100px;
   
}
.bttnu:hover{
        background-color: white;
        color:black;
}
.c{ font-family: 'Bebas Neue';
	font-size: 45px;
    color:white;

}
.hero{
    margin-top: 6% ;
}
</style>