<?php
include "../../Common/Connection.php";
$con = new connec();
$conn = $con->makeConnection();
session_start();
$user = $_SESSION['us'];
$sql = "SELECT name,email FROM  customer WHERE user_name = '$user'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name = $row['name'];
$email= $row['email'];

?>
<html>
<head>
    <title>Account Details</title>
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
    <h1><a href="index.html">Retrospect</a></h1>
    <a href="#nav">Menu</a>
</header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="cus_view2.php">My Account</a></li>
        <li><a href="../../editdetails/editdetail_gui.php">EDIT DETAILS</a></li>
        <li><a href="../../Common/Log_out.php">Log out</a></li>
    </ul>
</nav>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2>Account Details</h2>
            <h4><?php echo $name?></h4>
            <h4><?php echo $email?></h4>

        </header>
        <section>
            <h3>Bill Details</h3>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th>bill_no</th>
                        <th>month</th>
                        <th>Units consumed</th>
                        <th>monthly bill</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php


                    $str = '';
                    $array=['bill_no','month','units','monthly_bill'];
                    for ($i = 0; $i < count($array); $i++) {

                        $str .= ',' . $array[$i];

                    }

                    $str = substr($str, 1);
                    $sql = "SELECT bill_no,month,units,monthly_bill FROM (SELECT connection_id FROM customer NATURAL JOIN connection WHERE user_name = '$user') AS con_id NATURAL JOIN bill_details";

                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>
					  
					    <td>' . $row['bill_no'] . '</td> 
					    <td>' . $row['month'] . '</td> 
					    <td>' . $row['units'] . '</td> 
					    <td>' . $row['monthly_bill'] . '</td> 
					     
					    
				        </tr>';

                    }
                    ?>
                    </tfoot>
                </table>
            </div>
        </section>



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
