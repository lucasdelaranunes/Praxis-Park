function doLogin() {
	var email = document.forms[0].email.value;
	var pwd = document.forms[0].pwd.value;

	if (email == "" || pwd == "") {
		alert("Preencha todos os dados para prosseguir ou entre sem logar");
	} else {
		var xmlhttp = new XMLHttpRequest();
        
	    xmlhttp.onreadystatechange = processRequest;
	    xmlhttp.open("GET", "http://www.smartsoft.com.br/webservice/restifydb/Employees/prp_cliente/?_view=json&_expand=yes", true);
	    xmlhttp.send();

		function processRequest() {
		    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		        var restifyData = JSON.parse(xmlhttp.responseText);

		        var loginEmail = document.forms[0].email.value;
				var loginPwd = document.forms[0].pwd.value;
		        var rowsLength = restifyData.restify.rows.length;

		        var isValidLogin = false;
		        var validLoginData;

		        // Checks if login is valid
                for (i = 0; i < rowsLength; i++) {
                    var currentEmail = restifyData.restify.rows[i].values.emailcliente.value;
                    var currentPwd = restifyData.restify.rows[i].values.senhacliente.value;
                    
                    if (currentEmail == loginEmail && currentPwd == loginPwd) {
                    	isValidLogin = true;

                    	// Defines the object with valid login data to create the session
                    	validLoginData = restifyData.restify.rows[i].values;
                    }
                }

                if (isValidLogin) {
                	// Creates session with user data on local storage
                	localStorage.setItem('prp_user', JSON.stringify(validLoginData));

                	alert("Bem vindo " + validLoginData.nmcliente.value + "!");
                	location.href = 'user.php';
                } else {
                	alert("Login nao é válido");
                }
		    }
		}
	}
}
