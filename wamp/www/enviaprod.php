<?php
	$nomepr = $_POST['nome'];
	$contpr = "0";
	$titpro = $_POST['titulo'];
	$valorp = $_POST['valor'];
	$imgpro = $_POST['img'];
	$disppr = $_POST['disp'];
	$garant = $_POST['garant'];
	$codfor = $_POST['fornec'];
	$touchs = $_POST['touch'];
	$format = $_POST['format'];
	$displa = $_POST['displ'];
	$tecnol = $_POST['tec'];
	$wifipr = $_POST['wifi'];
	$blueto = $_POST['bluetooth'];
	$camera = $_POST['cam'];
	$flashp = $_POST['flash'];
	$camfro = $_POST['frontal'];
	$filmad = $_POST['film'];
	$tvprod = $_POST['tv'];
	$radiop = $_POST['radio'];
	$gpspro = $_POST['gps'];
	$nfcpro = $_POST['nfc'];
	$proces = $_POST['proces'];
	$nucleo = $_POST['nucleo'];
	$bandap = $_POST['band'];
	$edgepr = $_POST['edge'];
	$gprspr = $_POST['gprspr'];
	$wappro = $_POST['wappro'];
	$mp3pro = $_POST['mp3pro'];
	$cartme = $_POST['cartme'];
	$soprod = $_POST['soprod'];
	$dtcada = date('Y-m-d h:i:s');
	$codpro = "NULL";
	$marcap = $_POST['marca'];
	$tipopr = $_POST['tipo']; 
	$con = mysql_connect("localhost","admin","admin") or die("Erro de Conexão");
	mysql_select_db("albertogatinha");
	$sql = "insert into produt values ('".$nomepr."', '".$contpr."', '".$titpro."','".$valorp."','".$imgpro."','".$disppr."','".$garant."','".$codfor."','".$touchs."','".$format."','".$displa."','".$tecnol."','".$wifipr."','".$blueto."','".$camera."','".$flashp."','".$camfro."','".$filmad."','".$tvprod."','".$radiop."','".$gpspro."','".$nfcpro."','".$proces."','".$nucleo."','".$bandap."','".$edgepr."','".$gprspr."','".$wappro."','".$mp3pro."','".$cartme."','".$soprod."','".$dtcada."',".$codpro.",'".$marcap."','".$tipopr."')";
	echo $sql;
	mysql_query($sql);
	mysql_close($con);
	header("location:admin1.php");
?>