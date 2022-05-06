<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Flightschedule</title>
    <link rel="stylesheet" href="css/flightschedule.css">
  </head>
  <body>
        <h3 class=" choosehead text-center">Schedule of FLIGHTS:</h3>
  </body>
</html>


<?php
$servername    = "localhost";
$username    = "root";
$password    = "";
$db_name = "airport_management_system";

//create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

//test if connection failed
if(!$conn){
  die("connection failed :" . mysqli_connect_error());
}

//get results from database
$result = mysqli_query($conn,"SELECT * FROM flights");
$all_property = array();  //declare an array for saving property

//showing property
echo '<div class="flightList container">';
echo  '<div class="row flightHeader">  ';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '  <div class=" col-sm-2">';
    echo '<h4 class=" text-center">'. $property->name. '</h4>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
    echo '</div>';
   }
echo '</div>';


while ($row = mysqli_fetch_array($result)) {
    echo '<div class="flightsMain">
              <div class="allFlights">
              <div class="row flight 4563 id="4563">';
    foreach ($all_property as $item) {
        echo '<h5 class="col-sm-2 text-center srno ">' . $row[$item]. '</h5>'; //get items using property value
    }
    echo '</div>
           </div>
           </div>';
}
echo "</div>";



?>
