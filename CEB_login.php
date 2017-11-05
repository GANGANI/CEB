
<?php
    $sereverName ='127.0.0.1';
    $userName = 'root';
    $passWord = '';
    $dbName = 'ceb';
    $db = mysqli_connect($sereverName,$userName,$passWord,$dbName);
    if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
    }
   session_start();

    if (isset($_POST['username']) and isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        $query = "SELECT * FROM 'Customer' WHERE user_name = '$username' and password = '$password'";
        $result = mysqli_query($db,$query) or die (mysqli_error($db));
        $count = mysqli_num_rows($result);

        if($count==1){
            $_SESSION['username']=$username;

        }else{
            $fmsg = "Invalid Login Credentails.";
        }
    }

?>
<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Retrospect by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body class="landing">

<!-- Header -->
<header id="header" class="alt">
    <h1><a href="index.html">CEB LOGIN</a></h1>
    <a href="#nav">Menu</a>
</header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
    </ul>
</nav>

<!-- Banner -->
<section id="banner">
    <i class="icon fa-diamond"></i>
    <h2>Cylon Electricity Board</h2>
    <p>We light up your future</p>
    <form action="#" method="POST">
        <div class="container 75%">
            <div class="row uniform 50%">
                <div class="6u 12u$(xsmall)">
                    <h4>Username</h4>
                    <input name="username" placeholder="Username" type="text" />
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <h4>Password</h4>
                    <input name="password" placeholder="Password" type="password" />
                </div>
            </div>
        </div>
        <ul class="actions">
            <li><a href="Customer Acc.html" class="button big special">Login</a></li>
        </ul>
    </form>

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
            <li>24 hours call center DIAL 1987</li>

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