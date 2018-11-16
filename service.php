<?php
	include 'client.php';

	$id_array = array('id'=>'1');
	$client->setDoamin(0);
	echo "<strong>Web Service Spesific Puskesmas</strong><br/>";

	echo $client->getSpesificPuskemas($id_array);

	echo "<br/><br/><strong>Web Service Seluruh Puskesmas</strong>";
	echo $client->getAllPuskemas();
?>