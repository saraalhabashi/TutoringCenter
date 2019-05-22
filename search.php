
<?php 
	
	$connection= mysqli_connect('localhost', 'root','','TutoringCenter');
	
	if (!$connection){ die("Unable to connect");}
	
	if (isset($_POST['submit'])){
	
		
	
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	
	
	$query1 = "select * from register where email= '$email' and pwd = '$password' ";
	$result = mysqli_query($connection,$query1);

	
	 if(mysqli_num_rows($result) == 1 ) {
		 session_start();
	     $row = mysqli_fetch_assoc($result);
   	 
   	 	$_SESSION['id'] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];
         
         header("location:login2.php");

	 	if(isset($_POST['checkbox'])){
	 	echo "checkbox is checked<br>";
	
	setcookie("fullname" , $_POST['fullname'], time()+(86400*3));
		if(isset($_COOKIE['fullname'])){echo "fullname cookie is set<br>";}
	
  	setcookie("password", $_POST['password'], time()+(86400*3));
  	if(isset($_COOKIE['pwd'])){echo "password cookie is set<br>";}
  	
  		if(isset($_SESSION['id'])){echo "id session is set<br>";}
  		if(isset($_SESSION['fullname'])){echo "fullname session is set<br>";}
 		   }
 	
 		  }
		 else {
		
 		   echo "Invalid email or password<br>";
		} 
		
 }

   

	mysqli_close($connection);