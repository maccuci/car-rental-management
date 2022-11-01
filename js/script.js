function validateCreateCar(){
	const model = document.getElementsByName("model")[0].value;
	const description = document.getElementsByName("description")[0].value;
	const costValue = document.getElementsByName("costValue")[0].value;
	if (model === "") {
		alert("Nenhum modelo de carro foi inserido.");
		return false;
	}
	if (description === "") {
		alert("Nenhuma descrição foi inserida.");
		return false;
	}
	if (costValue === "" || costValue === 0) {
		alert("Valor do modelo não inserido.");
		return false;
	}
}

function validateEditCar(){
	const id = document.getElementsByName("id")[0].value;
	const model = document.getElementsByName("model")[0].value;
	const description = document.getElementsByName("description")[0].value;
	const renter = document.getElementsByName("renter")[0].value;
	const costValue = document.getElementsByName("costValue")[0].value;
	if (id === 0) {
		alert("Nenhum id de carro foi inserido.");
		return false;
	}
    if (model === "") {
		alert("Nenhum modelo de carro foi inserido.");
		return false;
	}
	if (description === "") {
		alert("Nenhuma descrição foi inserida.");
		return false;
	}
    if (renter === "") {
		alert("Nenhum locatário do carro foi inserido.");
		return false;
	}
	if (costValue === "" && costValue === 0) {
		alert("Valor do modelo não inserido.");
		return false;
	}
}

function validateDeleteCar(){
	const id = document.getElementsByName("id")[0].value;
	const reason = document.getElementsByName("reason")[0].value;
	if (id === 0) {
		alert("Nenhum id de carro foi inserido.");
		return false;
	}
    if (reason === "") {
		alert("Nenhuma rasão foi inserida.");
		return false;
	}
}