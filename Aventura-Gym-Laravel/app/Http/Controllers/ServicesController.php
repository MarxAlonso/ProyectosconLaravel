<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class ServicesController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Services/Index')
        ];

        return view('Shared/_Layout', $data);
    }

    public function reservar()
    {
        $data = [
            'renderBody' => view('Services/reservar')
        ];

        return view('Shared/_Layout', $data);
    }
    public function comunidad()
    {
        $data = [
            'renderBody' => view('Services/comunidad')
        ];

        return view('Shared/_Layout', $data);
    }
    
    public function enviarFormularioReserva(Request $request)
    {
        $fecha = '<strong>Fecha: </strong>' . now()->setTimezone('America/Lima')->format('d-m-Y H:i:s') . "<br>";
        $contenidoCorreo = $fecha . "<br>";
        $contenidoCorreo .= '<strong>Nombres: </strong>' . $request->input('nombres') . "<br>";
        $contenidoCorreo .= '<strong>Correo: </strong>' . $request->input('correo') . "<br>";
        $contenidoCorreo .= '<strong>Telefono: </strong>' . $request->input('telefono') . "<br>";
        $contenidoCorreo .= '<strong>Dias: </strong>' . $request->input('dias') . "<br>";
        $contenidoCorreo .= '<strong>Inscrito: </strong>' . $request->input('inscrito') . "<br>";
        $contenidoCorreo .= '<strong>Horario: </strong>' . $request->input('horario') . "<br>";
        $contenidoCorreo .= '<strong>Mensaje: </strong>' . $request->input('comentario') . "<br>";
        
        // Enviar el correo electrónico
        $mail = new PHPMailer(true);
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'marxchip99@gmail.com';
        $mail->Password = 'qdsmbzeoxzpmxrgv';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465; // Puerto SMTP
        $mail->CharSet = 'UTF-8';

        // Destinatario y remitente
        $mail->setFrom('aventuragym@gmail.com', 'AVENTURA GYM');
        $mail->addAddress('marxchip99@gmail.com');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'AventuraGym Reserva Entrenador Personal';
        $mail->Body = $contenidoCorreo;

        if ($request->hasFile('archivo')) {
            foreach ($request->file('archivo') as $file) {
                $path = $file->store('public'); // Guarda el archivo en el sistema de archivos
                $mail->addAttachment(storage_path('app/' . $path)); // Adjunta el archivo al correo
            }
        }
        
        if ($request->hasFile('archivo2')) {
            foreach ($request->file('archivo2') as $file) {
                $path = $file->store('public'); // Guarda el archivo en el sistema de archivos
                $mail->addAttachment(storage_path('app/' . $path)); // Adjunta el archivo al correo
            }
        }
        
        if ($request->hasFile('archivo3')) {
            foreach ($request->file('archivo3') as $file) {
                $path = $file->store('public'); // Guarda el archivo en el sistema de archivos
                $mail->addAttachment(storage_path('app/' . $path)); // Adjunta el archivo al correo
            }
        }        
        // Enviar el correo
        $mail->send();
        // Retornar una respuesta de éxito
        return "exito";
    }
}
