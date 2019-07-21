			<?php
				echo '<div class="statstisute">';
				include("../server/function.php");
				$user = "iguane";
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
				echo '</div>'; echo "</div>";

			?>