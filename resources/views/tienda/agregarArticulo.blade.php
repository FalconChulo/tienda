<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('crud.store', $produ->id)}}" method="post">
        {{csrf_field()}}
        <div>
            <h1>ingresa los siguientes datos</h1>
            <input type="text" name="nombre" placeholder="Tu nombre...">
            <input type="number" name="cantidad" placeholder="cantidad de {{$produ->articulo}}">
        </div>
        <button type='submit'>guardar</button>
    </form>
</body>
</html>