<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarioo</title>
</head>

<body>
    <div>
        <h1>!!! Hola {{ $data->user['username'] }}</h1>
        <h3>Tiene un nuevo comentario del inmueble {{ $data->casa['name'] }} </h3>

        <a href="{{route('login')}}">
            <p>para revisar el nuevo comentario pulse aqui</p>
        </a>
    </div>

</body>

</html>
