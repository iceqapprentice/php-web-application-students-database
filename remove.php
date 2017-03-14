<html>
<head>
	<meta charset="utf-8">
	<title>Students app</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="wrap">
		<div id="search">
			<img src="images/removeVelika.png">
			<a href="index.php"><img src="images/pretraga.png" height="40px" title="Search"></a>
			<a href="insert.php"><img src="images/add.png" height="40px" title="Add new student"></a>
			<?php
				require 'inc/connect.php';
				$query = "SELECT * FROM studenti";
				$result = mysqli_query($conn,$query);
				if(mysqli_num_rows($result)>0){
					while($row = mysqli_fetch_assoc($result)){
						?>
							<div id="result">
									<a href="inc/removeStudent.php?id=<?php echo $row['id'] ?>"><img src="images/remove.png"></a>
									<p><b>Ime: </b><?php echo $row['ime'] ." ". $row['prezime']; ?></p>
									<p><b>Status studiranja: </b><?php echo $row['status']; ?></p>
							</div>
						<?php
					}
				}else{
					echo "No students found.";
				}
			?>
		</div>
	</div> 

</body>
</html>
