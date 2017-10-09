var counter = 1;

function prideti() {

	var pirmas = document.getElementById('vienas').value;
	var du = document.getElementById('du').value;
	var trys = document.getElementById('trys').value;
	var keturi = document.getElementById('keturi').value;
	var penki = document.getElementById('penki').value;
	var lentele = document.getElementById('lentele');

	if (!pirmas) {
		alert('tuscia');
		return false;
	} else if (!du) {
		alert('tuscia');
		return false;
	} else if (!trys) {
		alert('tuscia');
		return false;
	} else if (!keturi) {
		alert('tuscia');
		return false;
	} else if (!penki) {
		alert('tuscia');
		return false;
	}

	var ikelti = lentele.insertRow(-1);

	var stulpelis0 = ikelti.insertCell(0);
	var stulpelis1 = ikelti.insertCell(1);
	var stulpelis2 = ikelti.insertCell(2);
	var stulpelis3 = ikelti.insertCell(3);
	var stulpelis4 = ikelti.insertCell(4);
	var stulpelis5 = ikelti.insertCell(5);
	var stulpelis6 = ikelti.insertCell(6);

	var d = new Date();

	stulpelis0.innerHTML = counter;
	stulpelis1.innerHTML = pirmas;
	stulpelis2.innerHTML = du;
	stulpelis3.innerHTML = trys;
	stulpelis4.innerHTML = keturi;
	stulpelis5.innerHTML = penki;
	stulpelis6.innerHTML = d.toDateString() + "/" + 4;

	counter++;
}