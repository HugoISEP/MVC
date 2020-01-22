<!DOCTYPE html>
<html>

<head>

<title> Project Display </title>

<meta charset="utf-8"/>
<link rel="stylesheet" href="usermanual.css" />




</head>
<body>
<?php ob_start(); ?>
	<form method="post">
	<h2 class="titi">Project Display </h2>
	<div class="information">
	This project has led to the creation of a platform, this site, which will be used to store, endorse and display psychotechnical test data.

	</form>

<?php $content = ob_get_clean();
require('templateView.php') ?>
</body>