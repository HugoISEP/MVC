<html>
<head>
	<title>Menu déroulant</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="./css/menu.css"/>
</head>
	<header>
	<div class="poutre">
		<div class="boutonMenu"><img id="BoutonMenuDeroulant" src="./image/menu.png"></div>
		<a href="#" class="texteAdmin"><div>Welcome, you are logged in as an administrator.</div></a>
	</div>
	
	
	<nav class="menu" id="TEST">
		<ul>
			<li class = "My_account"><a href="#">My account</a></li>
			<li class = "About_Us"><a href="#">Centers</a></li>
			<li class = "Contact_Us"><a href="#">Mailbox</a></li>
			<li class="Log_Out"><a href="./Log out/deconnexion.php">Log out</a></li>
		</ul>
	</nav>
	</header>
	
	<script>
	// Get the button, and when the user clicks on it, execute myFunction
	document.getElementById("BoutonMenuDeroulant").onclick = function() {myFunction()};

	/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
	function myFunction() {
	  document.getElementById("TEST").classList.toggle("show");
	}
	</script>
</html>