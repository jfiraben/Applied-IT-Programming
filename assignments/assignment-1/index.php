<!--
Jordan Firaben
IT 207 - 002
Index File
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Practice Lab Assignment</title>
		<link rel="stylesheet" href="external.css" type="text/css"/>
	</head>
	<body>
    <?php include 'header.php';?>
    <?php include 'menu.inc';?>
		<div id="content">
			<div id="left">
				<div id="picture">
					<img src="firaben.jpg" alt="Self Photograph"/>
				</div>
				<div id="summary">
					<h2><em>Summary</em></h2>
					<ul>
						<li>Personal
							<ul>
								<li>I was born in Florida and lived there for around 13 years.</li>
								<li>Currently work in the ITS Support Center as an analyst.</li>
								<li>I'm a die-hard DC sports fan</li>
							</ul>
						</li>
						<li>Academic
							<ul>
								<li>Graduated from high school in 2008.</li>
								<li>Attended James Madison University before moving to California in 2012.</li>
								<li>Started working at a local middle school while studying Information Technology at Northern Virginia Community College before transferring to George Mason University in 2016.</li>
								<li>Expected to graduate Spring 2019.</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div id="prodetails">
				<h2><em>Professional &amp; Personal Details</em></h2>
				<p>I was born and raised in Florida. My family moved to Virginia sometime in the summer of 2002. I attended high school in Springfield, Virginia and graduated in 2008. I've attended
				James Madison University, Northern Virginia Community College, and now George Mason University. Over the years I've had a few jobs. I was a substitute teacher and extended care worker
				at a local middle school until summer 2016. Since summer 2016, I've worked at the George Mason ITS Support Center as a student analyst. After graduating, I plan on pursuing a career
				in IT-- HelpDesk, Network Administrator, Network Engineer. </p>
				<p>I enjoy hanging out with friends and my girlfriend on the weekends. The DC area has plenty of activities, although it is fast-paced and compact. After graduating, I'm strongly
				considering moving out of the area to another location.</p>
				<p>I'm currently in IT 207 and learning web development with php. Below, I'll test some php functions:</p><br/>
				<?php
					function age() {
						echo "I am currently 28 years old. ";
					}
					function sport() {
						echo "My favorite sport at the moment is hockey. ";
					}
					function favoriteInterests() {
						$interests = array("Sports","Watching TV shows","Hiking","Biking","Playing video games");
						echo "My interests include: " . $interests[0] . ", " . $interests[1] . ", " . $interests[2] . ", " . $interests[3] . ", and " . $interests[4] . ". ";
					}
					function favoriteShows() {
						$shows = array("Scrubs","Chuck","Game of Thrones");
						echo "My favorite tv shows are: " . $shows[0] . ", " . $shows[1] . ", and " . $shows[2] . ". ";
					}
					function greatLakes() {
						$lakes = array("Superior","Ontario","Michigan","Huron","Erie");
						echo "The great lakes are: " . $lakes[0] . ", " . $lakes[1] . ", " . $lakes[2] . ", " . $lakes[3] . ", and " . $lakes[4] . ".";
					}
					age();
					sport();
					favoriteInterests();
					favoriteShows();
					greatLakes();
				?>
			</div>
		</div>
    <?php include 'footer.inc';?>
	</body>
</html>
