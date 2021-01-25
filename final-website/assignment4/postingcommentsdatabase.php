<!--
Jordan Firaben
IT 207 - 002
assignment4/postingcommentsdatabase.php File


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
						$deletenum = $_POST['delete'];
						if (isset($_POST["deleteid"]))
						{
							$deleteid = $_POST["deleteid"];

							if(isset($_GET['sort']))
							{
								$sort = $_GET['sort'];
								if($sort == 'A')
								{
									$subdeleteid;
									for($i = 0; $i < count($deleteid); $i++)
									{
										$curline = explode("$", $deleteid[$i]);
										if($curline[0] == $deletenum)
										{
											$subdeleteid = $curline[1];
										}
									}
									$connection = @mysqli_connect("helios.ite.gmu.edu","jfiraben","fordoj") or die("Error, not able to connect to the mysql database");
									if(@mysqli_query($connection, "USE jfiraben"))
									{
										$result = mysqli_query($connection, "SELECT ID, NAME, EMAIL, COMMENT FROM COMMENT");
										$count = 1;
										while ($row = mysqli_fetch_array($result))
										{
											$id = $row['ID'];
											$name = $row['NAME'];
											$email = $row['EMAIL'];
											$comment = $row['COMMENT'];
											if ($subdeleteid == $id)
											{
												mysqli_query($connection,"DELETE FROM COMMENT WHERE ID=$id");
											}
											$count++;
										}
										$connection = @mysqli_connect("helios.ite.gmu.edu","jfiraben","fordoj") or die("Error, not able to connect to the mysql database");
										if(@mysqli_query($connection, "USE jfiraben"))
										{
											mysqli_query($connection, "ALTER TABLE COMMENT DROP ID");
											mysqli_query($connection, "ALTER TABLE COMMENT AUTO_INCREMENT = 1");
											mysqli_query($connection, "ALTER TABLE COMMENT ADD ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
											$result = mysqli_query($connection, "SELECT NAME, EMAIL, COMMENT FROM COMMENT");
											$count = 1;
											while ($row = mysqli_fetch_array($result))
											{
												$name = $row['NAME'];
												$email = $row['EMAIL'];
												$comment = $row['COMMENT'];
												?>
												<div class="numbers"><?php echo $count . ".";?></div>
												<div class="multiline"><?php echo "Name: <a href='mailto:" . $email . "'>" . $name . "</a>";?><br/>
												<?php echo "Comments: " . $comment;?></div>
												<hr/>
												<?php
												$count++;
											}
										}
									}
								}
								if($sort == 'Z')
								{
									$subdeleteid;
									for($i = 0; $i < count($deleteid); $i++)
									{
										$curline = explode("$", $deleteid[$i]);
										if($curline[0] == $deletenum)
										{
											$subdeleteid = $curline[1];
										}
									}
									$connection = @mysqli_connect("helios.ite.gmu.edu","jfiraben","fordoj") or die("Error, not able to connect to the mysql database");
									if(@mysqli_query($connection, "USE jfiraben"))
									{
										$result = mysqli_query($connection, "SELECT ID, NAME, EMAIL, COMMENT FROM COMMENT");
										$count = 1;
										while ($row = mysqli_fetch_array($result))
										{
											$id = $row['ID'];
											$name = $row['NAME'];
											$email = $row['EMAIL'];
											$comment = $row['COMMENT'];
											if ($subdeleteid == $id)
											{
												mysqli_query($connection,"DELETE FROM COMMENT WHERE ID=$id");
											}
											$count++;
										}
										$connection = @mysqli_connect("helios.ite.gmu.edu","jfiraben","fordoj") or die("Error, not able to connect to the mysql database");
										if(@mysqli_query($connection, "USE jfiraben"))
										{
											mysqli_query($connection, "ALTER TABLE COMMENT DROP ID");
											mysqli_query($connection, "ALTER TABLE COMMENT AUTO_INCREMENT = 1");
											mysqli_query($connection, "ALTER TABLE COMMENT ADD ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
											$result = mysqli_query($connection, "SELECT NAME, EMAIL, COMMENT FROM COMMENT");
											$count = 1;
											while ($row = mysqli_fetch_array($result))
											{
												$name = $row['NAME'];
												$email = $row['EMAIL'];
												$comment = $row['COMMENT'];
												?>
												<div class="numbers"><?php echo $count . ".";?></div>
												<div class="multiline"><?php echo "Name: <a href='mailto:" . $email . "'>" . $name . "</a>";?><br/>
												<?php echo "Comments: " . $comment;?></div>
												<hr/>
												<?php
												$count++;
											}
										}
									}
								}
							}
						}
						else
						{
							$deletenum = $_POST['delete'];
							$connection = @mysqli_connect("helios.ite.gmu.edu","jfiraben","fordoj") or die("Error, not able to connect to the mysql database");
							if(@mysqli_query($connection, "USE jfiraben"))
							{
								$result = mysqli_query($connection, "SELECT ID, NAME, EMAIL, COMMENT FROM COMMENT");
								$count = 1;
								while ($row = mysqli_fetch_array($result))
								{
									$id = $row['ID'];
									$name = $row['NAME'];
									$email = $row['EMAIL'];
									$comment = $row['COMMENT'];
									if ($deletenum == $id)
									{
										mysqli_query($connection,"DELETE FROM COMMENT WHERE ID=$id");
									}
									$count++;
								}
								$connection = @mysqli_connect("helios.ite.gmu.edu","jfiraben","fordoj") or die("Error, not able to connect to the mysql database");
								if(@mysqli_query($connection, "USE jfiraben"))
								{
									mysqli_query($connection, "ALTER TABLE COMMENT DROP ID");
									mysqli_query($connection, "ALTER TABLE COMMENT AUTO_INCREMENT = 1");
									mysqli_query($connection, "ALTER TABLE COMMENT ADD ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
									$result = mysqli_query($connection, "SELECT NAME, EMAIL, COMMENT FROM COMMENT");
									$count = 1;
									while ($row = mysqli_fetch_array($result))
									{
										$name = $row['NAME'];
										$email = $row['EMAIL'];
										$comment = $row['COMMENT'];
										?>
										<div class="numbers"><?php echo $count . ".";?></div>
										<div class="multiline"><?php echo "Name: <a href='mailto:" . $email . "'>" . $name . "</a>";?><br/>
										<?php echo "Comments: " . $comment;?></div>
										<hr/>
										<?php
										$count++;
									}
								}
							}
						}
					}
					elseif(isset($_GET['sort']))
					{
						$sort = $_GET['sort'];
						if($sort == 'A')
						{
							$connection = @mysqli_connect("helios.ite.gmu.edu","jfiraben","fordoj") or die("Error, not able to connect to the mysql database");
							if(@mysqli_query($connection, "USE jfiraben"))
							{
								$result = mysqli_query($connection, "SELECT ID, NAME, EMAIL, COMMENT FROM COMMENT ORDER BY NAME ASC");
								$count = 1;
								while ($row = mysqli_fetch_array($result))
								{
									$id = $row['ID'];
									$name = $row['NAME'];
									$email = $row['EMAIL'];
									$comment = $row['COMMENT'];
									?>
									<input type="hidden" name="deleteid[]" value="<?php echo $count . "$" . $id; ?>" />
									<div class="numbers"><?php echo $count . ".";?></div>
									<div class="multiline"><?php echo "Name: <a href='mailto:" . $email . "'>" . $name . "</a>";?><br/>
									<?php echo "Comments: " . $comment;?></div>
									<hr/>
									<?php
									$count++;
								}
							}
						}
						if($sort == 'Z')
						{
							$connection = @mysqli_connect("helios.ite.gmu.edu","jfiraben","fordoj") or die("Error, not able to connect to the mysql database");
							if(@mysqli_query($connection, "USE jfiraben"))
							{
								$result = mysqli_query($connection, "SELECT ID, NAME, EMAIL, COMMENT FROM COMMENT ORDER BY NAME DESC");
								$count = 1;
								while ($row = mysqli_fetch_array($result))
								{
									$id = $row['ID'];
									$name = $row['NAME'];
									$email = $row['EMAIL'];
									$comment = $row['COMMENT'];
									?>
									<input type="hidden" name="deleteid[]" value="<?php echo $count . "$" . $id; ?>" />
									<div class="numbers"><?php echo $count . ".";?></div>
									<div class="multiline"><?php echo "Name: <a href='mailto:" . $email . "'>" . $name . "</a>";?><br/>
									<?php echo "Comments: " . $comment;?></div>
									<hr/>
									<?php
									$count++;
								}
							}
						}
					}
					else
					{
						$connection = @mysqli_connect("helios.ite.gmu.edu","jfiraben","fordoj") or die("Error, not able to connect to the mysql database");
						if(@mysqli_query($connection, "USE jfiraben"))
						{
							$result = mysqli_query($connection, "SELECT ID, NAME, EMAIL, COMMENT FROM COMMENT");
							$count = 1;
							while ($row = mysqli_fetch_array($result))
							{
								$id = $row['ID'];
								$name = $row['NAME'];
								$email = $row['EMAIL'];
								$comment = $row['COMMENT'];
								?>
								<div class="comments">
								<div class="numbers"><?php echo $count . ".";?></div>
								<div class="multiline"><?php echo "Name: <a href='mailto:" . $email . "'>" . $name . "</a>";?><br/>
								<?php echo "Comments: " . $comment;?></div></div>
								<hr/>
								<?php
								$count++;
							}
						}
					}
				?>
				<div>
				<a href="/~jfiraben/IT207/assignment4/indexdatabase.php">Add New Comment</a><br/>
				<a href="/~jfiraben/IT207/assignment4/postingcommentsdatabase.php?sort=A">Sort Comments A-Z (by name)</a><br/>
				<a href="/~jfiraben/IT207/assignment4/postingcommentsdatabase.php?sort=Z">Sort Comments Z-A (by name)</a><br/><br/></div>
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
