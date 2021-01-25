<!--
Jordan Firaben
IT 207 - 002
Practicum 1
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Practicum 1 Shipping Cost</title>
		<link rel="stylesheet" href="practicum1.css" type="text/css"/>
	</head>
	<body>
    <?php include '../header.php';?>
    <?php include '../menu.inc';?>
		<div id="content">
			<div class="pracform">
				<div class="heading"><h3>Shipping Cost</h3></div>
				<div>
					<?php
						$weight = $_POST["weight"];
						$source = $_POST["source"];
						$destination = $_POST["destination"];
						
						if (empty($weight))
						{
							$weight = 0;
						}
					?>
					<p>For shipping a <?php echo $weight; ?> pound package</p>
					<p>From <?php echo $source;?></p>
					<p>To <?php echo $destination;?></p>
				</div>
				<?php 
					define ("LATOWASHMILE", 2670);
					define ("LATONYMILE", 2790);
					define ("WASHTOLAMILE", 2670);
					define ("WASHTONYMILE", 225);
					define ("NYTOLAMILE", 2790);
					define ("NYTOWASHMILE", 225);
					
					define ("LATOWASHCENT", 0.002);
					define ("LATONYCENT", 0.007);
					define ("WASHTOLACENT", 0.004);
					define ("WASHTONYCENT", 0.005);
					define ("NYTOLACENT", 0.006);
					define ("NYTOWASHCENT", 0.003);
					
					
					$totalcost;
					
					function calculatecost($cost, $mile, $weight)
					{
						$total = $cost * $mile * $weight;
						return $total;
					}
					
					setlocale(LC_MONETARY, 'en_US');
					if ($source == "Los Angeles" and $destination == "Washington")
					{
						$totalcost = calculatecost(LATOWASHCENT, LATOWASHMILE, $weight);
						//$totalcost = LATOWASHCENT * LATOWASHMILE * $weight;
					}
					elseif ($source == "Los Angeles" and $destination == "New York")
					{
						$totalcost = calculatecost(LATONYCENT, LATONYMILE, $weight);
						//$totalcost = LATONYCENT * LATONYMILE * $weight;
					}	
					elseif ($source == "Washington" and $destination == "Los Angeles")
					{
						$totalcost = calculatecost(WASHTOLACENT, WASHTOLAMILE, $weight);
						//$totalcost = WASHTOLACENT * WASHTOLAMILE * $weight;
					}	
					elseif ($source == "Washington" and $destination == "New York")
					{
						$totalcost = calculatecost(WASHTONYCENT, WASHTONYMILE, $weight);
						//$totalcost = WASHTONYCENT * WASHTONYMILE * $weight;
					}	
					elseif ($source == "New York" and $destination == "Los Angeles")
					{
						$totalcost = calculatecost(NYTOLACENT, NYTOLAMILE, $weight);
						//$totalcost = NYTOLACENT * NYTOLAMILE * $weight;
					}
					elseif ($source == "New York" and $destination == "Washington")
					{
						$totalcost = calculatecost(NYTOWASHCENT, NYTOWASHMILE, $weight);
						//$totalcost = NYTOWASHCENT * NYTOWASHMILE * $weight;
					}
					elseif ($source == $destination)
					{
						$totalcost = 0;
					}
					
				
				?>
				<div class="bottom">Total shipping charges: <?php echo '$' . money_format('%(#10n', $totalcost); ?></div>
				
			</div>
			<div>
			</div>
			<?php
				echo "Last Modified: " . date ("H:i F d, Y T |", getlastmod());
			?>
			<a href="/~jfiraben/IT207/practicum1/index.html">Return to form page</a>
		</div>
    <?php include '../footer.inc';?>
	</body>
</html>
