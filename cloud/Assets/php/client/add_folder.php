<?php

	$user = "iguane";
	$folder = htmlspecialchars($_POST['folder']);

	if($folder != $user)
	{
		$folder = str_replace(" ", "_", $folder);
		if(preg_match('#^[a-zA-Z0-9_éèà]+$#', $folder))
		{
			if(mkdir("/home/" . $user . "/" . $folder . "/"))
			{
				exit(header('Location: /'));
			}
			else
			{
				echo "Erreur !";
			}
		}
		else
		{
			exit(header('Location: /?error=42'));
		}
	}
	else
	{
		exit(header('Location: /?error=901'));
	}

?>
