<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Slimey Photo</title>
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
                        <li><a href="#" id="bm"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
                        <li><a href="signup.php" id="bm"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	</div>
	<main>
		<div class="row">
			<div class="col-md-8">
				<h1>Noodle Snail</h1>
				<img class ="image" src="images/001.jpg" alt="Noodle Snail" title="Noodle Snail">
			</div>
			<div class="col-md-4">
				<div class="panel panel-danger">
				<h3>Description</h3>
			</div>
		</div>
	</main>
	<footer>
		
	</footer>
</body>
</html>