<!DOCTYPE html>
<html lang="en">


<head>
    <title>Entry Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url(data/img1.jpg) ; background-repeat: no-repeat;  height: 100%; font-family: 'Ibarra Real Nova', serif;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;  "><b>

        <nav class="navbar navbar-default" style="background-color:rgb(256,256,256,1);" ;>
            <div class="container-fluid">
                <div class="navbar-header">
                    <h1>Innovaccer</h1>
                </div>
                <ul class="nav navbar-nav">

                    <li><a href="index.html">Checkin</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                    <li><a href="list.php"> List of all customers </a></li>

                </ul>
            </div>
        </nav>



        <head>
            <title>Entry Management</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        </head>

        <div class="container" style="background-color:rgb(256,256,256,1);">

            <center>
                <br>
                <h4>
            </center>

            <table class="table table-hover">
                <thead>
                    <tr>

                        <th>Name </th>
                        <th>Phone</th>
                        <th> Check-in time </th>
                        <th> Host Name </th>
                        <th> checkout </th>
                    </tr>


                    <?php

                    $servername = "";
                    $username = "root";
                    $password = "";
                    $dbname = "entry";

                    $conn = mysqli_connect($servername, $username, $password, $dbname) or die(" can't connect to server");


                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    echo "";
                    $sql = "SELECT name, phone,checkout,checkin,checkout,nameh FROM entry ";

                    //  echo $sql2 ;
                    $result = mysqli_query($conn, $sql);
                    //  echo mysqli_num_rows($result);
                    $count = 0;
                    $result = $conn->query($sql);

                    $row = $result->fetch_assoc();
                    echo '<tr> </td>'
                        . '<td>' . $row["name"] . "</td> <td> " . $row['phone'] . "</td> <td> " . $row['checkin'] . "</td> <td> " . $row['nameh'] . "</td> <td> " . $row['checkout'];

                    echo "<br>";
                    while ($row = $result->fetch_assoc()) {
                        $count++;

                        if (1) {
                            echo '<tr> '
                                . '<td>' . $row["name"] . "</td> <td> " . $row['phone'] . "</td> <td> " . $row['checkin'] . "</td> <td> " . $row['nameh'] . "</td> <td> " . $row['checkout'];

                            echo "<br>";
                        }
                    }
                    echo '</table>';



                    ?>
                    <h3 style="color:red;"> 0 in check-out indicates that user has not checked-out yet.</h3>
                    </h4>

        </div>
        </form>
        </div>
</body>

</html>