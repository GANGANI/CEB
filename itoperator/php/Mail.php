<?php
include 'response_handler.php';
?>
<html>
<head>
    <title>DROP MESSAGES</title>
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
        <li><a href="Mail.php">DROP MAIL</a></li>
    </ul>

</nav>

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2>INFORM USER</h2>
            <p>We Light Up Your Future</p>
        </header>



        <!-- Form -->
        <section>
            <form method="post" action="#">
                <div class="row uniform 50%">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="name" id="name" value="<?php echo $name?>" placeholder="Name"  />
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input type="email" name="email" id="email" value="<?php echo $email?>" placeholder="Email" />
                    </div>
                    <div class="6u 12u$(small)">
                        <input type="checkbox" id="copy" name="copy">
                        <label for="copy">Email me a copy of this message</label>
                    </div>
                    <div class="12u$">
                        <textarea name="message" id="message" placeholder="Enter your message" rows="6" ><?php echo $message?></textarea>
                    </div>
                    <div class="12u$">
                        <ul class="actions">
                            <button type="submit" class="btn tf-btn btn-default" name="but" value=>SEND</button>
                            <button type="submit" class="btn tf-btn btn-default" name="but" value=>RESET</button>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
    </div>


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

                <li>Design by: <a href="">MIND LABS GROUP</a>.</li>
            </ul>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="../style/assets3/js/jquery.min.js"></script>
    <script src="../style/assets3/js/skel.min.js"></script>
    <script src="../style/assets3/js/util.js"></script>
    <!--[if lte IE 8]><script src="../style/assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="../style/assets3/js/main.js"></script>
</section>

</body>
</html>