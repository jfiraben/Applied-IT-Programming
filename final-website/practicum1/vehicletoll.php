<!--
Jordan Firaben
IT 207 - 002
Practicum 1
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Practicum 1 Cost of Package Delivery</title>
		<link rel="stylesheet" href="practicum1.css" type="text/css"/>
	</head>
	<body>
    <?php include '../header.php';?>
    <?php include '../menu.inc';?>
		<div id="content">
			<div class="pracform">
				<?php 
					$bus = $_POST["buses"];
					$van = $_POST["vans"];
					$car = $_POST["cars"];
					$day = $_POST["days"];
				?>
				<div class="heading"><h3>Vehicle Toll</h3></div>
				<div>
					<p>For paying toll on <?php echo $day; ?></p>
					<?php
						if ($day == "Monday" or $day == "Tuesday" or $day == "Wednesday" or $day == "Thursday" or $day == "Friday")
						{
							$costbus = $bus * 5;
							$costvan = $van * 3;
							$costcar = $car * 2;
						}
						else
						{
							$costbus = $bus * 9;
							$costvan = $van * 5;
							$costcar = $car * 4;
						}
						if (empty($bus))
						{
							$bus = 0;
						}
						if (empty($van))
						{
							$van = 0;
						}
						if (empty($car))
						{
							$car = 0;
						}
					?>
					<p>
					<?php echo '$' . money_format('%(#10n', $costbus) ?>
					for 
					<?php echo $bus; ?>
					bus(es)
					</p>
					<span class="yellow">
					<?php
						for ($x=0;$x < $bus;$x++)
						{
							echo 'o';
						}
					?>
					</span>
					<p>
					<?php echo '$' . money_format('%(#10n', $costvan) ?>
					for 
					<?php echo $van; ?>
					van(s)
					</p>
					<span class="yellow">
					<?php
						for ($x=0;$x < $van;$x++)
						{
							echo 'o';
						}
					?>
					</span>
					<p>
					<?php echo '$' . money_format('%(#10n', $costcar) ?>
					for 
					<?php echo $car; ?>
					car(s)<br/>
					<span class="yellow">
					<?php
						for ($x=0;$x < $car;$x++)
						{
							echo 'o';
						}
					?>
					</span>
					</p>
					<?php $totalcost = $costbus + $costvan + $costcar;?>
				</div>
				<div class="bottom">Total Toll: <?php echo '$' . money_format('%(#10n', $totalcost); ?></div>
			</div>
			<div>
				<?php
					echo "Last Modified: " . date ("H:i F d, Y T |", getlastmod());
				?>
				<a href="/~jfiraben/IT207/practicum1/index.html">Return to form page</a>
			</div>
		</div>
    <?php include '../footer.inc';?>
	</body>
</html>
