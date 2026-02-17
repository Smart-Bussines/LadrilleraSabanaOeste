<?php
$cf_name    = $_POST['name'];
$cf_email   = $_POST['email'];
$cf_phone   = $_POST['phone'];
$cf_subject = $_POST['subject'];
$cf_message = $_POST['message'];

$mail_to = 'ladrillerasabanaoeste@gmail.com';
$subject = 'Nuevo mensaje desde la web - '.$cf_subject;

$body_message  = "Nombre: $cf_name\n";
$body_message .= "Email: $cf_email\n";
$body_message .= "Teléfono: $cf_phone\n";
$body_message .= "Asunto: $cf_subject\n\n";
$body_message .= "Mensaje:\n$cf_message";

$headers  = "From: Web <$mail_to>\r\n";
$headers .= "Reply-To: $cf_email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script>
		alert('Mensaje enviado correctamente. Nos pondremos en contacto pronto.');
		window.location = 'contact.html';
	</script>
<?php } else { ?>
	<script>
		alert('Error al enviar el mensaje. Escríbenos a ladrillerasabanaoeste@gmail.com');
		window.location = 'contact.html';
	</script>
<?php } ?>