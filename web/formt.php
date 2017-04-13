<?php
/*- CONTACTO-------------------------------------------------------------------------------------INI--*/
$operacion = $_POST['operacion'];

if ($operacion == "8734897689") 
{

    $nombre             = $_POST['nombre'];
    $institucionEmpresa = $_POST['institucionEmpresa'];
    $correo             = $_POST['correo'];
    $noContacto         = $_POST['noContacto'];
    $tipoMuestra        = $_POST['tipoMuestra'];
    $tipoAnalisis       = $_POST['tipoAnalisis'];
    $razonAnalisis      = $_POST['razonAnalisis'];
    $pretendeAnalisis   = $_POST['pretendeAnalisis'];
    $comentario         = $_POST['comentario'];


    /**/
    // destinatario
    /**/
    $para = 'giovanna_rgz@hotmail.com' . ', ';
    $para .= 'usaii.jefatura@gmail.com' . ', ';
    $para .= 'elsa782003@yahoo.com';
    /**/

    // título
    $título = 'Has recibido un correo para Cotización';

    $contenidoCorreo = "";
    $contenidoCorreo .= "<tr>";
    $contenidoCorreo .= "<td>Instituci&oacute;n o Empresa:</td>";
    $contenidoCorreo .= "<td>".utf8_decode($institucionEmpresa)."</td>";
    $contenidoCorreo .= "</tr>";
    $contenidoCorreo .= "<tr>";
    $contenidoCorreo .= "<td>E-mail:</td>";
    $contenidoCorreo .= "<td>".$correo."</td>";
    $contenidoCorreo .= "</tr>";
    $contenidoCorreo .= "<tr>";
    $contenidoCorreo .= "<td>N&uacute;mero de contacto:</td>";
    $contenidoCorreo .= "<td>".$noContacto."</td>";
    $contenidoCorreo .= "</tr>";

    $contenidoCorreo .= "<tr>";
    $contenidoCorreo .= "<td>Tipo de Muestra:</td>";
    $contenidoCorreo .= "<td>".utf8_decode($tipoMuestra)."</td>";
    $contenidoCorreo .= "</tr>";
    $contenidoCorreo .= "<tr>";
    $contenidoCorreo .= "<td>Tipo de An&aacute;lisis:</td>";
    $contenidoCorreo .= "<td>".utf8_decode($tipoAnalisis)."</td>";
    $contenidoCorreo .= "</tr>";
    $contenidoCorreo .= "<tr>";
    $contenidoCorreo .= "<td>Raz&oacute;n para el An&aacute;lisis de la Muestra:</td>";
    $contenidoCorreo .= "<td>".utf8_decode($razonAnalisis)."</td>";
    $contenidoCorreo .= "</tr>";
    $contenidoCorreo .= "<tr>";
    $contenidoCorreo .= "<td>Que se pretende del An&aacute;lisis de la Muestra:</td>";
    $contenidoCorreo .= "<td>".utf8_decode($pretendeAnalisis)."</td>";
    $contenidoCorreo .= "</tr>";

    $contenidoCorreo .= "<tr>";
    $contenidoCorreo .= "<td>Descripci&oacute;n de la Solicitud:</td>";
    $contenidoCorreo .= "<td>".utf8_decode($comentario)."</td>";
    $contenidoCorreo .= "</tr>";

    // mensaje
    $mensaje = '
    <html>
    <head>
      <title>Recibiste un correo de contacto de '.$nombre.'</title>
    </head>
    <body>
      <table>
          <tr><td colspan="2">Recibiste un correo de Cotizaci&oacute;n de '.utf8_decode($nombre).'</td></tr>
        '.$contenidoCorreo.'
      </table>
    </body>
    </html>
    ';

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    //$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
    $cabeceras .= 'From: USAII <correo@example.com>' . "\r\n";
    //$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
    //$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";


    // Enviarlo
    mail($para, utf8_decode($título), $mensaje, $cabeceras);
    /**/

    /*echo '<div class="alert alert-success">
            <strong>Gracias por contactarnos!</strong> En breve un asesor se comunicará con usted.
          </div>';*/

    $operacion="";
}  
/*- CONTACTO-------------------------------------------------------------------------------------FIN--*/
?>