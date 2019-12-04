<?php
 $con = mysqli_connect("localhost","root","","");
 if(!$con){
   die('not connected'.mysqli_error());
 }

 mysqli_select_db($con,"akademik");
 $sql ="INSERT INTO siswa(Nama, Umur) VALUES ('Aldo', 20)";
 if(!mysqli_query($con,$sql)){
   die('cannot input'.mysqli_error());
 }

  echo "Success insert $sql";
 ?>
