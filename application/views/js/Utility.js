function getPage(){
	var href = window.location.href;
	var page = href.split("/").pop();
	return page;
}
