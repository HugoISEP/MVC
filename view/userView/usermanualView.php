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
	<div class="information">Lorsque vous arrivez sur la page d’accueil de notre site, plusieurs options s’offrent à vous.Si vous n’avez pas encore de compte chez nous, il est nécessaire d’en créer un.Pour ce faire, il vous suffit de cliquer sur le bouton en bas de page intitulé “New Client”.
        Une fois que vous arrivez sur cette page, il vous suffit de remplir les champs vides avec vos informations personnelles, ces dernières étant évidemment protégées.
        Une fois cela effectué, vous devez cliquer sur le bouton “Sign Up”.Vous êtes alors redirigé vers la page de connexion.Que vous veniez de créer votre compte ou que soyez déjà un de nos utilisateurs, vous devez vous authentifier en remplissant les champs d’identification.Une fois cela fait, vous accédez à votre profil.

        De là, vous pouvez accéder aux résultats de vos tests en cliquant sur “General data”(pour l’instant cette fonctionnalité n’a pas été correctement implémentée).
        Vous pouvez aussi effectuer un nouveau test en cliquant sur “New Test”, nous vous expliquerons plus bas comment vous y prendre.

        Et si vous avez besoin d’aide, le bouton “Help” rassemble toutes les fonctionnalités permettant de répondre aux interrogations des utilisateurs.

        À partir de la page “Help”,vous avez trois options.
        La première est accessible par le bouton “Q&A”. Si vous cliquez dessus, vous arriverez sur une page de question-réponse,il est possible que vous trouviez la réponse à votre question puisqu’elle rassemble les interrogations les plus récurrentes auxquelles nous avons eu à répondre.Revenons à la page “Help”.
        Une deuxième option est disponible si, pour vous, la page “Q&A” n’a pas été utile.
        Cette deuxième option est un bouton qui vous redirige sur un forum propre à la plateforme. Vous pourrez y poser toutes vos questions. Un gestionnaire se chargera de répondre dans les plus brefs délais.
        De plus, si vous souhaitez poser directement une question à votre centre référent, c’est possible à partir de la page “Help” en cliquant sur le bouton “Message” qui se trouve en bas de page.
        Ce bouton va vous rediriger vers une page où vous pourrez choisir le type de problème rencontré, puis nous vous invitons à décrire votre problème dans l’encadré prévu à cet effet.
        Une fois votre rédaction terminée, n’oubliez pas d’envoyer votre message en appuyant sur le bouton “Send” en bas à gauche de la page.

        La page “new Test “ vous permet quant à elle de commencer un nouveau test psychotechnique et de choisir quel capteur vous souhaitez utiliser.
        Une fois les paramètres du test rentrés, vous pouvez le commencer en cliquant sur le bouton begin.
        Vous pouvez retrouver les sections “General Info”, “General data”, “New Test” et “Help” en haut de chaque page de notre site.



        Sur la gauche de toutes les pages du site ,une fois que vous êtes connecté, se trouve un menu déroulant que vous pouvez ouvrir ou refermer en cliquant sur les trois barres en haut à gauche de chaque page du site.
        Dans ce menu déroulant, vous pouvez retrouver dans un premier temps la partie “My account”. En passant juste votre souris sur le bouton “My account”, quatre options cliquables apparaissent, menant aux quatre pages décrites ci dessus (“General Info”, “General Data”, “New test” et “Help”).
        Toujours dans le menu déroulant, sous le bouton “My account”, se trouve “About Us”. Ce n’est pas un bouton, mais si vous passez votre curseur dessus, deux boutons apparaissent:”UserManual” et “Project Display”.
        Si vous cliquez sur “UserManual”, vous serez redirigés vers une page du même nom.
        Sur cette page vous pourrez bénéficier d’une aide textuelle qui saura vous guider si vous ne savez pas comment utiliser les capteurs( cette page est encore vide pour l’instant car nous ne savons pas encore comment les utiliser nous même).

        Si vous cliquez sur “Project Display”, vous serez redirigés vers une page où
        vous pourrez avoir une petite explication sur l’utilité de la plateforme.

        La troisieme option s’appelle “Contact Us”.
        Comme pour l’option “About Us”, l’option “Contact Us” ne renvoie pas directement à une page mais propose deux boutons : “Our contact information” et “Message”.
        Si vous cliquez sur “Our Contact Information”,vous tomberez sur une page où vous pourrez trouver les coordonnées de l’entreprise.
        Si vous choisissez le bouton message vous serez rediriger vers la page “Message “ présentée plus tôt dans ce document.
        Enfin, la quatrième et dernière option du menu déroulant est celle qui s’intitule “Log out”.
        Si vous cliquez dessus vous serez déconnecté de votre session et redirigé vers la page d’accueil.
        Lorsque vous êtes toujours sur le site en étant connecté à votre session, vous pouvez apercevoir en bas de chaque page une bande bleu dans laquelle se trouve plusieurs boutons sous forme de texte:  “Legal Notice”, et nos réseaux sociaux.
        Le bouton “Legal Notice” renvoie vers une page sur laquelle vous pouvez consulter les conditions légales d’utilisation du site.
        Les images représentant les différents réseaux sociaux renvoient respectivement vers nos pages en question sur les réseaux.
    </div>
		<br>
		<br>
	</form>
<?php $content = ob_get_clean();
require('templateView.php') ?>
</body>