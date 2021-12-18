<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <img src="https://i.imgur.com/RW13Ij8.png" alt="Logo">

    <title>Mensaje desde villatoro.dev</title>
</head>

<body>
    <p>Hola! Se ha enviado un nuevo mensaje desde villatoro.dev.</p>
    <p>Estos son los datos del usuario que ha enviado el mensaje:</p>
    <ul>
        <li>Nombre: {{ $contact['name'] }}</li>
        <li>Teléfono: {{ $contact['phone'] }}</li>
        <li>Correo eléctronico {{ $contact['email'] }}</li>
    </ul>
    <p>Y el mensaje es el siguiente:</p>
    <p>{{ $contact['msg'] }}</p>
</body>

</html>
