<?php
    $sereverName ='127.0.0.1';
    $userName = 'root';
    $passWord = '';
    $dbName = 'ceb';
    $db = mysqli_connect($sereverName,$userName,$passWord,$dbName);
    if (!$db){
        die("Database Connection Failed" . mysqli_error($db));
    }

    if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['phoneNumber']) and isset($_POST['address']) and isset($_POST['message']) and isset($_POST['inquiryName'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $address = $_POST['address'];
        $message = $_POST['message'];
        $inquiryName = $_POST['inquiryName'];


        $query = "INSERT INTO Inquiries(username,email,telephone_no,address,message,Inquiry) VALUES ('$username','$email','$phoneNumber','$address','$message','$inquiryName')";

        if (mysqli_query($db, $query)) {
            echo "Record successsfully";
        }else{
            echo "Error: ";
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
    <title>Inquiry-CEB</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>

<!-- Header -->
<header id="header" class="skel-layers-fixed">
    <h1><a href="index.html">Make Inquiry</a></h1>
    <a href="#nav">Menu</a>
</header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="generic.html">Generic</a></li>
        <li><a href="elements.html">Elements</a></li>
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
            <form method="post" action="#">
                <div class="row uniform 50%">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="username" id="name" value="" placeholder="Name" />
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input type="email" name="email" id="email" value="" placeholder="Email" />
                    </div>
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="phoneNumber" id="phone_no" value="" placeholder="Phone No." />
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input type="text" name="email" id="address" value="" placeholder="Address" />
                    </div>
                    <div class="12u$">
                        <textarea name="inquiryName" id="inquiry name" placeholder="Inquiry name" rows="1"></textarea>
                    </div>
                    <div class="12u$">
                        <textarea name="message" id="message" placeholder="Enter your inquiry" rows="6"></textarea>
                    </div>
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Send Inquiry" class="special" /></li>
                            <li><input type="reset" value="Reset" /></li>
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
