<?php
include "conn_req_view_data.php"

?>
<html>
<head>
    <title>CONNEC DETAILS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../style/assets3/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../style/assets3/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="../style/assets3/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="../style/assets3/css/ie9.css" /><![endif]-->
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
        <li><a href="../html/index.html">Home</a></li>
        <li><a href="conn_req_all_gui.php">NEW REQUESTS</a></li>
        <li><a href="Inquery_gui_php.php">INQUIRIES</a></li>
        <li><a href="../html/Mail.html">DROP MAIL</a></li>
    </ul>
</nav>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2>NEW CONNECTION REQUESTS DETAILS</h2>
            <p>We Light Up Your Future</p>
        </header>
        <section>

            <div class="table-wrapper">
                <table>
                    <tbody>
                    <tr>
                        <td>User ID(if exists)</td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><?php echo $name?></td>

                    </tr>
                    <tr>
                        <td>E-Mail</td>
                        <td><?php echo $email?></td>

                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?php echo $address?></td>

                    </tr>
                    <tr>
                        <td>Tele</td>
                        <td><?php echo $pn?></td>

                    </tr>
                    <tr>
                        <td>Connection Type</td>
                        <td><?php echo $type?></td>

                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><?php echo $des?></td>

                    </tr>



                    </tbody>

                </table>
            </div>
        </section>
        <section>
            <ul class="actions">
                <form method="post" action="Mail.php">
                <button type="submit" class="btn tf-btn btn-default" name="but" value=<?php echo $var.'RC'?>>Recorded</button>
                <button type="submit" class="btn tf-btn btn-default" name="but" value=<?php echo $var.'NC'?>>Not Recorded</button>
                <button type="submit" class="btn tf-btn btn-default" name="but" value='OTHERC'>Other</button>
                </form>
            </ul>



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

            <li>Design by: <a href="">MIND LABS GROUP</a>.</a>.</li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="../style/assets3/js/jquery.min.js"></script>
<script src="../style/assets3/js/skel.min.js"></script>
<script src="../style/assets3/js/util.js"></script>
<!--[if lte IE 8]><script src="../style/assets3/js/ie/respond.min.js"></script><![endif]-->
<script src="../style/assets3/js/main.js"></script>

</body>
</html>