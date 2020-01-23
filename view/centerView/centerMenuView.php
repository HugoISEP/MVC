<html>
<head>
	<title>Menu déroulant</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="./css/menu.css"/>
</head>
	<header>
	<div class="poutre">
		<div class="boutonMenu"><img id="BoutonMenuDeroulant" src="./image/menu.png"></div>
        <a href="#"><div class="texte"><h1>General Info</h1></div></a>
        <a href="#"><div class="texte"><h1>Data</h1></div></a>
		<a href="#"><div class="texte"><h1>Search</h1></div></a>
	</div>
	
	
	<nav class="menu" id="TEST">
		<ul>
			<li class = "My_account"><a href="#">My account</a>
			<ul class="submenu">
				<li><a href="../My account/general info.php">General Info</a></li>
				<li><a href="../My account/General data.php">Data</a></li>
				<li><a href="../My account/newtest.php">Search</a></li>
			</ul>
			</li>
			
			<li class = "About_Us"><a href="#">Mailbox</a>
			<ul class="submenu">
				<li><a href="#">Mails</a></li>
				<li><a href="#">Q & A</a></li>
				<li><a href="#">Forum</a></li>
			</ul>
			</li>
			
			<li class="Log_Out"><a href="../Log out/deconnexion.php">Log out</a></li>
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