<!--
Jordan Firaben
IT 207 - 002
Header
-->

<div id="header">
	<div id="profinfo">
		<h4><em>IT 207, 002, Spring 2018</em></h4>
		<p>Omar Nachawati</p>
		<p>George Mason University</p>
	</div>
	<div id="studentinfo">
		<h4><em>Jordan Firaben</em></h4>
		<div id="email">
			<a href="mailto:jfiraben@masonlive.gmu.edu">jfiraben@masonlive.gmu.edu</a>
		</div>
		<?php
			//Found from php.net > http://php.net/manual/en/function.getlastmod.php
			date_default_timezone_set('EST');
			echo "<b><em>Last Modified: </em></b>" . date ("H:i F d, Y e", getlastmod());
		?>
	</div>
</div>
