<?php
require_once "../../../lib/mercadopago.php";

$mp = new MP('1423295732402576', '4ZmFVGioagCm9DqfVnDaXdyTUP75nLX2');
$preference_data = array(
	"items" => array(
		array(
			"id" => "9789",
			"title" => "ITEM_FOGO",
			"currency_id" => "BRL",
			"description" => "Teste",
			"category_id" => "Bala",
			"quantity" => 3,
			"unit_price" => 1
		)
	),
	"payer" => array(
		"name" => "Bruno",
		"surname" => "Geronimo da Silva",
		"email" => "geronimo.bruno@gmail.com",
		"date_created" => "2015-03-27T15:24:00.521-03:00",
		"phone" => array(
			"area_code" => "11",
			"number" => "43116673"
		),
		"identification" => array(
			"type" => "CPF",
			"number" => "412.609.808-98"
		),
		"address" => array(
			"street_name" => "Rua teste",
			"street_number" => 627,
			"zip_code" => "03454030"
		)
	),
	"back_urls" => array(
		"success" => "https://pennatec.websiteseguro.com/teste/retornoMp.php",
		"failure" => "https://pennatec.websiteseguro.com/teste/retornoMp.php",
		"pending" => "https://pennatec.websiteseguro.com/teste/retornoMp.php"
	),
	"auto_return" => "approved",
	"shipments" => array(
		"receiver_address" => array(
			"zip_code" => "03454030",
			"street_number"=> 205,
			"street_name"=> "Rua Natal Meira de Barros",
			"floor"=> 2,
			"apartment"=> "24A"
		)
	),
	"notification_url" => "https://pennatec.websiteseguro.com/teste/retornoMp.php",
	"external_reference" => "SOINJECAO",
	"expires" => false,
	"expiration_date_from" => null,
	"expiration_date_to" => null
);
$preference = $mp->create_preference($preference_data);
?>

<!doctype html>
<html>
	<head>
		<title>MercadoPago SDK - Create Preference and Show Checkout Example</title>
	</head>
	<body>
		<a href="<?php echo $preference["response"]["init_point"]; ?>" name="MP-Checkout" class="orange-ar-m-sq-arall">Pay</a>
		<script type="text/javascript" src="http://mp-tools.mlstatic.com/buttons/render.js"></script>
	</body>
</html>
