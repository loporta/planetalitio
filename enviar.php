<?php 
$myemail = 'consultas.litio@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
<div class="section section_with_padding" id="contact"> 
        <h1>Contacto</h1> 
            <div class="half left">
                <h4>Formulario de Contacto. Mesaje Enviado</h4>
                <div id="contact_form">
                    <form method="post" name="contact" action="#contact.php">
                        <label for="name"><strong>Nombre:</strong></label> 
                        	<input name="name" type="text" class="required input_field" id="name" maxlength="30" />
                        <label for="email"><strong>Email:</strong></label> 
                        	<input name="email" type="text" class="validate-email required input_field" id="email" maxlength="30" />
                  <label for="mensaje"><strong>Mensaje</strong></label> 
                        	<textarea id="mensaje" name="text" rows="0" cols="0" class="required"></textarea>
                        <input type="submit" class="submit_btn left" name="submit" id="submit" value="Enviar" />
                        <input type="reset" class="submit_btn right" name="Reset" id="reset" value="Borrar" />
                    </form>
                </div>
            </div>
            
        <div class="half right">
          <p><strong>Telefono: (11) - 15-3814-1734 </a></a></strong></p>
                <p><strong>E-mail: consultas.litio@gmail.com
                </strong></p>
          <div class="clear h20"></div>
            </div>
      </div> 
    </div> 