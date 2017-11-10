
<html>
	<head>
		<title>MeterReader</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
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
                    <li><a href="../editdetails/editdetail_gui.php">EDIT DETAILS</a></li>
                    <li><a href="../Common/Log_out.php">Log out</a></li>
				</ul>
			</nav>
        <!-- Banner -->
        <section id="banner">
            <?php include('get_connections.php'); ?>
            <h3><?php echo "Meter Reader : ".$meter_reader_data['0']["name"];?></h3>
            <h3><?php echo "ID : ".$meter_reader_data['0']["meter_reader_id"];?></h3>
            <h4><?php echo "Branch : ".$meter_reader_data['0']["branch_name"];?></h4>

        </section>
        <!-- Table -->
        <section>
            <h2>Add Readings</h2>
            <h4><?php echo "Month :".date('F Y'); ?></h4>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th></th>
                        <th>Connection ID</th>
                        <th>Customer Name</th>
                        <th>Customer NIC</th>
                        <th>Location Address</th>
                        <th>Monthly Reading</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $numResults = count($output);
                    if($numResults ==0)?>
                        <h3>No More Connections to Read for this Month</h3>
                    <?php
                    for ($i = 0; $i < $numResults; $i++) {
                        ?>
                        <tr>
                            <td><?php echo $i + 1; ?></td>
                            <td><?php echo $output[$i]["connection_id"]; ?></td>
                            <td><?php echo $output[$i]["name"]; ?></td>
                            <td><?php echo $output[$i]["NIC_no"]; ?></td>
                            <td><?php echo $output[$i]["location_address"]; ?></td>


                            <form action="add_reading.php" method="post" id="myForm.<?= $i ?>">
                                <td>
                                    <input type="number" name="reading" id="reading.<?= $i ?>" min="000000"
                                           max="999999" maxlength="6" size="6" required/>
                                </td>
                                <td>
                                    <input type="hidden" name="meter_reader_id"
                                           value="<?= $meter_reader_data["0"]["meter_reader_id"] ?>">
                                    <input type="hidden" name="connection_id"
                                           value="<?= $output[$i]["connection_id"] ?>">
                                    <input type="submit" name="<?= $i ?>" value="Enter Reading"/>
                                </td>
                            </form>
                            <script>
                                var el = document.getElementById('myForm.<?=$i?>');
                                el.addEventListener('submit', function () {
                                    return confirm('Are you sure you want to enter this reading?');
                                }, false);
                            </script>


                        </tr>
                        <?php
                }    ?>
                </tbody>

            </table>
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
        <script>
                $("submit").click(function(){
        alert("The paragraph was clicked.");
        });
        </script>

	</body>
</html>