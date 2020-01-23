<html>
<head>
	<title>Edit your profile</title>
	<link rel="stylesheet" href="./css/editYourProfil.css"/>
</head>
<body>
<?php ob_start(); ?>
<h3>
    Edit Your Profile
</h3>
<ul>
	<FORM action="./index.php?action=action2=update">
		<li><h1 class="ZoneTexte">First Name</h1><input name="first_name" value="<?php echo $_SESSION['first_Name'] ?>"/></li>
		<li><h1 class="ZoneTexte">Last Name</h1><input name="last_name" value="<?php echo $_SESSION['last_Name'] ?>"/></li>
		<li><h1 class="ZoneTexte">E-mail Adress</h1><input name="email" value="<?php echo $_SESSION['email_user'] ?>"/></li>
		<li><h1 class="ZoneTexte">Password</h1><input name="password"/></li>
		<li><h1 class="ZoneTexte">Confirm Password</h1><input name="confirmPassword"/></li>
		<li><h1 class="ZoneTexte">Secret Question</h1>
				<select name="Question_secrete" size="1">
					<OPTION>What was the name of your first pet?
					<OPTION>What was your maiden name?
					<OPTION>What was the model of your first car?
					<OPTION>What's your favorite color?
				</select>		
		</li>
		<li><h1 class="ZoneTexte">Secret Answer</h1><input name="secretAnswer"/></li>
		<div class="BasDePage">
			<div class="EspVide"></div>
			<div class="EspVide"></div>
			<button class="boutonBDP">Edit</button>
			<div class="EspVide"></div>
			<button class="boutonBDP">Capteurs</button>
		</div>
	</FORM>
</ul>
<?php $content = ob_get_clean();
require('templateView.php') ?>
</body>
</html>
