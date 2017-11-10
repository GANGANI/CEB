<html>
<head>
    <title>MeterReader</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../CSS/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../CSS/assets/css/main.css" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!--[if lte IE 8]><link rel="stylesheet" href="../CSS/assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="../CSS/assets/css/ie9.css" /><![endif]-->

</head>
<body class="landing">

<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2>Request a New Electricity Connection</h2>
            <p>Fill the form accordingly to request a new electricity connection to your house,Bussiness place and etc.</p>
        </header>
</section>
<?php
include('database.php');
$Database=new Database;
$result=$Database->connect();
$output=$Database->select("branch","branch_name");
?>

<section>
                    <form action="enter_request.php" method="post" id="myForm.<?=$i?>">

                        <h3><br>Enter the following Details about the Applicant of the connection</h3>
                        <label for="name">Name of the Applicant: </label>
                            <input type="text" name="name" id="name" value="" placeholder="Applicant's Name" />
                        <label for="nic">National Identity Card No:</label>
                            <input type="text" name="nic" id="nic" value="" placeholder="NIC" />
                        <label for="cont_address">Contact Address of the Applicant:</label>
                            <input type="text" name="cont_address" id="cont_address" value="" placeholder="Contact Address of the Applicant" />
                        <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email" />
                        <label for="telephone">Telephone No:</label>
                            <input type="text" name="telephone" id="telephone" value="" placeholder="Telephone No" />


                        <h3><br>Enter the following Details related to New Connection</h3>

                        <label for="Category">Category of the Requesting Connection:</label>
                            <div class="12u$">
                                <div class="select-wrapper">
                                    <select name="Category" id="category">
                                        <option value="">- Category -</option>
                                        <option value="House">House</option>
                                        <option value="Hotel">Hotel</option>
                                        <option value="Religious">Religious</option>
                                        <option value="Industrial">Industrial</option>
                                        <option value="Shops">Shops</option>
                                    </select>
                                </div>
                            </div>

                        <label for="loc_address">Address of the Location where the Connection is Required:</label>
                            <input type="text" name="loc_address" id="loc_address" value="" placeholder="Address of the Location" />

                        <label for="branch">Reigional branch of the above Location:</label>
                            <div class="12u$">
                                <div class="select-wrapper">
                                    <select name="branch" id="branch">
                                        <option value="">- Reigional branch-</option>
                                        <?php
                                        $numResults = count($output);
                                        for($i = 0; $i < $numResults; $i++) {?>
                                            <option value="<?=$output[$i]["branch_name"]?>"><?php echo $output[$i]["branch_name"];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                        <label for="neighbour_conn_id">Electricity Connection Id of the neighbouring house:</label>
                            <input type="text" name="neighbour_conn_id" id="neighbour_conn_id" value="" placeholder="Electricity Connection Id of the neighbouring house" />

                        <label for="single">Indicate the preffered phase of the connection :</label>
                            <input type="radio" id="single" name="phase" value="single" checked>
                            <label for="single">Single Phase</label>
                            <input type="radio" id="3phase-30" name="phase" value="3phase-30">
                            <label for="3phase-30">Three Phase-30A</label>
                            <input type="radio" id="3phase-60" name="phase" value="3phase-60">
                            <label for="3phase-60">Three Phase-60A</label>

                        <div class="6u 12u$(small)">
                            <input type="checkbox" id="copy" name="copy">
                            <label for="copy">Email me a copy of this Request</label>
                        </div>

                            <br><input type="submit" name="submitbtn"  value="Submit"/>
                            <input type="reset" name="resetbtn"  value="Reset"/>

                    </form>

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
<script src="../CSS/assets/js/jquery.min.js"></script>
<script src="../CSS/assets/js/skel.min.js"></script>
<script src="../CSS/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="../CSS/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../CSS/assets/js/main.js"></script>
<script>
    $("submit").click(function(){
        alert("The paragraph was clicked.");
    });
</script>

</body>
</html>