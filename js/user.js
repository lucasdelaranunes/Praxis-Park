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

function userUpdate () {
	var xmlhttp = new XMLHttpRequest ();
	var mySession = JSON.parse(localStorage.getItem('prp_user'));
	var userId = mySession.cdcliente.value;
	var newPassword = document.getElementById("password").value;
	var newEmail = document.getElementById("email").value;
	var newPhone = document.getElementById("celnumber").value;
	var data = {
		"senhacliente": newPassword,
		"emailcliente": newEmail,
		"celularcliente": newPhone
	}
	var dataToSend = '_data=' + JSON.stringify(data);
	xmlhttp.open("PUT", "http://www.smartsoft.com.br/webservice/restifydb/Employees/prp_cliente/" + userId, true);
	xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xmlhttp.send(dataToSend);
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
			window.alert ("Dados alterados com sucesso.");
			location.href = 'user.php';
		}
	}
}
