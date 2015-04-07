<?php
	// Include Mercadopago library
	$codigoTransacao = ((isset($_GET['collection_id'])) ? $_GET['collection_id'] : die());
	if (!is_numeric($codigoTransacao)){die();}
	require_once "lib/mercadopago.php";
	$mp = new MP("1423295732402576", "4ZmFVGioagCm9DqfVnDaXdyTUP75nLX2");
	$token_login = $mp->get_access_token();
	$ch = curl_init("https://api.mercadolibre.com/collections/".$codigoTransacao."?access_token=".$token_login);
	curl_exec($ch);
	die(print_r($ch));
?>
