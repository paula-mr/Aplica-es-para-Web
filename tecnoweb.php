<?php
	$tecnoweb = fopen("tecnoweb.txt", "r") or die("Erro ao abrir arquivo!");
	$arrayFinal = array();
	while (!feof($tecnoweb)) {
		$linha = fgets($tecnoweb);
		$linha = explode("=", $linha);
		$arrayFinal[$linha[0]] = $linha[1];
	}
	fclose($tecnoweb);
	ksort($arrayFinal);
	$tecnoweb = fopen("tecnoweb.txt", "w") or die ("Erro ao abrir arquivo!");
	foreach ($arrayFinal as $key => $value) {
		fwrite($tecnoweb, $key . " = " . $value);
	}
	fclose($tecnoweb);
?>