<!DOCTYPE html>
<html lang="en">
<head>
	<title>MiteThru</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/mite.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/menus.css">
<!--===============================================================================================-->

</head>

<body>
	<div id="bloc_page">
		<!--#include file="header.html" -->

<body>
	<div id="bloc_page">

<?php
if( isset($_GET['mode'] ) )
{
    $txt= 'freq='.$_GET['freq']. PHP_EOL; 
    $txt.= 'mode='.$_GET['mode']. PHP_EOL; 
    $txt.= 'seuil_video='.$_GET['seuil_video']. PHP_EOL; 
    $txt.= 'duree_video='.$_GET['duree_video']. PHP_EOL; 
    $txt.= 'interval_video='.$_GET['interval_video']. PHP_EOL; 
    file_put_contents('miteThru.conf', $txt);
}

?>


<h2>Configuration effectuée ! </h2>

<p>Il vous faut maintenant débrancher et rebrancher le miteThru pour que la nouvelle configuration soit prise en compte.</p>

<a href="\config.php" class="button">Retour</a>

</body>
<footer height="200">
<p align="center"> L.Roy <a href="mailto:Lise.ROY@cefe.cnrs.fr">Lise.ROY@cefe.cnrs.fr </a> - CEFE - CNRS - 34090 Montpellier</p>
</html>

