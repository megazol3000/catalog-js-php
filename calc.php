<?php
	$products = $_GET['request'];

	// Открываем документ с данными товаров
if (($file = fopen('price.csv', 'r')) !== false) {
	while(($data = fgetcsv($file, 1000, ";")) !== false) {
		print_r ($data);
	}
}

$json = json_encode($data, true, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
?>