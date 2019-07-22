<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Dispatch service</title>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./public/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./public/assets/css/index.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
	  <!--<script type="text/javascript" src="./public/assets/vendor/maphilight/maphilight.js"></script>-->
	  <script type="text/javascript" src="./public/assets/js/index.js"></script>
	  <script type="text/javascript" src="./public/assets/js/draw.js"></script>
    <!--<script type="text/javascript">
    $(function() {
		$('.map').maphilight();
    });
    </script>-->
</head>
<body <?php // if($nomap){ echo "onload='$(\"svg\").remove()'"; } ?> onload="InitThis()" ondblclick="onclick_page(event)">
<div class="container">
  <!--<div id="patrols" ondrop="drop(event)" ondragover="allowDrop(event)">
        <div class="contain" id="null">
            <?php
            
            foreach($undefPatr as $undef)
            {
                echo '<div id="' . strtolower($undef['nom']) . '" ondragstart="drag(event)" class="patrol" draggable="true">' . $undef['nom'] . '</div>';
            }
            
            ?>
            <div id="alpha2" ondragstart="drag(event)" class="patrol" draggable="true">Alpha 2</div>
            <div id="alpha3" ondragstart="drag(event)" class="patrol" draggable="true">Alpha 3</div>
            <div id="fox1" ondragstart="drag(event)" class="patrol" draggable="true">Fox 1</div>
            <div id="fox2" ondragstart="drag(event)" class="patrol" draggable="true">Fox 2</div>
            <div id="fox3" ondragstart="drag(event)" class="patrol" draggable="true">Fox 3</div>
        </div>
    </div>
    <div id="modules">
        <div class="contain" id="null">
            <div id="module1" class="module selected">Configuration n°1</div>
            <div id="module2" class="module">Configuration n°2</div>
            <div id="module3" class="module">Configuration n°3</div>
        </div>
    </div>
    <div id="maps" onclick="switch_zone()">
        <?= $map ?>
    </div>-->
    <div id="addtext">
        <input type="button" onclick="clearArea()" value="Gommer"><br/><br/>
        <input type="button" onclick="save()" value="Repasser au stylo"><br/><br/>
        <input type="button" onclick="erase()" value="Changer de carte"><br/><br/>
        <input type="color" id="colorpunaise" value="<?= $_SESSION['color'] ?>"><br/><br/>
        <input type="text" id="addtexte" placeholder="Ajouter un texte à la punaise..." />
    </div>