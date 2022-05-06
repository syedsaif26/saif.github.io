
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airport_management_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['save8'])){
  $admin_id=$_POST['admin_id'];
  $pasword=$_POST['password'];

  $sql="call admin_login('$admin_id','$pasword')";
   $result = mysqli_query($conn, $sql);
   if(mysqli_num_rows($result)>0) {
         echo '<script>alert("hey admin, You have logged in sucessfully! ")</script>';
         include('Adminpage.php');
       }else{
         echo '<script>alert("Inavlid id or Password ")</script>';
         include('Adminloginpage.html');
       }



mysqli_close($conn);

}

if(isset($_POST['save9'])){
   include('Frontpage.html');
}
?>
