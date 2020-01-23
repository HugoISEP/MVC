<html>
<head>
	<title>Menu déroulant</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="./css/menu.css"/>
</head>
	<header>
	<div class="poutre">
		<div class="boutonMenu"><img id="BoutonMenuDeroulant" src="./image/menu.png"></div>
        <a href="./index.php?action=generalInfo"  class="texte"><div><h1>General Info</h1></div></a>
		<a href="./index.php?action=generalData"  class="texte"><div><h1>General Data</h1></div></a>
        <a href="./index.php?action=newTest"  class="texte"><div><h1>New Test</h1></div></a>
        <a href="./index.php?action=help" class="texte"><div><h1>Help</h1></div></a>
	</div>
	
	
	<nav class="menu" id="TEST">
		<ul>
			<li class = "My_account"><a href="./index.php?action=generalInfo">My account</a>
			<ul class="submenu">
				<li><a href="./index.php?action=generalInfo">General Info</a></li>
				<li><a href="./index.php?action=generalData">General Data</a></li>
				<li><a href="./index.php?action=newTest">New Test</a></li>
				<li><a href="./index.php?action=help">Help</a></li>
			</ul>
			</li>
			
			<li class = "About_Us"><a href="#">About Us</a>
			<ul class="submenu">
				<li><a href="./index.php?action=userManual">User Manual</a></li>
				<li><a href="./index.php?action=projectDisplay">Project Display</a></li>
			</ul>
			</li>
			<li class = "Contact_Us"><a href="./index.php?action=contactUs">Contact Us</a>
			<ul class="submenu">
				<li><a href="./index.php?action=contactUs">Our Contact Information</a></li>
				<li><a href="./index.php?action=help&amp;action2=message">Message</a></li>
			</ul>
			</li>
			
			<li class="Log_Out"><a href="./index.php?action=logOut">Log out</a></li>
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