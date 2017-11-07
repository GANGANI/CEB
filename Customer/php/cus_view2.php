<?php
include "../../Common/Connection.php";
session_start();
$user = $_SESSION['us'];
//echo $user;
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
        <li><a href="home.php">Home</a></li>
        <li><a href="Log_out.php">Log out</a></li>
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
                    <a href="conn_req_view.html"><img src="../images/img5.png"  /></a>
                </div>
                <a href="#" class="button">Connection<br> Request </a>

            </div>
            <div class="box person">
                <div class="image round">
                    <img src="../images/img7.png"  />
                </div>
                <form action="Inquiry_new_PHP.php" method="post">
                    <button type="submit" class="btn tf-btn btn-default" name="but" value=<?php echo $name?>>View</button>
                </form>
            </div>
            <div class="box person">
                <div class="image round">
                    <a href="Mail.html"><img src="../images/img8.png"  /></a>
                </div>
                <a href="#" class="button">View my<br>Account</a>
            </div>
            <div class="box person">
                <div class="image round">
                    <a href="Mail.html"><img src="../images/img9.png"  /></a>
                </div>
                <a href="#" class="button">Bill Payments</a>
            </div>

        </div>
    </div>
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
<script src="../CSS/assets/js/jquery.min.js"></script>
<script src="../CSS/assets/js/skel.min.js"></script>
<script src="../CSS/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="../CSS/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../CSS/assets/js/main.js"></script>

</body>
</html>