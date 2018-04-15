<?php 
include 'db.inc.php';
include 'comments.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Slimey Art Home</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/image.css">
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet"> <!--New Font-->
</head>
<body>
	<!-- Header -->
	<div class="pagewidth">
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid row">
                <div class="col-md-5 noshrink">
                    <a class="navbar-brand pull-left" href="home.php">Slimey Art</a>
                </div>
            </div>
        </nav>
    </header>
</div>
<main>
<?php
	echo "<div class='row'>
	<div class='col-md-8'></div>
		<h2>Upload</h2>
		<div class='row'>
			<form class='uploadForm' method='POST' action='".setImage($conn)."' enctype='multipart/form-data'>
				<div class='col-md-6'>
			<input type='hidden' name='size' value='1000000'>
			<div>
				<label>Submit an image </label>
				<input type='file' name='Path'><br>
			</div>
			<div>
				<label>Name of Artwork:  </label>
				<input class='textLabel' type='text' name='Title'>
			</div><br>
			<div>
				<label>Description </label><br>
				<textarea name='Description'></textarea>
			</div>
		</div>
		<div class='col-md-6'>
			<div>
				<label>Select Privacy: </label>
				<select name='Privacy'>
					<option value='public'>Public</option>
					<option value='public'>Private</option>
				</select>
				<input type='hidden' name='uid' value='".$host."'>
				<input type='hidden' name='Date' value='".date('Y-m-d H:i:s')."'>
				<input type='hidden' name='Likes' value='0'>
				<input type='hidden' name='Dislikes' value='0'>
				<input type='hidden' name='ViewCount' value='0'>
			</div>
			<div class='btn-group' role='group'>
				<div class='buttonPosition'>
				<button class='btn btn-primary' type='submit' name='imageSubmit'>Submit</button>
			</div>
			</div>
		</form>
		</div>
</div>";
?>
</main>
</body>
</html>