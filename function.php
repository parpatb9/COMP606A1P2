<?php
include('dbcon.php');

function showname($uid){
  global $con;

  $sql = "SELECT `fname` FROM `users` WHERE `uid`='$uid'";
  $run = mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
  {
    $data = mysqli_fetch_assoc($run);
    echo $data['fname'];
  }
  else {
    echo "Unauthorized Access.";
    exit();
  }





}
?>
