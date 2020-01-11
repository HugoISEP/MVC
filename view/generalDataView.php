<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="./css/generalData"/>
    <title>General data</title>
</head>
<body>
<?php ob_start(); ?>
    <div id="bloc_principal">
        <div id="titre">
            <h1>GENERAL DATA</h1>
        </div>
        <div id="bouton_graphique">
            <form method="post" >
            <p>
                <label for="graph type">Choose your type of graph</label>
                <select name="graph type" id="graph type">
                    <option value="Bar graph">Bar graph</option>
                    <option value="Pie chart">Pie chart</option>
                    <option value="Spider chart">Spider chart</option>
                    <option value="Scatter plot">Scatter plot</option>
                </select>
            </p>
            </form>
        </div>
        <div id="image_graphique">
            <img src="./image/exemple_graphique_baton.PNG" alt="graphique en batons" />
        </div>
    </div>
<?php $content = ob_get_clean();
require ('templateView.php')?>

</body>
</html>