function gotourl(url)
{
	window.location.href = url;
}

function hideelement(id)
{
	document.getElementById(id).classList.add("hide");
}

function showelement(id)
{
	document.getElementById(id).classList.remove("hide");
}