<?php
	//$servername = "localhost";
	//$username = "root";
	//$password = "";

// Create connection
	//$conn = new mysqli($servername, $username, $password);

// Check connection
	//if ($conn->connect_error) {
		//die("Connection failed: " . $conn->connect_error);
	//} 
	//echo "Connected successfully";
	?>

<html lang="en">
	<head>
		<title>Sign Up Tutoring Center</title>
		<link rel="icon" type="image/png" href="Images/psuIcon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		body{
			margin: auto;
		}
		.myDiv {
		}
		.myDiv .bg {
			position: absolute;
			z-index: -1;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: url(Images/books.jpg) center center;
			background-repeat: no-repeat;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			opacity: .2;
			width: 100%;
			height: auto;
		}
		.topnav {
			overflow: hidden;
			background-color: #14406e;
			margin: 0;
			padding: 0;
		}
		img{
			float: left;
		}
		.text{
			margin: 50;
		}
		table{
			margin-top: 0;
		}
		.container{
				float: center;
				margin-left: 0;
			}
		h2{
				margin-left: 160;
			}
		</style>
	</head>
	<body>
		<div class="myDiv">
			<div class="bg"></div>
			<div class="topnav">
				<img src="Images/psu.jpg" >
			</div>
			<div class="text">
				<h3>Welcome</h3>
				<hr>
				<p>Whether you are in need of a tutor for extra help or are looking for some way to 
				help a friend and make some money, PSU Tutoring Center is here to help!</p>
				<h2>Sign Up</h2>
			</div>
			<div class="container">
					<form class="form-horizontal" action="insert.php" method="POST">
							<div class="form-group">
								<label class="control-label col-sm-2" for="fullname">Full Name:</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="fullname" placeholder="Enter full name" name="fullname" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="studentid">Student ID:</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="studentid" placeholder="Enter ID" name="studentid" required>
								</div>
							</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email:</label>
							<div class="col-sm-3">
								<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="pwd">Password:</label>
							<div class="col-sm-3">          
								<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
							</div>
						</div>
						<div class="form-group" style="margin-left: 200;">
							<select name="TutorOrTutoredStudent" required>
								<option>--Select--</option>
								<option value="tutor">Tutor</option>
								<option value="student">Student</option>
							</select>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary" >Sign Up</button>
							</div>
						</div>
					</form>
			</div>
		</div>
	</body>
</html>