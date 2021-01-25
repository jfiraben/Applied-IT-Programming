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
			<p><label for="id_earnpart">Earned: </label><input id="id_earnpart" type="text" name="earnedParticipation" />
			<label for="id_maxpart">Max: </label><input id="id_maxpart" type="text" name="maxParticipation" />
			<label for="id_weighpart">Weight (percentage): </label><input id="id_weighpart" type="text" name="weightParticipation" /></p>
			<h3>Quizzes</h3>
			<p><label for="id_earnquiz">Earned: </label><input id="id_earnquiz" type="text" name="earnedQuiz" />
			<label for="id_maxquiz">Max: </label><input id="id_maxquiz" type="text" name="maxQuiz" />
			<label for="id_weighquiz">Weight (percentage): </label><input id="id_weighquiz" type="text" name="weightQuiz" /></p>
			<h3>Lab Assignments</h3>
			<p><label for="id_earnlab">Earned: </label><input id="id_earnlab" type="text" name="earnedLab" />
			<label for="id_maxlab">Max: </label><input id="id_maxlab" type="text" name="maxLab" />
			<label for="id_weighlab">Weight (percentage): </label><input id="id_weighlab" type="text" name="weightLab" /></p>
			<h3>Practica</h3>
			<p><label for="id_earnprac">Earned: </label><input id="id_earnprac" type="text" name="earnedPracticum" />
			<label for="id_maxprac">Max: </label><input id="id_maxprac" type="text" name="maxPracticum" />
			<label for="id_weighprac">Weight (percentage): </label><input id="id_weighprac" type="text" name="weightPracticum" /></p>
			<br/><br/>
			<p><input type="submit"/></p>
			</div>
			</form>
		</div>
    <?php include '../footer.inc';?>
	</body>
</html>
