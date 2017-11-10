<?php

include "setconnection.php";
$con = new connec();
$conn = $con->makeConnection();
session_start();
$user = $_SESSION['us'];
$sql = "SELECT * FROM (SELECT connection_id FROM customer NATURAL JOIN connection WHERE user_name = '$user') AS con_id NATURAL JOIN bill_details";
//$sql = "SELECT * FROM  bill_details NATURAL JOIN  connection WHERE connection_id='GMH200002'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$connection_id = $row['connection_id'];
$bill_no = $row['bill_no'];
$meter_reading =$row['meter_reading'];
$month =$row['month'];
$monthly_bill =$row['monthly_bill'];
$sql2 = "SELECT due_amount FROM (SELECT customer_id FROM customer WHERE user_name = '$user')As connection NATURAL JOIN connection";

$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$due_amount = $row2['due_amount'];


?>

<html>
<head>
    <title>Pay </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <script src="assets/js/jquery.min.js"></script>
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
            <h2>Bill Details</h2>

        </header>
        <section>
            <div class="table-wrapper">
                <table>
                    <tbody>
                    <tr>
                        <td>Connection_Id</td>
                        <td><?php echo $connection_id?></td>

                    </tr>
                    <tr>
                        <td>Bill_No</td>
                        <td><?php echo $bill_no?></td>

                    </tr>
                    <tr>
                        <td>Meter_Reading</td>
                        <td><?php echo $meter_reading?></td>

                    </tr>
                    <tr>
                        <td> Month</td>
                        <td><?php echo $month?></td>

                    </tr>
                    <tr>
                        <td>Monthly_Bill</td>
                        <td><?php echo $monthly_bill?></td>

                    </tr>
                    <tr>
                        <td>Due_Amount</td>
                        <td><?php echo $due_amount?></td>

                    </tr>
                    </tbody>

                </table>
            </div>






            <form action="dopayment.php" method="post" name="myform" id="myform">
                <table>
                    <tr>
                        <td>Amount of Payment :</td>
                        <td><input type="text" name="amount" required="1"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" value="pay" class="btn tf-btn btn-default" name="paybtn"/>Pay</button>
                            <input type="reset"  value="clear"/>
                        </td>
                    </tr>
                </table>
            </form>


        </section>
    </div>
</section>

<!-- Footer -->
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
