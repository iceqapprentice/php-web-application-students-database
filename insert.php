<html>
<head>
	<meta charset="utf-8">
	<title>Students app</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="wrap">
		<div id="search">
			<img src="images/addVelika.png">
			<a href="index.php"><img src="images/pretraga.png" height="40px" title="Search"></a>
			<a href="remove.php"><img src="images/remove.png" height="40px" title="Remove student"></a>
			<form action="#" method="POST">
				<label>Ime:<br>
					<input type="text" name="ime">
				</label><br>
				<label>Prezime:<br>
					<input type="text" name="prezime">
				</label><br>
				<label>Status studiranja:<br>
					<input type="text" name="status">
				</label><br>
				<input type="submit" name="insert" value="Insert"><br>
			</form>
		</div>
		<div id="message">
			<?php 
				if (isset($_POST['insert'])) {
					if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['status'])){
						if(!empty($_POST['ime']) && !empty($_POST['prezime']) && !empty($_POST['status'])){
							$ime = trim($_POST['ime']);
							$prezime = trim($_POST['prezime']);
							$status = trim($_POST['status']);
							require 'inc/connect.php';

							$ime = mysqli_real_escape_string($conn,$ime);
							$prezime = mysqli_real_escape_string($conn,$prezime);
							$status = mysqli_real_escape_string($conn,$status);

							$query = "INSERT INTO studenti (ime,prezime,status) VALUES ('{$ime}','{$prezime}','{$status}')";
							if (mysqli_query($conn,$query) == TRUE){
								echo "New record was successfully made.";
							}else{
								echo "Error!";
							}

						}else
							echo "Entry fields cannot be empty.";
					}else
						echo "All parameters must be sent.";
				}
			?>
		</div>
	</div> 

</body>
</html>
