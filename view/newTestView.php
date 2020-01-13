<!DOCTYPE html>
<html>

<head>

<title>New Test</title>

<meta charset="utf-8"/>
<link rel="stylesheet" href="../css/newTest.css" />
</head>

<body>
<?php ob_start(); ?>
	<center><p id="titre">NEW TEST</p></center>
	<br/><br/><br/><br/>

	<p class="captor">Which captor are you using ?
		<select name="question" id="question">
			<option value="debut">Choose...</option>
			<option value="temperature">Capteur de température</option>
			<option value="frequence_cardiaque">Capteur de frequence cardiaque</option>
			<option value="tonalite_sonore">Microphone</option>
		</select>
	</p>
	<br/>

<?php/* $jour=date('d');$mois=date('m');$annee=date('Y');$heure=date('H');$minute=date('i');
echo 'Date : ' . $jour . '/' . $mois . '/' . $annee  . ' à ' . $heure . ':' . $minute;*/?>

<center><input type="submit" value="Begin" class="bouton"/></center>
<br/><br/><br/><br/><br/>

<hr width="50%" color="black"> 


<br/><br/><br/><br/>
<center><p> If you have a problem with a captor, please go to the section :</p></center>
<br/><br/><br/>

<a href="../index.php?action=help" style="text-decoration:none"><center><input type="submit" value="Help" class="bouton"/></center></a>
<?php $content = ob_get_clean();
require('templateView.php'); ?>
</body>


</html>
