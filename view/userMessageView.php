<!DOCTYPE html>
<html>

<head>

<title>Message</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="stylemessage.css"/>

</head>

<body>
<?php ob_start(); ?>
<center><p class="titre"> Send us a message </p></center>
<center><form method="post" action="../anciennes_pages/Contact%20Us/messagetraitement.php">
<center><p class="typeofproblem">Type of the problem :                               
		<select name="problem" id="typeProblem">
			<option value="debut" disabled="disabled">Choose...</option>
			<option value="temperature">Temperature Sensor</option>
			<option value="frequence_cardiaque">Heart Rate Sensor</option>
			<option value="tonalite_sonore">Microphone</option>
            <option value="other">Other</option>
		</select>
	</p></center>
<br/><br/><br/>
<p>
<br/><br/><br/><br/><br/>
<label for="comments"class="typeofproblem">Comments about your problem :</label><br/><br/>
<textarea name="comments" id="comments" class="typeofproblem" rows="5" cols="150"></textarea>
</p>
</form></center>
<?php
    if (isset($_POST['comments'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('moduloheart@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
<br/><br/>
<input type="submit" value="Send" class="bouton"/>
<?php $content = ob_get_clean(); ?>
</body>

</html>
