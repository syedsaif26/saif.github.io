<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin page</title>
    <link rel="stylesheet" href="css/Adminpage.css">
  </head>
  <body class="separetephpfile">
    <h5>Click on the below button to go back to admin page</h5>
    <div class="new_button">
    <a class="button" href="Adminpage.php" class="">Admin Page</a>
  </div>
    <h5>Click on the below button to go back to main page</h5>
    <div class="new_button">
    <a class="button" href="Frontpage.html" class="">Home page</a>
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
if(isset($_POST['save'])){
  $flight_number=$_POST['flight_number'];
  $flight_company=$_POST['flight_company'];
  $departing_time=$_POST['departing_time'];
  $arrival_time=$_POST['arrival_time'];
  $no_of_seats=$_POST['no_of_seats'];
  $source=$_POST['source'];
  $destination=$_POST['destination'];

  $sql_query="INSERT INTO flights(flight_number,flight_company,departing_time,arrival_time,no_of_seats,source,destination)
  VALUES ('$flight_number','$flight_company','$departing_time','$arrival_time','$no_of_seats','$source','$destination')";
  if(mysqli_query($conn,$sql_query)){
        echo '<script>alert("details has been entered to database sucessfully and please go back to admin page ")</script>';

    }
   else{
       echo "error:" .$sql  ."" . mysqli_error($conn);
   }

   mysqli_close($conn);
}

if(isset($_POST['save2'])){
  $flight_number=$_POST['flight_number'];
  $sql = "SELECT * FROM flights WHERE flight_number=$flight_number";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result)>0) {
      $sql_query= "DELETE FROM flights WHERE flight_number=$flight_number";
      if ($conn->query($sql_query) === TRUE) {
        echo '<script>alert("details has been deleted from the database sucessfully and please go back to admin page ")</script>';
      }
      } else {
             echo '<script>alert("soory, the given flight number does not exists in database  please go back to admin page and give a valid input")</script>';
      }

   mysqli_close($conn);
}






if(isset($_POST['save3'])){
  $emp_id=$_POST['emp_id'];
  $sql = "SELECT * FROM employee WHERE emp_id=$emp_id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      $sql_query= "DELETE FROM employee WHERE emp_id=$emp_id";
      if ($conn->query($sql_query) === TRUE) {
      echo '<script>alert("details has been deleted from the database sucessfully  and please go back to admin page ")</script>';
      }
      } else {
             echo '<script>alert("sorry, the given employee id  does not exists in database  please go back to admin page and give a valid input")</script>';
      }

   mysqli_close($conn);

}
