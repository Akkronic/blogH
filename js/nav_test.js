function showFolderContent(folderId)
{
	var element = document.getElementById(folderId),
	style = window.getComputedStyle(element),
	display = style.getPropertyValue('display');
	if (display == "none")
	{
		var dirNames = document.getElementsByClassName("dirName");
		for (var i = 0; i < dirName.lenght; i++) {
			dirName[i].style.display = "none";
		}

		if (element.classList.contains("clair"))
			document.getElementById(folderId).style.background = "#ff6eb9";
		else	
			document.getElementById(folderId).style.background = "#fec6f4";
		document.getElementById(folderId).style.display = "block";
	}
	else
		document.getElementById(folderId).style.display = "none";
}
