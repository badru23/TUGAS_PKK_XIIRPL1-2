<?php 
$konek = mysqli_connect("localhost", "root", "", "websensor");
$sql = mysqli_query($konek, "select * from sensor order by id desc");
$data = mysqli_fetch_array($sql);
$kelembaban = $data["nilai_sensor2"];
if( $kelembaban == "" ) $kelembaban = 0;
echo $kelembaban. "<sup>o</sup>RH "; 
 ?>