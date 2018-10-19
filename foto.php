<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">

<title>Bootstrap</title>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />

<style>

#photos {	
	height: 330px;
	width: 330px;	
}

.thumbnail {
	text-align: center;
}

</style>

</head>
<body>                 

<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="classifica.php">Classifica</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="jumbotron">
        <h1>Make your choice!!</h1>
        <p><?php
			
			$imagesDir = "img/"; 
			$images = glob($imagesDir . '*.{jpg,jpeg,png,JPG,JPEG}', GLOB_BRACE);
			$random_keys=array_rand($images, 2);

		?></p>
    </div>

	<div class="row">
		<div class="col-md-6">
			<div class="thumbnail">
			<a href="rate.php?winner=<?php echo basename($images[$random_keys[0]]);?>&loser=<?php echo basename($images[$random_keys[1]]);?>"><img src="..\immagini-varie\<?php echo basename($images[$random_keys[0]]); ?>" id="photos"></a>			
			<div class="caption">
			<h3 style="text-align: center";>Photo n. 1</h3>
			
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="thumbnail">
			<a href="rate.php?winner=<?php echo basename($images[$random_keys[1]]);?>&loser=<?php echo basename($images[$random_keys[0]]);?>"><img src="..\immagini-varie\<?php echo basename($images[$random_keys[1]]); ?>" id="photos"></a>
			<div class="caption">
			<h3 style="text-align: center";>Photo n. 2</h3>
			
			</div>
			</div>
		</div>
	</div>
	

</div> <!-- /container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</body>
</html>
