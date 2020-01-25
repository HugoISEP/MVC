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
<ul class = "ulEYP" >
	<FORM method="post" action="./index.php?action=editYourProfilView&amp;action2=update">
		<li class="liEYP"><h1 class="ZoneTexte">First Name</h1><input name="first_name" required value="<?php echo $_SESSION['first_Name'] ?>"/></li>
		<li class="liEYP"><h1 class="ZoneTexte">Last Name</h1><input name="last_name" required value="<?php echo $_SESSION['last_Name'] ?>"/></li>
		<li class="liEYP"><h1 class="ZoneTexte">Birthday</h1><input type="date" name="birthday" required value="<?php echo $_SESSION['birthday'] ?>"/></li>
        <li class="liEYP"><h1 class="ZoneTexte">Phone Number</h1><input name="phone_number" required value="<?php echo $_SESSION['phone_number'] ?>"/></li>
        <li class="liEYP"><h1 class="ZoneTexte">Password</h1><input type="password" name="password"value="<?php echo $_SESSION['password'] ?>"/></li>
		<li class="liEYP"><h1 class="ZoneTexte">Confirm Password</h1><input name="confirmPassword"/></li>
		<li class="liEYP"><h1 class="ZoneTexte">Secret Question</h1>
				<select name="Question_secrete" size="1">
					<OPTION>What was the name of your first pet?
					<OPTION>What was your maiden name?
					<OPTION>What was the model of your first car?
					<OPTION>What's your favorite color?
				</select>

		</li>
		<li class="liEYP" ><h1 class="ZoneTexte">Secret Answer</h1><input name="secretAnswer"/></li>
		<div class="BasDePage">
            <div class="EspVide"></div>
            <div class="EspVide"></div>
            <input type="submit"  class="boutonBDP" value="Edit"/>
            <div class="EspVide"></div>
            <div class="EspVide"></div>
			<button class="boutonBDP">Capteurs</button>
		</div>

    </FORM>
</ul>
<?php $content = ob_get_clean();
require('templateView.php') ?>
</body>
</html>
