function validateEmail(email){
	var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	var valid = emailReg.test(email);

	if(!valid) {
        return false;
    } else {
    	return true;
    }
}


function validation(){
	var nombre, apellido, correo, pass, cpass;
	
	event.preventDefault();
	if($("#nombre").val() ==""){
		alert('Debe ingresar su nomnbre');
		return false;
	}
	
	if($("#apellido").val() ==""){
		alert('Debe ingresar su apellido');
		return false;
	}
	if( $("#mail").val() =="" || $("#cmail").val() ==""){
		alert('Debe ingresar una dirección de correo valida');
		return false;
	}
	if(!validateEmail( $("#mail").val() )){
		alert('Debe ingresar una dirección de correo valida');
		return false;
	}
	
	if($("#mail").val() != $("#cmail").val()){
		alert('Las direcciónes de correo ingresada no coinciden.');
		return false;
	}
	
	if($("#pass").val() =="" || $("#pass").val() ==""){
		alert('Debe ingresar una contraseña y confirmarla');
		return false;
		
	}
	if($("#pass").val() != $("#cpass").val()){
		alert('Las contraseñas ingresadas no coinciden');
		return false;
		
	}
	if($("#pass").val() != $("#cpass").val()){
		alert('Las contraseñas ingresadas no coinciden');
		return false;
	}
	if($("#mes").val() == "" || $("#dia").val() == "" || $("#ano").val() == ""){
		alert('Debe ingresar su fecha de nacimiento');
		return false;
	}
	return true;
}
if(validation()){
	$('#signup').submit();
}
