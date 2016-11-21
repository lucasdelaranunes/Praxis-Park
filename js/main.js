function loadXMLDoc() {
	var xmlhttp = new XMLHttpRequest();
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var passwordConfirm = document.getElementById("passwordconfirm").value;
	var email = document.getElementById("email").value;
	var celnumber = document.getElementById("celnumber").value;
	var checkbox = document.getElementsByName("checkbox")["0"].checked
	
	//validator to check if the password equals the password's confirmation and if there are no blank fields in the form

	if (password != passwordConfirm) { //check if the passwords matches
		event.preventDefault();
		alert("As senhas não são iguais!")
	} else if (username == "" || password == "" || passwordConfirm == "" || email == "" || celnumber == "") { //check if there're no empty fields in the form
		event.preventDefault();
		alert("Preencha todos os campos!")
	} else if (checkbox == false) { //check if the checkbox was checked
			alert("Você deve concordar com os Termos de Uso!")
	} else { //if all the conditions were met, the form will be sent 
		xmlhttp.open("POST", "http://www.smartsoft.com.br/webservice/restifydb/Employees/prp_cliente", true);
		xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		var data = {
			"nmcliente": username,
			"senhacliente": password,
			"emailcliente": email,
			"celularcliente": celnumber
		} //data
		var dataToSend = '_data=' + JSON.stringify(data);
		xmlhttp.send(dataToSend);
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState == 4) { 
				window.alert ("Dados adicionados com sucesso.");
				location.href = 'login.html';
			} //if
		} //onreadystatechange
	} //second else	
} //loadXMLDoc
