<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);
    $name = $data["nombre"];
    $telefono = $data['telefono'];
    $correo = $data['correo'];
    $apellido = $data['apellido'];
    $mensaje = $data["mensaje"];
    $nombre_completo = $name.' '.$apellido;
    $marca = $data['marca'];
    $asunto = 'Solicitud de Informacion';
    $destinatario = "administrador@totalmotorsc.com";
    $header = "From: noreply@example.com" . "\r\n";
    $header .= "Reply-to: noreply@example.com" . "\r\n";
    $header  .= 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $msg =  '
<html>
<body>
  <h1>Datos de contacto:</h1>
  <p>Nombre:</p>'.$nombre_completo.'
  <p>Telefono:</p>'.$telefono.'
  <p>Correo:</p>'.$correo.'
  <p>Marca:</p>'.$marca.'
  <p>Mensaje:</p>'.$mensaje.'
</body>
</html>
';
    echo "bien";
        echo $destinatario;
        echo $asunto;
        echo $mensaje;
        echo $header;
        echo $name;
        echo gettype($name);
        echo $telefono;
        echo $correo;
        echo $apellido;
        echo $marca;

    $mail = mail($destinatario,$asunto,$msg,$header);
    if($mail){
        echo 200;
    }

?>
<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
ini_set("include_path", '/home4/totalmot/php:' . ini_get("include_path") );
require_once "Mail.php";
$username = 'administrador@totalmotorsc.com';
$password = '9dVPqOBneq';
$smtpHost = 'ssl://smtp.titan.email';
$smtpPort = '465';
$to = 'gama@totalmotorsc.com';
$from = 'administrador@totalmotorsc.com';
    $name = $_POST["nombre"];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $apellido = $_POST['apellido'];
    $mensaje = $_POST["mensaje"];
    $nombre_completo = $name.' '.$apellido;
    $marca = $_POST['marca'];
    $msg ='
  Datos de contacto:
  Nombre:'.$nombre_completo.'
  Telefono: '.$telefono.'
  Correo: '.$correo.'
  Marca: '.$marca.'
  Mensaje: '.$mensaje.'
';

//Note - To and From address should not be the same

$subject = 'Solicitud de información';
$successMessage = 'Message successfully sent!';


$replyTo = '';
$name = 'Contacto';

$body = $msg;


$headers = array(
'From' => $name . " <" . $from . ">",
'To' => $to,
'Subject' => $subject
);
$smtp = Mail::factory('smtp', array(
'host' => $smtpHost, 
'port' => $smtpPort,
'auth' => true,
'username' => $username,
'password' => $password
));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo($mail->getMessage());
} else {
echo($successMessage);

}

?>