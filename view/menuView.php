<html>
<head>
	<title>Menu déroulant</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="../css/Menu.css"/>
</head>
	<header>
	<div class="poutre">
		<div class="boutonMenu"><img id="BoutonMenuDeroulant" src="./image/menu.png"></div>
		<div class="texte"><a href="./index.php?action=generalInfo">General Info</a></div>
		<div class="texte"><a href="./index.php?action=generalData">General Data</a></div>
		<div class="texte"><a href="./index.php?action=newTest">New Test</a></div>
		<div class="texte"><a href="./index.php?action=help">Help</a></div>
	</div>
	
	
	<nav class="menu" id="TEST">
		<ul>
			<li class = "My_account"><a href="#">My account</a>
			<ul class="submenu">
				<li><a href="./index.php?action=generalInfo">General Info</a></li>
				<li><a href="./index.php?action=generalData">General Data</a></li>
				<li><a href="./index.php?action=newTest"">New Test</a></li>
				<li><a href="./index.php?action=help">Help</a></li>
			</ul>
			</li>
			
			<li class = "About_Us"><a href="#">About Us</a>
			<ul class="submenu">
				<li><a href="#">User Manual</a></li>
				<li><a href="#">Project Display</a></li>
			</ul>
			</li>
			
			<li class = "Contact_Us"><a href="#">Contact Us</a>
			<ul class="submenu">
				<li><a href="../anciennes_pages/Contact%20Us/contactus.php">Our Contact Information</a></li>
				<li><a href="../anciennes_pages/Contact%20Us/message.php">Message</a></li>
			</ul>
			</li>
			
			<li class="Log_Out"><a href="../anciennes_pages/Log%20out/deconnexion.php">Log out</a></li>
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