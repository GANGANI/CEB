<?php
$sereverName ='127.0.0.1';
$userName = 'root';
$passWord = '';
$dbName = 'ceb';
$conn = mysqli_connect($sereverName,$userName,$passWord,$dbName);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT event_name,description,image FROM events ORDER BY event_id DESC limit 1,1";
$result = mysqli_query($conn,$sql);
while ($row    = mysqli_fetch_array($result)) {
    $event_name = $row['event_name'];
    $description = $row['description'];
    $image = $row['image'];
}
$sql = "SELECT event_name,description,image FROM events ORDER BY event_id DESC limit 0,1";
$result = mysqli_query($conn,$sql);
while ($row    = mysqli_fetch_array($result)) {
    $event_name2 = $row['event_name'];
    $description2 = $row['description'];
    $image2 = $row['image'];
}
mysqli_close($conn);
?>
<!DOCTYPE HTML>

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
    <h1><a href="index.html">Ceylon Electricity Board</a></h1>
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

<!-- Banner -->
<section id="banner">
    <i class="icon fa-diamond"></i>
    <h2>Cylon Electricity Board</h2>
    <p>We light up your future</p>
    <ul class="actions">
        <form action="test.php" method="post">
        <li><button type="submit" class="btn tf-btn btn-default" name='ceb_home' value="0">Login</button></li>
        </form>
    </ul>
</section>

<!-- One -->
<section id="one" class="wrapper style1">
    <div class="inner">
        <article class="feature left">
            <span class="image"><img src="images/news2.png" alt="" /></span>
            <div class="content">
                <h2><?php echo $event_name ?></h2>
                <p><?php echo $description ?></p>

            </div>
        </article>
        <article class="feature right">
            <span class="image"><img src="images/news2.png" alt="" /></span>
            <div class="content">
                <h2><?php echo $event_name2 ?></h2>
                <p><?php echo $description2 ?></p>
            </div>
        </article>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper style3 special">
    <div class="inner">
        <header class="major narrow	">
            <h2>Request for new Electricity Connection</h2>
            <p></p>
        </header>
        <ul class="actions">
            <li><a href="#" class="button big alt">Request</a></li>
        </ul>
    </div>
</section>

<!-- Four -->
<section id="four" class="wrapper style2 special">
    <div class="inner">
        <header class="major narrow">
            <h2>Make Inquiry</h2>
            <p></p>
        </header>
        <form method="post" action="Inquiry.php">
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
                    <input type="text" name="address" id="address" value="" placeholder="Address" />
                </div>
                <div class="12u$">
                    <textarea name="inquiryName" id="inquiry name" placeholder="Inquiry name" rows="1"></textarea>
                </div>
                <div class="12u$">
                    <textarea name="message" id="message" placeholder="Enter your inquiry" rows="6"></textarea>
                </div>
                <div class="12u$">
                    <ul class="actions">

                        <li><button type="submit" class="btn tf-btn btn-default" name="from" value="home">Submit</button></li>
                        <li><button type="reset" class="btn tf-btn btn-default" />Reset</li>
                    </ul>
                </div>
            </div>
        </form>
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