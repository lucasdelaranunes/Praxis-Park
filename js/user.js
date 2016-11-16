function userSession() {
	var mySession = JSON.parse(localStorage.getItem('prp_user'));
	var userName = mySession.nmcliente.value;
	document.getElementById("userName").innerHTML = 'Olá, ' + userName;
	if (document.getElementById("usunome") !== null) { 
		document.getElementById("usunome").innerHTML = userName;
	}
}

function endUserSession () {
	localStorage.removeItem('prp_user');
	alert("Deslogado com sucesso!");
	location.href = 'login.html';
}