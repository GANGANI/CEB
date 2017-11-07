
<html>
<head>
    <title>CEB-Customer Account</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="1assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>

<body>


<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="conn_req_all.html">Connection Requests</a></li>
        <li><a href="Inquiry.html">MAKE INQUIRIES</a></li>
        <li><a href="My Account.html">View my Account</a></li>
        <li><a href="paymentsll.html">Bill Payments</a></li>
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
                    <a href="conn_req_view.html"><img src="images/img5.png"  /></a>
                </div>
                <a href="#" class="button">Connection<br> Request </a>

            </div>
            <div class="box person">
                <div class="image round">
                    <img src="images/img7.png"  />
                </div>
                <form action="Inquiry_new_PHP.php" method="post">
                    <button type="submit" class="btn tf-btn btn-default" name="but" value=<?php echo $username?>>View</button>
                </form>
            </div>
            <div class="box person">
                <div class="image round">
                    <a href="Mail.html"><img src="images/img8.png"  /></a>
                </div>
                <a href="#" class="button">View my<br>Account</a>
            </div>
            <div class="box person">
                <div class="image round">
                    <a href="Mail.html"><img src="images/img9.png"  /></a>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>