<?php
	$user = "iguane";

	$folder = htmlspecialchars($_POST['folder']);
	$folder = str_replace(" ", "_", $folder);

	$newfolder = "/home/" . $user . "/" . $folder . "/";
	$oldfolder = "/home/" . $user . "/" . htmlspecialchars($_POST['oldfolder']) . "/";

	if(preg_match('#^[a-zA-Z0-9_éèà]+$#', $folder))
	{
		if(is_dir($oldfolder))
		{
			rename($oldfolder, $newfolder);
		}
	}
	else
	{
		exit(header('Location: /?error=42'));
	}

	exit(header('Location: /'));
?>