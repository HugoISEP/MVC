<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/centerProfiles.css">
    <title>Profiles</title>
</head>
<body>
<?php ob_start(); ?>
    <h1>PROFILES</h1>
    <div id="block_sort">
        <form method="post" action="">
            <p>
            <div id="block_sorting">
                <label for="sorting">Sort by  </label>  <br />
                <select name="sorting" id="sorting">
                    <option value="descending">Descending order</option>
                    <option value="ascending">Ascending order</option>
                    <option value="alphabetical">Alphabetical order</option>
                </select>
            </div>
            <div id="block_sensor">
                <label for="sensors">sensor type</label>  <br />
                <select name="sensors" id="sensors">
                    <option value="visual_relfex" selected>Visual reflex</option>
                    <option value="heart_beats">Heart beats</option>
                    <option value="auditiv_reflex">Auditiv reflex</option>
                </select>
            </div>
                <input type="submit" value="Apply" />
            </p>
        </form>
    </div>
    <hr />
    <div id="liste_people">
        <ol>
            <p>
            <li class="CP">
                <div class="description">
                    <h3>Fathi KADIR</h3><br />
                    score: 350<br />
                    time: 2:50<br />
                </div>
                <div class="button">
                    <input type="button" value="More">
                </div>
            </li>
<hr />
            <li class="CP">
                <div class="description">
                    <h3>Hugo CHEMILLIER</h3><br />
                    score: 300<br />
                    time: 2:30<br />
                </div>
                <div class="button">
                    <input type="button" value="More">
                </div>
            </li>
<hr />
            <li class="CP">
                <div class="description">
                    <h3>François LAMY</h3><br />
                    score: 200<br />
                    time: 2:10<br />
                </div>
                <div class="button">
                    <input type="button" value="More">
                </div>
            </li>
<hr />
            <li class="CP">
                <div class="description">
                    <h3>Hadrien FOURNIERE</h3><br />
                    score: 50<br />
                    time 2:01<br />
                </div>
                <div class="button">
                    <input type="button" value="More">
                </div>
            </li>
            </p>
        </ol>
    </div>
    <hr />
<div id="bouton_search_a_profile">
    <a href="index.php?action=profiles&amp;action2=searchProfiles"><input type="button" value="Search a profile"></a>
</div>
<?php $content = ob_get_clean();
require('centerTemplateView.php') ?>
</body>
</html>