<?php
	$user = "iguane";

	$folder = "/home/" . $user . "/" . htmlspecialchars($_POST['folder']) . "/";
	$separe = explode("/", $folder);

	if($separe[2] != $user)
	{
		exit("noaccess");
	}

	if(sizeof(scandir($folder))>2)
	{
		exit("novide");
	}

	if(is_dir($folder))
	{
		rmdir($folder);
		exit("Success");
	}
	else
	{
		exit("nodossier");
	}
?>