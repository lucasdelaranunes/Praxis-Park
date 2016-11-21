function userSession() {
	var mySession = JSON.parse(localStorage.getItem('prp_user'));

	if (mySession) {
		var userName = mySession.nmcliente.value;
		var screenName = location.href.split('/')[location.href.split('/').length -1];
		
		document.getElementById("userName").innerHTML = 'Olá, ' + userName;
		if (document.getElementById("usunome") !== null) { 
			document.getElementById("usunome").innerHTML = userName;
		}
		
		if (screenName == 'user-edit.php') {
			// Load user session data on fields
			document.getElementById("email").value = mySession.emailcliente.value;
			document.getElementById("celnumber").value = mySession.celularcliente.value;
		}
	}
}

function endUserSession() {
	localStorage.removeItem('prp_user');
	alert("Deslogado com sucesso!");
	location.href = 'login.html';
}

function userUpdate () {
	var xmlhttp = new XMLHttpRequest ();
	var mySession = JSON.parse(localStorage.getItem('prp_user'));
	var userId = mySession.cdcliente.value;
	var newPassword = document.getElementById("password").value;
	var passwordConfirmation = document.getElementById("passwordconfirm").value;
	var newEmail = document.getElementById("email").value;
	var newPhone = document.getElementById("celnumber").value;
	
	// Validate the password
	if (newPassword != passwordConfirmation) {
		event.preventDefault();
		alert ("As senhas são diferentes!")
	} else {
		// Conditions to avoid that blank password's fields be sent to the DB
		if (newPassword == "") {
			newPassword = mySession.senhacliente.value;
		} else {
			mySession.senhacliente.value = newPassword;
			localStorage.setItem('prp_user', JSON.stringify(mySession));
		}

		// Update the local storage with the new informations
		mySession.emailcliente.value = newEmail;
		localStorage.setItem('prp_user', JSON.stringify(mySession));

		mySession.celularcliente.value = newPhone;
		localStorage.setItem('prp_user', JSON.stringify(mySession));

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
		} //onreadystatechange
	} //else
} // userUpdate()

	

// Clear input field on user's click
function clearField(inputId) {
	document.getElementById(inputId).value = "";
}

// Fill field with the user's info if the input is empty
function notBlank (inputId) {
	var mySession = JSON.parse(localStorage.getItem('prp_user'));
	var inputValue = document.getElementById(inputId).value;
	if (inputValue == "" && inputId == "email") {
		document.getElementById(inputId).value = mySession.emailcliente.value
	} else if (inputValue == "" && inputId == "celnumber") {
		document.getElementById(inputId).value = mySession.celularcliente.value
	}
}