<?php

require 'database_connection.php';
$mail = htmlspecialchars($_POST['mail']);
$pass = htmlspecialchars($_POST['pass']);
$bdd = dbConnect();
$req= "SELECT * FROM users WHERE Mail = ?";
$reponse = $bdd->prepare($req);
$reponse->execute(array($mail));
if ($reponse) {
    $resultat = $reponse->fetch();
    $verif1 = ($mail == $resultat['Mail']);
    $verif2 = ($pass == $resultat['Password']);

    if (!$verif1) {
        ?>
        <script type="text/javascript">
            window.location.replace("../index.php?error=1");
        </script>
        <?php
    } else {
        if ($verif2) {
            session_start();
            $_SESSION['Mail']= $resultat['Mail'];
            $_SESSION['LastName'] = $resultat['Last_Name'];
            $_SESSION['FirstName'] = $resultat['First_Name'];
            $_SESSION['Birthday'] = $resultat['Birthday'];
            $_SESSION['PhoneNumber'] = $resultat['Phone_Number'];
            $_SESSION['LinkImg'] = $resultat['LinkImg'];
            ?>
            <script type="text/javascript">
                window.location.replace("../../My account/General info.php");
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                window.location.replace("../index.php?error=2");
            </script>
            <?php
        }
    }
}

/*
if (isset($_POST['mail']) AND $_POST['mail'] == 'fathi@gmail.com') {

    if (isset($_POST['pass']) AND $_POST['pass'] == 12345) {
?>
        <script type="text/javascript">
            window.location.replace("../../My account/general info.php");
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
            window.location.replace("../index.php?error=1");
        </script>
<?php
    }
}else{
    ?>
    <script type="text/javascript">
        window.location.replace("../index.php?error=2");
    </script>
<?php
}
?>
*/