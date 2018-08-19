function showFolderContent(folderId)
{
	var element = document.getElementById(folderId),
	style = window.getComputedStyle(element),
	display = style.getPropertyValue('display');
	if (display == "none")
	{
		if (element.classList.contains("0"))
			document.getElementById(folderId).style.background = "#ff6eb9";
		else	
			document.getElementById(folderId).style.background = "#fec6f4";
		document.getElementById(folderId).style.display = "block";
	}
	else
		document.getElementById(folderId).style.display = "none";
}
