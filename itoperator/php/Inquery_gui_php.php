
<html>
<head>
    <title>INQUIRIES</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../style/assets3/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../style/assets3/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="../style/assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="../style/assets/css/ie9.css" /><![endif]-->
</head>
<body>

<!-- Header -->
<header id="header" class="skel-layers-fixed">
    <h1><a href="../html/index.html">CEYLON ELECTRICITY BOARD</a></h1>
    <a href="#nav">Menu</a>
</header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="../html/index.html">Home</a></li>
        <li><a href="conn_req_all_gui.php">NEW REQUESTS</a></li>
        <li><a href="Inquery_gui_php.php">INQUIRIES</a></li>
        <li><a href="../html/Mail.html">DROP MAIL</a></li>
        <li><a href="../../editdetails/editdetail_gui.php">EDIT DETAILS</a></li>
        <li><a href="../../Common/Log_out.php">Log out</a></li>
    </ul>
</nav>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2>INQUIRIS</h2>
            <p>We Light Up Your Future</p>
        </header>


        <!-- Table -->
        <section>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th>Inquiry ID</th>
                        <th>Message</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    include "../../Common/queary.php";
                    $tab=new queary();
                    $result=$tab->simple_select(['inquiry_id','message','Read_state'],'inquiries');
                    while ($row = $result->fetch_assoc()) {
                        if ($row['Read_state']=='NO') {
                            echo '<tr>
					    <td>' . $row['inquiry_id'] . '</td>
					    <td>' . $row['message'] . '</td> 
					    <td><form method="post" action="view_inq_php.php">
					       <button type="submit" class="btn tf-btn btn-default" name="but" value='.$row['inquiry_id'].'>View</button>
                        </form>
					    </td>
				        </tr>';
                        }
                    }
                    ?>

                    </tbody>

                </table>
            </div>
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
<!--[if lte IE 8]><script src="../style/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../style/assets3/js/main.js"></script>

</body>
</html>