<html>
<head>

</head>
	<title>Music Library</title>
	<link rel="stylesheet" href="style.css">
<body>

<div id="container">

	<div id="title">
		<h2>Music Library</h2>
	</div>

	<div id="var">
		<?php
		$roz = '.php';
		$top = 'top';
		$footer = 'footer';?>
	</div>

	<div id="topmenu">
		<?php include("$top$roz");?>
	</div>


	<div id="text">
		<?php
		if (!isset($_GET["file"])) {
			$site = 'main';
		}
		else {
			$site = $_GET["file"];

		}

		include("$site$roz");?>

	</div>


	<div id="footer">
		<?php include("$footer$roz");?>
	</div>


</div>


</body>



</html>
