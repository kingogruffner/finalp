<?php 
include 'db.inc.php';
include 'comments.inc.php';

function getImage($conn) {
    $sql = "SELECT * FROM image";
    $result = mysqli_query($conn, $sql);
    while ($row = $result->fetch_assoc()) {
        echo '<a href="image.php">';
        echo '<img class="image" src="images/'.$row['Path'].' "title="Noodle Snail">';
        echo '</a>';  
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Slimey Art Home</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
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
                <div class="col-md-2">
                    <form class="pull-left" action="http://www.randyconnolly.com" method="get">
                            <div class="input-group">
                                <input class ="form-control" name="search" type="text" placeholder="Search">
                                <div class= "input-group-btn">
                                    <button  type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="col-md-5">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="upload.php" id="bm"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
                        <li><a href="signup.php" id="bm"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>
<main>
    <h1>Find an image!</h1>
    <?php 
        getImage($conn);
    ?>
</main>

<footer>
    

</footer>
</body>
</html>