<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/adminProfile.css"/>

    <title>general info</title>
</head>
<body>
<?php ob_start(); ?>
<?php
$adminData = $admin->fetch();
?>


<h1>GENERAL INFO</h1>
<div id="bloque_principal">
    <div id="infos_personnelles">
        <h1>Your profile</h1>
        <div id="photo">
            <!--<img src="../Log"  alt="photo de profil"/>-->
        </div>
        <div id="infos_complementaires">
            <?=
            "<ul>
                    <li>" . $adminData['name'] . "</li>
                    <li>" . $adminData['email'] . "</li>
                </ul>"
            ?>
        </div>
        <div id="bouton">
            <a href="./index.php?action=editYourProfilView"><input type="button" value="EDIT"/></a>

        </div>
    </div>
</div>

<?php $content = ob_get_clean();
require('templateView.php'); ?>

</body>
</html>
