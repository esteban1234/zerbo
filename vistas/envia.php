<?php
//Librerías para el envío de mail
require('../phpmailer/phpmailer/class.phpmailer.php');
//PHPMailer Object
$mail = new PHPMailer();

// Recoger los valores del Formulario

$nombre = $_POST['txtNOMBRE'];
$telefono = $_POST['txtTELEFONO'];
$correo = $_POST['txtCORREO'];
$comentario = $_POST['txtCOMENTARIO'];

$mail->CharSet = 'utf-8';
//From email address and name
$mail->From = $correo;
$mail->FromName = $nombre;

//To address and name

$mail->addAddress("info@comercializadorazerbo.com");

$mail->isHTML(true);

$mail->Subject = "Cotizacion ZERBO";
$mail->Body = "
              <!DOCTYPE html>
                <html>
                <head>
                <title>ZERBO</title>
                </head>
                <body  style='border:.5px solid rgba('0,0,0,0.8');background:#fff'>                
                <h1 style='text-align:center;  font-weight: bold'>ZERBO</h1>
                <b>Telefono: </b>$telefono<br/>
                <div style='color:#747474; padding:20px 10px; text-align: justify'>$comentario <div><br/>

                </body>
                </html>";

if(!$mail->send())
{

  $html = '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Error</strong> al enviar los datos.
                </div>';
  // $html = 2;

}
else
{

 $html = '<div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Datos</strong> Enviados Correctamente.
                </div>';

}

echo $html;
?>
