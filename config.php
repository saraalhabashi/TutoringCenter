<?php
	//include_once('tutoringcenter.php');
	$con =  mysqli_connect("localhost","root","","tutoringcenter");
		if( mysqli_connect_errno()){
			echo "Falied to connect to MySql: ". mysqli_connect_error();
		}else{
			echo "";
		}
?>