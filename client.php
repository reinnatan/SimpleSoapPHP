<?php

class client{

	private $listdomain = array(

			array('location'=>'http://localhost/soap/server.php',
			'uri'=>'urn://soap/server.php',
			'trace'=>1,
			'id_puskemas'=>1,
			'nama_puskemas'=>'Puskemas A'),

			array('location'=>'http://localhost/soap/server.php',
			'uri'=>'urn://soap/server.php',
			'trace'=>1,
			'id_puskemas'=>1,
			'nama_puskemas'=>'Puskemas A')
		);

	public function __construct()
	{
	
	}

	public function setDoamin($id_url){
		$this->instance = new SoapClient(null, $this->listdomain[$id_url]);
	}

	public function getSpesificPuskemas($id_array)
	{
		return $this->instance->__soapCall('getPuskesmasId', $id_array);
	}

	public function getAllPuskemas(){
		return $this->instance->__soapCall('getAllPuskemas', array('data'=>''));
	}

}

$client = new client();


?>