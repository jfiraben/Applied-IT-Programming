<!--
Jordan Firaben
IT 207 - 002
Practicum 2
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Practicum 2 Quiz</title>
		<link rel="stylesheet" href="practicum2.css" type="text/css"/>
	</head>
	<body>
	<?php include '../header.php';?>
    <?php include '../menu.inc';?>
		<div id="content">
			<div class="prac2form">
				<div class="heading"><h3>Online Quiz</h3></div>
				<div>
				<?php
				$q1;
				$q2;
				$q3;
				
				$count=1;
				$question = fopen("question.txt", "rt");
				do
				{
					$curline = fgets($question);
					$curinfo = explode("$$$", $curline);
					if($curinfo[0] === "q1")
					{
						$q1 = $curinfo[1];
					}
					if($curinfo[0] === "q2")
					{
						$q2 = $curinfo[1];
					}
					if($curinfo[0] === "q3")
					{
						$q3 = $curinfo[1];
					}
					$count++;
				} while (!feof($question));
				fclose($question);
				
				/*
				
				Having trouble getting everything from answer.text
				
				*/
				
				
				
				$q1_a1;
				$q1_a2;
				$q1_a3;
				$q1_a4;
				$q2_a1;
				$q2_a2;
				$q2_a3;
				$q2_a4;
				$q3_a1;
				$q3_a2;
				$q3_a3;
				$q3_a4;
				
				$count=1;
				$answer = fopen("answer.txt", "rt");
				do
				{
					$curline = fgets($answer);
					$curinfo = explode("$$$", $curline);
					if ($curinfo[2] == "q1")
					{
						if($curinfo[0] == "a1")
						{
							$q1_a1 = $curinfo[1];
						}
						if($curinfo[0] == "a2")
						{
							$q1_a2 = $curinfo[1];
						}
						if($curinfo[0] == "a3")
						{
							$q1_a3 = $curinfo[1];
						}
						if($curinfo[0] == "a4")
						{
							$q1_a4 = $curinfo[1];
						}
					}
					if ($curinfo[2] == "q2")
					{
						if($curinfo[0] == "a1")
						{
							$q2_a1 = $curinfo[1];
						}
						if($curinfo[0] == "a2")
						{
							$q2_a2 = $curinfo[1];
						}
						if($curinfo[0] == "a3")
						{
							$q2_a3 = $curinfo[1];
						}
						if($curinfo[0] == "a4")
						{
							$q2_a4 = $curinfo[1];
						}
					}
					if ($curinfo[2] == "q3")
					{
						if($curinfo[0] == "a1")
						{
							$q3_a1 = $curinfo[1];
						}
						if($curinfo[0] == "a2")
						{
							$q3_a2 = $curinfo[1];
						}
						if($curinfo[0] == "a3")
						{
							$q3_a3 = $curinfo[1];
						}
						if($curinfo[0] == "a4")
						{
							$q3_a4 = $curinfo[1];
						}
					}
					
					$count++;
				} while (!feof($answer));
				fclose($answer);
				?>
					<form action="" method="post">
					<div>
						<p>
						<label for="id_q1">1. <?php echo $q1;?></label><br/>
						<!--Having trouble getting everything from answer.text-->
							<input type="radio" id="id_q1" name="q1" value="php">.php<br/>
							<input type="radio" id="id_q1" name="q1" value="html">.html<br/>
							<input type="radio" id="id_q1" name="q1" value="xhtml">.xhtml<br/>
							<input type="radio" id="id_q1" name="q1" value="ini">.ini<br/>
						</p>
						<br/>
						<p>
						<label for="id_q2">2. <?php echo $q2;?></label><br/>
						<!--Having trouble getting everything from answer.text-->
							<input type="radio" id="id_q2" name="q2" value="period">a period (.)<br/>
							<input type="radio" id="id_q2" name="q2" value="comma">a comma (,)<br/>
							<input type="radio" id="id_q2" name="q2" value="forward">a forward slash (/)<br/>
							<input type="radio" id="id_q2" name="q2" value="backward">a backward slash (\)<br/>
						</p>
						<br/>
						<p>
						<label for="id_q3">3. <?php echo $q3;?></label><br/>
						<!--Having trouble getting everything from answer.text-->
							<select id="id_q3" name="q3[]" multiple="multiple">
								<option value="||">||</option>
								<option value="**">**</option>
								<option value="#">#</option>
								<option value="//">//</option>
							</select>							
						</p>
						<br/>
						<input type="submit" name="Submit" value="Submit Quiz"/>
						<input type="reset" value="Reset"/><br/><br/>
					</div>
					</form>
				</div>
				<?php
				if(isset($_POST['Submit']))
				{
					$gradecolor;
					$correct_q1;
					$correct_q2;
					$correct_q3;
					$correct_q3_2;

					$count=1;
					$question = fopen("question.txt", "rt");
					do
					{
						$curline = fgets($question);
						$curinfo = explode("$$$", $curline);
						if($curinfo[0] === "q1")
						{
							$correct_q1 = trim($curinfo[2]);
						}
						if($curinfo[0] === "q2")
						{
							$correct_q2 = trim($curinfo[2]);
						}
						if($curinfo[0] === "q3")
						{
							$q3curinfo = explode(",", $curinfo[2]);
							$correct_q3 = trim($q3curinfo[0]);
							$correct_q3_2 = trim($q3curinfo[1]);
						}
						$count++;
					} while (!feof($question));
					fclose($question);
					
					
					
					if(!empty($_POST["q1"]))
					{
						$q1submit = trim($_POST["q1"]);
					}
					if(!empty($_POST["q2"]))
					{	
						$q2submit = trim($_POST["q2"]);
					}
					if(!empty($_POST["q3"]))
					{
						$q3submit = $_POST["q3"];
					}
					function calculategrade($q1submit, $q2submit, $q3submit, $correct_q1, $correct_q2, $correct_q3, $correct_q3_2)
					{
						$finalgrade = 0;

						if($q1submit == $correct_q1)
						{
							$finalgrade += (1/3) * 100;
						}
						if($q2submit == $correct_q2)
						{
							$finalgrade += (1/3) * 100;
						}
						for ($i=0; $i < count($q3submit); $i++)
						{
							if(trim($q3submit[$i]) == $correct_q3 or trim($q3submit[$i]) == $correct_q3_2)
							{
								$finalgrade += (1/6) * 100;
							}
						}
						return $finalgrade;
					}
					$finalgrade = calculategrade($q1submit, $q2submit, $q3submit, $correct_q1, $correct_q2, $correct_q3, $correct_q3_2);
					
					if($finalgrade >= 80)
					{
						$gradecolor = "green";
					}
					if($finalgrade > 60 and $finalgrade < 80)
					{
						$gradecolor = "yellow";
					}
					if($finalgrade > 50 and $finalgrade < 60)
					{
						$gradecolor = "red";
					}
					if($finalgrade <= 50)
					{
						$gradecolor = "black";
					}
					?>
					<div class="<?php echo $gradecolor;?>">
					<?php
					echo "You scored a " . $finalgrade . "% on the quiz";
					?>
					</div>
					<?php
				}
				?>
				
				
			</div>
			<p><a href="/~jfiraben/IT207/practicum2/index.php">Start Over</a>
			<?php
				echo "| Last Modified: " . date ("H:i F d, Y T", getlastmod()) . "</p>";
			?>
		</div>
	<?php include '../footer.inc';?>
	</body>
</html>
