<?php
	$user = htmlspecialchars($_POST['user']);

	$data = htmlspecialchars($_POST['data']);
	$target = htmlspecialchars($_POST['target']);

	$separe = explode("/", $data);
	$count = count($separe);

	if($separe[2] != $user)
	{
		exit("noaccess");
	}

	if($target != $user)
	{
		$retour = "/home/" . $user . "/" . $target . "/" . $separe[$count - 1];
	}
	else
	{
		$retour = "/home/" . $user . "/" . $separe[$count - 1];
	}

	if(copy($data, $retour))
	{
		unlink($data);
		echo $retour;
	}
	else
	{
		echo "Error";
	}
?>