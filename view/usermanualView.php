<!DOCTYPE html>
<html>

<head>

<title> Usermanual </title>

<meta charset="utf-8"/>
<link rel="stylesheet" href="./css/usermanual.css" />




</head>
<body>
<?php ob_start(); ?>
	<form method="post">
	<h2 class="titi"> USER MANUAL </h2>
	<div class="information">
	 Les informations seront mise à jour lorsque nous suarons comment fontionne la carte électronique qui sera relié au site
    </div>
		<br>
		<br>
	</form>
<?php $content = ob_get_clean();
require ('templateView.php')?>
</body>