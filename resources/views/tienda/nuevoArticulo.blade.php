<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>agregar articulo</h1>
    <form action="{{route('crud.storeProducto')}}" method="post">
        {{csrf_field()}}
        <div>
            <input class='form-control' name='articulo' type="text" placeholder="nombre del articulo">
            <input class='form-control' name='precio' type="number" placeholder="precio del articulo">
            
        </div>
        <button type='submit'>guardar</button>
    </form>
</body>
</html>