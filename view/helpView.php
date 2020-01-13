<!DOCTYPE html>
<html>


<head>

<title> Help </title>

<meta charset="utf-8"/>
<link rel="stylesheet" href="../css/help.css"/>

</head>
<body>
<?php ob_start();?>

<center><p class="titre"> HELP </p></center>
<br/><br/><br/>

<p> <center>If you face a problem, please check our FAQ and our Forum : </center></p>
<br/><br/><br/>

<p><center> <a href="#" style="text-decoration:none"><input type="submit" value="Q&A" class="bouton"/></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<input type="submit" value="Forum"class="bouton"/></center></p>

<br/><br/>

<hr width="50%" color="black"> 
<br/><br/>

<p><center> If you didn't find a solution, please send us a message : </center></p>

<p><center><a href="../index.php?action=help" style="text-decoration:none"><input type="submit" value="Message" class="bouton"/></a></center></p>
<?php $content = ob_get_clean();
require ('templateView.php'); ?>
</body>
</html>

