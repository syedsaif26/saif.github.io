<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin page</title>
    <link rel="stylesheet" href="css/Adminpage.css">
  </head>
  <body class="separetephpfile">
    <h5>Click on the below button to go back to Ticketbooking page</h5>
    <div class="new_button">
      <a class="button " href="Ticketbooking.html" class="">Ticket Page</a>
    </div>

    <h5>Click on the below button to go back to main page</h5>
    <div class="new_button">
      <a class="button " href="Frontpage.html" class="">Home page</a>
    </div>

  </body>
</html>


<?php
$servername="localhost";
$username="root";
$password="";
$database_name="airport_management_system";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn){
  die("connection failed :" . mysqli_connect_error());
}

if(isset($_POST['save5'])){
  $p_id=$_POST['p_id'];
  $passenger_name=$_POST['passenger_name'];
  $city=$_POST['city'];
  $flying_from=$_POST['flying_from'];
  $flying_to=$_POST['flying_to'];
  $departing_date=$_POST['departing_date'];

  $class = $_POST['optradio'];
   if ($class == "First_class") {
        $price='20000'  ;
   }
  else if ($class == "Economy_class"){
         $price='25000';
   } else {
          $price='30000';
   }
   $new=rand();
   $ticket_number=$p_id.''.$new;




   $sql = "SELECT flight_number,no_of_seats FROM flights WHERE destination='$flying_to'";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result)>0) {
 // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
            $new=$row["flight_number"];
            $new1=$row["no_of_seats"];
      }
    } else {
        echo '<script>alert("There is no flights available")</script>';
     }


     $sql_query1 = "INSERT INTO passenger (p_id, passenger_name, city,flight_number)
     VALUES ('$p_id', '$passenger_name', '$city','$new')";


    $seat_number=rand(10,$new1);

     $sql_query="INSERT INTO tickets (ticket_number,seat_number,passenger_name,flying_to,flying_from,departing_date,price,class,flight_number,p_id)
     VALUES ('$p_id','$seat_number','$passenger_name','$flying_to','$flying_from','$departing_date','$price','$class','$new','$p_id')";


     if (mysqli_query($conn, $sql_query1)) {
       if (mysqli_query($conn, $sql_query)) {
             echo '<script>alert("details has been entered to database sucessfully and please go back to admin page ")</script>';
           }

     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

     mysqli_close($conn);
   }



?>
