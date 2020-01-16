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
$userData = $user->fetch();
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
                    <li>" . $userData['last_name'] . "</li>
                    <li>" . $userData['first_name'] . "</li>
                    <li>" . $userData['birthday'] . "</li>
                </ul>"
            ?>
        </div>
        <div id="bouton">
            <input type="button" value="EDIT">
        </div>
    </div>
    <div id="liste_tests">
        <h1>Last tests</h1>
        <?php
        $nb = 1;
        while ($userListTestsData = $userListTests->fetch()) { ?>
            <ol>
                <li>
                    <ul>
                        <li><strong>Test n° <?= $nb ?></strong></li>
                        <li>captor type : <?= $userListTestsData['type'] ?></li>
                        <li>result : <?= $userListTestsData['measure_value'] ?></li>
                        <li>result : <?= $userListTestsData['measure_unit'] ?></li>
                        <li>date : <?= $userListTestsData['date_and_time'] ?></li>
                    </ul>
                </li>
            </ol>


            <?php
            $nb++;
        }
        $user->closeCursor();
        $userListTests->closeCursor();
        ?>
    </div>
</div>
    <?php $content = ob_get_clean();
    require('templateView.php'); ?>

</body>
</html>
