<?php  
	require 'includes/_header.php';
	require 'includes/_add_posts.php';
?>
	<nav class="navbar">
		<div class="logo"><a href="index.php">Job Portal</a></div>
		
		<div class="flex">
			<a href="add_post.php"><button class="button add-btn"><img src="assets/icons/add_icon.svg" alt="">&nbsp;&nbsp;&nbsp;Add a Job Post</button></a>
		</div>
	</nav>
	<div class="container">
		<div class="form-banner"><h1>Fill in the details...</h1></div>
		<div class="row-1">
			<form method="POST" action="add_post.php" class="flex-row">
				<input type="text" name="title" placeholder="Enter job title"></input>
				<div class="row-1-1">
				</div>
				<input type="text" name="company" placeholder="Enter your company's name"></input>
				<input type="text" name="skills" placeholder="Enter skills required" class="skills"></input>
				<textarea name="description" placeholder="Giva a brief description of the job" cols="30" rows="10"></textarea>
				<input type="submit" name="add_post" class="button submit-btn"></input>
			</form>
		</div>
	</div>

<?php  
	require 'includes/_footer.php';
?>