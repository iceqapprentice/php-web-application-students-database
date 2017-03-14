<?php

require 'inc/connect.php';
if (isset($_GET['criteria'])) {
	if(!empty($_GET['criteria'])) 
	{
		$criteria = trim($_GET['criteria']); 
		$criteria = mysqli_real_escape_string($conn,$criteria); 
		$query ="SELECT * FROM studenti WHERE ime LIKE '%{$criteria}%' OR prezime LIKE '%{$criteria}%'"; 
		$result = mysqli_query($conn,$query);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				?>
					<div id="result">
						<img src="images/user.png">
						<p><b>Ime: </b><?php echo $row['ime'] ." ". $row['prezime']; ?></p>
						<p><b>Status studiranja </b><?php echo $row['status']; ?></p>
					</div>
				<?php
			}
			echo "Number of results: " .mysqli_num_rows($result);
		}else{
			echo 'No results.';
		}

	}else{
		echo 'Criteria is empty.';
	}
} 