
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="airport_management_system";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
  die("connection failed :" . mysqli_connect_error());
}

if(isset($_POST['save1'])){
  $emp_id=$_POST['emp_id'];
  $emp_name=$_POST['emp_name'];
  $job=$_POST['job'];
  $salary=$_POST['salary'];





  $sql = "SELECT * FROM airport";
 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
   $new= $row["airport_id"];
   $new1=$row["airport_name"];
   $new2=$row["city"];

}


if(!empty($_POST['Fruit'])) {
      $selected = $_POST['Fruit'];
}
  else{
    echo '<script>alert("You did not selected to  which flight the employee should be added so the flight will not be added to the database pls go back and add the flight number")</script>';
    include("Adminpage.php");
  }

  $sql_query="INSERT INTO employee(emp_id,emp_name,job,salary,airport_id,flight_number)
  VALUES ('$emp_id','$emp_name','$job','$salary','$new',$selected)";
  if (mysqli_query($conn, $sql_query)) {
       echo '<script>alert("details has been entered to database sucessfully and please go back to admin page ")</script>';
       include("Adminpagephp.php");
  } else {
      echo "error:" .$sql  ."" . mysqli_error($conn);
   }


  mysqli_close($conn);
}

 ?>
