<html>
<head>
	<title>Example SSI</title>
	<link rel="stylesheet" href="product.css" type="text/css"/>
</head>

<body>
	<h2>
		SSI Examples
	</h2>
	<!--All three sidenav, header, and footer should be in separate .inc files and linked with either php or html include-->
	<!--Content should be on the actual page of the assignment-->
	<div id="header"></div>
	<div id="sidenav"></div>
	<div id="content"></div>
	<div id="footer"></div>
	
	<?php include 'body.inc'; ?>
</body>
</html>