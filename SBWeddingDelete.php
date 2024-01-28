<?php 
	include 'dbconn.php';

	if (isset($_GET['deleteuser'])) {
		$user= $_GET['deleteuser'];

		$sqlcommand = "DELETE FROM test_wedding WHERE wid ='$user'";
		$sqlresult = mysqli_query ($conn, $sqlcommand);

		if ($sqlresult) {
			echo "<script>";
			echo "alert('Data Successfully Deleted!')";
			echo "</script>";
			echo '<script type="text/javascript">';
			echo 'window.location.href = "SBWeddingDisplay.php"';
			echo '</script>';		
		}else {
			die(mysqli_error($conn));
		}
	}
?>