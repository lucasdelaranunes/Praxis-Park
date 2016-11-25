function validateUser() {
	if(localStorage.getItem('prp_user')) {
		location.href = "user-edit.php";
	} else {
		swal("Você precisa estar cadastrado para editar os dados");
	}
}