<?php
	$user = "iguane";
	$home = "/home/" . $user;

	$file = "/Addons/AlessioTouaregCOP.pbo";
	$total = $home . $file;

	if(is_file($total)){ echo $total; }
?>