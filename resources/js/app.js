require('./bootstrap');

window.onload = function (e) {
	document.querySelectorAll('.delsoft')
		.forEach(el => el.onclick = () => confirm("Datensatz wirklich löschen?"));
}
