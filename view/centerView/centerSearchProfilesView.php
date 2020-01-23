<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/centerProfiles.css">
    <title>Search A Profile</title>
</head>
<body>
<?php ob_start(); ?>
<h1>SEARCH A PROFILE</h1>
<div id="research">
    <p>
    <form method="post" action="search_a_profile.html">
        <label for="first_name">First name</label>  <input type="text" name="first_name" id="first_name" />
        <label for="last_name">Last name</label>  <input type="text" name="last_name" id="last_name" />
        <label for="email">Email</label>  <input type="email" name="email" id="email" />
        <input type="button" value="Research" />
    </form>

    </p>
</div>
<hr />
<div id="result">
    <ol>
        <p>
        <li>
            <div class="description">
                <h3>Fathi KADIR</h3><br />
                best score: 350<br />
                best time: 2:50<br />
            </div>
            <div class="button">
                <input type="button" value="More">
            </div>
        </li>
        <hr />
        <li>
            <div class="description">
                <h3>Hugo CHEMILLIER</h3><br />
                best score: 300<br />
                best time: 2:30<br />
            </div>
            <div class="button">
                <input type="button" value="More">
            </div>
        </li>
        <hr />
        <li>
            <div class="description">
                <h3>François LAMY</h3><br />
                best score: 200<br />
                best time: 2:10<br />
            </div>
            <div class="button">
                <input type="button" value="More">
            </div>
        </li>
        <hr />
        <li>

            <div class="description">
                <h3>Hadrien FOURNIERE</h3><br />
                best score: 50<br />
                best time 2:01<br />
            </div>
            <div class="button">
                <input type="button" value="More">
            </div>
        </li>
        </p>
    </ol>
</div>
<?php $content = ob_get_clean();
require('centerTemplateView.php') ?>
</body>
</html>
