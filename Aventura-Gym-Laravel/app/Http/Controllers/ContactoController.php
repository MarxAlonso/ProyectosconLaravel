<?php

namespace App\Http\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Contacto/Index')
        ];

        return view('Shared/_Layout', $data);
    }

    public function enviarFormulario(Request $request)
    {

        $fecha = '<strong>Fecha: </strong>' . now()->setTimezone('America/Lima')->format('d-m-Y H:i:s') . "<br>";

        $contenidoCorreo = $fecha . "<br>";

        $contenidoCorreo .= '<strong>Nombres: </strong>' . $request->input('nombres') . "<br>";
        $contenidoCorreo .= '<strong>Correo: </strong>' . $request->input('correo') . "<br>";
        $contenidoCorreo .= '<strong>Telefono: </strong>' . $request->input('telefono') . "<br>";
        $contenidoCorreo .= '<strong>Interes: </strong>' . $request->input('interes') . "<br>";
        $contenidoCorreo .= '<strong>Mensaje: </strong>' . $request->input('comentario') . "<br>";
        
        // Enviar el correo electrónico
        $mail = new PHPMailer(true);
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';//'mail.corporacionibgroup.pe'; // Cambiar esto al servidor SMTP que estés utilizando
        $mail->SMTPAuth = true;
        $mail->Username = 'marxchip99@gmail.com';//'ibconstruye@corporacionibgroup.pe'; // Cambiar esto a tu dirección de correo electrónico
        $mail->Password = 'qdsmbzeoxzpmxrgv';//'_ZAEb&S,H;I;'; // Cambiar esto a tu contraseña
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465; // Puerto SMTP
        $mail->CharSet = 'UTF-8';

        // Destinatario y remitente
        $mail->setFrom('ibconstruye@corporacionibgroup.pe', 'CORPORACION IBGROUP');
        $mail->addAddress('marxchip99@gmail.com'); // Cambiar esto al campo de correo electrónico del formulario

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'IBCarsell Contacto';
        $mail->Body = $contenidoCorreo;

        // Enviar el correo
        $mail->send();

        // Retornar una respuesta de éxito
        return "exito";
    }
}