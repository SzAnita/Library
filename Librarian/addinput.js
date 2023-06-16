function addinput(id) {
	var book = document.createElement("input");
	book.setAttribute('type', 'text');
	book.setAttribute('name', 'isbn[]')
	book.setAttribute('size', '13');
	book.setAttribute('placeholder', 'ISBN');
	document.getElementById(id).appendChild(book);
	document.getElementById(id).appendChild(document.createElement("br"))
}