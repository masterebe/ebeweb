<?php
mail('masterebe@gmail.com','prueba generthec','contenido del envio');
echo 'enviado....';
exit;
// check what variable is comming via get to decide what process to make
if(trim($_POST['nombre']) != '' && trim($_POST['email']) != '' && trim($_POST['telefono']) != '' && trim($_POST['mensaje']) != ''){

$email = 'masterebe@gmail.com';
$asunto = 'Motobombasdiesel.es contacto';

$headers='';
$headers.="MIME-Version: 1.0 \r\n";
$headers.="Content-type: text/html; charset=\"UTF-8\" \r\n";
$headers.="From: info@generthec.com \r\n";

$mensaje = 'Visitante : ' . $_POST['nombre'] . "<br />";
$mensaje .= 'e-mail : ' . $_POST['email'] . "<br />";
$mensaje .= 'Telefono : ' . $_POST['telefono'] . "<br />";
$mensaje .= 'mensaje :  <br />' . $_POST['mensaje'] . "<br />";

if(mail($email,$asunto,$mensaje,$headers)){
	//echo('<div style="width:500px; height:100px; margin:0px auto;">Su mensaje ha sido enviado exitosamente</div>');
	header('location:index.php?s=1#form');
	exit;
}else{
	//echo('<div style="width:500px; height:100px; margin:0px auto;">No se ha podido enviar su mensaje</div>');
	header('location:index.php?n=1#form');
	exit;
}


}else{
	//echo('<div style="width:500px; height:100px; margin:0px auto;">Todos los campos del formulario son obligatorios.</div>');
	header('location:index.php?d=1#form');
	exit;
}






/* end process.php file */
