<?php
include 'edit_data.php';
?>
<html>
<head>
    <title>NEW REQUESTS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../itoperator/style/assets3/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../itoperator/style/assets3/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="../itoperator/style/assets3/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="../itoperator/style/assets3/css/ie9.css" /><![endif]-->
</head>
<body>

<!-- Header -->
<header id="header" class="skel-layers-fixed">
    <h1><a href="../itoperator/html/index.html">EDIT DETAILS</a></h1>
    <a href="#nav">Menu</a>
</header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="../itoperator/html/index.html">Home</a></li>
        <li><a href="../itoperator/php/conn_req_all_gui.php">NEW REQUESTS</a></li>
        <li><a href="../itoperator/php/Inquery_gui_php.php">INQUIRIES</a></li>
        <li><a href="../itoperator/html/Mail.html">DROP MAIL</a></li>
        <li><a href="editdetail_gui.php">EDIT DETAILS</a></li>
    </ul>

</nav>

<section>
    <div class="container">
        <h2>  </h2>
        <form class="form-horizontal" action="update_db.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2">YOUR ID:</label>
                <div class="col-sm-10">
                    <input class="form-control input-sm"  type="text" name="id" value=<?php echo $id?> readonly>


                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >USER NAME:</label>
                <div class="col-sm-10">
                    <input class="form-control input-sm"  type="text" name="user" placeholder= <?php echo $user?> value=<?php echo $user?> readonly>

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >NAME:</label>
                <div class="col-sm-10">
                    <input class="form-control input-sm"  type="text" name="name" value=<?php echo $name?>  >

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >ADDRESS:</label>
                <div class="col-sm-10">
                    <input class="form-control input-sm"  type="text" name="add"  value=<?php echo $add?> readonly>

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >E-MAIL:</label>
                <div class="col-sm-10">
                    <input class="form-control input-sm"  type="text" name="mail" value=<?php echo $mail?>  >

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >TP-NUMBER:</label>
                <div class="col-sm-10">
                    <input class="form-control input-sm"  type="text" name="pn" value=<?php echo $pn?> >

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >CURRENT PASSWORD:</label>
                <div class="col-sm-10">
                    <input class="form-control input-sm"  type="text" name="cpw" placeholder= 'current password' >

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >NEW PASSWORD:</label>
                 <div class="col-sm-10">
                     <input class="form-control input-sm"  type="text" name="npw" placeholder= 'new password' value=>


                 </div>
            </div>
            <ul class="actions">
                    <button type="submit" class="btn tf-btn btn-default" name="sub" value=>SAVE</button>
                    <button type="reset" class="btn tf-btn btn-default" name="reset" value=>RESET</button>


            </ul>


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
            <li>&copy; MINDLABZ</li>
            <li>24 hours call center DIAL 1987</li>

        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="../itoperator/style/assets3/js/jquery.min.js"></script>
<script src="../itoperator/style/assets3/js/skel.min.js"></script>
<script src="../itoperator/style/assets3/js/util.js"></script>
<!--[if lte IE 8]><script src="../itoperator/style/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../itoperator/style/assets3/js/main.js"></script>
</body>
</html>