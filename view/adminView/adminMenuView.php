<html>
<head>
	<title>Menu déroulant</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="./css/menu.css"/>
</head>
	<header>
	<div class="poutre">
		<div class="boutonMenu"><img id="BoutonMenuDeroulant" src="./image/menu.png"></div>
        <a href="#" class="texteAdmin"><div><h1>Welcome, you are logged in as an administrator.</h1></div></a>
	</div>
	
	
	<nav class="menu" id="TEST">
		<ul>
			<li class = "My_account"><a href="./index.php?action=generalInfo">My account</a></li>
			<li class = "About_Us"><a href="#">Centers</a></li>
			<li class = "Contact_Us"><a href="#">Mailbox</a></li>
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