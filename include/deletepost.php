<?php
	if(isset($_POST['article'])){
		$post_id=$_POST['article'];
		$title=$_POST['title'];
		$conn = new mysqli("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");
		$query = "DELETE from search WHERE id='$post_id'";
        $result = $conn->query($query);
        unlink("../posts/$title.php");
        unlink("../index_files/$title.jpg");
        header('Location: index.php');
	}
?>