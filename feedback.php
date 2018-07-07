
<?php
session_start();?>
<?php
  include 'connection.php';
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $_SESSION["name"] = "$name";


  if(!isset($error_message)) {
  $query = "INSERT INTO messages (name,email,message) VALUES
  ('" . $_POST["name"] . "', '" . $_POST["email"] ."','". $_POST["message"] ."')";
  $result=mysqli_query($con,$query) or die ("error:".mysqli_errno($con));
  if(!empty($result)) {
    unset($_POST);
    header("Location: index.php");
  } else {
    echo "Problem in commenting. Try Again!"; 
  }
}

?>