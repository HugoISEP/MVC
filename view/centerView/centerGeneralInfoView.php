<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/generalInfo.css"/>

    <title>general info</title>
</head>
<body>
<?php ob_start(); ?>
<?php
$centerData = $center->fetch();
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
                    <li>" . $centerData['name'] . "</li>
                    <li>" . $centerData['type'] . "</li>
                </ul>"
            ?>
        </div>
        <div id="bouton">
            <a href="./index.php?action=editYourProfilView"><input type="button" value="EDIT"/></a>

        </div>
    </div>
    <div id="liste_tests">
        <h1>Last tests</h1>
        <?php
        while ($userListTestsData = $listTests->fetch()) { ?>
            <ol>
                <li>
                    <ul>
                        <li><strong><?=  $userListTestsData['first_name'].' ' . $userListTestsData['last_name']?></strong></li>
                        <li>captor type : <?= $userListTestsData['type'] ?></li>
                        <li>result : <?= $userListTestsData['measure_value'] ?> <?= $userListTestsData['measure_unit'] ?></li>
                        <li>date : <?= $userListTestsData['date_and_time'] ?></li>
                    </ul>
                </li>
            </ol>


            <?php
        }
        $center->closeCursor();
        $listTests->closeCursor();
        ?>
    </div>
</div>
    <?php $content = ob_get_clean();
    require('centerTemplateView.php'); ?>

</body>
</html>
