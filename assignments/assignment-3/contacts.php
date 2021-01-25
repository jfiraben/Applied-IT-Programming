<!--
Jordan Firaben
IT 207 - 002
assignment3/contacts.php File
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
			<h1>New Contact Entry</h1>
			<div id="lab3form">
				<?php
				/*
					$fname = $_POST["fname"];
					$lname = $_POST["lname"];

					if(isset($_POST["fname"]) and isset($_POST["lname"]))
					{
					}
				*/
				?>
				<!--
				Not entirely sure if I should have one update and add form and use php to either populate
				the fields with default values for updating or to leave them blank. Or to have two different
				forms that either update or add contacts. Also not sure if I should have two separate pages
				for updating and adding. Right now I think I could have one page for both as well as one form
				for both updating and adding.
				-->
				<form action="" method="post" name="updatecontact">
					<label for="id_fname">First Name: </label><input id="id_fname" type="text" name="fname" />
					<label for="id_lname">Last Name: </label><input id="id_lname" type="text" name="lname" /><br/><br/>
					<label for="id_email">Email Address: </label><input id="id_email" type="email" name="email" /><br/><br/>
					<label for="id_pnum">Phone Number:  </label><input id="id_pnum" type="tel" name="pnum" /><br/><br/>
					<label for="id_address">Address:  </label><input id="id_address" type="text" name="address" />
					<label for="id_city">City:  </label><input id="id_city" type="text" name="city" /><br/><br/>
					<label for="id_state">City:  </label>
					<select name="state" id="id_state">
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
					<label for="id_zip">Zip: </label><input id="id_zip" type="text" name="zip" /><br/><br/>
					<div class="buttons">
						<p><input type="submit" value="Update Entry"/></p>
					</div><br/>
				</form>
				<!--
				Second form for adding contacts just in case that is the requirement

				<form action="" method="post" name="addcontact">
					<label for="id_fname">First Name: </label><input id="id_fname" type="text" name="fname" />
					<label for="id_lname">Last Name: </label><input id="id_lname" type="text" name="lname" /><br/><br/>
					<label for="id_email">Email Address: </label><input id="id_email" type="email" name="email" /><br/><br/>
					<label for="id_pnum">Phone Number:  </label><input id="id_pnum" type="tel" name="pnum" /><br/><br/>
					<label for="id_address">Address:  </label><input id="id_address" type="text" name="address" />
					<label for="id_city">City:  </label><input id="id_city" type="text" name="city" /><br/><br/>
					<label for="id_state">City:  </label>
					<select name="state" id="id_state">
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
					<label for="id_zip">Zip: </label><input id="id_zip" type="text" name="zip" /><br/><br/>
					<div class="buttons">
						<p><input type="submit" value="Add Entry"/></p>
					</div><br/>
				</form>
			-->
			</div>


		<a href="/~jfiraben/IT207/assignment3/index.php">Return to Directory</a>
		</div>
    <?php include '../footer.inc';?>
	</body>
</html>
