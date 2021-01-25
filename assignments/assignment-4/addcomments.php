<!--
Jordan Firaben
IT 207 - 002
assignment4/addcomments.php File

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

				$comments = file("comments.txt");
				for ($i=0; $i < count($comments); $i++)
				{
					$curline = $comments[$i];
					$curinfo = explode("$$$", $curline);

					if($_POST['name'] == $curinfo[0])
					{
						$dupname = true;
						if($_POST['email'] === $curinfo[1])
						{
							$dupemail = true;
						}
					}
				}

				if ($dupemail)
				{
					?>
						<h1>Comments Not Added</h1>
						<hr/>
						<p>One per person! You have already left comments for this posting.</p>
					<?php
				}
				elseif ($namecheck and $emailcheck and $commentcheck)
				{
				?>
						<h1>Comments Added</h1>
						<hr/>
						<span><b>Name: </b></span><span><?php echo "<a href='mailto:" . $email . "'>" . $name . "</a>"; ?></span><br/>
						<span><b>Comments: </b></span><span><?php echo $comment; ?></span><br/>
				<?php
						$handle = fopen("comments.txt", "at");
						flock($handle, LOCK_EX);
						$output = $_POST['name'] . "$$$" . $_POST['email'] . "$$$" . $_POST['comment'] . "\n";
						if(fwrite($handle, $output) > 0)
						{
							echo "<h3>You have successfully added a contact!</h3>";
						}
						flock($handle, LOCK_UN);
						fclose($handle);
					}
					else
					{
					?>
						<h1>Comments Not Added</h1>
						<hr/>
						<p>Error! Must enter name, email and comment!</p>
					<?php
					}
				?>
				<hr/>
				<a href="/~jfiraben/IT207/assignment4/index.php">Someone Else Want to Comment?</a><br/>
				<a href="/~jfiraben/IT207/assignment4/postingcomments.php">View Posting Comments</a>
			</div>
		</div>
    <?php include '../footer.inc';?>
	</body>
</html>
