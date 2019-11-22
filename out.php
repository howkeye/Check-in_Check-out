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
echo "Connected successfully";


  function check($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
  }

    $name=$email=$phone=$checkin=$checkout="";

 
  

  $phone=check($_POST["phone"]);
  $checkout=date("d-M-Y  H:i",time());
  

  
  
$sql1 = "UPDATE entry SET checkout='$checkout' WHERE phone='$phone'";

if(mysqli_query($conn,$sql1)== TRUE){
   $messege ="Checkout is successfull";
  echo "<script type='text/javascript'>alert('$messege');window.location.href='index.php';</script>";
    echo "  is  registered Successfully ";}
    else " error in registration " ;

    echo mysqli_query($conn,$sql1);
    
    
?>

