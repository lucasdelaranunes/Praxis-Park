function loadXMLDoc() {
	var xmlhttp = new XMLHttpRequest();
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var email = document.getElementById("email").value;
	var celnumber = document.getElementById("celnumber").value;
	
    xmlhttp.open("POST", "http://www.smartsoft.com.br/webservice/restifydb/Employees/prp_cliente", true);
	xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	var data = {
		"nmcliente": username,
		"senhacliente": password,
		"emailcliente": email,
		"celularcliente": celnumber
	}

	var dataToSend = '_data=' + JSON.stringify(data);
	
	xmlhttp.send(dataToSend);
}