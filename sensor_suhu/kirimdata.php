<?php 

$konek=mysqli_connect("localhost", "root", "", "websensor");
$nilai1=$_GET['suhu1'];
$nilai2=$_GET['suhu2'];
$data=mysqli_query($konek,"select * from mode");
$data1=mysqli_fetch_array($data);
$mode=$data1['mode'];

date_default_timezone_set('Asia/Makassar');
$tgl   =date('Y-m-d');
$waktu =date('H:i:s');

if ($mode==1)
{
	mysqli_query($konek, "insert into sensor (nilai_sensor1, nilai_sensor2,tgl,waktu) values('$nilai1','nilai2','$tgl','$waktu')");

}

$tampil=mysqli_query($konek,"select * from sensor order by id desc limit 1");
	while($r=mysqli_fetch_array($tampil))
		{
			$id=$r[0];
			mysqli_query($konek, "update sensor set nilai_sensor1='$nilai1',nilai_sensor2='$nilai2', tgl='$tgl', waktu='$waktu' where id='$id'");
		}

 ?>
