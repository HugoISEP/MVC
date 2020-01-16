<!DOCTYPE html>
<html>

<head>

<title>Message</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="stylemessage.css"/>
<link rel="stylesheet" href="../../css/Menu.css"/>
<link rel="stylesheet" href="../../css/footer.css"/>

</head>

<body>

<?php INCLUDE('../Settings/Menu.php') ?>

<center><p class="titre"> Send us a message </p></center>

<center><p class="typeofproblem">Type of the problem :                               
		<select name="problem" id="problem">
			<option value="debut">Choose...</option>
			<option value="temperature">Capteur de température</option>
			<option value="frequence_cardiaque">Capteur de frequence cardiaque, here we go</option>
			<option value="tonalite_sonore">Microphone</option>
		</select>
	</p></center>
<br/><br/><br/>

<center><form method="post" action="messagetraitement.php">
<p>
<label for="email" class="typeofproblem"> Votre adresse mail :</label>
		<input type="email" name="email" id="email"/>
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
	
	<?php INCLUDE('../Settings/footer.php') ?>

</body>

</html>
