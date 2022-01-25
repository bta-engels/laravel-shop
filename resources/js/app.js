require('./bootstrap');

window.onload = function (e) {
	let elems = document.querySelectorAll('.delsoft');
	for(el of elems) {
		el.onclick = function(){ return confirm("Datensatz wirklich löschen?") };
	}
}
