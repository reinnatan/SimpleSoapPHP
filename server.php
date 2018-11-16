<?php
	class server
	{

		private $listDataKunjungan = array(
				array('idPuskemas'=>1,
					'namaPuskemas'=>'Puskesmas A',
					'alamatPuskemas'=>'Sarijadi 1 No 12',
					'teleponPuskemas'=>'123123',
					'provinsi'=>'Jawa Barat',
					'kabupaten/kota'=>'Kota Bandung',
					'kecamatan'=>'Kecamatan Sukagalih',
					'kelurahan/desa'=> 'Sarijadi',
					'jumlahPasienTBC'=>15,
					'jumlahPasienEpidemik'=>10),


				array('idPuskemas'=>2,
					'namaPuskemas'=>'Puskesmas B',
					'alamatPuskemas'=>'Bojong Soang',
					'teleponPuskemas'=>'78943',
					'provinsi'=>'Jawa Barat',
					'kabupaten/kota'=>'Kota Bandung',
					'kecamatan'=>'Kecamatan Bojong Soang',
					'kelurahan/desa'=> 'Bojong Soang',
					'jumlahPasienTBC'=>32,
					'jumlahPasienEpidemik'=>22)

			);

		public function __construct(){


		}

		public function getPuskesmasId($id_array){
			$selectPuskemas = $this->listDataKunjungan[$id_array-1];
			$dataPuskemas = "ID : ".$selectPuskemas['idPuskemas']."<br/>".
							"Nama Puskemas : ".$selectPuskemas['namaPuskemas']."<br/>".
							"Alamat Puskemas : ". $selectPuskemas['alamatPuskemas']."<br/>".
							"Telepon Puskemas : ".$selectPuskemas['teleponPuskemas']."<br/>".
							"Provinsi : ".$selectPuskemas['provinsi']."<br/>".
							"kabupaten : ".$selectPuskemas['kabupaten/kota']."<br/>".
							"Kecamatan : ".$selectPuskemas['kecamatan']."<br/>".
							"Kelurahan : ".$selectPuskemas['kelurahan/desa']."<br/>".
							"Jumlah Pasien TBC: ".$selectPuskemas['jumlahPasienTBC']."<br/>".
							"Jumlah Paisen Epidemik : ".$selectPuskemas['jumlahPasienEpidemik'];
			return $dataPuskemas;
		}

		public function getAllPuskemas($temp){
			$dataPuskemas ="<table border=1><th>ID</th><th>Nama Puskemas</th><th>Alamat Puskemas</th>".
			"<th>Alamat Puskemas</th><th>Telepon Puskemas</th><th>Provinsi</th><th>Kabupaten</th>".
			"<th>Kecamatan</th><th>Kelurahan</th><th>Jumlah Pasien TBC</th><th>Jumlah Pasien Epidemik</th>";
			
			for ($i=0; $i<count($this->listDataKunjungan); $i++){
				$selectPuskemas = $this->listDataKunjungan[$i];

				$dataPuskemas = $dataPuskemas."<tr><td>ID : </td><td>".$selectPuskemas['idPuskemas']."</td>".
							"<td>".$selectPuskemas['namaPuskemas']."</td>".
							"<td>". $selectPuskemas['alamatPuskemas']."</td>".
							"<td>".$selectPuskemas['teleponPuskemas']."</td>".
							"<td>".$selectPuskemas['provinsi']."</td>".
							"<td>".$selectPuskemas['kabupaten/kota']."</td>".
							"<td>".$selectPuskemas['kecamatan']."<br/>".
							"<td>".$selectPuskemas['kelurahan/desa']."</td>".
							"<td>".$selectPuskemas['jumlahPasienTBC']."</td>".
							"<td>".$selectPuskemas['jumlahPasienEpidemik']."</td></tr>";
						
			}

			$dataPuskemas = $dataPuskemas."</table>";
			
			return $dataPuskemas;
		}

	}	

$params = array('uri'=>'soap/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();

?>