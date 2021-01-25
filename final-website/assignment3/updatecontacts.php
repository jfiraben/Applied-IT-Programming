<!--
Jordan Firaben
IT 207 - 002
assignment3/updatecontacts.php File
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
			<?php
				if(!empty($_POST['fname']) and !empty($_POST['lname']))
				{
					$subfname;
					$sublname;
					$subemail;
					$subpnum;
					$subaddress;
					$subcity;
					$substate;
					$subzip;

					$fncheck = false;
					$lncheck = false;

					$count = 1;
					$contact = fopen("contacts.txt", "rt");
					do
					{
						$curline = fgets($contact);
						$curinfo = explode("$$$", $curline);
						if($curinfo[0] == $_POST['fname'])
						{
							$fncheck = true;
							if($curinfo[1] == $_POST['lname'])
							{
								$subfname = $_POST['fname'];
								$sublname = $_POST['lname'];
								$subemail = $curinfo[2];
								$subpnum = $curinfo[3];
								$subaddress = $curinfo[4];
								$subcity = $curinfo[5];
								$substate = $curinfo[6];
								$subzip = $curinfo[7];
								$lncheck = true;
							}
						}
						$count++;
					} while (!feof($contact));
					if(!$fncheck and !$lncheck)
					{
						$subfname = $_POST['fname'];
						$sublname = $_POST['lname'];
						$subemail = '';
						$subpnum = '';
						$subaddress = '';
						$subcity = '';
						$substate = '';
						$subzip = '';
					}
					fclose($contact);
			?>
			<div id="lab3form">
				<h1>Update Contact Entry</h1>
				<?php
					if(!isset($_POST['update']))
					{
				?>
				<form action="" method="post">
					<p><label for="id_fname">First Name: </label><input id="id_fname" type="text" name="fname" value="<?php echo $_POST['fname']; ?>"/>
					<label for="id_lname">Last Name: </label><input id="id_lname" type="text" name="lname" value="<?php echo $_POST['lname']; ?>"/><br/><br/>
					<label for="id_email">Email Address: </label><input id="id_email" type="text" name="email" value="<?php if(isset($_POST['update'])) echo $_POST['email']; else echo $subemail; ?>"/><br/><br/>
					<label for="id_pnum">Phone Number:  </label><input id="id_pnum" type="text" name="pnum" value="<?php if(isset($_POST['update'])) echo $_POST['pnum']; else echo $subpnum; ?>"/><br/><br/>
					<label for="id_address">Address:  </label><input id="id_address" type="text" name="address" value="<?php if(isset($_POST['update'])) echo $_POST['address']; else echo $subaddress; ?>"/>
					<label for="id_city">City:  </label><input id="id_city" type="text" name="city" value="<?php if(isset($_POST['update'])) echo $_POST['city']; else echo $subcity; ?>"/><br/><br/>
					<label for="id_state">City:  </label>
					<select name="state" id="id_state">
						<option value="AL"<?php if ($substate == 'AL') echo " selected='selected'"?>>Alabama</option>
						<option value="AK"<?php if ($substate == 'AK') echo " selected='selected'"?>>Alaska</option>
						<option value="AZ"<?php if ($substate == 'AZ') echo " selected='selected'"?>>Arizona</option>
						<option value="AR"<?php if ($substate == 'AR') echo " selected='selected'"?>>Arkansas</option>
						<option value="CA"<?php if ($substate == 'CA') echo " selected='selected'"?>>California</option>
						<option value="CO"<?php if ($substate == 'CO') echo " selected='selected'"?>>Colorado</option>
						<option value="CT"<?php if ($substate == 'CT') echo " selected='selected'"?>>Connecticut</option>
						<option value="DE"<?php if ($substate == 'DE') echo " selected='selected'"?>>Delaware</option>
						<option value="DC"<?php if ($substate == 'DC') echo " selected='selected'"?>>District Of Columbia</option>
						<option value="FL"<?php if ($substate == 'FL') echo " selected='selected'"?>>Florida</option>
						<option value="GA"<?php if ($substate == 'GA') echo " selected='selected'"?>>Georgia</option>
						<option value="HI"<?php if ($substate == 'HI') echo " selected='selected'"?>>Hawaii</option>
						<option value="ID"<?php if ($substate == 'ID') echo " selected='selected'"?>>Idaho</option>
						<option value="IL"<?php if ($substate == 'IL') echo " selected='selected'"?>>Illinois</option>
						<option value="IN"<?php if ($substate == 'IN') echo " selected='selected'"?>>Indiana</option>
						<option value="IA"<?php if ($substate == 'IA') echo " selected='selected'"?>>Iowa</option>
						<option value="KS"<?php if ($substate == 'KS') echo " selected='selected'"?>>Kansas</option>
						<option value="KY"<?php if ($substate == 'KY') echo " selected='selected'"?>>Kentucky</option>
						<option value="LA"<?php if ($substate == 'LA') echo " selected='selected'"?>>Louisiana</option>
						<option value="ME"<?php if ($substate == 'ME') echo " selected='selected'"?>>Maine</option>
						<option value="MD"<?php if ($substate == 'MD') echo " selected='selected'"?>>Maryland</option>
						<option value="MA"<?php if ($substate == 'MA') echo " selected='selected'"?>>Massachusetts</option>
						<option value="MI"<?php if ($substate == 'MI') echo " selected='selected'"?>>Michigan</option>
						<option value="MN"<?php if ($substate == 'MN') echo " selected='selected'"?>>Minnesota</option>
						<option value="MS"<?php if ($substate == 'MS') echo " selected='selected'"?>>Mississippi</option>
						<option value="MO"<?php if ($substate == 'MO') echo " selected='selected'"?>>Missouri</option>
						<option value="MT"<?php if ($substate == 'MT') echo " selected='selected'"?>>Montana</option>
						<option value="NE"<?php if ($substate == 'NE') echo " selected='selected'"?>>Nebraska</option>
						<option value="NV"<?php if ($substate == 'NV') echo " selected='selected'"?>>Nevada</option>
						<option value="NH"<?php if ($substate == 'NH') echo " selected='selected'"?>>New Hampshire</option>
						<option value="NJ"<?php if ($substate == 'NJ') echo " selected='selected'"?>>New Jersey</option>
						<option value="NM"<?php if ($substate == 'NM') echo " selected='selected'"?>>New Mexico</option>
						<option value="NY"<?php if ($substate == 'NY') echo " selected='selected'"?>>New York</option>
						<option value="NC"<?php if ($substate == 'NC') echo " selected='selected'"?>>North Carolina</option>
						<option value="ND"<?php if ($substate == 'ND') echo " selected='selected'"?>>North Dakota</option>
						<option value="OH"<?php if ($substate == 'OH') echo " selected='selected'"?>>Ohio</option>
						<option value="OK"<?php if ($substate == 'OK') echo " selected='selected'"?>>Oklahoma</option>
						<option value="OR"<?php if ($substate == 'OR') echo " selected='selected'"?>>Oregon</option>
						<option value="PA"<?php if ($substate == 'PA') echo " selected='selected'"?>>Pennsylvania</option>
						<option value="RI"<?php if ($substate == 'RI') echo " selected='selected'"?>>Rhode Island</option>
						<option value="SC"<?php if ($substate == 'SC') echo " selected='selected'"?>>South Carolina</option>
						<option value="SD"<?php if ($substate == 'SD') echo " selected='selected'"?>>South Dakota</option>
						<option value="TN"<?php if ($substate == 'TN') echo " selected='selected'"?>>Tennessee</option>
						<option value="TX"<?php if ($substate == 'TX') echo " selected='selected'"?>>Texas</option>
						<option value="UT"<?php if ($substate == 'UT') echo " selected='selected'"?>>Utah</option>
						<option value="VT"<?php if ($substate == 'VT') echo " selected='selected'"?>>Vermont</option>
						<option value="VA"<?php if ($substate == 'VA') echo " selected='selected'"?>>Virginia</option>
						<option value="WA"<?php if ($substate == 'WA') echo " selected='selected'"?>>Washington</option>
						<option value="WV"<?php if ($substate == 'WV') echo " selected='selected'"?>>West Virginia</option>
						<option value="WI"<?php if ($substate == 'WI') echo " selected='selected'"?>>Wisconsin</option>
						<option value="WY" <?php if ($substate == 'WY') echo " selected='selected'"?>>Wyoming</option>
					</select>
					<label for="id_zip">Zip: </label><input id="id_zip" type="text" name="zip" value="<?php if(isset($_POST['update'])) echo $_POST['zip']; else echo $subzip; ?>"/><br/><br/></p>
					<div class="buttons">
						<p><input type="submit" value="Update Entry" name="update"/></p>
						<br/>
					</div>
				</form>
				<?php
					}
					if(isset($_POST['update']))
					{
						if(!$fncheck and !$lncheck)
						{
							if(empty($_POST['fname']) or empty($_POST['lname']) or empty($_POST['email']) or empty($_POST['pnum']) or empty($_POST['address']) or empty($_POST['city']) or empty($_POST['state']) or empty($_POST['zip']))
							{
								echo "<h3>There was an error when attempting to add the contact! Please make sure that all fields are completed.</h3>";
							}
							else
							{
								$handle = fopen("contacts.txt", "at");
								flock($handle, LOCK_EX);
								$output = $_POST['fname'] . "$$$" . $_POST['lname'] . "$$$" . $_POST['email'] . "$$$" . $_POST['pnum'] . "$$$" . $_POST['address'] . "$$$" . $_POST['city'] . "$$$" . $_POST['state'] . "$$$" . $_POST['zip'] . "\n";
								if(fwrite($handle, $output) > 0)
								{
									echo "<h3>You have successfully added a contact!</h3>";
								}
								flock($handle, LOCK_UN);
								fclose($handle);
							}
						}
						else
						{
							if(empty($_POST['fname']) or empty($_POST['lname']) or empty($_POST['email']) or empty($_POST['pnum']) or empty($_POST['address']) or empty($_POST['city']) or empty($_POST['state']) or empty($_POST['zip']))
							{
								echo "<h3>There was an error when attempting to add the contact! Please make sure that all fields are completed.</h3>";
							}
							else
							{
								$contacts = file("contacts.txt");
								for ($i=0; $i < count($contacts); $i++)
								{
									$curline = $contacts[$i];
									$curinfo = explode("$$$", $curline);
									if($curinfo[0] == $_POST['fname'])
									{
										if($curinfo[1] == $_POST['lname'])
										{
											$output = $_POST['fname'] . "$$$" . $_POST['lname'] . "$$$" . $_POST['email'] . "$$$" . $_POST['pnum'] . "$$$" . $_POST['address'] . "$$$" . $_POST['city'] . "$$$" . $_POST['state'] . "$$$" . $_POST['zip'] . "\n";

											$contacts[$i] = $output;
										}
									}
								}
								$updatecontact = false;
								$handle = fopen("contacts.txt", "w+t");
								flock($handle, LOCK_EX);
								for ($i=0; $i < count($contacts); $i++)
								{
									if(fwrite($handle, $contacts[$i]) > 0)
									{
										$updatecontact = true;
									}
								}
								flock($handle, LOCK_UN);
								fclose($handle);
								if ($updatecontact == true)
								{
									echo "<h3>You have successfully updated a contact!</h3>";
								}
							}
						}
					}
				?>
				<hr/>
				<a href="/~jfiraben/IT207/assignment3/index.php">Return to Directory</a>
			</div>
			<?php
				}
				else
				{
			?>
			<div id="error">
				<hr/>
				<h1>ERROR!</h1>
				<h2>You must enter a value in each field. Click your browser's Back button to return to the form.</h2><br/>
				<hr/>
				<a href="/~jfiraben/IT207/assignment3/index.php">Return to Directory</a>
			</div>
			<?php
			}
			?>
		</div>
    <?php include '../footer.inc'; ?>
	</body>
</html>
