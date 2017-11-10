
<?php
    session_start();
    $_SESSION['pay']=$_POST['amount'];
   // echo "username". $_SESSION['pay'];

require_once 'app/init.php';
require_once 'vendor/autoload.php';

?>

<html>
<head>
    <title>Payments</title>
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
    <h1><a href="index.html">CEYLON ELECTRICITY BOARD</a></h1>
    <a href="#nav">Menu</a>
</header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="../cus_view2.php">My Account</a></li>
        <li><a href="../new_request.php">New Connection</a></li>
        <li><a href="../../../editdetails/editdetail_gui.php">EDIT DETAILS</a></li>
        <li><a href="../../../Common/Log_out.php">Log out</a></li>
    </ul>
</nav>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2>Payments</h2>
        </header>


        <section>

            <div class="table-wrapper">
                <table>

                    <tbody>
                    <tr>
                        <td>Amount Of Payment</td>
                        <td><?php echo $_SESSION['pay']?></td>
                    </tr>


                    </tfoot>
                </table>
            </div>

            <form action="bill_charge.php" method="POST">
                <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="<?php echo  $stripe['publishable'];?>"
                        data-amount=""
                        data-currency="LKR"
                        data-name="CEB"
                        data-description="Bill Payments"
                        data-locale="auto" >

                </script>
            </form>


        </section>




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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>