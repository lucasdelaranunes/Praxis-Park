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
	
	// Conditions to avoid that blank fields be sent to the DB
	if (newPassword == "") {
		newPassword = mySession.senhacliente.value;
	} else {
		mySession.senhacliente.value = newPassword;
		localStorage.setItem('prp_user', JSON.stringify(mySession));
	}

	if (newEmail == "") {
		newEmail = mySession.emailcliente.value;
	} else {
		mySession.emailcliente.value = newEmail;
		localStorage.setItem('prp_user', JSON.stringify(mySession));
	}

	if (newPhone == "") {
		newPhone = mySession.celularcliente.value;
	} else {
		mySession.celularcliente.value = newPhone;
		localStorage.setItem('prp_user', JSON.stringify(mySession));
	}
	// End of conditions

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


	
	
