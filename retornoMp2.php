<?php
error_reporting(E_ALL);
require_once "lib/mercadopago.php";
$mp = new MP("1423295732402576", "4ZmFVGioagCm9DqfVnDaXdyTUP75nLX2");
$params["access_token"] = $mp->get_access_token();
$ch = curl_init("https://api.mercadolibre.com/merchant_orders/1098928894?access_token=".$params["access_token"]);
curl_exec($ch);
print_r($ch);
?>
