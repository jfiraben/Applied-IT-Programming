<!--
Jordan Firaben
IT 207 - 002
assignment3/index.php File
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Online Contacts Directory</title>
		<link rel="stylesheet" href="lab3.css" type="text/css"/>
	</head>
	<body>
    <?php include '../header.php';?>
    <?php include '../menu.inc';?>
		<div id="content">
			<div id="lab3form">
				<h1>Online Contacts Directory</h1>
				<h2>Search for a Contact</h2></br>
				<form action="updatecontacts.php" method="post">
					<p><label for="id_fname">First Name: </label><input id="id_fname" type="text" name="fname" /></br></br>
					<p><label for="id_lname">Last Name: </label><input id="id_lname" type="text" name="lname" /></br></br>
					<div class="buttons">
						<p><input type="submit" value="Search"/></p>
					</div>
				</form>
			<hr>
			<a href="/~jfiraben/IT207/assignment3/addcontacts.php">Add New Contact Entry</a>				
			</div>
		</div>
    <?php include '../footer.inc';?>
	</body>
</html>
