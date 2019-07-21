<?php require("Assets/php/server/mysql.php"); require("Assets/php/server/function.php"); $user = "iguane"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>MyCloud - Accueil</title>

	<meta name="viewport" content="width=device-width, initial-scale=0.7">
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./Assets/stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./Assets/stylesheet/index.css">
	<link rel="stylesheet" type="text/css" href="./Assets/stylesheet/header.css">
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Jua|Roboto+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="./Assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script>$(".file").droppable();</script>
	<script>
		window.sr = ScrollReveal();
	</script>
	<script src="/Assets/js/traitement.js"></script>

	<script>
		function allowDrop(ev) {
			ev.preventDefault();
		}

		function drag(ev) {
			ev.dataTransfer.setData("text", ev.target.id);
		}

		function drop(ev) {
			ev.preventDefault();
			var target = ev.target
			var data = ev.dataTransfer.getData("text");
			ev.target.appendChild(document.getElementById(data));
			console.log(data);
			console.log(target.id);
		}

		function souris(e)
		{
			var idElt = e.getAttribute('id');

			console.log(idElt);

			var x = event.clientX;
			var y = event.clientY;
				
			$("#salut").animate({
				marginLeft:x + "px",
				marginTop:y + "px"
			}, 100);
		}

		function data_stats()
		{
			$.post(
				'/Assets/php/client/stats.php',
				{
					folder : ""
				},
				function(data){
					$(".statstisute").replaceWith(data);
				},
			'text'
			);
		}

	</script>
</head>
<?php require('Assets/php/client/include/header.php'); ?>
<body>
	<center><h1 class="lighter title h1">Welcome on your cloud <span class="pseudo"><?= $user ?></span> !</h1></center>
	
	<div class="contain">
		<?php if(isset($_GET['error']) && $_GET['error'] == "901"){ ?><center><h4 class="lighter" style="color:red;margin-top:2px;">Error <?= $_GET['error'] ?> ! Vous ne pouvez pas avoir le même nom de dossier que votre compte !</h4></center><?php } ?>
		<?php if(isset($_GET['error']) && $_GET['error'] == "42"){ ?><center><h4 class="lighter" style="color:red;margin-top:2px;">Error <?= $_GET['error'] ?> ! Votre dossier ne doit contenir que des caractères alphabétique ou des chiffres !</h4></center><?php } ?><br/><br/>
		<div class="bloc_stats">
			<div class="statstisute">
				<?php
					$total = 1 * 1024 * 1024 *1024;
					$size = calc_dir("/home/" . $user . "/");

					if(($size * 100 / $total) > 90){ $color = "black"; }else if(($size * 100 / $total) > 80){ $color = "#B40404"; }else if(($size * 100 / $total) > 50){ $color = "#DF7401"; }else{ $color = "#088A08"; }

					echo '<div class="stats scroll1" style="background-color:' . $color . ';">';

					if($size /1024 /1024 /1024 >= 1)
					{
						echo round($size / 1024 / 1024 / 1024, 2) . "Go / 1Go";
					}
					else if($size /1024 /1024 >= 1)
					{
						echo round($size / 1024 / 1024, 2) . "Mo / 1Go";
					}
					else if($size / 1024 >= 1)
					{
						echo round($size / 1024, 2) . "Ko / 1Go";
					}
					else
					{
						echo $size . "o";
					}
					echo '</div>';

					$size = calc_dir("/home/" . $user . "/");
				

					if(($size * 100 / $total) > 90){ $color = "black"; }else if(($size * 100 / $total) > 80){ $color = "#B40404"; }else if(($size * 100 / $total) > 50){ $color = "#DF7401"; }else{ $color = "#088A08"; }

					echo '<div class="stats scroll2" style="background-color:' . $color . ';">';
					echo round($size * 100 / $total) . "% utilisés";
					echo '</div>';

				?>
			</div>
		</div>
		<?php $test = sel_rdir('C:\Users\ADMIN\Desktop\\', 'html'); echo $test; ?>
		<div onclick="add_folder()" class="bloc_folder scroll6" id="add_folder">
			<div class="folder">
				<center>
					<h1 id="folder_plus">+</h1>
					<h1>
						<form method="POST" action="/Assets/php/client/add_folder.php" id="form_folder">
							<input type="text" name="folder" placeholder="Folder name">
						</form>
					</h1>
				</center>
			</div>
		</div>
	</div>
	<div id="salut" style="background-color:black;position:absolute;width:50px;height:50px;top:0;left:0;display:none;"></div>
</body>
</html>
<script type="text/javascript">
	sr.reveal('.scroll1', { duration: 500 });
	sr.reveal('.scroll2', { duration: 1000 });
	sr.reveal('.scroll3', { duration: 1500 });
	sr.reveal('.scroll4', { duration: 2000 });
	sr.reveal('.scroll5', { duration: 2500 });
	sr.reveal('.scroll6', { duration: 3000 });
	sr.reveal('.scroll7', { duration: 3500 });
	sr.reveal('.scroll8', { duration: 4000 });
</script>
