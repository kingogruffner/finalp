<?php 

function setComment($conn) {
	if (isset($_POST['commentSubmit'])) {
		$uid = $_POST['UID'];
		$date = $_POST['Date'];
		$comment = $_POST['Comment'];

		$sql = "INSERT INTO comments (uid, date, comment) VALUES ('$uid','','$comment','','', '$date' )";

		$result = mysqli_query($conn, $sql);
	}
}

?>