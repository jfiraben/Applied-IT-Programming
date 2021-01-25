<!--
Jordan Firaben
IT 207 - 002
assignment4/postingcomments.php File


Having a hard time with having the numbers and the name/comment all on the same line.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Posting Comments</title>
		<link rel="stylesheet" href="lab4.css" type="text/css"/>
	</head>
	<body>
    <?php include '../header.php';?>
    <?php include '../menu.inc';?>
		<div id="content">
			<div id="lab4form">
				<form action="" method="post">
	      <div><h2>Social Networking and Security</h2><br/>
	      <p>One aspect of social networking that often gets overlooked is security. Facebook has a multitude of settings that allow the user to specify numerous security settings. After the recent news that broke about facebook, these settings are of the utmost importance.</p>
	      <p>Source: DAY, GRAHAM. “SOCIAL NETWORKING SECURITY.” <em>Security in the Digital World</em>, IT Governance Publishing, Ely, Cambridgeshire, United Kingdom, 2017, pp. 177–185. <em>JSTOR</em>, www.jstor.org/stable/j.ctt1x07wx5.19.</p>
	      <br/>
	      <h1>Comments</h1>
	      <hr/></div>
				<?php
				$deletecheck = false;
				$sortcheck = false;
					if(!empty($_POST['delete']))
					{
						if(isset($_GET['sort']))
						{
							$sort = $_GET['sort'];
							if($sort == 'A')
							{
								$deletenum = $_POST['delete'] - 1;
								$subname;
								$subcomments;
								$comments = file("comments.txt");
								natcasesort($comments);
								$comments = array_values($comments);
								unset($comments[$deletenum]);
								$comments = array_values($comments);
								$updatecomments = false;
								$handle = fopen("comments.txt", "w+t");
								flock($handle, LOCK_EX);
								for ($i=0; $i < count($comments); $i++)
								{
									if(fwrite($handle, $comments[$i]) > 0)
									{
										$updatecomments = true;
									}
								}
								flock($handle, LOCK_UN);
								fclose($handle);
								if ($updatecomments == false)
								{
									echo "<h3>There was an error deleting your comment!</h3>";
								}
								$subname;
								$subcomment;

								$comments = file("comments.txt");
								natcasesort($comments);
								$comments = array_values($comments);
								for ($i=0; $i < count($comments); $i++)
								{
									$curline = $comments[$i];
									$curinfo = explode("$$$", $curline);

									$subname = $curinfo[0];
									$subemail = $curinfo[1];
									$subcomment = $curinfo[2];
						?>
								<span class="numbers"><?php echo $i + 1 . ".";?></span>
								<span class="multiline"><?php echo "Name: <a href='" . $subemail . "'>" . $subname . "</a>";?><br/>
							<?php echo "Comments: " . $subcomment;?></span>
								<hr/>
							<?php
								}
							}
							if($sort == 'Z')
							{
								$deletenum = $_POST['delete'] - 1;
								$subname;
								$subcomments;
								$comments = file("comments.txt");
								natcasesort($comments);
								$comments = array_reverse($comments);
								unset($comments[$deletenum]);
								$comments = array_values($comments);
								$updatecomments = false;
								$handle = fopen("comments.txt", "w+t");
								flock($handle, LOCK_EX);
								for ($i=0; $i < count($comments); $i++)
								{
									if(fwrite($handle, $comments[$i]) > 0)
									{
										$updatecomments = true;
									}
								}
								flock($handle, LOCK_UN);
								fclose($handle);
								if ($updatecomments == false)
								{
									echo "<h3>There was an error deleting your comment!</h3>";
								}
								$subname;
								$subcomment;

								$comments = file("comments.txt");
								natcasesort($comments);
								$comments = array_reverse($comments);
								for ($i=0; $i < count($comments); $i++)
								{
									$curline = $comments[$i];
									$curinfo = explode("$$$", $curline);

									$subname = $curinfo[0];
									$subemail = $curinfo[1];
									$subcomment = $curinfo[2];
							?>
								<span class="numbers"><?php echo $i + 1 . ".";?></span>
								<span class="multiline"><?php echo "Name: <a href='" . $subemail . "'>" . $subname . "</a>";?><br/>
							<?php echo "Comments: " . $subcomment;?></span>
								<hr/>
							<?php
								}
							}
						}
						else
						{
							$deletenum = $_POST['delete'] - 1;
							$subname;
							$subcomment;
							$comments = file("comments.txt");
							unset($comments[$deletenum]);
							$comments = array_values($comments);
							$updatecomments = false;
							$handle = fopen("comments.txt", "w+t");
							flock($handle, LOCK_EX);
							for ($i=0; $i < count($comments); $i++)
							{
								if(fwrite($handle, $comments[$i]) > 0)
								{
									$updatecomments = true;
								}
							}
							flock($handle, LOCK_UN);
							fclose($handle);
							if ($updatecomments == false)
							{
								echo "<h3>There was an error deleting your comment!</h3>";
							}
							$subname;
							$subcomment;
							$comments = file("comments.txt");
							for ($i=0; $i < count($comments); $i++)
							{
								$curline = $comments[$i];
								$curinfo = explode("$$$", $curline);

								$subname = $curinfo[0];
								$subemail = $curinfo[1];
								$subcomment = $curinfo[2];
						?>
							<span class="numbers"><?php echo $i + 1 . ".";?></span>
							<span class="multiline"><?php echo "Name: <a href='" . $subemail . "'>" . $subname . "</a>";?><br/>
						<?php echo "Comments: " . $subcomment;?></span>
							<hr/>
						<?php
							}
						}
					}
					elseif(isset($_GET['sort']))
					{
						$sort = $_GET['sort'];
						if($sort == 'A')
						{
							$subname;
							$subcomment;

							$comments = file("comments.txt");
							natcasesort($comments);
							$comments = array_values($comments);
							for ($i=0; $i < count($comments); $i++)
							{
								$curline = $comments[$i];
								$curinfo = explode("$$$", $curline);

								$subname = $curinfo[0];
								$subemail = $curinfo[1];
								$subcomment = $curinfo[2];
					?>
							<span class="numbers"><?php echo $i + 1 . ".";?></span>
							<span class="multiline"><?php echo "Name: <a href='" . $subemail . "'>" . $subname . "</a>";?><br/>
						<?php echo "Comments: " . $subcomment;?></span>
							<hr/>
						<?php
							}
						}
						if($sort == 'Z')
						{
							$subname;
							$subcomment;

							$comments = file("comments.txt");
							natcasesort($comments);
							$comments = array_reverse($comments);
							for ($i=0; $i < count($comments); $i++)
							{
								$curline = $comments[$i];
								$curinfo = explode("$$$", $curline);

								$subname = $curinfo[0];
								$subemail = $curinfo[1];
								$subcomment = $curinfo[2];
						?>
							<span class="numbers"><?php echo $i + 1 . ".";?></span>
							<span class="multiline"><?php echo "Name: <a href='" . $subemail . "'>" . $subname . "</a>";?><br/>
						<?php echo "Comments: " . $subcomment;?></span>
							<hr/>
						<?php
							}
						}
					}
					else
					{
						$subname;
						$subcomment;

						$comments = file("comments.txt");
						for ($i=0; $i < count($comments); $i++)
						{
							$curline = $comments[$i];
							$curinfo = explode("$$$", $curline);

							$subname = $curinfo[0];
							$subemail = $curinfo[1];
							$subemail = $curinfo[1];
							$subcomment = $curinfo[2];
					?>
						<span class="numbers"><?php echo $i + 1 . ".";?></span>
						<span class="multiline"><?php echo "Name: <a href='" . $subemail . "'>" . $subname . "</a>";?><br/>
					<?php echo "Comments: " . $subcomment;?></span>
						<hr/>
					<?php
						}
					}
				?>
				<div>
				<a href="/~jfiraben/IT207/assignment4/index.php">Add New Comment</a><br/>
				<a href="/~jfiraben/IT207/assignment4/postingcomments.php?sort=A">Sort Comments A-Z (by name)</a><br/>
				<a href="/~jfiraben/IT207/assignment4/postingcomments.php?sort=Z">Sort Comments Z-A (by name)</a><br/><br/></div>
					<div><p><label for="id_delete">Delete Comment Number: </label><input id="id_delete" type="text" name="delete" size="4"/>
						<input type="submit" value="Delete"/>
						<br/>
					</p></div>
				</form>
			</div>
		</div>
    <?php include '../footer.inc';?>
	</body>
</html>
