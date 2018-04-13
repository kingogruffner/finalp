<?php 
session_start();

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
                        <li><a href="#" id="bm"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
                        <li><a href="signup.php" id="bm"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation Buttons -->
<!--         <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">

                            <ul class="nav navbar-nav">
                                <li><a href="index.html">Main</a></li>
                                <li><a href="#">About</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3 lilpad">
                        <form class="pull-right" action="http://www.randyconnolly.com" method="get">
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

                </div>
            </div>
        </nav> -->

    </header>
</div>
<main>
    <h1>Find an image!</h1>
    <?php 
    for ($i=0; $i<20; $i++) {
        echo '<a href="image.php">';
        echo '<img class ="image" src="images/001.jpg" alt="Noodle Snail" title="Noodle Snail">';
        echo '</a>';
    }

    ?>
</main>

<footer>
    

</footer>
</body>
</html>