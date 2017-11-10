<?php
include "../../Common/Connection.php";
$con = new connec();
$conn = $con->makeConnection();
session_start();
$user = $_SESSION['us'];
$sql = "SELECT name,email,phone_number,address FROM customer where user_name = '$user'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<html>
<head>
    <title>Inquiry-CEB</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../CSS/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../CSS/assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="../CSS/assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="../CSS/assets/css/ie9.css" /><![endif]-->
</head>
<body>

<!-- Header -->
<header id="header" class="skel-layers-fixed">
    <h1><a href="home.php">CEYLON ELECTRICITY BOARD</a></h1>
    <a href="#nav">Menu</a>
</header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="../../login/php/home.php">Home</a></li>
        <li><a href="../../Customer/php/cus_view2.php">Home</a></li>
        <li><a href="cus_view2.php">My Account</a></li>
        <li><a href="viewAccount.php">My connection</a></li>
        <li><a href="../../editdetails/editdetail_gui.php">EDIT DETAILS</a></li>
        <li><a href="../../Common/Log_out.php">Log out</a></li>

    </ul>
</nav>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2>Inquiry</h2>
        </header>

        <!-- Form -->
        <section>
            <h3>Make Inquiry</h3>
            <form method="post" action="Inquiry.php">
                <div class="row uniform 50%">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="username" id="name" value=<?php echo $user?> placeholder=<?php echo $user?> readonly/>
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input type="email" name="email" id="email" value=<?php echo $row['email']?> placeholder=<?php echo $row['email']?> readonly/>
                    </div>
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="phoneNumber" id="phone_no" value=<?php echo $row['phone_number']?> placeholder=<?php echo $row['phone_number']?> />
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input type="text" name="address" id="address" value=<?php echo $row['address']?> placeholder=<?php echo $row['address']?> />
                    </div>
                    <div class="12u$">
                        <textarea name="inquiryName" id="inquiry name" placeholder="Inquiry name" rows="1"></textarea>
                    </div>
                    <div class="12u$">
                        <textarea name="message" id="message" placeholder="Enter your inquiry" rows="6"></textarea>
                    </div>
                    <div class="12u$">
                        <ul class="actions">
                            <li><button type="submit" class="btn tf-btn btn-default" name="from" value="Account">Submit</button></li>
                            <li><button type="reset" class="btn tf-btn btn-default" />Reset</li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>

    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li><a href="#" class="icon fa-facebook">
                    <span class="label">Facebook</span>
                </a></li>
            <li><a href="#" class="icon fa-twitter">
                    <span class="label">Twitter</span>
                </a></li>
            <li><a href="#" class="icon fa-instagram">
                    <span class="label">Instagram</span>
                </a></li>
            <li><a href="#" class="icon fa-linkedin">
                    <span class="label">LinkedIn</span>
                </a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled.</li>
            <li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
            <li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>
