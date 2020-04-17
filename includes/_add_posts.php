<?php 

require '_db_connection.php';


if(isset($_POST["add_post"])){
	$title = $_POST["title"];
	$company = $_POST["company"];
	$skills = $_POST["skills"];
	$description = $_POST["description"];

	addPost($title,$description,$company,$skills,$conn);
}

function addPost($title,$description,$company,$skills,$conn) {
	$sql = "INSERT INTO job_posts(job_title,job_description,job_company,job_skills) VALUES(?,?,?,?)";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		echo "error";
	} else {
		mysqli_stmt_bind_param($stmt,"ssss",$title,$description,$company,$skills);
		mysqli_stmt_execute($stmt);
	}
} 
?>