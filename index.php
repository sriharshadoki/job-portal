<?php  
	require 'includes/_header.php';
?>
	<nav class="navbar">
		<div class="logo"><a href="index.php">Job Portal</a></div>
		
		<div class="flex">
			<form method="POST" action="index.php" class="flex">
				<div class="search-input">
					<input type="text" name="search" placeholder="Enter a job skill"></input>
				</div>
				<input type="submit" text="Search" value="Find a Job" class="button search-btn"></input>
			</form>

			<a href="add_post.php"><button class="button add-btn">Add a Job Post</button></a>
		</div>
	</nav>

	<div class="container">
		<?php 
			if(isset($_POST["search"])){			
				require 'includes/_search.php';
			}  else {
				require 'includes/_job_posts.php';	
			}
		?>

	</div>
	<?php  
		
	?>
<?php  
	require 'includes/_footer.php';
?>