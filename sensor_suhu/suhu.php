<?php
  include 'Controllers/controller_data.php';
  // membuat objek dari class kelas
  $data = new controller_data();
  $Getdata = $data->GetData_All();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .suhu {
            background-image : url("images/pexels-stephan-seeber-1054218.jpg");
            background-size :cover;
            background-repeat :no-repeat;
            background-position :center;
            margin:0;
            padding:0;
        }
        .main {
            font-family :"times-newroman";
            color :white;
            padding-top:70px;
            padding-bottom :65px;
        }
        .content {
          background :rgba(0,0,0,0.5);
          margin-left:auto;
          margin-right:auto;
          font-family :"times-newroman";s
        }
    </style>

    <title>PENDETEKSI SUHU RUANGAN</title>
	<link rel="shortcut icon" href="images/logoSMKN4.png"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </head>
  <body>
    <!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="index.php">PENDETEKSI SUHU</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
				<a class="nav-link active" href="index.php">HOME</a>
				</li>
				<li class="nav-item">
				<a class="nav-link active" href="about.php">ABOUT</a>
				</li>
				<li class="nav-item">
				<a class="nav-link active" href="contact.php">CONTACT</a>
				</li>
			</ul>
			</div>
		</div>
		</nav>
    
        <div class="suhu">
        <div class="main">
          <div class="container">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3s" data-aos="fade-down"  data-aos-duration="2000">
              <div>
                <h2 id="waktu" class="card-title1"></h2>
                <h3><?php date_default_timezone_set('Asia/Jakarta'); $tanggal=date('l, d/m/Y'); echo $tanggal;?>
              </div>
              <div>
                <h4  >SMK Negeri 4 , Kota Bogor</h4>
                <h3 class="text-end">Indonesia</h3>
              </div>
          </div>
         </div>
       </div>

          <div class="content">
          <div class="container">
          <h2 class="pt-5 pb-3 text-center text-light" data-aos="fade-down"  data-aos-duration="2000">NILAI SENSOR</h2>
        <div class="row row-cols-1 row-cols-md-2 mb-2 pt-3 pb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" data-aos="fade-right"   data-aos-duration="2000">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Suhu</h4>
          </div>
          <div class="card-body pt-5 pb-5">
          <h1><span id="ceksensor1"> 0 </span></h1>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" data-aos="fade-left" data-aos-duration="2000">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Kelembaban</h4>
          </div>
          <div class="card-body pt-5 pb-5">
          <h1><span id="ceksensor2"> 0 </span></h1>
          </div>
        </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- table -->
        <div class="container">
        <h2 class="pt-3 pb-4 text-center text-dark" data-aos="fade-down"  data-aos-duration="2000">DATA TERAKHIR</h2>
        <table class="table table-striped  table-bordered  pb-5">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">ID</th>
              <th scope="col">Data Suhu 1</th>
              <th scope="col">Data Suhu 2</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Waktu</th>
            </tr>
          </thead>
          <tbody>
        <?php 

              //decision validasi variabel
              if (isset($Getdata)) {
                $no = 1;
                foreach ($Getdata as $Get) {
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $Get['id']; ?></td>
                    <td><?php echo $Get['nilai_sensor1']; ?></td>
                    <td><?php echo $Get['nilai_sensor2']; ?></td>
                    <td><?php echo $Get['tgl']; ?></td>
                    <td><?php echo $Get['waktu']; ?></td>
                  </tr>
                  <?php 
                }
              }
            ?>
        </tbody>
        </table>
        </div>

       <div class="bg-dark pb-1 mt-5">  
      <div class=" container">
        <footer class="  py-3 my-4 border-bottom ">
          <p class="text-center text-light">REKAYASA PERANGKAT LUNAK</p>
          <p class="text-center text-light">TEKNIK KOMPUTER DAN JARINGAN</p>
        </footer>
      </div>
      </div>   
            

        
	<!-- DATA REALTIME -->
     <script type="text/javascript">
    	$(document).ready( function() {
    		setInterval( function() {
    			$("#ceksensor1").load("ceksensor1.php");
    			$("#ceksensor2").load("ceksensor2.php");
    		}, 1000 );

    	}, );
    </script>
   <script>
        var myVar = setInterval(myTimer);

        function myTimer() {
        var d = new Date();
        var t = d.toLocaleTimeString();
        document.getElementById("waktu").innerHTML = t;
        }
    </script>
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>