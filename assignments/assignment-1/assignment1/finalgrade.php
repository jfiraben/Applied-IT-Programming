<!--
Jordan Firaben
IT 207 - 002
assignment1/finalgrade.php File
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Lab Assignment 1</title>
		<link rel="stylesheet" href="lab1.css" type="text/css"/>
	</head>
	<body>
    <?php include '../header.php';?>
    <?php include '../menu.inc';?>	
    <?php include '../footer.inc';?>
		<div id="lab1form">
			<?php
				$ePart = $_POST["earnedParticipation"];
				$mPart = $_POST["maxParticipation"];
				$wPart = $_POST["weightParticipation"];
				$eQuiz = $_POST["earnedQuiz"];
				$mQuiz = $_POST["maxQuiz"];
				$wQuiz = $_POST["weightQuiz"];
				$eLab = $_POST["earnedLab"];
				$mLab = $_POST["maxLab"];
				$wLab = $_POST["weightLab"];
				$ePrac = $_POST["earnedPracticum"];
				$mPrac = $_POST["maxPracticum"];
				$wPrac = $_POST["weightPracticum"];
				$maxScore = 100;
				$lowScore = 1;
				$gradeAPlus = 95;
				$gradeA = 90;
				$gradeBPlus = 85;
				$gradeB = 80;
				$gradeCPlus = 75;
				$gradeC = 70;
				$gradeD = 60;
				$gradeF = 0;

				function calcPercent ($earn,$max)
				{
					$total1 = $earn / $max;
					return $total1;
				}
				function finalPercent ($calc,$weight)
				{
					$total2= $calc * $weight;
					return $total2;
				}
				
				$wPartDec = $wPart / $maxScore;
				$wQuizDec = $wQuiz / $maxScore;
				$wLabDec = $wLab / $maxScore;
				$wPracDec = $wPrac / $maxScore;

				is_numeric($ePart) ?: exit("<div class='errorLab1'>You must enter a number for Earned Participation!</div>");
				is_numeric($mPart) ?: exit("<div class='errorLab1'>You must enter a number for Max Participation!</div>");
				is_numeric($wPart) ?: exit("<div class='errorLab1'>You must enter a number for Weight Participation!</div>");
				is_numeric($eQuiz) ?: exit("<div class='errorLab1'>You must enter a number for Earned Quiz!</div>");
				is_numeric($mQuiz) ?: exit("<div class='errorLab1'>You must enter a number for Max Quiz!</div>");
				is_numeric($wQuiz) ?: exit("<div class='errorLab1'>You must enter a number for Weight Quiz!</div>");
				is_numeric($eLab) ?: exit("<div class='errorLab1'>You must enter a number for Earned Lab!</div>");
				is_numeric($mLab) ?: exit("<div class='errorLab1'>You must enter a number for Max Lab!</div>");
				is_numeric($wLab) ?: exit("<div class='errorLab1'>You must enter a number for Weight Lab!</div>");
				is_numeric($ePrac) ?: exit("<div class='errorLab1'>You must enter a number for Earned Practica!</div>");
				is_numeric($mPrac) ?: exit("<div class='errorLab1'>You must enter a number for Max Practica!</div>");
				is_numeric($wPrac) ?: exit("<div class='errorLab1'>You must enter a number for Weight Practica!</div>");
				
				$totalPart = ($mPart == 0) ? exit("<div class='errorLab1'>Max Participation must be higher than 0.</div>") : calcPercent($ePart,$mPart);
				$totalQuiz = ($mQuiz == 0) ? exit("<div class='errorLab1'>Max Quiz must be higher than 0.</div>") : calcPercent($eQuiz,$mQuiz);
				$totalLab = ($mLab == 0) ? exit("<div class='errorLab1'>Max Lab must be higher than 0.</div>") : calcPercent($eLab,$mLab);
				$totalPrac = ($mPrac == 0) ? exit("<div class='errorLab1'>Max Practica must be higher than 0.</div>") : calcPercent($ePrac,$mPrac);

				$finalPart = $totalPart * $maxScore;
				$finalQuiz = $totalQuiz * $maxScore;
				$finalLab = $totalLab * $maxScore;
				$finalPrac = $totalPrac * $maxScore;

				$totalGrade = finalPercent($totalPart,$wPartDec) + finalPercent($totalQuiz,$wQuizDec) + finalPercent($totalLab,$wLabDec) + finalPercent($totalPrac,$wPracDec);
				$totalGrade *= $maxScore;

				$totalWeight = $wPart + $wQuiz + $wLab + $wPrac;
				
				
				$result = ($totalWeight != $maxScore) ? exit("<div class='errorLab1'>You must enter a total number of weight equaling 100</div>") :
				($wPart > $maxScore) ? exit("<div class='errorLab1'>The weight % for Participation must not be more than 100</div>") :
				($wQuiz > $maxScore) ? exit("<div class='errorLab1'>The weight % for Quiz must not be more than 100</div>") :
				($wLab > $maxScore) ? exit("<div class='errorLab1'>The weight % for Lab Assignments must not be more than 100</div>") :
				($wPrac > $maxScore) ? exit("<div class='errorLab1'>The weight % for Practica must not be more than 100</div>") :
				($mPart < $lowScore) ? exit("<div class='errorLab1'>The max for Participation must be higher than 0.</div>") :
				($mQuiz < $lowScore) ? exit("<div class='errorLab1'>The max for Quiz must be higher than 0.</div>") :
				($mLab < $lowScore) ? exit("<div class='errorLab1'>The max for Lab must be higher than 0.</div>") :
				($mPrac < $lowScore) ? exit("<div class='errorLab1'>The max for Practica must be higher than 0.</div>") : "You earned a " . $finalPart . "% for Participation, with a weighted value of " . $wPart . "%<br/><br/>You earned a " . $finalQuiz . "% for Quiz, with a weighted value of " . $wQuiz . "%<br/><br/>You earned a " . $finalLab . "% for Lab, with a weighted value of " . $wLab . "%<br/><br/>You earned a " . $finalPrac . "% for Practica, with a weighted value of " . $wPrac . "%<br/><br/><div class = 'boldLab1'>Your final grade is: " . $totalGrade . "%, ";
				
				$result2 = $totalGrade >= $gradeAPlus ? "which is an A+." : (
					$totalGrade >= $gradeA && $totalGrade < $gradeAPlus ? "which is an A." : (
						$totalGrade >= $gradeBPlus && $totalGrade < $gradeA ? "which is a B+." : (
							$totalGrade >= $gradeB && $totalGrade < $gradeBPlus ? "which is a B." : (
								$totalGrade >= $gradeCPlus && $totalGrade < $gradeB ? "which is a C+." : (
									$totalGrade >= $gradeC && $totalGrade < $gradeCPlus ? "which is a C." : (
										$totalGrade >= $gradeD && $totalGrade < $gradeC ? "which is a D." : "which is a F.</div>"
									)	
								)		
							)			
						)				
					)					
				);
				
				
				echo $result;
				echo $result2;
				
				/* 
				************************
				****Old IF/ELSE Code****
				************************
				if ($totalWeight != $maxScore)
				{
					echo "<div class='errorLab1'>You must enter a total number of weight equaling 100</div>";
				}
				elseif ($wPart > $maxScore)
				{
					echo "<div class='errorLab1'>The weight % for Participation must not be more than 100</div>";
				}
				elseif ($wQuiz > $maxScore)
				{
					echo "<div class='errorLab1'>The weight % for Quiz must not be more than 100</div>";
				}
				elseif ($wLab > $maxScore)
				{
					echo "<div class='errorLab1'>The weight % for Lab Assignments must not be more than 100</div>";
				}
				elseif ($wPrac > $maxScore)
				{
					echo "<div class='errorLab1'>The weight % for Practica must not be more than 100</div>";
				}
				elseif ($mPart < $lowScore)
				{
					echo "<div class='errorLab1'>The max for Participation must be higher than 0.</div>";
				}
				elseif ($mQuiz < $lowScore)
				{
					echo "<div class='errorLab1'>The max for Quiz must be higher than 0.</div>";
				}
				elseif ($mLab < $lowScore)
				{
					echo "<div class='errorLab1'>The max for Lab must be higher than 0.</div>";
				}
				elseif ($mPrac < $lowScore)
				{
					echo "<div class='errorLab1'>The max for Practica must be higher than 0.</div>";
				}
				else
				{
					echo "You earned a " . $finalPart . "% for Participation, with a weighted value of " . $wPart . "%<br/><br/>";
					echo "You earned a " . $finalQuiz . "% for Quiz, with a weighted value of " . $wQuiz . "%<br/><br/>";
					echo "You earned a " . $finalLab . "% for Lab, with a weighted value of " . $wLab . "%<br/><br/>";
					echo "You earned a " . $finalPrac . "% for Practica, with a weighted value of " . $wPrac . "%<br/><br/>";
					echo "<div class = 'boldLab1'>Your final grade is: " . $totalGrade . "%, ";
					if ($totalGrade >= $gradeAPlus)
					{
						echo "which is an A+.";
					}
					elseif ($totalGrade >= $gradeA && $totalGrade < $gradeAPlus)
					{
						echo "which is an A.";
					}
					elseif ($totalGrade >= $gradeBPlus && $totalGrade < $gradeA)
					{
						echo "which is a B+.";
					}
					elseif ($totalGrade >= $gradeB && $totalGrade < $gradeBPlus)
					{
						echo "which is a B.";
					}
					elseif ($totalGrade >= $gradeCPlus && $totalGrade < $gradeB)
					{
						echo "which is a C+.";
					}
					elseif ($totalGrade >= $gradeC && $totalGrade < $gradeCPlus)
					{
						echo "which is a C.";
					}
					elseif ($totalGrade >= $gradeD && $totalGrade < $gradeC)
					{
						echo "which is a D.";
					}
					elseif ($totalGrade >= $gradeF && $totalGrade < $gradeD)
					{
						echo "which is a F.</div>";
					}
				} */
			?>
		</div>
	</body>
</html>
