r = 110;
g = 240;
b = 150;
count = 0;
function test(title, x, y) {
	var container = document.createElement("div")
	container.style.display = "flex";
	container.style.flexDirection = "column";
	var bookEl = document.createElement("div");
	bookEl.innerHTML = title;
	bookEl.className = "books";
	bookEl.style.padding = "9px";
	bookEl.style.fontStyle = "italic";
	bookEl.style.backgroundColor = "rgb("+r+","+g+","+b+")";
	if(count<4) {
		r += 25;
		g -= 10;
		b += 30
	} else if(count<8) {
		r -= 25;
		g += 10;
		b -= 30;
	}
	if(count == 8) {
		count = -1;
	}
	container.appendChild(bookEl);
	var tagEl = document.createElement("div");
	tagEl.className = "books";
	tagEl.style.display = "block"
	tagEl.style.textAlign = "left"
	tagEl.style.height = "auto"
	tagEl.style.backgroundColor = "lightgoldenrodyellow";
	tagEl.innerHTML = x + ':<br>' + y+'<br>';
	tagEl.style.width = "auto"
	tagEl.style.maxWidth = "150px";
	container.appendChild(tagEl);
	document.getElementById('newbooks').appendChild(container);
}
/*function book(title) {
	var bookEl = document.createElement("div");
	bookEl.className = "books";
	//bookEl.style.margin = "6px 10px";
	bookEl.style.padding = "9px";
	bookEl.style.fontStyle = "italic";
	bookEl.style.backgroundColor = "rgb("+r+","+g+","+b+")";
	if(count<4) {
		r += 25;
		g -= 10;
		b += 30
	} else if(count<8) {
		r -= 25;
		g += 10;
		b -= 30;
	}
	if(count == 8) {
		count = -1;
	}
	document.getElementById('newbooks').appendChild(bookEl);
	bookEl.innerHTML = title;
	count++;
}

function tag(x, y) {
	var tagEl = document.createElement("div");
	tagEl.className = "books";
	tagEl.style.display = "block"
	tagEl.style.textAlign = "left"
	tagEl.style.height = "auto"
	tagEl.style.backgroundColor = "lightgoldenrodyellow";
	tagEl.innerHTML = x + ':<br>' + y+'<br>';
	tagEl.style.width = "auto"
	tagEl.style.maxWidth = "150px";
	tagEl.style.position = "relative";
	tagEl.style.left = "-130px";
	tagEl.style.bottom = "-150px";

	document.getElementById('newbooks').appendChild(tagEl);
}*/