

<?php
$fullname = $_POST['fullname'];
$studentid = $_POST['studentid'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$TutorOrTutoredStudent = $_POST['TutorOrTutoredStudent'];

if(!empty($fullname) || !empty($studentid) || !empty($email) || !empty($pwd) || !empty($TutorOrTutoredStudent)){	
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "TutoringCenter";
	//create connection
	$conn = new  mysqli($host, $username, $password, $dbname);
		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}else{
			$SELECT="SELECT email from register where email = ? Limit 1";
			$INSERT = "Insert Into register(fullname, studentid, email, pwd, TutorOrTutoredStudent) 
			values (?, ?, ?, ?, ?)";
			
			//Prepare statement 
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			header("location:signup2.php");
			if($rnum==0){
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssss", $fullname, $studentid, $email, $pwd, $TutorOrTutoredStudent);
				$stmt->execute();
				echo "New record inserted successfully";
			} else{
				echo "Someone already register using this email";
			}
			$stmt->close();
			$conn->close();
		}
}else{
	echo "All field are required";
	die();
}

?>