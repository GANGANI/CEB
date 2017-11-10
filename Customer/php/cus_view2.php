<?php
include "../../Common/Connection.php";
session_start();
$user = $_SESSION['us'];
$con = new connec();
$conn = $con->makeConnection();
$sql = "SELECT name FROM customer WHERE user_name='$user'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name = $row['name'];
?>

<html>
<head>
    <title>CEB-Customer Account</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../CSS/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../CSS/assets/css/main.css" />
    <link rel="stylesheet" href="../CSS/1assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="../CSS/assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="../CSS/assets/css/ie9.css" /><![endif]-->
</head>
<body>

<!-- Nav -->
<nav id="nav">
    <ul class="links">

        <li><a href="new_request.php">New Connection</a></li>
        <li><a href="../../editdetails/editdetail_gui.php">EDIT DETAILS</a></li>
        <li><a href="../../Common/Log_out.php">Log out</a></li>
    </ul>
</nav>

<!-- One -->
<section id="two" class="wrapper style1 special">
    <header id="header" class="alt">
        <a href="#nav">Menu</a>
    </header>
    <div class="inner">

        <header>
            <p>your logged in as</p>
            <h2><?php echo $name?></h2>
            <p></p>
        </header>
        <div class="flex flex-4">
            <div class="box person">
                <div class="image round">
                    <img src="../images/img5.png"  />
                </div>
                <a href="new_request.php" class="button">New connection</a>

            </div>
            <div class="box person">
                <div class="image round">
                    <img src="../images/img7.png"  />
                </div>
                <form action="Inquiry_new_PHP.php" method="post">
                    <button type="submit" class="btn tf-btn btn-default" name="but" value=<?php echo $name?>>Make Inquiry</button>
                </form>
            </div>
            <div class="box person">
                <div class="image round">
                    <img src="../images/img8.png"  />
                </div>
                <form action="viewAccount.php" method="post">
                    <button type="submit" class="btn tf-btn btn-default" name="but" value=<?php echo $name?>>My Account</button>
                </form>
            </div>
            <div class="box person">
                <div class="image round">
                    <img src="../images/img9.png"  />
                </div>
                <form action="Bill_payment/BillDetails.php" method="post">
                    <button type="submit" class="btn tf-btn btn-default" name="but" value=<?php echo $name?>>Bill Details</button>
                </form>
            </div>

        </div>
    </div>
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li><a href="https://www.facebook.com/CeylonElectricityBoard/" class="icon fa-facebook">
                    <span class="label">Facebook</span>
                </a></li>
            <li><a href="https://twitter.com/CEB_lk?lang=en" class="icon fa-twitter">
                    <span class="label">Twitter</span>
                </a></li>
            <li><a href="#" class="icon fa-instagram">
                    <span class="label">Instagram</span>
                </a></li>
            <li><a href="https://www.linkedin.com/company/ceylon-electricity-board" class="icon fa-linkedin">
                    <span class="label">LinkedIn</span>
                </a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; MINDLABZ</li>
            <li>24 hours call center DIAL 1987</li>

        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="../CSS/assets/js/jquery.min.js"></script>
<script src="../CSS/assets/js/skel.min.js"></script>
<script src="../CSS/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="../CSS/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../CSS/assets/js/main.js"></script>

</body>
</html>