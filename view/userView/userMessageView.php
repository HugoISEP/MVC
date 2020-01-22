<!DOCTYPE html>
<html>

<head>

<title>Message</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="./css/userMessage.css"/>

</head>

<body>

<?php ob_start(); ?>
<center><p class="titre"> Send us a message </p></center>
<center><form method="post" action="index.php?action=help&amp;action2=message">
<center><p class="typeofproblem">Type of the problem :                               
		<select name="typeOfProblem" id="typeOfProblem" required>
			<option value="Beginning" selected disabled>Choose...</option>
			<option value="Temperature">Temperature sensor</option>
			<option value="Heartbeats sensor">Heartbeat sensor</option>
			<option value="Microphone">Microphone</option>
		</select>
	</p></center>
<br/>
<p>
<label for="problemExplenation"class="typeofproblem">Comments about your problem :</label><br/><br/>
<textarea name="problemExplenation" id="problemExplenation" class="typeofproblem" rows="10" cols="75"></textarea>
    <input type="submit" value="Send" class="bouton"/>
</p>
</form></center>
<div class="message">
<?php
while ($messages = $listMessages->fetch()){
if($messages['email_user'] == $_SESSION['email_user']){
            echo '<p>You :';
        } else{
            echo 'center :';
        }
        echo $messages['message_content'] . ' ' . $messages['date_and_time'] .'<p>';
}
?>
</div>
<?php $content = ob_get_clean();
require('templateView.php') ?>
</body>

</html>
