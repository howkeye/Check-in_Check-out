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
echo "Connected successfully";


function check($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

$name = $email = $phone = $checkin = $checkout = "";




$phone = check($_POST["phone"]);
$checkout = date("d-M-Y  H:i", time() + 19800);




$sql1 = "UPDATE entry SET checkout='$checkout' WHERE phone='$phone'";


if (mysqli_query($conn, $sql1) == TRUE) {

    $sql1 = "select Name,email,emailh,phone,nameh From entry Where phone='$phone'";





    $count = 0;
    $result = $conn->query($sql1);


    if ($row = $result->fetch_assoc()) {
        $count++;
    }
    $name = $row['Name'];
    $email = $row['email'];
    $emailh = $row['emailh'];

    $phone = $row['phone'];
    $nameh = $row["nameh"];


    $replysubject = "Innovaccer--Successful check-in ";
    $replyfrom = "From: Innovaccer@almafiesta.com \r\n";
    $replymessage = "Hello there $nameh ,\r\n\r\n";
    $replymessage .= "You Visiter has been succesfully checked out .\r\n
     Visiter Name : '$name'  \r\n   Visiter email : '$email' \r\n   Visiter phone : '$phone'";


    $replymessage .= "All the Best !! \r\n\r\n";
    $replymessage .= "<<This e-mail is automated, so please DO NOT reply>>\r\n";

    mail($emailh, $replysubject, $replymessage, $replyfrom);



    $messege = "Checkout is successfull";
    echo "<script type='text/javascript'>alert('$messege');window.location.href='index.html';</script>";
    echo "  is  registered Successfully ";
} else " error in registration ";
