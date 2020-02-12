let extecionesValidas = ['pdf', 'docx', 'odt'];
let file_extension = fileName.split('.').pop().toLowerCase(); //nos da la extencion del archivo


let btnsubir = () =>{
	$("#botonSubir").click(function(){
		let mensajeError = "";
		let camposVacios = "";

		if ($("#nombre").val() == "") {
			camposVacios += "<br>Nombre";
		}

		if ($("#archivopdf").val() == "") {
			camposVacios += "<br>Archivo PDF";
		}

		if(camposVacios != ""){
			mensajeError += "<p> Los siguientes campos estan vacios:</p>" + camposVacios;
		}

		if ($.isNumeric($("#nombre").val()) == true) {
			mensajeError += "<p>El nombre no es valido</p>";
		}

		if (mensajeError != "") {
			alert(mensajeError);
		}else{
			alert("Success");
		}
	});
}