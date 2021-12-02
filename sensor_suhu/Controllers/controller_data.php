<?php 

	/**
	 * control data
	 */
	class Controller_data
	{
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $Mdata;

	var $id;
	var $nilai_sensor1;
	var $nilai_sensor2;
	var $tanggal;
	var $waktu;


		function __construct()
		{
			include 'model.php';
			$this->Mdata = new model_data();
		}

		function GetData_All()
		{
			//perintah GET data
			return $this->Mdata->GET();
		}
	}


 ?>