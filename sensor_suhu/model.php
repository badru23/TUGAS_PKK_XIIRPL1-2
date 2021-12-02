<?php 

	/**
	 * model data
	 */
	class Model_data
	{
		//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $id;
	var $nilai_sensor1;
	var $nilai_sensor2;
	var $tanggal;
	var $waktu;




	//method main variabel
		function __construct()
		{
			//membuat objek dari data database
			include 'konek.php';
			$this->db = new konek();
			$this->con = $this->db->connect();
		}
	
		function GET()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select * from sensor order by id desc LIMIT 5");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}

	}

 ?>