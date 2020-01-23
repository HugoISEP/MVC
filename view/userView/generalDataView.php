<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <title>General Data</title>
    <link rel="stylesheet" href="./css/bargraph.css"/>
</head>
<body>
<?php ob_start(); ?>
<h1>GENERAL DATA</h1>
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


<div class="graphique_css">
    <canvas id="graphique"></canvas>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<script type="text/javascript" src="js/bargraph.js"></script>

<?php $content = ob_get_clean();
require('templateView.php') ?>

</body>
</html>
