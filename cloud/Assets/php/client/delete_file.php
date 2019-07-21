<?php
	$user = "iguane";
	$home = "/home/" . $user;

	$file = htmlspecialchars($_POST['folder']);
	$total = $home . $file;

	if(is_file($total))
	{
		unlink($total);
		exit("Success");
	}
	else
	{
		exit("nofile");
	}
?>