<?php
/*----------- INICIO DE CONFIGURACION-----------------*/
//Casilla de mail a la que se envían los correos (escribirlo entre las comillas)
$destino='consultas.litio@gmail.com'; //a quien va el formulario
//nombre del que envía el correo (escribirlo entre las comillas)
$origen_nombre='Consulta';
//mail que aparece en el remitente (escribirlo entre las comillas,)
$origen_mail='consultas.litio@gmail.com'; //se puede poner la misma que el destino
//asunto del correo (escribirlo entre las comillas)
$subject='Contacto desde website';
//página de agradecimiento (escribirlo entre las comillas)
$adondevoy='gracias2.html'; //aviso de que todo esta bien
/*----------- FIN DE LA CONFIGURACION-----------------*/
$headers = "From: $origen_nombre <$origen_mail>\r\n";
$headers .= "Reply-To: $origen_mail\r\n"; 
$headers .= "Return-Path: $origen_nombre <$origen_mail>\r\n";  
$mensaje='';
	foreach($_POST as $k => $v){
		if($k!='Submit' && $k!='Enviar'){
			$mensaje.=ucfirst($k).": $v\n";
		}
	}
ini_set(sendmail_from,$origen_mail);
mail($destino,$subject,$mensaje,$headers);
header("Location:$adondevoy");
?>