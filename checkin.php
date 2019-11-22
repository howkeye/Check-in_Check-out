<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="entry";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



	function check($input){
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		return $input;
	}

  	$name=$email=$phone=$checkin=$checkout="";
	$nameh="";
	$emailh="";
	$phoneh="";
	$checkin=date("d-M-Y  H:i",time());
	

	$name=check($_POST["name"]);
	$email=check($_POST["email"]);
	$phone=check($_POST["phone"]);
	//$checkin=check($_POST["checkin"]);
	//$checkout=check($_POST["checkout"]);
	$nameh=check($_POST["nameh"]);
	$emailh=check($_POST["emailh"]);
	$phoneh=check($_POST["phoneh"]);

	
$sql2 = "SELECT name FROM entry WHERE phone='$phone'";
	//	echo $sql2 ;
		$result=mysqli_query($conn,$sql2);
	//	echo mysqli_num_rows($result);
		if (mysqli_num_rows($result) > 0){
			$message = " Phone No is not unique ";
			echo "<script type='text/javascript'>alert('$message');window.location.href='index.php';</script>";
		}
$sql2 = "SELECT name FROM entry WHERE email='$email'";
	//	echo $sql2 ;
		$result=mysqli_query($conn,$sql2);
	//	echo mysqli_num_rows($result);
		if (mysqli_num_rows($result) > 0){
			$message = " Email No is not unique ";
			echo "<script type='text/javascript'>alert('$message');window.location.href='index.php';</script>";
		}		
	


$sql1="INSERT INTO entry(name,email,phone,checkin,checkout,nameh,emailh,phoneh)
				 VALUES ('$name','$email','$phone','$checkin','0','$nameh','$emailh','$phoneh')";
if(mysqli_query($conn,$sql1)== TRUE){
	  $messege ="Registered successfully";

		echo "<script type='text/javascript'>alert('$messege');window.location.href='index.php';</script>";
	}
		else " error in registration " ;

		echo mysqli_query($conn,$sql1);
		
		
?>

