<?php
	function calc_dir($obj)
	{
		$size = 0;
		if(is_dir($obj))
		{
			$file = scandir($obj);
			$row = count($file);
			for ($i = 2; $i < $row; $i++) {
				if(stripos($file[$i], '..') == FALSE || stripos($file[$i], '.') == FALSE)
				{
					$fichier = $obj . $file[$i];
					if(is_dir($fichier))
					{
						$is_directory = $fichier . "/";
						$size += calc_dir($is_directory);
					}
					else
					{
						$size += filesize($fichier);
					}
				}
			}
		}
		return $size;
	}

	function sel_rdir($obj,$user)
	{
		if(is_dir($obj))
		{
			$titre = str_replace("/home", "", $obj);
			$titre = str_replace("/", "", $titre);

			echo '<div class="bloc_folder scroll4">';
			echo '<i class="fas fa-unlock-alt icon locker" id="lock' . $titre . '"></i>';
			echo "<h3 class=\"lighter\">Racine</h3>";
			echo "<div class=\"ligne\"></div>";
			echo '<div class="folder" id="' . $titre . '" ondrop="drop(event)" ondragover="allowDrop(event)">';
			$file = scandir($obj);
			$row = count($file);
			echo '<div class="file drop"></div>';

			for ($i = 2; $i < $row; $i++)
			{
				$total_file = $obj . $file[$i];
				if(is_dir($total_file . "/"))
				{
					
				}
				else
				{
					$image = substr($file[$i], -3);
					if(file_exists("/home/cloud/Assets/img/" . $image . ".png"))
					{
						echo '<div class="file" title="' . $file[$i] . '" draggable="true" ondragstart="drag(event)" id="' . $total_file . '" style="background-image: url(/Assets/img/' . $image . '.png);"><div class="delete_file" id="_-' . $total_file . '" onclick="delete_file(this)"></div></div>';
					}
					else
					{
						echo '<div class="file" title="' . $file[$i] . '" draggable="true" ondragstart="drag(event)" id="' . $total_file . '" style="background-image: url(/Assets/img/file.png);"><div class="delete_file" id="_-' . $total_file . '" onclick="delete_file(this)"></div></div>';
					}
				}
			}
			echo '</div>'; echo '</div>';

			for ($i = 2; $i < $row; $i++)
			{
				$total_file = $obj . $file[$i];
				if(is_dir($total_file . "/"))
				{
					sel_dir($total_file . "/", $user);
				}
			}
		}
	}

	function sel_dir($obj, $user)
	{
		if(is_dir($obj))
		{
			$titre = str_replace("/home", "", $obj);
			$titre = str_replace("/", "", $titre);
			$titre = str_replace($user, "", $titre);

			echo '<div class="bloc_folder scroll6" id="b' . $titre . '">';
			echo '<i class="fas fa-trash-alt icon" onclick="delete_folder(\'' . $titre . '\')" id="del' . $titre . '"></i>';
			echo '<i class="fas fa-unlock-alt icon locker" id="lock' . $titre . '"></i>';
			echo '<i class="fas fa-pencil-alt icon" onclick="edit_folder(\'' . $titre . '\')" id="edit' . $titre . '"></i>';
			echo "<h3 class=\"lighter t" . $titre . "\">" . $titre . "</h3>";
			echo '
				<form method="POST" action="/Assets/php/client/edit_folder.php" id="form_' . $titre . '" class="form_rename">
					<input type="text" name="folder" placeholder="Folder name" value="' . $titre . '">
					<input type="hidden" name="oldfolder" value="' . $titre . '">
				</form>
			';
			echo "<div class=\"ligne\"></div>";
			echo '<div class="folder" id="' . $titre . '" ondrop="drop(event)" ondragover="allowDrop(event)">';
			$file = scandir($obj);
			$row = count($file);
			echo '<div class="file drop"></div>';

			for ($i = 2; $i < $row; $i++)
			{
				$total_file = $obj . $file[$i];
				if(is_dir($total_file . "/"))
				{
					sel_dir($total_file . "/");
				}
				else
				{
					$image = substr($file[$i], -3);
					if(file_exists("/home/cloud/Assets/img/" . $image . ".png"))
					{
						echo '<div class="file" title="' . $file[$i] . '" draggable="true" ondragstart="drag(event)" id="' . $total_file . '" style="background-image: url(/Assets/img/' . $image . '.png);"><div class="delete_file" id="_-' . $total_file . '" onclick="delete_file(this)"></div></div>';
					}
					else
					{
						echo '<div class="file" title="' . $file[$i] . '" draggable="true" ondragstart="drag(event)" id="' . $total_file . '" style="background-image: url(/Assets/img/file.png);"><div class="delete_file" id="_-' . $total_file . '" onclick="delete_file(this)"></div></div>';
					}
				}
			}
			echo "</div>"; echo '</div>';
		}
	}
?>