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

function setImage($conn) {
	if (isset($_POST['imageSubmit'])) {

		$target = "images/".basename($_FILES['Path']['name']);

		$uid = $_POST['uid'];
		$path = $_FILES['Path']['name'];
		$title = $_POST['Title'];
		$description = $_POST['Description'];
		$likes = $_POST['Likes'];
		$dislikes = $_POST['Dislikes'];
		$views = $_POST['ViewCount'];
		$private = $_POST['Privacy'];
		$date = $_POST['Date'];

		$sql = "INSERT INTO image (uid, Path, Title, Description, Likes, Dislikes, ViewCount, Privacy, Date)
		VALUES ('$uid', '$path', '$title', '$description', '$likes', '$dislikes', '$views', '$private', '$date')";

		$result = mysqli_query($conn, $sql);

		if (move_uploaded_file($_FILES['Path']['tmp_name'], $target)) {
			$msg = "Image uploaded succesfully";
		} else {
			$msg = "There was a probelem uploading the image";
		}

	}
}

?>