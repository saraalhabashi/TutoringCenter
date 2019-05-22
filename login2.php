<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
* {
    box-sizing: border-box;
}
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px;
}
.row:after {
    content: "";
    
    clear: both;
}
.topnav {
				overflow: hidden;
				background-color: #14406e;
				margin: 0;
				padding: 0;
				width: 100%;
			}
			body{
				margin: auto;
			}
			#center
			{
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
			margin-left: 0px;
			clear: both;
			}
			.btn{
				margin-right:100px;
				margin-left: 100px;

			}
			
</style>
</head>
<body>
<div class="topnav">
	<img src="Images/psu.jpg" >
</div>
<div class="container">
	<img src="Images/avatar.png">
	<h1 style="display:inline-block" >Welcome, <?php
		session_start();

		echo $_SESSION['fullname'];

		//session_destroy();
	?></h1>
	
<div>
	<div class="row">
		<div class="col-sm-8">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="Images/Tutoring.jpg" alt="Tutoring" style="width:100%; height:300px;">
					</div>
					<div class="item">
						<img src="Images/tutoringbenefit.gif" alt="Tutoring Benefit" style="width:100%;  height:300px;">
					</div>
					<div class="item">
						<img src="Images/Benefits-of-Tutoring.jpg" alt="Benefits of Tutoring" style="width:100%;  height:300px;">
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-sm-4" >
			
				
				<div class="panel panel-default" style="height: 250px;">
				<div class="panel-heading"><h2>Reminder</h2></div>
				<div class="panel-body">
			
		
					<form method="post">
						<div class="form-group">
							<p>Don't forget! You have a tutoring session!</p>
						</div>
						<button name="so" class="btn btn-primary" >Log Out</button>
						<?php
						if(isset($_POST['so'])){
							header('location:index.html');
							session_destroy();
							
						}
				
						?>
					</form>
		
		</div>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>
