<!--
Jordan Firaben
IT 207 - 002
assignment4/index.php File
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>View Posting</title>
		<link rel="stylesheet" href="lab4.css" type="text/css"/>
	</head>
	<body>
    <?php include '../header.php';?>
    <?php include '../menu.inc';?>
		<div id="content">
			<div id="lab4form">
				<h2>Social Networking and Security</h2><br/>
				<p>One aspect of social networking that often gets overlooked is security. Facebook has a multitude of settings that allow the user to specify numerous security settings. After the recent news that broke about facebook, these settings are of the utmost importance.</p>
				<p>Source: DAY, GRAHAM. “SOCIAL NETWORKING SECURITY.” <em>Security in the Digital World</em>, IT Governance Publishing, Ely, Cambridgeshire, United Kingdom, 2017, pp. 177–185. <em>JSTOR</em>, www.jstor.org/stable/j.ctt1x07wx5.19.</p>
				<br/>
				<h1>Add Comments</h1>
				<hr/>
				<form action="addcomments.php" method="post" id="addcomments">
					<p><label for="id_name">Name: </label><input id="id_name" type="text" name="name" /><br/><br/>
					<label for="id_email">E-Mail: </label><input id="id_email" type="text" name="email" /><br/><br/>
					<label for="id_comment">Comments: </label><textarea rows="4" cols="50" name="comment"></textarea><br/><br/></p>
					<div class="buttons">
						<p><input type="submit" value="Sign"/>
						<input type="reset" value="Reset Form"/></p>
					</div>
				</form>
				<hr/>
				<a href="/~jfiraben/IT207/assignment4/postingcomments.php">View Posting Comments</a>
				<br/>
				<h4>OR</h4>
				<a href="/~jfiraben/IT207/assignment4/indexdatabase.php">Add comments using database</a>
			</div>
		</div>
    <?php include '../footer.inc';?>
	</body>
</html>
