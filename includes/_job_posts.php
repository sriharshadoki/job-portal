<?php 

	require '_db_connection.php';

	$sql = "SELECT * FROM job_posts ORDER BY published_at DESC";
	$stmt = mysqli_stmt_init($conn);

	echo "<h1 class=\"banner-text\">These Jobs are Available</h1>";

	if (!mysqli_stmt_prepare($stmt,$sql)) {
		echo "Connection Error";
	} else {
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);	

		while($row = mysqli_fetch_assoc($result)){
?>

			<div class="post-container">
				<h3 class="title"><?php echo $row["job_title"]; ?></h3>
				<div class="row-2">
					<div class="company-name">Company Name:
						<h5><?php echo $row["job_company"]; ?></h5>
					</div>
					<div class="post-date">Date: 
						<h5><?php echo substr($row["published_at"], 0,10); ?></h5>
					</div>
				</div>
				<div class="description">
					<h4>Description: <?php echo $row["job_description"]; ?></h4>
				</div>
				<div class="row-4">
					<div class="skills">						
						<h4>Skills: <?php echo $row["job_skills"]; ?></h4>
					</div>
				</div>
					<div class="button apply-btn">
						<h4>Apply For This Job</h4>
					</div>
			</div>
<?php 

		}

	}

?>