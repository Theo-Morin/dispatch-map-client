function add_folder()
{
	$("#form_folder").css("display", "block");
	$("#folder_plus").css("display", "none");
}

function edit_folder(dossier)
{
	$(".t" + dossier).css("display", "none");
	$("#form_" + dossier).css("display", "block");
}