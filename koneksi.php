<?php
 $con = mysqli_connect("localhost","root","","akademik");
  if (!$con){
    die("not connected");
  }
  if(!mysqli_query($con,"create db db_php")){
    echo "success";
  }
  else{
    echo "connected";
  }
  mysqli_close($con);
 ?>
