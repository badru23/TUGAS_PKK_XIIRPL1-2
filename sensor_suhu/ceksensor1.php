<?php 
$konek = mysqli_connect("localhost", "root", "", "websensor");
$sql = mysqli_query($konek, "select * from sensor order by id desc"); //data terbaru ada diatas
$data = mysqli_fetch_array($sql);
$suhu = $data["nilai_sensor1"];
if( $suhu == "" ) $suhu = 0;
echo  $suhu."<sup>o</sup>C ";
 ?>