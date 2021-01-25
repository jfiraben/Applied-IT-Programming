<!--
Jordan Firaben
IT 207 - 002
assignment4/addcommentsdatabase.php File

I assumed that a duplicate posting would include one that is submitted with the same name as well as the email.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Adding Comments...</title>
		<link rel="stylesheet" href="lab4.css" type="text/css"/>
	</head>
	<body>
    <?php include '../header.php';?>
    <?php include '../menu.inc';?>
		<div id="content">
			<div id="lab4form">
				<?php
				$namecheck = false;
				$emailcheck = false;
				$commentcheck = false;

				if (!empty($_POST['name']))
				{
					$name = $_POST['name'];
					$namecheck = true;
				}

				if (!empty($_POST['email']))
				{
					$email = $_POST['email'];
					$emailcheck = true;
				}

				if (!empty($_POST['comment']))
				{
					$comment = $_POST['comment'];
					$commentcheck = true;
				}
				$dupname = false;
				$dupemail = false;
				$connection = @mysqli_connect("helios.ite.gmu.edu","jfiraben","fordoj") or die("Error, not able to connect to the mysql database");
				if(@mysqli_query($connection, "USE jfiraben"))
				{
					if($namecheck and $emailcheck and $commentcheck)
					{
						$result = mysqli_query($connection, "SELECT NAME, EMAIL FROM COMMENT");

						$row = mysqli_fetch_row($result);
						do
						{
							if($row[0] === $name)
							{
								$dupname = true;
								if($row[1] === $email)
								{
									$dupemail = true;
								}
							}
							$row = mysqli_fetch_row($result);
						} while($row);

						if(!$dupemail)
						{
							$sqlstring = "INSERT INTO COMMENT (NAME, EMAIL, COMMENT) VALUES ('$name', '$email', '$comment')";
							$queryresult = @mysqli_query($connection, $sqlstring) or die("<p>Error " . mysqli_error($connection)) . "</p>";
				?>
							<h1>Comments Added</h1>
							<hr/>
							<span><b>Name: </b></span><span><?php echo "<a href='mailto:" . $email . "'>" . $name . "</a>"; ?></span><br/>
							<span><b>Comments: </b></span><span><?php echo $comment; ?></span><br/>
							<h3>You have successfully added a contact!</h3>
				<?php
						}
						else
						{
				?>
							<h1>Comments Not Added</h1>
							<hr/>
							<p>One per person! You have already left comments for this posting.</p>
				<?php
						}
					}
					else
					{
				?>
						<h1>Comments Not Added</h1>
						<hr/>
						<p>Error! Must enter name, email and comment!</p>
				<?php
					}
				}
				mysqli_close($connection);
				?>
				<hr/>
				<a href="/~jfiraben/IT207/assignment4/indexdatabase.php">Someone Else Want to Comment?</a><br/>
				<a href="/~jfiraben/IT207/assignment4/postingcommentsdatabase.php">View Posting Comments</a>
			</div>
		</div>
    <?php include '../footer.inc';?>
	</body>
</html>
