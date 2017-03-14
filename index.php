<html>
<head>
	<meta charset="utf-8">
	<title>Students app</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="wrap">
		<div id="search">
			<img src="images/main.png">
			<a href="insert.php"><img src="images/add.png" height="40px" title="Add new student"></a>
			<a href="remove.php"><img src="images/remove.png" height="40px" title="Remove student"></a>
			<form action="#" method="GET">
				<input type="text" name="criteria" placeholder="Search for students...">
				<input type="submit" value="Search"><br>
			</form>
		</div>
		<?php
			include 'inc/getResults.php';
		?>
	</div> 

</body>
</html>
