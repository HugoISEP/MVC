<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="./css/contactus.css"/>
</head>
<body>
<?php ob_start(); ?>
<center><h1> Our Information </h1> </center>
<br/><br/><br/>

<ul class="ourinfo">
<li> <span class="ourinfop">Email :</span> moduloheart@gmail.com</li>
</br><br/><br/>
<li> <span class="ourinfop">Phone Number :</span> 09 45 65 45 98</li>
<br/><br/><br/>
<li> <span class="ourinfop">Adress :</span> 10 rue de Vanves, 92170 Issy-les-Moulineaux, France</li>
<br/><br/><br/>
</ul>
<hr width="50%" color="black"> 
<br/><br/><br/>
<center><ul>
<li> For further questions, please go to the section : <a href="../My account/help.php" style="text-decoration:none"><input type="submit" value="Help" class="bouton"></a></li>
</ul></center>
<?php $content = ob_get_clean();
require ('templateView.php')?>
</body>
</html>
