
<?php
 $con = mysqli_connect("localhost","root","","");
 if(!$con){
   die('not connected'.mysqli_error());
 }

 mysqli_select_db($con,"akademik");
$sql = "DELETE FROM siswa WHERE id=13";
 if(!mysqli_query($con,$sql)){
   die('cannot input'.mysqli_error());
 }

  echo "Success Delete $sql ";
 ?>
