<!--
Jordan Firaben
IT 207 - 002
assignment1/assignment1.php File
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
		<div id="lab1form">
			<form action="finalgrade.php" method="post">
			<div>
			<h3>Participation</h3>
			<p>Earned: <input type="text" name="earnedParticipation" />
			Max: <input type="text" name="maxParticipation" />
			Weight (percentage): <input type="text" name="weightParticipation" /></p>
			<h3>Quizzes</h3>
			<p>Earned: <input type="text" name="earnedQuiz" />
			Max: <input type="text" name="maxQuiz" />
			Weight (percentage): <input type="text" name="weightQuiz" /></p>
			<h3>Lab Assignments</h3>
			<p>Earned: <input type="text" name="earnedLab" />
			Max: <input type="text" name="maxLab" />
			Weight (percentage): <input type="text" name="weightLab" /></p>
			<h3>Practica</h3>
			<p>Earned: <input type="text" name="earnedPracticum" />
			Max: <input type="text" name="maxPracticum" />
			Weight (percentage): <input type="text" name="weightPracticum" /></p>
			<br/><br/>
			<p><input type="submit"/></p>
			</div>
			</form>
		</div>
    <?php include '../footer.inc';?>
	</body>
</html>
