<?php
 $con = mysqli_connect("localhost","root","","");

 mysqli_select_db($con,"akademik");
 $sql ="CREATE TABLE siswa(ID int NOT NULL AUTO_INCREMENT,PRIMARY KEY(ID), Nama varchar(15),Umur int)";
  mysqli_query($con,$sql);
  mysqli_close($con);
  echo "Success $sql ";
 ?>
