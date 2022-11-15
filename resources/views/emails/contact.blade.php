@component('mail::message')
# Hola {{ $user->name }}
<br>
<p>has recibido un nuevo mensaje </p>
<p> motivo del mensaje{{ config('app.name') }}</p>

<p><strong>Nombre:</strong>{{$contacto['name']}}</p>
<p><strong>Apellido:</strong>{{$contacto['apellido']}}</p>
<p><strong>Correo:</strong>{{$contacto['email']}}</p>
<p><strong>Asunto:</strong>{{$contacto['subject']}}</p>
<p><strong>Mensaje:</strong>{{$contacto['message']}}</p>
<p><strong>Telefono:</strong>{{$contacto['tel']}}</p>
<p><strong>Razon social:</strong>{{$contacto['razon']}}</p>
<p><strong>Rut:</strong>{{$contacto['rut']}}</p>
<p><strong>Archivo:</strong>{{$contacto['formfile']}}</p>
<br>
<p>Saludos</p>



     