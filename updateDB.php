<?php
 $con = mysqli_connect("localhost","root","","");
 if(!$con){
   die('not connected'.mysqli_error());
 }

 mysqli_select_db($con,"akademik");
$sql = "UPDATE siswa SET Umur=32 WHERE id=9";
 if(!mysqli_query($con,$sql)){
   die('cannot input'.mysqli_error());
 }

  echo "Success Update $sql ";
 ?>
