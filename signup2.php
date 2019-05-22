<html lang="en">
	<head>
		<title>Sign Up</title>
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
			h1{
				margin-left: 160;
			}
		</style>
	</head>
	<body>
	<div class="topnav">
				<img src="Images/psu.jpg" >
			</div>
	<div class="container">
	
		<div class="myDiv">
			<div class="bg"></div>
			
			<p><img src="Images/icon.png" style="width:130px; height:130px;"></p>
			<div class="text">
				<h3>Welcome</h3>
				<hr>
				<p>Whether you are in need of a tutor for extra help or are looking for some way to 
				help a friend and make some money, PSU Tutoring Center is here to help!</p>
				<h2>Sign Up</h2>
			</div>
			<div class="container">
					<form class="form-horizontal" method="post" action="InsertCourseAndTime.php">
					
							<div class="form-group">
								<label class="control-label col-sm-4" for="course">Choose your course:</label>
								<select name ="code">
								<option>--Select--</option>
								<option >SE371</option>
								<option >SE322</option>
								<option >SE365</option>
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-4" for="time">Choose the most suitable timing for you:</label>
								<select name="time">
								<option>--Select--</option>
								<option value="tutor">8:00 am</option>
								<option value="tutor">9:00 am</option>
								<option value="tutor">10:00 am</option>
								<option value="tutor">11:00 am</option>
								<option value="tutor">12:00 am</option>
								<option value="tutor">1:00 pm</option>
								<option value="tutor">2:00 pm</option>
								<option value="tutor">3:00 pm</option>
								</select>
							</div>
						
						
						<div class="form-group" style="margin-left: 380;">
							<input type = "submit" name="submit" value="Submit" onclick="myFunction()" id="submit"/>
							
							<script>
								function myFunction(){
									alert("Record Inserted!");
								}
							</script>
						</div>
					</form>
			</div>
		</div>
	</body>
</html>