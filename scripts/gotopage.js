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

function loadprompt(current_prompt_id, new_prompt_id)
{
	document.getElementById(current_prompt_id).classList.add("hide");
	document.getElementById(new_prompt_id).classList.remove("hide");
}
