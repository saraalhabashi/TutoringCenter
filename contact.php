<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is an online tutoring system for PSU">
		<meta name="keywords" content="tutor, course, instructor">
		<meta name="author" content="Zara">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Contact Tutoring Center</title>
		<link rel="icon" type="image/png" href="Images/psuIcon.png">
		<style>
			.navbar {
				margin-bottom: 0;
				background-color:#14406e;
				z-index: 9999;
				border: 0;
				font-size: 12px !important;
				line-height: 2 !important;
				letter-spacing: 2px;
				border-radius: 0;
			}
			.navbar li a, .navbar .navbar-brand {
				color: #fff !important;
			}
			.navbar-nav li a:hover, .navbar-nav li.active a {
				color: #1091b9 !important;
				background-color: #fff !important;
			}
			.navbar-default .navbar-toggle {
				border-color: transparent;
				color: #fff !important;
			}
			.header {
				background-color: #fff;
				color: #1091b9;
				font-family: "Times New Roman", Georgia, Serif;
				padding: 25px 10px;
			}
			#hyperlink a:link, a:visited {
				color: #fff;
				padding: 14px 25px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
			}
			#hyperlink a:hover{
				color: #777;
			}
			.footer{
				margin-bottom:0;
			}
			#image1{
				margin-left:25px;
				width:250px;
				height:250px;
				float:left;
			}
			.header h1{
				margin-top:80px;
				font-size: 50px
			}
			#white-earphone #white-phone #white-envelope #white-info-sign{
				color: white;
   
			}
		
			.PSUWebsite ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				
			}
			.PSUWebsite li {
				float: left;
			}
			.PSUWebsite li a {
				display: block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}
			.pageWidth{ 
				margin-left: auto; 
				margin-right:auto; 
				margin-top:0; 
				margin-bottom:0;
			}
			.center {
				display: block;
				margin-left: auto;
				margin-right: auto;
				width: 50%;
			}
			
		</style>
	</head>
	
	<body>
		<div class="container-fluid">
				<div class="header jumbotron">
					<img id="image1" src="Images/tutoring-center-sign.png" alt="tutoring-center-sign">
					<h1>Welcome to the PSU Online Tutoring System!</h1>
					<p>The first ever effective way to sign up for your tutoring classes at PSU.</p>
				</div>
			</div>
			
			<nav class="navbar navbar-default pageWidth">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
					<a class="navbar-brand" href="index.html">Tutoring Center</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="aboutus.html">About Us</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="signup.php" target="_blank"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
							<li><a href="login.php" target="_blank"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<br>
		<div id="contact" class="container">
			<h2 class="text-center">Contact</h2>
			<p class="text-center"><em>Want to get to know more about tutors? Don't hesitate to contact us!</em></p>

			<div class="column">
				<div class="column">
				<br>
				  <br>
					<div class = "col-sm-6">
					  <form class="form-horizontal">
						<div class="form-group">
						  <label class="control-label col-sm-4" for="email">Email:</label>
						  <div class="col-sm-8">
							<input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-4" for="subject">Subject:</label>
						  <div class="col-sm-8">          
							<input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-4" for="comments">Comment:</label>
						  <div class="col-sm-8">          
							<textarea class="form-control" id="comments" name="comments" placeholder="Have a comment?" rows="5"></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-4" for="Spam">Spam Control 5 + 2?</label>
						  <div class="col-sm-8">          
							<input class="form-control" id="Spam" name="Spam" placeholder="Type 7 here." type="number">
						  </div>
						</div>
						<div class="form-group">        
						  <div class="col-sm-offset-4 col-sm-8">
							<button id="submit" type="submit" class="btn btn-primary">Submit</button>
						  </div>
						</div>
						<div id="display"></div>
							<script>
								$(document).ready(function(){
								$("#submit").click(function(){
									var em = $("#email").val();
									var sub = $("#subject").val();
									var com = $("#comments").val();
									var spm = $("#spam").val();
									var dataString = 'em1=' + em + '&sub1=' + sub + '&com1=' + com;
									if(em=='' || sub=='' || com==''){
										$("#display").html("<br><div class='alert alert-warning'>Please Fill All Fields.</div>");
									}else if (spm!='7'){
										$("#display").html("<br><div class='alert alert-danger'>Please answer the Spam Question.</div>");
									}else{
										$.ajax({
										type: "POST",
										url: "processor.php",
										data: dataString,
										cache: false,
										success: function(result){
											$("#display").html(result);
										}
										});
									}
									return false;
								});
								});
							</script>
					  </form>
				  </div>
				  
					<div class="col-sm-6">
					  <p><h4>Contact us at:</h4></p>
					  <p><span class="glyphicon glyphicon-map-marker"></span>Student Affairs, Prince Sultan University</p>
					  <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
					  <p><span class="glyphicon glyphicon-envelope"></span>Email: example@psu.edu.sa</p>
					</div>
				</div>
			</div>
			
			<br>
	  
		</div>
			
		<div class = "container-fluid">
				<div class=" footer jumbotron" style="background-color:#1c1c1c; color:white; heigth:80px">
					<div class="PSUWebsite" style="float:left; margin-right:70px;">
						<p>P.O.Box No. 66833 Rafha Street,<br> Riyadh 11586 Saudi Arabia</p>
						<span id="white-earphone" class="glyphicon glyphicon-earphone">00966114948000</span><br>
						<span id="white-phone" class="glyphicon glyphicon-phone">00966114548317</span>
						<ul>
							<li><a href="https://www.youtube.com/user/PSUofficial" target="_blank">
								<img src="Images/youTube.PNG" alt="YouTube Icon" class="img-responsive"></a>
							</li>
							<li><a target="_blank" href="http://www.psu.edu.sa/_layouts/15/PSU/Custom/ParentRegisteration/Login.aspx?ReturnUrl=%2f_layouts%2f15%2fAuthenticate.aspx%3fSource%3d%252F%255Flayouts%252F15%252Ffeed%252Easpx%253Fxsl%253D1%2526web%253D%25252FMediaCenter%25252FNews%2526page%253D3400560f%252D44f4%252D4e87%252Dba2c%252De3719370ed8a%2526wp%253D0f46fcd1%252D382e%252D43c3%252Da223%252D0953a66fad82%2526pageurl%253D%25252FMediaCenter%25252FNews%25252FPages%25252Fdefault%25252Easpx&Source=%2F_layouts%2F15%2Ffeed%2Easpx%3Fxsl%3D1%26web%3D%252FMediaCenter%252FNews%26page%3D3400560f-44f4-4e87-ba2c-e3719370ed8a%26wp%3D0f46fcd1-382e-43c3-a223-0953a66fad82%26pageurl%3D%252FMediaCenter%252FNews%252FPages%252Fdefault%252Easpx">
								<img src="Images/wifi.png" alt="Wifi Icon" class="img-responsive"></a>
							</li>
							<li><a href="https://www.facebook.com/PrinceSultanUniversity/" target="_blank">
								<img src="Images/facebook.png" alt="Facaebook Icon" class="img-responsive"></a>
							</li>
							<li><a href="https://www.linkedin.com/company/prince-sultan-university" target="_blank">
								<img src="Images/linkedin.png" alt="Linked In" class="img-responsive"></a>
							</li>		
							<li><a href="https://twitter.com/PSU_RUH" target="_blank">
								<img src="Images/twitter.png" alt="Twitter Icon" class="img-responsive"></a>
							</li>
							<li><a href="https://www.instagram.com/psu_ruh/" target="_blank">
								<img src="Images/instagram.png" alt="Instagram Icon" class="img-responsive"></a>
							</li>						
						</ul>
					</div>
					<div ><img src="Images/psublacklogo.png" alt="PSU Black Logo" ></div>
					<div id="hyperlink" style="margin:0 auto; float:right;">
						<span id="white-info-sign" class="glyphicon glyphicon-info-sign"><a href="aboutus.html" target="_blank">About Us</a></span>
						<span id=" white-envelope" class="glyphicon glyphicon-envelope"><a href="contact.php" target="_blank">Contact</a></span>
					</div>
				</div>
			</div>

	</body>

</html>