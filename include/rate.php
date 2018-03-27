<?php 
	if(isset($_POST['stars']) && isset($_POST['article'])){
		$stars=$_POST['stars'];
		$post_title=$_POST['article'];
		mysql_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2");
        mysql_select_db("databaselds"); 
        $query = "SELECT * FROM search WHERE title LIKE '%$post_title%' ";
        $query = mysql_query($query);
        $numrows = mysql_num_rows($query);
        if ($numrows > 0){
            $rows = mysql_fetch_assoc($query);
            $id=$rows['id'];
            $rating = $rows['rating'];
            $avgrate = $rows['avgrate'];
            $numhits = $rows['numhits'];
            $rating=$rating+$stars;
            $numhits++;
            $avgrate=$rating/$numhits;
            $conn = new mysqli("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");

            if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "UPDATE search SET rating='$rating' , avgrate='$avgrate', numhits='$numhits' WHERE id='$id'";

			if ($conn->query($sql) === TRUE) {
			    echo "Record updated successfully";
			} else {
			    echo "Error updating record: " . $conn->error;
			}
        }
	}
?>