<div id="header">
	<div id="profinfo">
		<h4>IT 207, 002, Spring 2018</h4>
		<p>Omar Nachawati</p>
		<p>George Mason University</p>
	</div>
	<div id="studentinfo">
		<h4>Jordan Firaben</h4>
		<a href="mailto:jfiraben@masonlive.gmu.edu">jfiraben@masonlive.gmu.edu</a>
		<h4>Last Modified: </h4>
		<?php
			// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
			echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
		?>
	</div>
</div>
