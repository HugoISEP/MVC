<?php
	$comments=$_POST['comments'];
	$email=$_POST['email'];
    if (isset($comments)) {
        $position_arobase = strpos($email, '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('moduloheart@gmail.com',"Problème Client", $comments, 'From: ' . $email);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
	
?>