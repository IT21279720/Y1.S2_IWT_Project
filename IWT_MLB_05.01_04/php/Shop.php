<?php
require_once("Config.php");
?>

<html>
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
<body>
    <!-- Header Start-->
    <div class="header">
        <div class="header_content">
            <div class="logo">
                <a href="../html/index.html">
                    <img src="../images/logo.png" height="90px" width="135px">
                </a>
            </div>
            <div class="navigation">
                <ul>
                    <li>
                        <a href="../html/index.html">
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="../html/Plan.html">
                            <span class="title">Plans</span>
                        </a>
                    </li>
                    <li>
                        <a href="../php/shop.php">
                            <span class="title">Shop</span>
                        </a>
                    </li>
                    <li>
                        <a href="../html/brands.html">
                            <span class="title">Brands</span>
                        </a>
                    </li>
                    <li>
                        <a href="../html/aboutus.html">
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
                <a href="../php/Cart.php"><i class="bi bi-cart4"></i></a>
                <i class="bi bi-person-circle" onclick="profiledropdown()"></i>
                <div class="profile-dropdown">
                    <a href="../html/login.html">
                        <input type="button" value="Log In">
                    </a>
                    <a href="../html/signup.html">
                        <input type="button" value="Sign Up">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End-->
    <div id="shopmain" >
        <div class="container">
            <div class="shoplogo">
                <span class="shop-txt">Shop</span>
            </div>
            <div class="searchbar">
                <input type="text" placeholder="Search here.." spellcheck="false">
            </div>
            <div class="filter-container">
                <span class="center">Item Category</span>
                <ul>
                    <li>All Items</li>
                        <div class="filter-result"></div>
                    <li>- Supplements</li>
                        <div class="filter-result"></div>
                    <li>- Equipmets</li>
                        <div class="filter-result"></div>
                    <li>- Wearables</li>
                        <div class="filter-result"></div>
                    <li>- Offers</li>
                        <div class="filter-result"></div>
                </ul>
            </div>
            <div class="shop-items">
                <?php
                $sql = "SELECT * FROM shop ORDER BY id ASC";
                $result = mysqli_query($conn, $sql);

                if($result->num_rows > 0)
                    while($row = $result->fetch_assoc()) {?>
                        <div class="item-box">
                            <div class="item-image"><img src="<?php echo $row['image_dir'];?>"></div>
                            <div class="item-details">
                                <div class="nameprice">
                                    <div class="item-name blacktext"><?php echo $row['item_name'];?></div>
                                    <div class="item-name item-price">$<?php echo $row['item_price'];?></div>
                                </div>
                                <div class="add2cart">
                                    <form method="POST" action="Cart.php?action=add&id=<?php echo $row['id']; ?>">
                                    <input class="add2cartbtn" type="submit" value="Add to cart">
                                </div>
                                </form>
                            </div>
                        </div>
                <?php } ?>
            </div>
        </div>
    </div>
    

    <!-- Footer Start -->
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