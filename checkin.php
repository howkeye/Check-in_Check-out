<?php

$servername = "";
$username = "root";
$password = "";
$dbname = "entry";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die(" can't connect to server");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



function check($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

$name = $email = $phone = $checkin = $checkout = "";
$nameh = "";
$emailh = "";
$phoneh = "";
$checkin = date("d-M-Y  H:i", time()+19800);


$name = check($_POST["name"]);
$email = check($_POST["email"]);
$phone = check($_POST["phone"]);
//$checkin=check($_POST["checkin"]);
//$checkout=check($_POST["checkout"]);
$nameh = check($_POST["nameh"]);
$emailh = check($_POST["emailh"]);
$phoneh = check($_POST["phoneh"]);


$sql2 = "SELECT name FROM entry WHERE phone='$phone'";
//	echo $sql2 ;
$result = mysqli_query($conn, $sql2);
//	echo mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0) {
    $message = " Phone No is not unique ";
    echo "<script type='text/javascript'>alert('$message');window.location.href='index.html';</script>";
}
$sql2 = "SELECT name FROM entry WHERE email='$email'";
//	echo $sql2 ;
$result = mysqli_query($conn, $sql2);
//	echo mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0) {
    $message = " Email No is not unique ";
    echo "<script type='text/javascript'>alert('$message');window.location.href='index.html';</script>";
}



$sql1 = "INSERT INTO entry(name,email,phone,checkin,checkout,nameh,emailh,phoneh)
				 VALUES ('$name','$email','$phone','$checkin +60*60*5.5','0','$nameh','$emailh','$phoneh')";
if (mysqli_query($conn, $sql1) == TRUE) {


    $replysubject = "Innovaccer--Successful check-in ";
    $replyfrom = "From: Innovaccer@almafiesta.com\r\n";
    $replymessage = "Hello there $name ,\r\n\r\n";
    $replymessage .= "You have successfully check-in .\r\n
     host Name : '$nameh'  \r\n   host email : '$emailh' \r\n   host phone : '$phoneh'";


    $replymessage .= "All the Best !! \r\n\r\n";
    $replymessage .= "<<This e-mail is automated, so please DO NOT reply>>\r\n";

    mail($email, $replysubject, $replymessage, $replyfrom);




    $messege = "Registered successfully";

    echo "<script type='text/javascript'>alert('$messege');window.location.href='index.html';</script>";
} else " error in registration ";
