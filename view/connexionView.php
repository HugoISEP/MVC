<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/connection.css"/>
    <link rel="icon" href="./image/logo_infinitemeasure.png" />
    <title>Accueil</title>
</head>
<body>
    <div id="conteneur">
        <header>
            <h1><a href=# id="titre">PsycHealth</a></h1>
        </header>
        <section class="connexion">
            <form method="post" action="index.php" >
                    <legend>CONNEXION</legend>
					<br />
                    <input class="login" type="email" name="email" id="email" placeholder="E-Mail adress" autofocus required/>
                    <br />
                    <input class="login" type="password" name="password" id="password" placeholder="Password" required/>
                    <p id="choix">
                        <label for="remember">Remember me ?</label>
                        <input type="checkbox" name="remember" id="remember"/>
                    </p>
                    <div class="sign">
                        <input type="submit" value="SIGN IN" class="bouton"/>
                    </div>
            </form>
            <div id="forgot">
            <a href="#" name="forgotPass" id="forg">Forgot Password ?</a>
            </div>
        </section>
        <div class="separateur">
            <p id="or">OR</p>
        </div>
        <a href="../anciennes_pages/Log%20in/NewClient.php" class="bouton">New Client</a>
        <br />
        <footer id="basdepage">

        </footer>
    </div>
</body>
</html>