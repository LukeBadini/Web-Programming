function set_color() {
	var color = this.getAttribute("class");
	var box = document.getElementById("colorbox");
	box.setAttribute("class", color);
}

function change_color(){
	var colorNames = document.getElementsByTagName("li");
	for (var i = 0; i < colorNames.length; i++) {
		colorNames[i].onclick = set_color;
	}
}

window.onload = change_color;