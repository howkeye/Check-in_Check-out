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

<body>


    <head>
        <title>Entry Management</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>

  

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <h1>Innovancer</h1>
                </div>
                <ul class="nav navbar-nav">

                    <li><a href="index.php">Checkin</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                    <li><a href="list.php">List of Custmers</a></li>
                   
                   
                </ul>
            </div>
        </nav>








     
           

        <div class="container"> 
                <form action="out.php" method="post">
                    <center>     <div class="form-group"> 
                  <h3>    ------- Select Person to checkout-----------------</h3>
                  <br>
                  <h4></center>

                                      <table class="table table-hover">
                <thead>
      <tr>
        <th> </th>
        <th>Name </th>
        <th>Phone</th>
        <th> Check-in time </th>
        <th> Host Name </th>
        <th> 
      </tr>
                

                          <?php  
                              $servername = "localhost";
                     $username = "root";
                    $password = "";
                    $dbname="entry";
                    // Create connection
                    $conn = new mysqli($servername, $username, $password,$dbname);

                     // Check connection
                     if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);}
                      echo "";
                      $sql = "SELECT name, phone,checkout,checkin,nameh FROM entry ";

    //  echo $sql2 ;
        $result=mysqli_query($conn,$sql);
    //  echo mysqli_num_rows($result);
                   $count=0;
                      $result = $conn->query($sql);
                          
                          $row = $result->fetch_assoc();
                           echo '<tr> <td><input type="radio" name="phone" value='.$row["phone"].' checked > </td>'
                                .'<td>'.$row["name"]."</td> <td> ".$row['phone']."</td> <td> ".$row['checkin']."</td> <td> ".$row['nameh'] ;
                         
                           echo "<br>";
                          while($row = $result->fetch_assoc()) {$count++;
        
                            if($row["checkout"]=='0' ){
                           echo '<tr> <td><input type="radio" name="phone" value='.$row["phone"].' > </td>'
                                .'<td>'.$row["name"]."</td> <td> ".$row['phone']."</td> <td> ".$row['checkin']."</td> <td> ".$row['nameh'];
                         
                           echo "<br>";}
                        

                        }
                        echo '</table>';
                        if (($count)== 0){
            $message = " No Check-ins Found....First Checkin a visiter";
          
        }


                        ?>    </h4>  

                    </div>
                        

                    


                       <center>

              <!--      <div class="form-group">
                      <label for="datetime"><h3><b>Checkout time:<b></label>
                      <input type="datetime" class="form-control" name="checkout" id="checkout">
                    </div>  -->
                  
                    <button type="submit" class="btn btn-default">Submit</button>
                    </center>
                  </form>
        </div>




    </body>

    </html>