if(window.matchMedia("(max-width: 395px").matches) {
	var x = document.getElementsByTagName("li");
	var header = document.getElementById('menu');
	var menu = header.getElementsByTagName("span");
	var onButtonClick = function () {
		var navbar = getElementByClass('navbar');
		navbar.style.display = "inline-block";
	}
	menu.addEventListener("click", onButtonClick);
}