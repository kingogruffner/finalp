<?php 

function setComment($conn) {
	if (isset($_POST['commentSubmit'])) {
		$uid = $_POST['uid'];
		$date = $_POST['Date'];
		$comment = $_POST['Comment'];

		$sql = "INSERT INTO comments (uid, Date, Comment) VALUES ('$uid', '$date', '$comment')";

		$result = mysqli_query($conn, $sql);
	}
}

function getComment($conn) {
	$sql = "SELECT * FROM comments";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc()) {
		echo "<div class='comment-box'>";
			echo $row['UID']." ";
			echo "<p class='dateFont'><em>posted</em> ".$row['Date']."</p><br><br>";
			echo "<p class='mainFont'>".$row['Comment']."</p>";
		echo "</div>";
	}
	 
}

?>