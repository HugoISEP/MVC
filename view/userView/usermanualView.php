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
	<div class="information">The information will be updated during the implementation with the electronic card that will be connected to the site.</div>
		<br>
		<br>
	</form>
<?php $content = ob_get_clean();
require('templateView.php') ?>
</body>